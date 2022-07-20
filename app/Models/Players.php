<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teams;

class Players extends Model
{
    use HasFactory;
    

    public function team()
    {   
        return $this->hasOne(Teams::class, 'id', 'team_id');
    }

    
}
