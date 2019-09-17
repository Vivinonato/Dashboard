<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCallmetadataRequest;
use App\Http\Requests\UpdateCallmetadataRequest;
use App\Repositories\CallmetadataRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CallmetadataController extends AppBaseController
{
    /** @var  CallmetadataRepository */
    private $callmetadataRepository;

    public function __construct(CallmetadataRepository $callmetadataRepo)
    {
        $this->callmetadataRepository = $callmetadataRepo;
    }

    /**
     * Display a listing of the Callmetadata.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $callmetadatas = $this->callmetadataRepository->all();

        return view('callmetadatas.index')
            ->with('callmetadatas', $callmetadatas);
    }

    /**
     * Show the form for creating a new Callmetadata.
     *
     * @return Response
     */
    public function create()
    {
        return view('callmetadatas.create');
    }

    /**
     * Store a newly created Callmetadata in storage.
     *
     * @param CreateCallmetadataRequest $request
     *
     * @return Response
     */
    public function store(CreateCallmetadataRequest $request)
    {
        $input = $request->all();

        $callmetadata = $this->callmetadataRepository->create($input);

        Flash::success('Callmetadata saved successfully.');

        return redirect(route('callmetadatas.index'));
    }

    /**
     * Display the specified Callmetadata.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $callmetadata = $this->callmetadataRepository->find($id);

        if (empty($callmetadata)) {
            Flash::error('Callmetadata not found');

            return redirect(route('callmetadatas.index'));
        }

        return view('callmetadatas.show')->with('callmetadata', $callmetadata);
    }

    /**
     * Show the form for editing the specified Callmetadata.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $callmetadata = $this->callmetadataRepository->find($id);

        if (empty($callmetadata)) {
            Flash::error('Callmetadata not found');

            return redirect(route('callmetadatas.index'));
        }

        return view('callmetadatas.edit')->with('callmetadata', $callmetadata);
    }

    /**
     * Update the specified Callmetadata in storage.
     *
     * @param int $id
     * @param UpdateCallmetadataRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCallmetadataRequest $request)
    {
        $callmetadata = $this->callmetadataRepository->find($id);

        if (empty($callmetadata)) {
            Flash::error('Callmetadata not found');

            return redirect(route('callmetadatas.index'));
        }

        $callmetadata = $this->callmetadataRepository->update($request->all(), $id);

        Flash::success('Callmetadata updated successfully.');

        return redirect(route('callmetadatas.index'));
    }

    /**
     * Remove the specified Callmetadata from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $callmetadata = $this->callmetadataRepository->find($id);

        if (empty($callmetadata)) {
            Flash::error('Callmetadata not found');

            return redirect(route('callmetadatas.index'));
        }

        $this->callmetadataRepository->delete($id);

        Flash::success('Callmetadata deleted successfully.');

        return redirect(route('callmetadatas.index'));
    }
}
