<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gameweek extends Model
{
    use HasFactory;

    public function players()
    {   
        return $this->hasMany(Player::class, 'player_id', 'most_selected_player', 'highest_scoring_player'); 
    }
}
