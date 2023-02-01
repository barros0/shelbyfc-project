<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;


    public function scopeActive($query)
    {
        return $query->where('state', 'Activa');
    }

    function user()
    {
        return $this->hasOne(User::class, 'user_id','id');
    }
}
