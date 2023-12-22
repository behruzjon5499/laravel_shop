<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Orders extends Model
{
    use HasFactory;
   protected $primaryKey = 'id';

   const TYPE_PROCESS =0;
   const TYPE_SALE =1;
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
    ];
    public function product()
    {
        return $this->hasOne(Products::class,'id','product_id');
    }
}
