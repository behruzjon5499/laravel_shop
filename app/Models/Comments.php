<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Comments extends Model
{
    use HasFactory;
   protected $primaryKey = 'id';

    protected $attributes = [

  ];
    protected $fillable = [
        'message',
        'start',
        'able_type',
        'able_id',
    ];
}
