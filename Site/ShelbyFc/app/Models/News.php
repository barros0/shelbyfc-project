<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "news";

    protected $fillable = [
        'title',
        'small_description',
        'body',
        'image',
    ];

    public function categorie()
    {
        return $this->hasOne(Categorie::class, 'id', 'categorie_id');
    }
}
