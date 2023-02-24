<?php

use App\Models\negocio;
use App\Models\negociosProductos;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\NegocioController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\PropietarioController;
use App\Http\Controllers\NegociovistaController;
use App\Http\Controllers\ProductoadminController;
use App\Http\Controllers\NegocioProductosController;



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

Route::get('/', HomeController::class);

Route::get('/principal', HomeController::class);

Route::get('/nosotros', NosotrosController::class);
Route::get('/admin', [AdminController::class, 'index'])->name('admin.general.index');
Route::get('/admin_usuarios', [UsuarioController::class, 'index'])->name('admin.general.indexusuario');
Route::get('/admin_negocio', [NegociovistaController::class, 'index'])->name('admin.general.index_negocio');
Route::get('/admin_producto', [ProductoadminController::class, 'index'])->name('admin.general.index_producto');
Route::get('/login', [LoginController::class, 'index'])->name('login')->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/registro', [RegistroController::class, 'index'])->name('registro');
Route::post('/registro', [RegistroController::class, 'store']);

Route::get('/negocios_productos', [PostController::class, 'index'])->name('negocios_productos.index');



Route::controller(NegocioController::class)->group(function () {
    Route::get('negocios', 'index')->name('negocios.index');
    Route::get('negocios/create', 'create')->name('negocios.create');
    Route::post('negocios', 'store')->name('negocios.store');
    Route::get('negocios/{id}', 'show')->name('negocios.show');
    Route::get('negocios/{negocio}/edit', 'edit')->name('negocios.edit');
    Route::put('negocios/{negocio}', 'update')->name('negocios.update');
    Route::delete('negocios/{negocio}', 'destroy')->name('negocios.destroy');
});

Route::controller(PropietarioController::class)->group(function () {
    Route::get('propietarios', 'index')->name('propietarios.index');
    Route::get('propietarios/create', 'create')->name('propietarios.create');
    Route::post('propietarios', 'store')->name('propietarios.store');
    Route::get('propietarios/{id}', 'show')->name('propietarios.show');
});

Route::controller(ProductoController::class)->group(function () {
    Route::get('productos', 'index')->name('productos.index');
    Route::get('productos/create', 'create')->name('productos.create');
    Route::post('productos', 'store')->name('productos.store');
    Route::get('productos/{id}', 'show')->name('productos.show');
});

Route::controller(NegocioProductosController::class)->group(function () {
    Route::get('negocios_productos', 'index')->name('negocios_productos.index');
    Route::get('negocios_productos/create', 'create')->name('negocios_productos.create');
    Route::post('negocios_productos', 'store')->name('negocios_productos.store');
    Route::get('negocios_productos/{negocios}', 'show')->name('negocios_productos.mostrar');
});
