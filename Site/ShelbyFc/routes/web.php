<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class, 'index'])->name('index');



Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('/registar', [PageController::class, 'registar'])->name('registar');
Route::get('/noticias', [PageController::class, 'noticias'])->name('noticias');


Route::group(['prefix'=>'forum','as'=>'forum.'], function(){
    /*Route::get('/', [PageController::class, 'noticias'])->name('index');
*/
});

