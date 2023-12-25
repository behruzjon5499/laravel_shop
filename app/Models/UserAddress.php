<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class UserAddress extends Model
{
    use HasFactory;
   protected $primaryKey = 'id';

    protected $attributes = [
   //
  ];
    protected $fillable = [
    'name',
    'district_code',
    'user_id',
    ];
    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
    public function district()
    {
        return $this->hasOne(Districts::class,'code','district_code');
    }
    public function region()
    {
        return $this->hasOne(Regions::class,'code','region_code')->with('district');
    }
}
