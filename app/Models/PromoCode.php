<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class PromoCode extends Model
{
    use HasFactory;
   protected $primaryKey = 'id';

    protected $attributes = [
   //
  ];
    protected $fillable = [
     'product_id',
     'code',
     'start_date',
     'end_date',
     'percent',
    ];

    public function product()
    {
        return $this->hasOne(Products::class,'id','product_id');
    }
}
