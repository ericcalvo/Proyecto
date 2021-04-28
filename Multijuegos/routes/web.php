<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MultijuegosController;
use GuzzleHttp\Middleware;

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

Route::get('/', function () {
    return view('portada');
});

Route::get('/multijuegos', function () {
    return view('multijuegos');
})->middleware(['auth'])->name('multijuegos');

Route::get('/login', function () {
    return view('login');
})->middleware(['auth'])->name('login');

Route::get('/register', function () {
    return view('register');
})->middleware(['auth'])->name('register');

Route::get('/bug', [MultijuegosController::class, 'bug'])->middleware(['auth']);

Route::get('/game', [MultijuegosController::class, 'game'])->middleware(['auth']);

Route::post('/game', [MultijuegosController::class, 'game'])->middleware(['auth']);

Route::get('/categoria', [MultijuegosController::class, 'cat_show']);

Route::get('/categoria/{categoria}', [MultijuegosController::class, 'lista_juegos'])->middleware(['auth']);

Route::get('/{juego}', [MultijuegosController::class, 'juego'])->middleware(['auth']);

require __DIR__.'/auth.php';