<?php

use Illuminate\Support\Facades\Route;

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
    return view('bootstrap.offline.login');
});
Route::post('auth', [App\Http\Controllers\AuthController::class, 'authlogin']);

Route::get('on', [App\Http\Controllers\OnlineController::class, 'index'])->name('on');
//# Rotas relacionado ações com Clientes
Route::prefix('clientes/')->group(function(){
    Route::get('/', [App\Http\Controllers\ClientesController::class, 'index'])->name('clientes');
    Route::get('add', function(){
        return 'add!';
    });
    Route::get('edit', function(){
        return 'add!';
    });
    Route::get('del', function(){
        return 'add!';
    });

});

// rota somente para realização de testes de execução de funções
Route::get('teste', [App\Http\Controllers\Testecontroller::class, 'teste']);

