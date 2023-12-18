<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class ProductData extends Model
{
    use HasFactory;
    use SoftDeletes;
   protected $primaryKey = 'id';

    protected $attributes = [
   //
  ];
    protected $fillable = [
    //
    ];
    public function post()
    {
        return $this->belongsTo(Products::class);
    }
}
