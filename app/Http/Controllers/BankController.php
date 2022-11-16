<?php

namespace App\Http\Controllers;

use App\Http\Requests\Bank\CreateBankRequest;
use App\Models\Bank;
use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $banks = Bank::all();

        return view(
            'bank.create',
            compact(
                'banks'
            )
        );
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(CreateBankRequest $request)
    {
        $data = $request->validated();

        $image = $data['image'];
        $imageName = Carbon::now()->format('Y_m_d_h_i')  .  '.' . $image->getClientOriginalExtension();
        $image->storeAs('/banks', $imageName, ['disk' => 'public']);

        $data['image'] = 'banks/' . $imageName;

        $add = Bank::create($data);
        if (!$add) {
            return $this->response(
                'error'
            );
        }

        return $this->response(
            'added',
            route('bank.create')
        );
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}