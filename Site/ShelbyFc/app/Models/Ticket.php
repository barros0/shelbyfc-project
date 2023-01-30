<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'game_id',
        'price',
    ];

    public function user()
    {
        return $this->hasone(User::class, 'id', 'user_id');
    }



    public function game()
    {
        return $this->hasone(Game::class, 'id', 'game_id');
    }
}
