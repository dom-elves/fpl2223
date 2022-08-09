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
        dd($gameweeks);
        DB::table('gameweeks')->truncate();//deprecate this because it's dangerous

        foreach ($gameweeks as $gameweek) {
            
            if ($gameweek->is_current == true || $gameweek->data_checked == true ) { //this will need to be changed in the future to include "finished" (maybe data checked is better)

                $a_gameweek = new Gameweek;
                
                $a_gameweek->average_team_points = $gameweek->average_entry_score;
                $a_gameweek->highest_team_points = $gameweek->highest_score;
                $a_gameweek->most_selected_player = $gameweek->most_selected;
                $a_gameweek->highest_scoring_player = $gameweek->top_element;
                $a_gameweek->highest_player_score = $gameweek->top_element_info->points;
                $a_gameweek->most_transferred_in_player = $gameweek->most_transferred_in;
                $a_gameweek->most_captained_player = $gameweek->most_captained;
                $a_gameweek->most_vice_captained_player = $gameweek->most_vice_captained;

                $a_gameweek->save();
                
                //handles point/popularity histories
                if ($gameweek->is_current !== false ) { //this might also need to be changed as players are all already in the db
                                                        //although as long as this is run after the games but while the gameweek is 'active', everything is probably okay
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
    }

    public function fetch()
    {
        $gameweeks = Gameweek::with('mostSelectedPlayer', 
                                    'highestScoringPlayer', 
                                    'highestPlayerScore',  
                                    'mostTransferred', 
                                    'mostCaptained', 
                                    'mostViceCaptained')
                                    ->get()
                                    ->all();
                                    
        
        return view('/gameweeks', ['gameweeks' => $gameweeks]);
    }

    public function getPlayers()
    {
        dd('err');
    }
}
