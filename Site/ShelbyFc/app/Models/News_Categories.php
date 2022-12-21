<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News_Categories extends Model
{
    use HasFactory;
    protected $table = "news_categories";

    function categorie(){
        return $this->hasMany(Categorie::class, 'categorie_id', 'id');
    }
}
