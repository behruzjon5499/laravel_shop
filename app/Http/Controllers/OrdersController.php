<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Rules\PhoneNumber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        return view('orders.index');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

       $data =  $request->validate([
           'name'=>'required',
           'phone' => ['required', new PhoneNumber],
           'product_id'=>'required',
           'count'=>'required',
           'price'=>'required',
        ]);
        $data['user_id'] = Auth::id();
        Orders::create($data);
        return back()->with('message','Muvaffaqiyatli qabul qilindi');
    }

    /**
     * Display the specified resource.
     */
    public function show(Orders $orders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Orders $orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Orders $orders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Orders $orders)
    {
        //
    }
}
