<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;
use App\Http\Controllers\PlayersController;
use App\Models\Teams;


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

Route::get('/', [PlayersController::class, 'update']);

Route::get('/home', [PlayersController::class, 'fetch']);

Route::get('/player/{slug}', [PlayersController::class, 'getSinglePlayer']);

Route::get('/player-search', [PlayersController::class, 'searchPlayer']);