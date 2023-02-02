<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class socio_price extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "socio_price";

    protected $fillable = [
        'name',
        'min_age',
        'max_age',
        'preco',
    ];

}
