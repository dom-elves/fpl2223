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
        $players = $decoded->elements;
        dd($players[330]);
        // $data = $decoded->teams;

        foreach ($players as $player) {
            print nl2br($player->web_name . " " . $player->selected_by_percent . " " . "\n");
        }

        // foreach ($data as $team) {
        //     print nl2br($team->name . " " . $team->strength_overall_home . " " . $team->strength_overall_away ."\n");
   
        // }
        // dd($data);
    }
}
