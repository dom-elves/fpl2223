<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Models\Gameweek;

class GameweekController extends Controller
{
    public function update()
    {
        //initial request
        $response = Http::get('https://fantasy.premierleague.com/api/bootstrap-static/');
        //make it readable
        $decoded = json_decode($response->body());
        //'elements' is what the API calls players. Check '$decoded' for things like gameweeks etc
        $gameweeks = $decoded->events;

        DB::table('gameweeks')->truncate();

        foreach ($gameweeks as $gameweek) {
            // dd($gameweek);
            $a_gameweek = new Gameweek;

            $a_gameweek->average_team_points = $gameweek->average_entry_score;
            $a_gameweek->highest_team_points = $gameweek->highest_score;
            $a_gameweek->most_selected_player = $gameweek->most_selected;
            $a_gameweek->highest_scoring_player = $gameweek->top_element;
            $a_gameweek->highest_player_score = $gameweek->highest_score;
            $a_gameweek->most_transferred_in_player = $gameweek->most_transferred_in;
            $a_gameweek->most_captained_player = $gameweek->most_captained;
            $a_gameweek->most_vice_captained_player = $gameweek->most_vice_captained;

            $a_gameweek->save();       
        }
    }

    public function fetch()
    {
        // $gameweeks = DB::table('gameweeks')->get();

        $gameweeks = Gameweek::with('players')->get();

        return view('/gameweeks', ['gameweeks' => $gameweeks]);
    }
}
