<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table = "news";

    protected $fillable = [
        'title',
        'small_description',
        'body',
        'image',
    ];

   public function categories(){
        return $this->hasMany(News_Categories::class, 'id', 'categories_id');
    }

}
