<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tacoController;

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

Route::get('/inicio', [tacoController::class, 'inicio'])->name('inicio');

Route::get('/tacostipo', [tacoController::class, 'tipos'])->name('tipos');

Route::get('/datos', [tacoController::class, 'tacosdato'])->name('datotaco');

Route::get('/tacobel', [tacoController::class, 'tacobe'])->name('tacob');
