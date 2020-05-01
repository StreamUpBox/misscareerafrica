<?php

namespace App\Http\Controllers;

use App\DataTables\CrownedDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateCrownedRequest;
use App\Http\Requests\UpdateCrownedRequest;
use App\Repositories\CrownedRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Illuminate\Support\Facades\Storage;

class CrownedController extends AppBaseController
{
    /** @var  CrownedRepository */
    private $crownedRepository;

    public function __construct(CrownedRepository $crownedRepo)
    {
        $this->crownedRepository = $crownedRepo;
    }

    /**
     * Display a listing of the Crowned.
     *
     * @param CrownedDataTable $crownedDataTable
     * @return Response
     */
   
    public function index()
    {
        $crowneds = $this->crownedRepository->paginate(10);
        

        return view('crowneds.index')
            ->with('crowneds', $crowneds);
    }

    /**
     * Show the form for creating a new Crowned.
     *
     * @return Response
     */
    public function create()
    {
        return view('crowneds.create');
    }

    /**
     * Store a newly created Crowned in storage.
     *
     * @param CreateCrownedRequest $request
     *
     * @return Response
     */
    public function store(CreateCrownedRequest $request)
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
            Flash::error('Upload Image');
            }

        $crowned = $this->crownedRepository->create($input);

        Flash::success('Crowned saved successfully.');

        return redirect(route('crowneds.index'));
    }

    /**
     * Display the specified Crowned.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $crowned = $this->crownedRepository->find($id);

        if (empty($crowned)) {
            Flash::error('Crowned not found');

            return redirect(route('crowneds.index'));
        }

        return view('crowneds.show')->with('crowned', $crowned);
    }

    /**
     * Show the form for editing the specified Crowned.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $crowned = $this->crownedRepository->find($id);

        if (empty($crowned)) {
            Flash::error('Crowned not found');

            return redirect(route('crowneds.index'));
        }

        return view('crowneds.edit')->with('crowned', $crowned);
    }

    /**
     * Update the specified Crowned in storage.
     *
     * @param  int              $id
     * @param UpdateCrownedRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCrownedRequest $request)
    {
        $crowned = $this->crownedRepository->find($id);
        $input = $request->all();
        
        if (empty($crowned)) {
            Flash::error('Crowned not found');

            return redirect(route('crowneds.index'));
        }
        if ($request->file('image')) {
            $path = $request->file('image')->storePublicly('public');
            $image = env('APP_URL') . Storage::url($path);
            $input['image']=$image?$image:$crowned->image;
          }else{
            $input['image']=$crowned->image;
            }

            

        $crowned = $this->crownedRepository->update($input, $id);

        Flash::success('Crowned updated successfully.');

        return redirect(route('crowneds.index'));
    }

    /**
     * Remove the specified Crowned from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $crowned = $this->crownedRepository->find($id);

        if (empty($crowned)) {
            Flash::error('Crowned not found');

            return redirect(route('crowneds.index'));
        }

        $this->crownedRepository->delete($id);

        Flash::success('Crowned deleted successfully.');

        return redirect(route('crowneds.index'));
    }
}
