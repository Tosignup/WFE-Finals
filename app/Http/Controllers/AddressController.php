<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Address::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|min:2|max:50',
            'last_name' => 'required|min:2|max:50',
            'contact_number' => 'nullable|min:10|max:11',
            'address1' => 'required|min:2|max:120',
            'address2' => 'nullable|min:2|max:120',
            'address3' => 'nullable|min:2|max:120',
            'province' => 'required|min:2|max:100',
            'city' => 'required|min:2|max:100',
            'country' => 'required|min:2|max:100',
            'zip_code' => 'required|min:4|max:4'

        ]);
        Address::create($request->all());

        return response()->json(['info'=>'successfully stored an address']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Address $address)
    {
        return $address;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Address $address)
    {
        $request->validate([
            'first_name' => 'required|min:2|max:50',
            'last_name' => 'required|min:2|max:50',
            'contact_number' => 'nullable|min:10|max:11',
            'address1' => 'required|min:2|max:120',
            'address2' => 'nullable|min:2|max:120',
            'address3' => 'nullable|min:2|max:120',
            'province' => 'required|min:2|max:100',
            'city' => 'required|min:2|max:100',
            'country' => 'required|min:2|max:100',
            'zip_code' => 'required|min:4|max:4'

        ]);

        $address->first_name = $request->first_name;
        $address->last_name = $request->last_name;
        $address->contact_number = $request->contact_number;
        $address->address1 = $request->address1;
        $address->address2 = $request->address2;
        $address->address3 = $request->address3;
        $address->province = $request->province;
        $address->city = $request->city;
        $address->country = $request->country;
        $address->zip_code = $request->zip_code;
        $address->save();

        return response()->json(['info' => 'successfully updated an address.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Address $address)
    {
        $address->delete();

        return response()->json(['info' => 'successfully deleted an address.']);
    }
}
