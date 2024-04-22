<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class API2Controller extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Customer::all();
        return $this->SuccessResponse($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $oj = new Customer();
        $oj->name="test";
        $oj->email="test@hotmail.com";
        $oj->save();

        return $this->SuccessResponse("created");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $oj = Customer::find($id);
        $oj->name="test updated";
        $oj->email="test2@hotmail.com";
        $oj->save();

        return $this->SuccessResponse("created");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $oj = Customer::find($id);
        $oj->delete();

        return $this->SuccessResponse("deleted");
    }
}
