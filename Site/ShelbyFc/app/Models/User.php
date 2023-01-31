<?php

namespace App\Models;


use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;
    use SoftDeletes;
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

    function user_post(){
        return $this->hasMany(Posts::class);
    }

    function cart(){
        return $this->hasOne(Cart::class,);
    }

    function bets()
    {
        return $this->hasMany(Bets::class,'user_id','id')->where('is_paid',true);
    }
    function tickets()
    {
        return $this->hasMany(Ticket::class,'user_id','id');
    }

    function user_verify()
    {
        return $this->hasOne(Users_Verify::class,'user_id','id');
    }
}
