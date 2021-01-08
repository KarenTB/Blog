<?php

use App\Http\Controllers\TarefasDiariasController;
use App\Http\Controllers\TarefasMensaisController;
use App\Http\Controllers\TarefasQuinzenaisController;
use App\Http\Controllers\TarefasSemanaisController;
use App\Http\Controllers\ReportTarefasDiariasController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ReportTarefasSemanaisController;
use App\Http\Controllers\ReportTarefasQuinzenaisController;
use App\Http\Controllers\ReportTarefasMensaisController;
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

Route::get('/sobre', function () {
    return view('layouts.Sobre');
});

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

    Route::get('/tarefasDiariasReport', function (){
        return view('reports.diarias')
            ->with('tarefas', []);
    });

    Route::get('/tarefasSemanaisReport', function (){
        return view('reports.semanais')
            ->with('tarefas', []);
    });

    Route::get('/tarefasQuinzenaisReport', function (){
        return view('reports.quinzenais')
            ->with('tarefas', []);
    });

    Route::get('/tarefasMensaisReport', function (){
        return view('reports.mensais')
            ->with('tarefas', []);
    });

    //Rotas de Usuários
    Route::resource('usuarios', UsuariosController::class);
    Route::get('situation_user/{usuario}', [UsuariosController::class, 'toggleSituation'])->name('usuarios.situation');

    //Rotas de cadastros das informações
    Route::post('/create_tarefas_quinzenais', [TarefasQuinzenaisController::class, 'store'])->name('create_quinzenais');
    Route::post('/create_tarefas_mensais', [TarefasMensaisController::class, 'store'])->name('create_mensais');
    Route::post('/create_tarefas_diarias', [TarefasDiariasController::class, 'store'])->name('create_diarias');
    Route::post('/create_tarefas_semanais', [TarefasSemanaisController::class, 'store'])->name('create_semanais');

    //Rotas dos Relatórios
    Route::get('/reportDiarias', [ReportTarefasDiariasController::class, 'index'])->name('get_report_diarias');
    Route::get('/reportSemanais', [ReportTarefasSemanaisController::class, 'index'])->name('get_report_semanais');
    Route::get('/reportQuinzenais', [ReportTarefasQuinzenaisController::class, 'index'])->name('get_report_quinzenais');
    Route::get('/reportMensais', [ReportTarefasMensaisController::class, 'index'])->name('get_report_mensais');
});