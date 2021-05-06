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
//Ruta de la Portada
Route::get('/', function () {
    return view('portada');
});
//Ruta de la Pagina principal "Multijuegos"
Route::get('/multijuegos', function () {
    return view('multijuegos');
})->middleware(['auth'])->name('multijuegos');

//Ruta del login
Route::get('/login', function () {
    return view('login');
})->middleware(['auth'])->name('login');

//Ruta del Register
Route::get('/register', function () {
    return view('register');
})->middleware(['auth'])->name('register');

//Ruta Categorias
Route::get('/categoria', [MultijuegosController::class, 'cat_show'])->middleware(['auth'])->name('categoria');

//Ruta para ver los juegos de la categoria seleccionada
Route::get('/categoria/{categoria}', [MultijuegosController::class, 'lista_juegos'])->middleware(['auth'])->name('categoriaCategoria');
//Ruta para el juego
Route::get('juego/{juego}', [MultijuegosController::class, 'juego'])->middleware(['auth'])->name('juegoJuego');
//Ruta para reportar Bug
Route::get('/reportarBug', [MultijuegosController::class, 'reportBug'])->middleware(['auth']);
//Ruta para editar el Usuario
Route::get('/edit', [MultijuegosController::class, 'editUser'])->middleware(['auth'])->name('edit');
Route::post('/updateuser', [MultijuegosController::class, 'updateUserProfile'])->middleware(['auth']);

//Rutas par el Administrador
//Index del CRUD
//Juegos
Route::get('/indexgames', [AdminController::class, 'indexgames'])->middleware(['auth'])->name('indexgames');
//Categorias
Route::get('/indexcats', [AdminController::class, 'indexcats'])->middleware(['auth'])->name('indexcats');

//Form crear juego
Route::get('/addgame', [AdminController::class, 'creategame'])->middleware(['auth'])->name('addgame');
Route::get('/addcat', [AdminController::class, 'createcat'])->middleware(['auth'])->name('addcat');

//Guardar juego
Route::post('/savegame', [AdminController::class, 'storegame'])->middleware(['auth']);
Route::post('/savecat', [AdminController::class, 'storecat'])->middleware(['auth']);

//Form editar juego
Route::get('/showgame/{id}', [AdminController::class, 'showgame'])->middleware(['auth'])->name('showgame');
Route::get('/showcat/{id}', [AdminController::class, 'showcat'])->middleware(['auth'])->name('showcat');

//Guardar edicion
Route::post('/editgame/{id}', [AdminController::class, 'editgame'])->middleware(['auth']);
Route::post('/editcat/{id}', [AdminController::class, 'editcat'])->middleware(['auth']);

//Borrar juego
Route::get('/deletegame/{id}', [AdminController::class, 'destroygame'])->middleware(['auth']);
Route::get('/deletecat/{id}', [AdminController::class, 'destroycat'])->middleware(['auth']);

require __DIR__.'/auth.php';