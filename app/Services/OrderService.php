<?php


namespace App\Services;

use App\Models\Orders;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;

class OrderService
{
    public function create($data)
    {
        $data['user_id'] = Auth::id();
        if ($data['count'] > 5){
            $data['count'] = 5;
        }
        if (isset($data['order_id'])){
            $order = Orders::where('id',$data['order_id'])->first();
            $order->update($data);
            return $order;
        }

       return Orders::create($data);
    }


}
