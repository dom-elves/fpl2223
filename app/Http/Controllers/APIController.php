<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class APIController extends Controller
{
    public function apiRequest()
    {
        $response = Http::get('https://fantasy.premierleague.com/api/bootstrap-static/');
      
        $decoded = json_decode($response->body());
      
        $data = $decoded->events;
        dd($data);
    }
}
