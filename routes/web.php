<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VLibrasController;

Route::get('/vlibras/translate', [VLibrasController::class, 'translate'])->name('vlibras.translate');


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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('produtos', 'App\Http\Controllers\ProdutoController');

Route::post('/handtalk/translate', 'App\Http\Controllers\HandTalkController@translate');