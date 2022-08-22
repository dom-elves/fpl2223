<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\GameweekController;
use App\Models\Teams;
use App\Models\GuineaPig;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [APIController::class, 'apiRequest']);

Route::get('/', [PlayersController::class, 'update']); //this one

Route::get('/home', [PlayersController::class, 'fetch']);

Route::get('/player/{slug}', [PlayersController::class, 'getSinglePlayer']);

Route::get('/player-search', [PlayersController::class, 'searchPlayer']);

//gameweeks
Route::get('/update-gameweeks', [GameweekController::class, 'update']); //this one 

Route::get('/gameweeks', [GameweekController::class, 'fetch']);

Route::get('/playground', function() {
    return view('playground');
});

//below here is experimental stuff
Route::get('/events', function () {

    // $person = new GuineaPig;

    // $person->name = 'john';
    // $person->fav_color = 'blue';
    // $person->other = 'ewetyrtfgju';

    // $person->save();

    $person = GuineaPig::find(1);



    return view( 'events', ['person' => $person]);
});