<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Team;
use App\Models\PlayerPopularity;
use App\Models\PlayersPointHistory;

class Player extends Model
{
    use HasFactory;
    

    public function team()
    {   
        return $this->hasOne(Team::class, 'id', 'team_id'); //model, local key, foreign key (keys are relative to <-that model)
    }

    public function pointHistory()
    {   
        return $this->hasOne(PlayersPointHistory::class, 'player_id', 'player_id'); //model, local key, foreign key (keys are relative to <-that model)
    }

    public function popularity()
    {   
        return $this->hasOne(PlayerPopularity::class, 'player_id', 'player_id'); //model, local key, foreign key (keys are relative to <-that model)
    }

    
}
