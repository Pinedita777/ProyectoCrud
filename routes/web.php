<?php

use App\Http\Controllers\LibroController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\UsuarioController;
use App\Models\Libro;
use App\Models\Usuario;
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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('libros', LibroController::class);
