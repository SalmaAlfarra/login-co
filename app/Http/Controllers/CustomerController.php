<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\City;
use App\Models\Work;
use App\Models\Court;
use App\Models\Phone;
use App\Models\Branch;
use App\Models\Patron;
use App\Models\Salary;
use App\Models\Customer;
use App\Models\Acquaintance;
use App\Models\PoliceOffice;
use Illuminate\Http\Request;
use App\Models\MaterialStatus;
use App\Imports\CustomersImport;
use Illuminate\Routing\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables;
use App\Models\CustomerPaymenteMechanisms;
use Illuminate\Contracts\Support\Renderable;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Customer::select([
                'id',
                'full_name',
                'file_number'
            ]);
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="' . route('customer.show', [$row->id]) . '" class="dropdown-item" title="view"
                        style="display: contents">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-file-text font-small-4 mr-50">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <polyline points="10 9 9 9 8 9"></polyline>
                        </svg></a>';
                    $btn = $btn . ' <a href="' . route('customer.edit', [$row->id]) . '" title="edit" class="dropdown-item"
                        style="display: contents">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-archive font-small-4 mr-50">
                            <polyline points="21 8 21 21 3 21 3 8">
                            </polyline>
                            <rect x="1" y="3" width="22" height="5"></rect>
                            <line x1="10" y1="12" x2="14" y2="12"></line>
                        </svg></a>';

                    $btn = $btn . '<a href="javascript:void(0)" data-id="' . $row->id . '" title="delete" style="display: contents"
                        class="dropdown-item deletecustomer"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-trash-2 font-small-4 mr-50">
                            <polyline points="3 6 5 6 21 6"></polyline>
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                            <line x1="10" y1="11" x2="10" y2="17"></line>
                            <line x1="14" y1="11" x2="14" y2="17"></line>
                        </svg></a>';

                    return $btn;
                })
                ->rawColumns(['customer', 'action'])
                ->make(true);
        }
        return view('customer.view-list');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $city   =  City::all();
        $court  =  Court::all();
        $branch =  Branch::all();
        $police =  PoliceOffice::all();
        $bank   =  Bank::all();

        return view('customer.create', [
            'city'   => $city,
            'court'  => $court,
            'branch' => $branch,
            'police' => $police,
            'bank'   => $bank
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        /* dd($request); */

        $add = Customer::create([
            'full_name'                          =>  $request->first_name,
            'file_number'                        =>  $request->file_number,
            'file_status'                        =>  $request->file_status,
            'identification_number'              =>  $request->identification_number,
            'government_service_portal_password' =>  $request->government_service_portal_password,
            'address'                            =>  $request->address,
            'city_id'                            =>  $request->city_id,
            'court_id'                           =>  $request->court_id,
            'police_office_id'                   =>  $request->police_office_id,
        ]);

        /* return redirect()->route('acquaintance.create'); */
        return ('done');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {

        $customer = Customer::find($id);

        $material= MaterialStatus::where('customer_id',$id)->first();
        $work= Work::where('customer_id',$id)->first();
        $salary= Salary::where('customer_id',$id)->first();
        $phone= Phone::where('customer_id',$id)->first();
        $customerpaymentemechanisms= CustomerPaymenteMechanisms::where('customer_id',$id);
        $acquaintance= Acquaintance::where('customer_id',$id)->first();
        $patron= Patron::where('customer_id',$id)->first();
        return view('customer.customer-profile', [
            'customer'                       => $customer,
            'material'                       => $material,
            'work'                           => $work,
            'salary'                         => $salary,
            'acquaintance'                   => $acquaintance,
            'phone'                          => $phone,
            'customerpaymentemechanisms'     => $customerpaymentemechanisms,
            'patron'                         => $patron,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $city    = City::all();
        $court   = Court::all();
        $branch  = Branch::all();
        $police  = PoliceOffice::all();
        $bank    = Bank::all();
        $customer = Customer::find($id);


        return view('edit', [
            'customer' => $customer,
            'city'     => $city,
            'court'    => $court,
            'branch'   => $branch,
            'police'   => $police,
            'bank'     => $bank,
            'customer' => $customer,
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        /*  $request->validate([
            'first_name'                         =>  'required|min:3|max:255',
            'father_name'                        =>  'required|min:3|max:255',
            'grandfather_name'                   =>  'required|min:3|max:255',
            'family_name'                        =>  'required|min:3|max:255',
            'identification_number'              =>  'required|max:255',
            'government_service_portal_password' =>  'required|max:255',
            'date_of_birth'                      =>  'required|max:255',
            'job_title'                          =>  'required',
            'job_type'                           =>  'required',
            'employer'                           =>  'required',
            'address'                            =>  'required|min:3|max:255',
            'phone'                              =>  'required|numeric',
            'city_id'                            =>  'required',
            'partner_family_address'             =>  'required',
            'partner_employer'                   =>  'required',
            'partner_identification_number'      =>  'required',
            'partner_family_name'                =>  'required',
            'partner_grandfather_name'           =>  'required',
            'partner_father_name'                =>  'required',
            'partner_first_name'                 =>  'required',
            'court_id'                           =>  'required',
            'police_office_id'                   =>  'required',
        ]);
 */
        $customer = Customer::find($id);


        $edit = $customer->update([
            'first_name' => $request->first_name,
            'file_number' => $request->file_number,
            'government_service_portal_password' => $request->government_service_portal_password,
            'date_of_birth' => $request->date_of_birth,
            'job_title' => $request->job_title,
            'job_type' => $request->job_type,
            'employer' => $request->employer,
            'job_status' => $request->job_status,
            'address' => $request->address,
            'phone' => $request->phone,
            'city_id' => $request->city_id,
            'partner_family_address' => $request->partner_family_address,
            'partner_employer' => $request->partner_employer,
            'partner_identification_number' => $request->partner_identification_number,
            'partner_family_name' => $request->partner_family_name,
            'partner_grandfather_name' => $request->partner_grandfather_name,
            'partner_father_name' => $request->partner_father_name,
            'partner_first_name' => $request->partner_first_name,
            'court_id' => $request->court_id,
            'police_office_id' => $request->police_office_id,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
    }

    public function fileupload(Request $request)
    {
        return view('customer.fileupload');
    }

    public function infoexcelfile(Request $request)
    {
        return view('customer.infofile');
    }

    public function infouploadexcel(Request $request)
    {
        Excel::import(new CustomersImport, $request->file('excelfile'));
        return view('customer.view-list');
    }
}
