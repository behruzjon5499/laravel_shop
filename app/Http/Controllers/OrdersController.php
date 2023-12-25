<?php

namespace App\Http\Controllers;

use App\Models\Districts;
use App\Models\Orders;
use App\Models\Regions;
use App\Models\UserAddress;
use App\Rules\PhoneNumber;
use App\Services\OrderService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;

class OrdersController extends Controller
{
    public $orderService;

    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Orders::where('user_id', Auth::id())->where('status', 0)->get();
        $regions = Cache::remember('regions_list',now()->addSeconds(3600),function (){
            return Regions::get();
        });
        $districts = Cache::remember('districts_list',now()->addSeconds(3600),function (){
            return Districts::get();
        });
        $userAddress = UserAddress::where('user_id',Auth::id())->first();
        return view('orders.index',[
            'orders' => $orders,
            'regions' => $regions,
            'districts' => $districts,
            'userAddress' => $userAddress,
        ]);

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
        $data = $request->validate([
            'name' => 'required',
            'phone' => [ new PhoneNumber],
            'product_id' => 'required',
            'count' => 'required',
            'price' => 'required',
            'status' => 'integer',
        ]);

        $this->orderService->create($data);
        return back()->with('message', 'Muvaffaqiyatli qabul qilindi');
    }
        // TODO More order save
    public function orderSave(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Request.*.name' => 'required',
            'Request.*.count' => 'required',
            'Request.*.price' => 'required',
            'Request.*.order_id' => 'required',
            'Request.*.product_id' => 'required',
            'Request.*.status' => 'integer',
        ]);
        if (isset($validator->getData()['Request']) && count($validator->getData()['Request']) > 0) {
            foreach ($validator->getData()['Request'] as $data):
                $this->orderService->create($data);
           endforeach;
            return back()->with('message', 'Muvaffaqiyatli qabul qilindi');
        }
        return back()->with('error', 'Qabul qilinmadi');
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
