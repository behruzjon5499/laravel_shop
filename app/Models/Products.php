<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Products extends Model
{
    use HasFactory;
    use SoftDeletes;
   protected $primaryKey = 'id';

    protected $attributes = [
   //
  ];
    protected $fillable = [
   'name_en',
   'name_ru',
   'name_uz',
   'description_ru',
   'description_en',
   'description_uz',
   'date',
   'type',
   'price',
   'photo',
   'category_id',

    ];
    public function data()
    {
        return $this->hasMany(ProductData::class);
    }
}
