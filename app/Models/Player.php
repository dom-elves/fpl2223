<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Team;

class Player extends Model
{
    use HasFactory;
    

    public function team()
    {   
        return $this->hasOne(Team::class, 'id', 'team_id'); //model, local key, foreign key (keys are relative to <-that model)
    }

    
}
