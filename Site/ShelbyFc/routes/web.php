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
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PayPalController;
use App\Http\Controllers\InscreverController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\FaqsController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\CartController;


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
Auth::routes(['verify' => true]);

/*--------------------tests--------------------*/

Route::get('testepaypal', [PayPalController::class, 'processTransaction'])->name('testepaypal');

Route::get("/email", function(){
    return View("email.forgetpassword");
});

/*-----------------tests--------------------*/

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/home', [PageController::class, 'index'])->name('home');
Route::get('styles', [PageController::class, 'styles'])->name('styles');


/** AUTH PROVIDERS & CALLBACK**/
Route::get('auth/{provider}/callback', [SocialLoginController::class, 'providerCallback']);
Route::get('auth/{provider}', [SocialLoginController::class, 'redirectToProvider'])->name('social.redirect');

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');



Route::group(['middleware' => 'auth'], function () {

    Route::get('carrinho', [CartController::class, 'cart'])->name('cart');

    Route::get('/inscrever', [PageController::class, 'inscrever'])->name('inscrever');
    Route::post('/inscrever', [PageController::class, 'inscrever_post'])->name('inscrever.post');


    Route::get('/apostar', [PageController::class, 'tobet'])->name('tobet');

    Route::group(['prefix' => 'perfil'], function () {
        Route::get('/', [PageController::class, 'minha_conta'])->name('perfil');
        Route::get('/remove-photo', [UserController::class, 'remove_photo'])->name('user.remove.photo');
        Route::get('/subscricoes', [PageController::class, 'subscricoes'])->name('subscricoes');
        Route::get('/seguranca', [PageController::class, 'seguranca'])->name('seguranca');
        Route::get('/transacoes', [PageController::class, 'transacoes'])->name('transacoes');
        Route::get('/preferencias', [PageController::class, 'preferencias'])->name('preferencias');

        Route::post('/atualizar', [UserController::class, 'update_account'])->name('user.update');
        Route::post('/atualizar-password', [UserController::class, 'update_password'])->name('user.update.password');
    });
});

Route::get('/noticias', [PageController::class, 'noticias'])->name('noticias');
Route::get('/noticias/categoria/{category}', [PageController::class, 'news_categories'])->name('news.categorie');
Route::get('/noticia/{id}', [PageController::class, 'noticia'])->name('noticia');
Route::get('/faqs', [PageController::class, 'faqs'])->name('faqs');


Route::get('/comprar-bilhete', [PageController::class, 'comprar_bilhete'])->name('comprar.bilhete');


Route::get('/jogos', [PageController::class, 'jogos'])->name('jogos');
Route::get('/contactos', [PageController::class, 'contactos'])->name('contactos');


Route::group(['prefix' => 'forum', 'as' => 'forum.', 'middleware' => 'subscriber'], function () {
    Route::get('/', [PageController::class, 'forum'])->name('home');

});


Route::group(['prefix' => 'admin/', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::resource('/categories', CategoriesController::class);
    Route::resource('/games', GamesController::class);
    Route::resource('/users', UserController::class);
    Route::resource('/news', NewsController::class);
    Route::resource('/inscrever', InscreverController::class);
    Route::resource('/teams', TeamsController::class);
    Route::resource('/faqs', FaqsController::class);

    Route::group(['prefix' => 'contacts/', 'as' => 'contacts.'], function () {
        Route::get('/', [AdminController::class,'contacts'])->name('index');
        Route::get('/{contact}', [AdminController::class,'contact'])->name('show');
    });
});


Route::get('create-transaction', [PayPalController::class, 'createTransaction'])->name('createTransaction');
Route::get('process-transaction', [PayPalController::class, 'processTransaction'])->name('processTransaction');
Route::get('success-transaction', [PayPalController::class, 'successTransaction'])->name('successTransaction');
Route::get('cancel-transaction', [PayPalController::class, 'cancelTransaction'])->name('cancelTransaction');



