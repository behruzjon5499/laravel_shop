<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'categories';
    protected $primaryKey = 'id';

    protected $attributes = [
      'status'=>true
    ];
    protected $fillable = ['name_ru','name_uz','name_en','parent_id','photo','description_ru','description_uz','description_en','status'];
    public function parent(): HasOne
    {
        return $this->hasOne(Category::class,'id','parent_id');
    }
}
