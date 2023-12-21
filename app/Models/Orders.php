<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Orders extends Model
{
    use HasFactory;
   protected $primaryKey = 'id';

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
    ];
}
