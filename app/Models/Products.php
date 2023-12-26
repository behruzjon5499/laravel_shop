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
    public function category()
    {
        return $this->hasOne(Category::class,'id','category_id');
    }
    public function data()
    {
        return $this->hasMany(ProductData::class,'product_id','id');
    }
    public function files()
    {
        return $this->hasMany(File::class,'fileable_id','id');
    }
    public function orders()
    {
        return $this->hasMany(Orders::class,'product_id','id');
    }
    public function promoCode()
    {
        return $this->hasOne(PromoCode::class,'product_id','id')->where('end_date', '>=', date('Y-m-d H:i:s'));
    }
}
