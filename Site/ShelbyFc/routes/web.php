<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Auth\SocialLoginController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostsController;

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

Auth::routes();

Route::get('auth/{provider}/callback',[SocialLoginController::class,'providerCallback']);
Route::get('auth/{provider}',[SocialLoginController::class,'redirectToProvider'])->name('social.redirect');

Route::get('/', [PageController::class, 'index'])->name('index');

<<<<<<< HEAD
<<<<<<< HEAD
Route::get('styles', [PageController::class, 'styles'])->name('styles');
=======
Route::get('/inscrever', [PageController::class, 'inscrever'])->name('inscrever');
>>>>>>> eedacc179679b62c129221e9723dacaa36909461
=======
Route::get('/inscrever', [PageController::class, 'inscrever'])->name('inscrever');
>>>>>>> eedacc179679b62c129221e9723dacaa36909461

Route::post('/atualizar', [UserController::class, 'update_account'])->name('user.update');
Route::post('/atualizar-password', [UserController::class, 'update_password'])->name('user.update.password');




Route::get('/auth/redirect', function () {
    return Socialite::driver('github')->redirect();
});

Route::get('/auth/callback', function () {
    $user = Socialite::driver('github')->user();
});

Route::get('/comprar-bilhete', [PageController::class, 'comprar_bilhete'])->name('comprar.bilhete');

//Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('/minha-conta', [PageController::class, 'minha_conta'])->name('minha.conta');
/*
Route::get('/registar', [PageController::class, 'registar'])->name('registar');*/
Route::get('/noticias', [UserController::class, 'noticias'])->name('noticias');




Route::group(['prefix'=>'forum','as'=>'forum.'], function(){
    /*Route::get('/', [PageController::class, 'noticias'])->name('index');
*/
});


Route::group(['prefix'=>'admin/','as'=>'admin.','middleware'=>'admin'], function(){
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');




    Route::resource('/categorias', CategoriesController::class);
    Route::resource('/games', GamesController::class);
    Route::resource('/users', GamesController::class);
    Route::resource('/news', GamesController::class);
    Route::resource('/teams', GamesController::class);

});




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
