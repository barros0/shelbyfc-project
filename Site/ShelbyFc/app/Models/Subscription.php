<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;


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

}
