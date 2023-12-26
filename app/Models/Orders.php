<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Orders extends Model
{
    use HasFactory;
   protected $primaryKey = 'id';

   const STATUS_PROCESS =0;
   const STATUS_SALE =1;

   const TYPE_OFFICE = 0;
   const TYPE_DELIVERY = 1;

    protected $attributes = [
   //
  ];
    protected $fillable = [
     'name',
     'product_id',
     'user_id',
     'phone',
     'count',
     'price',
     'status',
     'type',
    ];
    public function product()
    {
        return $this->hasOne(Products::class,'id','product_id');
    }
}
