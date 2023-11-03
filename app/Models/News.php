<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'news';
    protected $primaryKey = 'id';
    protected $attributes = [
        'status'=>true
    ];
    protected $fillable =['title_ru','title_uz','title_en','date','photo','description_ru','description_uz','description_en'];
}
