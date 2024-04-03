<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FilmeController::class, 'index'])->name('index');
Route::get('/adicionar', [FilmeController::class, 'adicionar']);

Route::post('/create', [FilmeController::class, 'create']);
