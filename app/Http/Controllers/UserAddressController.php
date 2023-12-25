<?php

namespace App\Http\Controllers;

use App\Models\Districts;
use App\Models\UserAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
        'name'=>'required',
        'user_id'=>'required',
        'district_code'=>'required',
        ]);
        $userOldAddress = UserAddress::where('user_id',$data['user_id'])->first();
        if ($userOldAddress){
            $userOldAddress->update($data);
        }
        else{
            UserAddress::create($data);
        }
        return back()->with('message', 'Manzil muvaffaqiyatli saqlandi!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(UserAddress $userAddress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserAddress $userAddress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserAddress $userAddress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserAddress $userAddress)
    {
        //
    }

    public function districts(Request $request)
    {

        $districts = Districts::where('region_code',$request->region_code)->get();
        return   $districts;

    }
}
