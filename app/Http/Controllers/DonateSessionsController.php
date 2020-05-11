<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDonateSessionsRequest;
use App\Http\Requests\UpdateDonateSessionsRequest;
use App\Repositories\DonateSessionsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Illuminate\Support\Facades\Storage;

class DonateSessionsController extends AppBaseController
{
    /** @var  DonateSessionsRepository */
    private $donateSessionsRepository;

    public function __construct(DonateSessionsRepository $donateSessionsRepo)
    {
        $this->donateSessionsRepository = $donateSessionsRepo;
    }

    /**
     * Display a listing of the DonateSessions.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $donateSessions = $this->donateSessionsRepository->paginate(10);

        return view('donate_sessions.index')
            ->with('donateSessions', $donateSessions);
    }

    /**
     * Show the form for creating a new DonateSessions.
     *
     * @return Response
     */
    public function create()
    {
        return view('donate_sessions.create');
    }

    /**
     * Store a newly created DonateSessions in storage.
     *
     * @param CreateDonateSessionsRequest $request
     *
     * @return Response
     */
    public function store(CreateDonateSessionsRequest $request)
    {
        $input = $request->all();

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        if ($request->file('image')) {
            $path = $request->file('image')->storePublicly('public');
            $image = env('APP_URL') . Storage::url($path);
            $input['image']=$image;
          }else{
            Flash::error('Upload Image Error');
            }

        $donateSessions = $this->donateSessionsRepository->create($input);

        Flash::success('Donate Sessions saved successfully.');

        return redirect(route('donateSessions.index'));
    }

    /**
     * Display the specified DonateSessions.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $donateSessions = $this->donateSessionsRepository->find($id);

        if (empty($donateSessions)) {
            Flash::error('Donate Sessions not found');

            return redirect(route('donateSessions.index'));
        }
        $donationApplicants = \App\Models\DonationApplicants::where('donation_session_id',$id)
                ->orderBy('id','DESC')->paginate(10);

        return view('donate_sessions.show')
        ->with('donateSessions', $donateSessions)
        ->with('donationApplicants', $donationApplicants);
    }

    /**
     * Show the form for editing the specified DonateSessions.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $donateSessions = $this->donateSessionsRepository->find($id);

        if (empty($donateSessions)) {
            Flash::error('Donate Sessions not found');

            return redirect(route('donateSessions.index'));
        }

        return view('donate_sessions.edit')->with('donateSessions', $donateSessions);
    }

    /**
     * Update the specified DonateSessions in storage.
     *
     * @param int $id
     * @param UpdateDonateSessionsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDonateSessionsRequest $request)
    {
        $donateSessions = $this->donateSessionsRepository->find($id);

        if (empty($donateSessions)) {
            Flash::error('Donate Sessions not found');

            return redirect(route('donateSessions.index'));
        }

        $input = $request->all();

        if ($request->file('image')) {
            $path = $request->file('image')->storePublicly('public');
            $image = env('APP_URL') . Storage::url($path);
            $input['image']=$image?$image:$donateSessions->image;
          }else{
            $input['image']=$donateSessions->image;
            }

        $donateSessions = $this->donateSessionsRepository->update($input, $id);

        Flash::success('Donate Sessions updated successfully.');

        return redirect(route('donateSessions.index'));
    }

    /**
     * Remove the specified DonateSessions from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $donateSessions = $this->donateSessionsRepository->find($id);

        if (empty($donateSessions)) {
            Flash::error('Donate Sessions not found');

            return redirect(route('donateSessions.index'));
        }

        $this->donateSessionsRepository->delete($id);

        Flash::success('Donate Sessions deleted successfully.');

        return redirect(route('donateSessions.index'));
    }
}
