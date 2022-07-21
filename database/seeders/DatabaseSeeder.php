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
            'team_name' => 'Arsenal'
        ]);

        Team::create([
            'team_name' => 'Aston Villa'
        ]);

        Team::create([
            'team_name' => 'Bournemouth'
        ]);

        Team::create([
            'team_name' => 'Brentford'
        ]);

        Team::create([
            'team_name' => 'Brighton'
        ]);

        Team::create([
            'team_name' => 'Chelsea'
        ]);

        Team::create([
            'team_name' => 'Crystal Palace'
        ]);

        Team::create([
            'team_name' => 'Everton'
        ]);

        Team::create([
            'team_name' => 'Fulham'
        ]);

        Team::create([
            'team_name' => 'Leeds'
        ]);

        Team::create([
            'team_name' => 'Leicester City'
        ]);

        Team::create([
            'team_name' => 'Liverpool'
        ]);

        Team::create([
            'team_name' => 'Manchester City'
        ]);

        Team::create([
            'team_name' => 'Manchester United'
        ]);

        Team::create([
            'team_name' => 'Newcastle'
        ]);

        Team::create([
            'team_name' => 'Nottingham Forest'
        ]);

        Team::create([
            'team_name' => 'Southampton'
        ]);

        Team::create([
            'team_name' => 'Tottenham'
        ]);

        Team::create([
            'team_name' => 'West Ham'
        ]);

        Team::create([
            'team_name' => 'Wolves'
        ]);
    }
}
