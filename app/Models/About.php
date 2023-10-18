<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class About extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'about';
    protected $fillable=['title_ru','title_uz','title_en','photo','address','location','youtube_url','description_ru','description_uz','description_en'];
}
