<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Playuers;

class Teams extends Model
{
    use HasFactory;

    protected $fillable = [];

    public function players()
    {
        $this->hasMany(Players::class);
    }
}
