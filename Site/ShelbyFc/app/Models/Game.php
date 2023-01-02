<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Game extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'small_description',
        'description',
        'ticket_available',
        'ticket_price',
        'ticket_price_partner',
        'result_home',
        'result_opponent',
        'location',
        'image',
        'team_id',
        'limit_bet',
        'limit_buy_ticket',
        'stock_tickets',
        'stock_ticket_available',
        'datetime_game',
    ];


    public function bets()
    {
        return $this->hasMany(Bets::class, 'game_id', 'id');
    }


    public function opponent()
    {
        return $this->hasone(Team::class, 'id', 'team_id');
    }
}
