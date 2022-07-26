<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Team;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Team::create([
            'team_name' => 'Arsenal',
            'team_short_name' => 'ARS',
        ]);

        Team::create([
            'team_name' => 'Aston Villa',
            'team_short_name' => 'AVL',
        ]);

        Team::create([
            'team_name' => 'Bournemouth',
            'team_short_name' => 'BOU',
        ]);

        Team::create([
            'team_name' => 'Brentford',
            'team_short_name' => 'BRE',
        ]);

        Team::create([
            'team_name' => 'Brighton',
            'team_short_name' => 'BHA',
            
        ]);

        Team::create([
            'team_name' => 'Chelsea',
            'team_short_name' => 'CHE',    
        ]);

        Team::create([
            'team_name' => 'Crystal Palace',
            'team_short_name' => 'CRY',
        ]);

        Team::create([
            'team_name' => 'Everton',
            'team_short_name' => 'EVE',
        ]);

        Team::create([
            'team_name' => 'Fulham',
            'team_short_name' => 'FUL',
        ]);

        Team::create([
            'team_name' => 'Leicester City',
            'team_short_name' => 'LEI',        
        ]);

        Team::create([
            'team_name' => 'Leeds',
            'team_short_name' => 'LEE',      
        ]);

        Team::create([
            'team_name' => 'Liverpool',
            'team_short_name' => 'LIV',     
        ]);

        Team::create([
            'team_name' => 'Manchester City',
            'team_short_name' => 'MCI',     
        ]);

        Team::create([
            'team_name' => 'Manchester United',
            'team_short_name' => 'MNU',        
        ]);

        Team::create([
            'team_name' => 'Newcastle',
            'team_short_name' => 'NEW',
        ]);

        Team::create([
            'team_name' => 'Nottingham Forest',
            'team_short_name' => 'NOT',     
        ]);

        Team::create([
            'team_name' => 'Southampton',
            'team_short_name' => 'SOU',        
        ]);

        Team::create([
            'team_name' => 'Tottenham',
            'team_short_name' => 'TOT',     
        ]);

        Team::create([
            'team_name' => 'West Ham',
            'team_short_name' => 'WHU',          
        ]);

        Team::create([
            'team_name' => 'Wolves',
            'team_short_name' => 'WOL',           
        ]);
    }
}
