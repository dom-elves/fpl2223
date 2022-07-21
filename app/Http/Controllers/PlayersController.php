<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Player;
use App\Models\Team;
use Illuminate\Support\Facades\DB;
use App\Models\PlayerPopularity;
use App\Models\PlayersPointHistory;
class PlayersController extends Controller
{
    public function update() //this will need to be run once a week 
    {   //initial request
        $response = Http::get('https://fantasy.premierleague.com/api/bootstrap-static/');
        //make it readable
        $decoded = json_decode($response->body());
        //'elements' is what the API calls players. Check '$decoded' for things like gameweeks etc
        $players = $decoded->elements;
        
        // $gameweeks = $decoded->events;
        DB::table('players')->truncate();

        foreach ($players as $player) {
            
            $new_player = new Player;

            //come back and do these two when the gameweeks have actually started so the logic can work properly
            $player_weekly_pop = new PlayerPopularity;
            $player_weeky_points = new PlayersPointHistory;

            // dd($player);
            //general info
            $new_player->player_id = $player->id;
            $new_player->first_name = $player->first_name;
            $new_player->second_name = $player->second_name;

            //making a slug just to make it neat for urls
            $first_half_slug = str_replace(' ','-', $player->first_name) . '-';
            $second_half_slug = str_replace(' ','-', $player->second_name);

            $slug = $first_half_slug . $second_half_slug . $player->id;
            
            $new_player->slug = $slug;

            $new_player->web_name = $player->web_name;
            $new_player->team_id = $player->team;
            $new_player->current_popularity = $player->selected_by_percent;

            //changing element types to strings for future use
            if ($player->element_type == 1) {
                $player->element_type = 'GK';
              }
      
              if ($player->element_type == 2) {
                $player->element_type = 'DEF';
              }
      
              if ($player->element_type == 3) {
                $player->element_type = 'MID';
              }
      
              if ($player->element_type == 4) {
                $player->element_type = 'FWD';
              }

            $new_player->position = $player->element_type;
            

            //points
            $new_player->total_points_season = $player->total_points;
            $new_player->total_points_week = $player->event_points;
            $new_player->points_per_game = $player->points_per_game;
            $new_player->bonus_points_season = $player->bonus;

            //costs
            $new_player->start_cost = $player->now_cost - $player->cost_change_start;
            $new_player->current_cost = $player->now_cost;
            $new_player->cost_change_week = $player->cost_change_event;

            //goals
            $new_player->goals_scored = $player->goals_scored;
            $new_player->goals_assisted = $player->assists;
            $new_player->goals_conceded = $player->goals_conceded;
            $new_player->clean_sheets = $player->clean_sheets;
            $new_player->own_goals = $player->own_goals;
            $new_player->saves = $player->saves;

            //pens
            $new_player->penalties_saved = $player->penalties_saved;
            $new_player->penalties_missed = $player->penalties_missed;

            //misc
            $new_player->yellow_cards = $player->yellow_cards;
            $new_player->red_cards = $player->red_cards;
            $new_player->minutes_season = $player->minutes;

            //transfers
            $new_player->transfers_in_week = $player->transfers_in_event;
            $new_player->transfers_out_week = $player->transfers_out_event;
        


            $new_player->save();  
            // $team[] = Players::first()->getPlayerTeams;
            
        }
        // return $team;
    }

    public function fetch()
    {
      // $players = Players::with('team')->get();
      // foreach ($players as $player) {
      //   dd($player);
      // }
      
      // return view('home')->with(['players' => $players]);

      //fetches every teams model (as a collection) with their "player" - see players.php
      $teams = Team::with('players')->get();
        
      return view('home')->with(['teams' => $teams ]);
    }

    public function getSinglePlayer($slug)
    {
      $player = Player::where('slug', $slug)->first(); //using first() prevents it from being a collection, $slug has player id in so it should be okay
      
      //during first week, this will need to be populated with playerpointhistory and playerpopularityhistory
      return view('player')->with(['player' => $player]);
    }

    public function searchPlayer(Request $request)
    {
      //gets the user input
      $input = $request->input('player-search');
      
      $player_list = Player::where('web_name', 'like', '%' . $input . '%')
                              ->orWhere('first_name', 'like', '%' . $input . '%')
                              ->orWhere('second_name', 'like', '%' . $input . '%')
                              ->get();
      
      if ( count($player_list) > 1 ) {

        return view('playerlist')->with(['player_list' => $player_list]);

      } else {

        return view('player')->with(['player' => $player_list]); //this can still be a singular player
      }
    }
}
