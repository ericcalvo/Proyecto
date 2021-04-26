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
    return view('welcome');
});

Route::get('/multijuegos', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/bug', [MultijuegosController::class, 'bug'])->middleware(['auth']);

Route::get('/game', [MultijuegosController::class, 'game'])->middleware(['auth']);
Route::post('/game', [MultijuegosController::class, 'game'])->middleware(['auth']);


require __DIR__.'/auth.php';