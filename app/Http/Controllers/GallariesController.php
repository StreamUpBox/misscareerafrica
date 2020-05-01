<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGallariesRequest;
use App\Http\Requests\UpdateGallariesRequest;
use App\Repositories\GallariesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Illuminate\Support\Facades\Storage;

class GallariesController extends AppBaseController
{
    /** @var  GallariesRepository */
    private $gallariesRepository;

    public function __construct(GallariesRepository $gallariesRepo)
    {
        $this->gallariesRepository = $gallariesRepo;
    }

    /**
     * Display a listing of the Gallaries.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $gallaries = $this->gallariesRepository->paginate(10);

        return view('gallaries.index')
            ->with('gallaries', $gallaries);
    }

    /**
     * Show the form for creating a new Gallaries.
     *
     * @return Response
     */
    public function create()
    {
        return view('gallaries.create');
    }

    /**
     * Store a newly created Gallaries in storage.
     *
     * @param CreateGallariesRequest $request
     *
     * @return Response
     */
    public function store(CreateGallariesRequest $request)
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


        $gallaries = $this->gallariesRepository->create($input);

        Flash::success('Gallaries saved successfully.');

        return redirect(route('gallaries.index'));
    }

    /**
     * Display the specified Gallaries.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $gallaries = $this->gallariesRepository->find($id);

        if (empty($gallaries)) {
            Flash::error('Gallaries not found');

            return redirect(route('gallaries.index'));
        }

        return view('gallaries.show')->with('gallaries', $gallaries);
    }

    /**
     * Show the form for editing the specified Gallaries.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $gallaries = $this->gallariesRepository->find($id);

        if (empty($gallaries)) {
            Flash::error('Gallaries not found');

            return redirect(route('gallaries.index'));
        }

        return view('gallaries.edit')->with('gallaries', $gallaries);
    }

    /**
     * Update the specified Gallaries in storage.
     *
     * @param int $id
     * @param UpdateGallariesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGallariesRequest $request)
    {
        $gallaries = $this->gallariesRepository->find($id);

        if (empty($gallaries)) {
            Flash::error('Gallaries not found');

            return redirect(route('gallaries.index'));
        }

        if ($request->file('image')) {
            $path = $request->file('image')->storePublicly('public');
            $image = env('APP_URL') . Storage::url($path);
            $input['image']=$image?$image:$crowned->image;
          }else{
            $input['image']=$crowned->image;
            }
            
        $gallaries = $this->gallariesRepository->update($request->all(), $id);

        Flash::success('Gallaries updated successfully.');

        return redirect(route('gallaries.index'));
    }

    /**
     * Remove the specified Gallaries from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $gallaries = $this->gallariesRepository->find($id);

        if (empty($gallaries)) {
            Flash::error('Gallaries not found');

            return redirect(route('gallaries.index'));
        }

        $this->gallariesRepository->delete($id);

        Flash::success('Gallaries deleted successfully.');

        return redirect(route('gallaries.index'));
    }
}
