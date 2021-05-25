<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MultijuegosController;
use GuzzleHttp\Middleware;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PayPalController;

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
Route::get('/', function () { return view('portada'); });

//Ruta de la Pagina principal "Multijuegos"
Route::get('/multijuegos', [MultijuegosController::class, 'multijuegos'])->middleware(['auth'])->name('multijuegos');

//Ruta del login
Route::get('/login', function () { return view('login'); })->middleware(['auth'])->name('login');

//Ruta del Register
Route::get('/register', function () { return view('register'); })->middleware(['auth'])->name('register');

//Ruta Categorias
Route::get('/categoria', [MultijuegosController::class, 'cat_show'])->middleware(['auth'])->name('categoria');

//Ruta para ver los juegos de la categoria seleccionada
Route::get('/categoria/{categoria}/{pagina?}', [MultijuegosController::class, 'lista_juegos'])->middleware(['auth'])->name('categoriaCategoria');

//Ruta para el juego
Route::get('juego/{juego}', [MultijuegosController::class, 'juego'])->middleware(['auth'])->name('juegoJuego');

//Ruta para reportar Bug
Route::get('/reportarBug', [MultijuegosController::class, 'reportBug'])->middleware(['auth']);
Route::post('/sendbug', [MultijuegosController::class, 'sendbug'])->middleware(['auth']);

//Ruta para editar el Usuario
Route::get('/edit', [MultijuegosController::class, 'editUser'])->middleware(['auth'])->name('edit');
Route::post('/updateuser', [MultijuegosController::class, 'updateUserProfile'])->middleware(['auth']);

//Ruta para comprar premium
Route::get('/comprarPremium', [PayPalController::class, 'payWithPayPal'])->middleware(['auth'])->name('comprarPremium');
Route::get('/comprarPremiumpost',[PayPalController::class, 'payPalStatus'])->middleware(['auth'])->name('comprarPremiumpost');
//Rutas para el Administrador
//Index del CRUD
//Juegos
Route::get('/indexgames', [AdminController::class, 'indexgames'])->middleware(['auth'])->name('indexgames');

//Categorias
Route::get('/indexcats', [AdminController::class, 'indexcats'])->middleware(['auth'])->name('indexcats');

//Form crear 
//Juegos
Route::get('/addgame', [AdminController::class, 'creategame'])->middleware(['auth'])->name('addgame');
//Categorias
Route::get('/addcat', [AdminController::class, 'createcat'])->middleware(['auth'])->name('addcat');

//Guardar
//Juego
Route::post('/savegame', [AdminController::class, 'storegame'])->middleware(['auth']);
//Categoria
Route::post('/savecat', [AdminController::class, 'storecat'])->middleware(['auth']);
//Juego
Route::get('/showgame/{id}', [AdminController::class, 'showgame'])->middleware(['auth'])->name('showgame');
//Categoria
Route::get('/showcat/{id}', [AdminController::class, 'showcat'])->middleware(['auth'])->name('showcat');

//Guardar edicion
Route::post('/editgame/{id}', [AdminController::class, 'editgame'])->middleware(['auth']);
Route::post('/editcat/{id}', [AdminController::class, 'editcat'])->middleware(['auth']);

//Borrar juego
Route::get('/deletegame/{id}', [AdminController::class, 'destroygame'])->middleware(['auth']);
Route::get('/deletecat/{id}', [AdminController::class, 'destroycat'])->middleware(['auth']);
//
Route::get('/proves', [AdminController::class, 'proves'])->middleware(['auth']);

//Ruta para entrar en las opciones que puede hacer un administrador
Route::get('/admin', [MultijuegosController::class, 'admin'])->middleware(['auth'])->name('admin');


require __DIR__.'/auth.php';