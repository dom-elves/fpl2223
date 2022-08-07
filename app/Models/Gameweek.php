<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gameweek extends Model
{
    use HasFactory;

    public function mostSelectedPlayer()
    {   

        return $this->hasMany(Player::class, 'player_id', 'most_selected_player');
    }

    public function highestScoringPlayer()
    {   

        return $this->hasMany(Player::class, 'player_id', 'highest_scoring_player');
    }

    public function highestPlayerScore()
    {   

        return $this->hasMany(Player::class, 'player_id', 'highest_player_score');
    }

    public function mostTransferred()
    {   

        return $this->hasMany(Player::class, 'player_id', 'most_transferred_in_player');
    }

    public function mostCaptained()
    {   

        return $this->hasMany(Player::class, 'player_id', 'most_captained_player');
    }

    public function mostViceCaptained()
    {   

        return $this->hasMany(Player::class, 'player_id', 'most_vice_captained_player');
    }
}
