<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCustomerCPFRequest;
use App\Http\Requests\UpdateCustomerCPFRequest;
use App\Repositories\CustomerCPFRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CustomerCPFController extends AppBaseController
{
    /** @var  CustomerCPFRepository */
    private $customerCPFRepository;

    public function __construct(CustomerCPFRepository $customerCPFRepo)
    {
        $this->customerCPFRepository = $customerCPFRepo;
    }

    /**
     * Display a listing of the CustomerCPF.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $customerCPFs = $this->customerCPFRepository->all();

        return view('customer_c_p_fs.index')
            ->with('customerCPFs', $customerCPFs);
    }

    /**
     * Show the form for creating a new CustomerCPF.
     *
     * @return Response
     */
    public function create()
    {
        return view('customer_c_p_fs.create');
    }

    /**
     * Store a newly created CustomerCPF in storage.
     *
     * @param CreateCustomerCPFRequest $request
     *
     * @return Response
     */
    public function store(CreateCustomerCPFRequest $request)
    {
        $input = $request->all();

        $customerCPF = $this->customerCPFRepository->create($input);

        Flash::success('Customer C P F saved successfully.');

        return redirect(route('customerCPFs.index'));
    }

    /**
     * Display the specified CustomerCPF.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $customerCPF = $this->customerCPFRepository->find($id);

        if (empty($customerCPF)) {
            Flash::error('Customer C P F not found');

            return redirect(route('customerCPFs.index'));
        }

        return view('customer_c_p_fs.show')->with('customerCPF', $customerCPF);
    }

    /**
     * Show the form for editing the specified CustomerCPF.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $customerCPF = $this->customerCPFRepository->find($id);

        if (empty($customerCPF)) {
            Flash::error('Customer C P F not found');

            return redirect(route('customerCPFs.index'));
        }

        return view('customer_c_p_fs.edit')->with('customerCPF', $customerCPF);
    }

    /**
     * Update the specified CustomerCPF in storage.
     *
     * @param int $id
     * @param UpdateCustomerCPFRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCustomerCPFRequest $request)
    {
        $customerCPF = $this->customerCPFRepository->find($id);

        if (empty($customerCPF)) {
            Flash::error('Customer C P F not found');

            return redirect(route('customerCPFs.index'));
        }

        $customerCPF = $this->customerCPFRepository->update($request->all(), $id);

        Flash::success('Customer C P F updated successfully.');

        return redirect(route('customerCPFs.index'));
    }

    /**
     * Remove the specified CustomerCPF from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $customerCPF = $this->customerCPFRepository->find($id);

        if (empty($customerCPF)) {
            Flash::error('Customer C P F not found');

            return redirect(route('customerCPFs.index'));
        }

        $this->customerCPFRepository->delete($id);

        Flash::success('Customer C P F deleted successfully.');

        return redirect(route('customerCPFs.index'));
    }
}
