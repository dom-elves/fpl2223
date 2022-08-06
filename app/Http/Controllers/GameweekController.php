<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Models\Gameweek;
use App\Models\Player;
use App\Models\PlayersPointHistory;
use App\Models\PlayerPopularity;

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

        $players = $decoded->elements;

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
            //http request the player and add weekly unqiue the stats from there maybe
                   
            if ($gameweek->is_current !== false ) {

                $current = $gameweek->id;
                $current_gameweek = 'gameweek_' . $current;

                foreach ($players as $player) {

                    //add existing player check
                    $existing_player = Player::where('player_id', $player->id)->get();

                    if ($existing_player) {
                        
                        PlayersPointHistory::where('player_id', $player->id)
                                            ->update([$current_gameweek => $player->event_points]);

                        PlayerPopularity::where('player_id', $player->id)
                                            ->update([$current_gameweek => $player->selected_by_percent]);

                    } else {

                        $point_history = new PlayersPointHistory;
                    
                        $point_history->player_id = $player->id;
                        $point_history->$current_gameweek = $player->event_points;

                        $point_history->save();

                        $player_popularity = new PlayerPopularity;

                        $player_popularity->player_id = $player->id;
                        $player_popularity->$current_gameweek = $player->selected_by_percent;

                        $player_popularity->save();

                    }
                }

            }
        }
    }

    public function fetch()
    {
        $gameweeks = Gameweek::with('players')->get();
        
        return view('/gameweeks', ['gameweeks' => $gameweeks]);
    }

    public function getPlayers()
    {
        dd('err');
    }
}
