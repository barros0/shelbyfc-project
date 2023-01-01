<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Game extends Model
{
    use HasFactory;
    use SoftDeletes;



    public function bets()
    {
        return $this->hasMany(Bets::class, 'game_id', 'id');
    }


    public function opponent()
    {
        return $this->hasMany(Team::class, 'team_id', 'id');
    }
}
