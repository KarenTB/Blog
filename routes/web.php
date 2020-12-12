<?php

use App\Http\Controllers\TarefasMensaisController;
use App\Http\Controllers\TarefasQuinzenaisController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

//utilizzo o Route::middleware para colocar as rotas que não podem ser acessar sem login
Route::middleware(['auth'])->group(function () {

    Route::get('/TarefasDiarias', function () {
        return view('tarefas.TarefasDiarias');
    });

    Route::get('/TarefasQuinzenais', function () {
        return view('tarefas.TarefasQuinzenais');
    });

    Route::get('/TarefasMensais', function () {
        return view('tarefas.TarefasMensais');
    });

    Route::get('/TarefasSemanais', function () {
        return view('tarefas.TarefasSemanais');
    });

    Route::get('/Sobre', function () {
        return view('layouts.Sobre');
    });

    //Rotas de cadastros das informações
    Route::post('/create_tarefas_quinzenais', [TarefasQuinzenaisController::class, 'store'])->name('create_quinzenais');
    Route::post('/create_tarefas_mensais', [TarefasMensaisController::class, 'store'])->name('create_mensais');


});