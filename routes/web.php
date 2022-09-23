<?php

use App\Http\Controllers\BairroController;
use App\Http\Controllers\CidadeController;
use App\Models\Cidade;
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
    return view('home');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::resource('bairro', BairroController::class)->middleware(['auth']);

Route::resource('cidade', CidadeController::class)->middleware(['auth']);

require __DIR__.'/auth.php';
