<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class File extends Model
{
    use HasFactory;
    use SoftDeletes;
   protected $primaryKey = 'id';

    protected $attributes = [

  ];
    protected $fillable = [
        'name',
        'size',
        'fileable_type',
        'fileable_id',
        'host',
        'file',
        'extension',
    ];
    public function product()
    {
        return $this->belongsTo(Products::class,'id','fileable_id');
    }
}
