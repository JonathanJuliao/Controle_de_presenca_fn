<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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
    return view('auth.login');
});

Route::get('/register', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::middleware('auth')->group(function () {
/* 
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']); */
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('principal');
Route::any('/confirma', [App\Http\Controllers\HomeController::class, 'confirma']);
Route::any('/busca_colaboradores', [App\Http\Controllers\HomeController::class, 'busca_colaboradores']);
Route::any('/verifica_inscricao', [App\Http\Controllers\HomeController::class, 'verifica_inscricao']);
Route::any('/adm', [App\Http\Controllers\HomeController::class, 'adm'])->name('adm');
Route::any('/contaCredito', [App\Http\Controllers\HomeController::class, 'contaCredito']);
Route::any('/detalhes_credito', [App\Http\Controllers\HomeController::class, 'detalhes_credito']); 
Route::any('/registraPag', [App\Http\Controllers\HomeController::class, 'registraPag']);
Route::any('/usuarios', [App\Http\Controllers\HomeController::class, 'usuarios']);
Route::any('/PermissaoAdm', [App\Http\Controllers\HomeController::class, 'PermissaoAdm']);
Route::any('/AdicionaCreditosColab', [App\Http\Controllers\HomeController::class, 'AdicionaCreditosColab']);

});