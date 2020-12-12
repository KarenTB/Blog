<?php

use App\Http\Controllers\TarefasQuinzenaisController;
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
  
Auth::routes();

Route::get('/TarefasDiarias', function () {
  return view('TarefasDiarias');
});

Route::get('/TarefasQuinzenais', function () {
  return view('layouts.TarefasQuinzenais');
});

Route::get('/TarefasMensais', function () {
  return view('TarefasMensais');
});

Route::get('/TarefasSemanais', function () {
  return view('layouts.TarefasSemanais');
});

Route::get('/Sobre', function () {
  return view('layouts.Sobre');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/create_tarefas_quinzenais', [TarefasQuinzenaisController::class, 'store'])->name('create_quinzenais');