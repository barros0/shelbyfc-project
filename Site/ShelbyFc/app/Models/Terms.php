<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Terms extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "terms";

    protected $fillable = [
        'id',
        'titulo',
        'texto',
        'categoria',
        
    ];
}
