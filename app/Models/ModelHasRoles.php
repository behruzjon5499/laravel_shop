<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class ModelHasRoles extends Model
{
    use HasFactory;
   protected $primaryKey = 'id';

    protected $attributes = [
   //
  ];
    protected $fillable = [
    //
    ];
    public function users(){
        return $this->hasOne(User::class,'id','model_id');
    }
    public function role(){
        return $this->hasOne(Roles::class,'id','role_id');
    }
}
