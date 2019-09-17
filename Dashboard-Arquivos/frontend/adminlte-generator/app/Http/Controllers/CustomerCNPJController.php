<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCustomerCNPJRequest;
use App\Http\Requests\UpdateCustomerCNPJRequest;
use App\Repositories\CustomerCNPJRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CustomerCNPJController extends AppBaseController
{
    /** @var  CustomerCNPJRepository */
    private $customerCNPJRepository;

    public function __construct(CustomerCNPJRepository $customerCNPJRepo)
    {
        $this->customerCNPJRepository = $customerCNPJRepo;
    }

    /**
     * Display a listing of the CustomerCNPJ.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $customerCNPJs = $this->customerCNPJRepository->all();

        return view('customer_c_n_p_js.index')
            ->with('customerCNPJs', $customerCNPJs);
    }

    /**
     * Show the form for creating a new CustomerCNPJ.
     *
     * @return Response
     */
    public function create()
    {
        return view('customer_c_n_p_js.create');
    }

    /**
     * Store a newly created CustomerCNPJ in storage.
     *
     * @param CreateCustomerCNPJRequest $request
     *
     * @return Response
     */
    public function store(CreateCustomerCNPJRequest $request)
    {
        $input = $request->all();

        $customerCNPJ = $this->customerCNPJRepository->create($input);

        Flash::success('Customer C N P J saved successfully.');

        return redirect(route('customerCNPJs.index'));
    }

    /**
     * Display the specified CustomerCNPJ.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $customerCNPJ = $this->customerCNPJRepository->find($id);

        if (empty($customerCNPJ)) {
            Flash::error('Customer C N P J not found');

            return redirect(route('customerCNPJs.index'));
        }

        return view('customer_c_n_p_js.show')->with('customerCNPJ', $customerCNPJ);
    }

    /**
     * Show the form for editing the specified CustomerCNPJ.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $customerCNPJ = $this->customerCNPJRepository->find($id);

        if (empty($customerCNPJ)) {
            Flash::error('Customer C N P J not found');

            return redirect(route('customerCNPJs.index'));
        }

        return view('customer_c_n_p_js.edit')->with('customerCNPJ', $customerCNPJ);
    }

    /**
     * Update the specified CustomerCNPJ in storage.
     *
     * @param int $id
     * @param UpdateCustomerCNPJRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCustomerCNPJRequest $request)
    {
        $customerCNPJ = $this->customerCNPJRepository->find($id);

        if (empty($customerCNPJ)) {
            Flash::error('Customer C N P J not found');

            return redirect(route('customerCNPJs.index'));
        }

        $customerCNPJ = $this->customerCNPJRepository->update($request->all(), $id);

        Flash::success('Customer C N P J updated successfully.');

        return redirect(route('customerCNPJs.index'));
    }

    /**
     * Remove the specified CustomerCNPJ from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $customerCNPJ = $this->customerCNPJRepository->find($id);

        if (empty($customerCNPJ)) {
            Flash::error('Customer C N P J not found');

            return redirect(route('customerCNPJs.index'));
        }

        $this->customerCNPJRepository->delete($id);

        Flash::success('Customer C N P J deleted successfully.');

        return redirect(route('customerCNPJs.index'));
    }
}
