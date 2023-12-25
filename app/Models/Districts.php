<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Districts extends Model
{
    use HasFactory;
   protected $primaryKey = 'id';

    protected $attributes = [
   //
  ];
    protected $fillable = [
    //
    ];

    public function region()
    {
        return $this->hasOne(Regions::class,'code','region_code');
    }
}
