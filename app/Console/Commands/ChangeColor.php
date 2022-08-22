<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\GuineaPig;
use Illuminate\Support\Arr;
use App\Events\ChangeColorEvent;

class ChangeColor extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:change';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'CHanges something';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $pig = GuineaPig::find(1);

        $colors = ['blue','cyan','gold','grey','green'];

        $pig->update([ 'fav_color' => Arr::random($colors)]);

        ChangeColorEvent::dispatch($pig);
        
        return 0;
    }
}
