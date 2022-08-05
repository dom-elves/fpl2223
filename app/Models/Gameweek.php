<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gameweek extends Model
{
    use HasFactory;

    public function players()
    {   dd('test');
        return $this->hasMany(Player::class, 'id', 'player_id'); 
    }
}
