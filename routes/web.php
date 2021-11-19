<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\DepoimentosController;
use App\Http\Controllers\EventosController;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ParceirosController;
use App\Http\Controllers\QuemSomosController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\BoletoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('site');
Route::get('/noticias/', [HomeController::class, 'list'])->name('evento.list');
Route::get('/noticias/{slug}', [HomeController::class, 'show'])->name('evento.list');
Route::get('/segundavia/', [HomeController::class, 'segundavia']);
Route::get('/segundavia/buscar', [HomeController::class, 'buscar'])->name('buscar');
// Route::get('live_search/action', 'WebSiteController@action')->name('live_search.action');


Route::prefix('/admin')->middleware(['auth'])->group(function () {
    Route::get('', [AdminController::class, 'index']);
    Route::resource('banners', BannerController::class)->except(['show', 'create']);
    Route::resource('quemSomos', QuemSomosController::class)->only(['index', 'update']);
    Route::resource('parceiros', ParceirosController::class)->except(['show', 'create']);
    Route::resource('depoimentos', DepoimentosController::class)->except(['show', 'create']);
    Route::resource('categorias', CategoriasController::class)->except(['create', 'show']);
    Route::resource('eventos', EventosController::class)->except(['create']);
    Route::resource('eventos/galeria', GaleriaController::class);
    Route::resource('cliente', ClienteController::class);
    Route::resource('cliente/pedido', PedidoController::class);
    // Route::resource('cliente/boleto/', ClienteController::class)->name('boleto');
    Route::resource('cliente/pedido/boleto', BoletoController::class);
    Route::resource('users', UserController::class)->except(['show', 'create']);
    Route::put('users/password/{user}', [UserController::class, 'updatePassword'])->name('users.updatePassword');
});

require __DIR__.'/auth.php';
