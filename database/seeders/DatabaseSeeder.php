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
        // DB::table('Team')->truncate();

        Team::create([
            'team_name' => 'Arsenal',
            'team_short_name' => 'ARS',
            'hex_primary' => '#EF0107',
            'hex_secondary' => 'white'
        ]);

        Team::create([
            'team_name' => 'Aston Villa',
            'team_short_name' => 'AVL',
            'hex_primary' => '#670E36',
            'hex_secondary' => '#95BFE5'
        ]);

        Team::create([
            'team_name' => 'Bournemouth',
            'team_short_name' => 'BOU',
            'hex_primary' => 'red',
            'hex_secondary' => 'black'
        ]);

        Team::create([
            'team_name' => 'Brentford',
            'team_short_name' => 'BRE',
            'hex_primary' => 'red',
            'hex_secondary' => 'white'
        ]);

        Team::create([
            'team_name' => 'Brighton',
            'team_short_name' => 'BHA',
            'hex_primary' => '#0057B8',
            'hex_secondary' => 'white'
        ]);

        Team::create([
            'team_name' => 'Chelsea',
            'team_short_name' => 'CHE',
            'hex_primary' => '#034694',
            'hex_secondary' => 'white'
        ]);

        Team::create([
            'team_name' => 'Crystal Palace',
            'team_short_name' => 'CRY',
            'hex_primary' => '#1B458F',
            'hex_secondary' => '#C4122E'
        ]);

        Team::create([
            'team_name' => 'Everton',
            'team_short_name' => 'EVE',
            'hex_primary' => '#003399',
            'hex_secondary' => 'white'
        ]);

        Team::create([
            'team_name' => 'Fulham',
            'team_short_name' => 'FUL',
            'hex_primary' => 'black',
            'hex_secondary' => 'white'
        ]);

        Team::create([
            'team_name' => 'Leeds',
            'team_short_name' => 'LEE',
            'hex_primary' => '#FFCD00',
            'hex_secondary' => 'white'
        ]);

        Team::create([
            'team_name' => 'Leicester City',
            'team_short_name' => 'LEI',
            'hex_primary' => '#003090',
            'hex_secondary' => '#FDBE11'
        ]);

        Team::create([
            'team_name' => 'Liverpool',
            'team_short_name' => 'LIV',
            'hex_primary' => '#C8102E',
            'hex_secondary' => 'white'
        ]);

        Team::create([
            'team_name' => 'Manchester City',
            'team_short_name' => 'MCI',
            'hex_primary' => '#6CABDD',
            'hex_secondary' => 'white'
        ]);

        Team::create([
            'team_name' => 'Manchester United',
            'team_short_name' => 'MNU',
            'hex_primary' => '#DA291C',
            'hex_secondary' => 'black'
        ]);

        Team::create([
            'team_name' => 'Newcastle',
            'team_short_name' => 'NEW',
            'hex_primary' => 'black',
            'hex_secondary' => 'white'
        ]);

        Team::create([
            'team_name' => 'Nottingham Forest',
            'team_short_name' => 'NOT',
            'hex_primary' => '#DD0000',
            'hex_secondary' => 'white'
        ]);

        Team::create([
            'team_name' => 'Southampton',
            'team_short_name' => 'SOU',
            'hex_primary' => '#D71920',
            'hex_secondary' => 'white'
        ]);

        Team::create([
            'team_name' => 'Tottenham',
            'team_short_name' => 'TOT',
            'hex_primary' => 'white',
            'hex_secondary' => '#132257'
        ]);

        Team::create([
            'team_name' => 'West Ham',
            'team_short_name' => 'WHU',
            'hex_primary' => '#7A263A',
            'hex_secondary' => '#1BB1E7'
        ]);

        Team::create([
            'team_name' => 'Wolves',
            'team_short_name' => 'WOL',
            'hex_primary' => '#FDB913',
            'hex_secondary' => 'black'
        ]);
    }
}
