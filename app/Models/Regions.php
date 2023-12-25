<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Regions extends Model
{
    use HasFactory;
   protected $primaryKey = 'id';

    protected $attributes = [
   //
  ];
    protected $fillable = [
    //
    ];

    public function districts()
    {
        return $this->hasMany(Districts::class,'region_code','code');
    }
}
