<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'country_id',
        'postal_code',
        'password',
        'nif',
        'city',
        'status',
        'image',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'is_admin',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function socialAccounts()
    {
        return $this->hasMany(socialAccount::class);
    }

    function subscribed()
    {
        return $this->hasOne(Subscription::class,)
            ->where('state', 2)
            ->where('expires_at', '>=', Carbon::now());
    }

    function subscriptions()
    {
        return $this->hasMany(Subscription::class,);
    }

    function transactions()
    {
        return $this->hasMany(Transactions::class,'user_id','id');
    }

    function country(){
        return $this->hasOne(Country::class, 'id', 'country_id');
    }

    function posts(){
        return $this->hasMany(Posts::class,);
    }

    function cart(){
        return $this->hasOne(Cart::class,);
    }


}
