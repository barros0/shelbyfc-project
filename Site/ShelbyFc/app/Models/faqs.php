<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Faqs extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "faqs";

    protected $fillable = [
        'id',
        'pergunta',
        'resposta',
        'categoria',
        
    ];

  
}
