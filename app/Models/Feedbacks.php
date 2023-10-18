<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Feedbacks extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'feedbacks';

    protected $attributes = [
        'status'=>false
    ];
    protected $fillable = ['name','phone','message','status'];

}
