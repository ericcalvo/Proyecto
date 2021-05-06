<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MultijuegosController;
use GuzzleHttp\Middleware;
use App\Http\Controllers\AdminController;

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


Route::get('/categoria', [MultijuegosController::class, 'cat_show'])->middleware(['auth'])->name('categoria');

Route::get('/categoria/{categoria}', [MultijuegosController::class, 'lista_juegos'])->middleware(['auth'])->name('categoriaCategoria');

Route::get('juego/{juego}', [MultijuegosController::class, 'juego'])->middleware(['auth'])->name('juegoJuego');

Route::get('/edit', [MultijuegosController::class, 'editUser'])->middleware(['auth'])->name('edit');

Route::get('/reportarBug', [MultijuegosController::class, 'reportBug'])->middleware(['auth']);

Route::post('/updateuser', [MultijuegosController::class, 'updateUserProfile'])->middleware(['auth']);

//Rutas par el Administrador
//Index del CRUD
Route::get('/indexgames', [AdminController::class, 'indexgames'])->middleware(['auth']);
//Form crear juego
Route::get('/addgame', [AdminController::class, 'creategame'])->middleware(['auth']);
//Guardar juego
Route::post('/savegame', [AdminController::class, 'storegame'])->middleware(['auth']);
//Form editar juego
Route::get('/showgame/{id}', [AdminController::class, 'showgame'])->middleware(['auth']);
//Guardar edicion
Route::post('/editgame/{id}', [AdminController::class, 'editgame'])->middleware(['auth']);
//Borrar juego
Route::get('/deletegame/{id}', [AdminController::class, 'destroygame'])->middleware(['auth']);

require __DIR__.'/auth.php';