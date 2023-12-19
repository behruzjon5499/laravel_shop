<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class ProductData extends Model
{
    use HasFactory;
   protected $primaryKey = 'id';

    protected $attributes = [
   //
  ];
    protected $fillable = [
    'name',
    'value',
    'product_id',
    ];
    public function post()
    {
        return $this->belongsTo(Products::class,'id','product_id');
    }
}
