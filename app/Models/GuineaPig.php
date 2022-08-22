<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuineaPig extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'fav_color',
        'other'
    ];
}
