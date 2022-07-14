<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teams;
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
        DB::table('teams')->truncate();

        Teams::create([
            'team_name' => 'Arsenal'
        ])->save();

        Teams::create([
            'team_name' => 'Aston Villa'
        ]);

        Teams::create([
            'team_name' => 'Bournemouth'
        ]);

        Teams::create([
            'team_name' => 'Brentford'
        ]);

        Teams::create([
            'team_name' => 'Brighton'
        ]);

        Teams::create([
            'team_name' => 'Chelsea'
        ]);

        Teams::create([
            'team_name' => 'Crystal Palace'
        ]);

        Teams::create([
            'team_name' => 'Everton'
        ]);

        Teams::create([
            'team_name' => 'Fulham'
        ]);

        Teams::create([
            'team_name' => 'Leeds'
        ]);

        Teams::create([
            'team_name' => 'Leicester City'
        ]);

        Teams::create([
            'team_name' => 'Liverpool'
        ]);

        Teams::create([
            'team_name' => 'Manchester City'
        ]);

        Teams::create([
            'team_name' => 'Manchester United'
        ]);

        Teams::create([
            'team_name' => 'Newcastle'
        ]);

        Teams::create([
            'team_name' => 'Nottingham Forest'
        ]);

        Teams::create([
            'team_name' => 'Southampton'
        ]);

        Teams::create([
            'team_name' => 'Tottenham'
        ]);

        Teams::create([
            'team_name' => 'West Ham'
        ]);

        Teams::create([
            'team_name' => 'Wolves'
        ]);
    }
}
