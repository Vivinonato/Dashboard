<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInvoiceedpointRequest;
use App\Http\Requests\UpdateInvoiceedpointRequest;
use App\Repositories\InvoiceedpointRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class InvoiceedpointController extends AppBaseController
{
    /** @var  InvoiceedpointRepository */
    private $invoiceedpointRepository;

    public function __construct(InvoiceedpointRepository $invoiceedpointRepo)
    {
        $this->invoiceedpointRepository = $invoiceedpointRepo;
    }

    /**
     * Display a listing of the Invoiceedpoint.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $invoiceedpoints = $this->invoiceedpointRepository->all();

        return view('invoiceedpoints.index')
            ->with('invoiceedpoints', $invoiceedpoints);
    }

    /**
     * Show the form for creating a new Invoiceedpoint.
     *
     * @return Response
     */
    public function create()
    {
        return view('invoiceedpoints.create');
    }

    /**
     * Store a newly created Invoiceedpoint in storage.
     *
     * @param CreateInvoiceedpointRequest $request
     *
     * @return Response
     */
    public function store(CreateInvoiceedpointRequest $request)
    {
        $input = $request->all();

        $invoiceedpoint = $this->invoiceedpointRepository->create($input);

        Flash::success('Invoiceedpoint saved successfully.');

        return redirect(route('invoiceedpoints.index'));
    }

    /**
     * Display the specified Invoiceedpoint.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $invoiceedpoint = $this->invoiceedpointRepository->find($id);

        if (empty($invoiceedpoint)) {
            Flash::error('Invoiceedpoint not found');

            return redirect(route('invoiceedpoints.index'));
        }

        return view('invoiceedpoints.show')->with('invoiceedpoint', $invoiceedpoint);
    }

    /**
     * Show the form for editing the specified Invoiceedpoint.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $invoiceedpoint = $this->invoiceedpointRepository->find($id);

        if (empty($invoiceedpoint)) {
            Flash::error('Invoiceedpoint not found');

            return redirect(route('invoiceedpoints.index'));
        }

        return view('invoiceedpoints.edit')->with('invoiceedpoint', $invoiceedpoint);
    }

    /**
     * Update the specified Invoiceedpoint in storage.
     *
     * @param int $id
     * @param UpdateInvoiceedpointRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInvoiceedpointRequest $request)
    {
        $invoiceedpoint = $this->invoiceedpointRepository->find($id);

        if (empty($invoiceedpoint)) {
            Flash::error('Invoiceedpoint not found');

            return redirect(route('invoiceedpoints.index'));
        }

        $invoiceedpoint = $this->invoiceedpointRepository->update($request->all(), $id);

        Flash::success('Invoiceedpoint updated successfully.');

        return redirect(route('invoiceedpoints.index'));
    }

    /**
     * Remove the specified Invoiceedpoint from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $invoiceedpoint = $this->invoiceedpointRepository->find($id);

        if (empty($invoiceedpoint)) {
            Flash::error('Invoiceedpoint not found');

            return redirect(route('invoiceedpoints.index'));
        }

        $this->invoiceedpointRepository->delete($id);

        Flash::success('Invoiceedpoint deleted successfully.');

        return redirect(route('invoiceedpoints.index'));
    }
}
