<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subscription extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'state',
        'name',
        'email',
        'phone',
        'postal_code',
        'address',
        'city',
        'birthdate',
        'cc',
        'nif',
        'country_id',
        'value',
        'expires_at',
   
    ];

    public function DadosUser()
    {
        return $this->hasone(User::class, 'id', 'user_id');
    }

    public function scopeActive($query)
    {
        return $query->where('state', 'Activa');
    }

    function user()
    {
        return $this->hasOne(User::class, 'id','user_id');
    }


}
