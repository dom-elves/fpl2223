<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Player;

class PlayerPopularity extends Model
{
    use HasFactory;

    public function players()
    {
        return $this->hasMany(Player::class, 'player_id', 'player_id');
    }
}
