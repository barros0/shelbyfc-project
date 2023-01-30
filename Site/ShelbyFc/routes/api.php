<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BetsController;
use App\Http\Controllers\GamesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/get_game_bet', [BetsController::class, 'getbets_values'])->name('get.bet');
Route::post('/get_game', [GamesController::class, 'game_tickets_value'])->name('get.game');


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
