<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\AtendenteController;
use App\Http\Controllers\GrupoController;

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

Route::get('tester', [TesteController::class, 'index'])->name('tester');


// Atendentes
Route::get('/gerenciar-atendentes', [AtendenteController::class, 'index'])->name('gerenciar-atendentes'); // Exibe todos atendentes
Route::get('/gerenciar-atendende/{id}', [AtendenteController::class, 'show'])->name('gerenciar-atendente_show'); // Exibir detalhes?
Route::get('/novo-atendente', [AtendenteController::class, 'create'])->name('novo-atendente'); // Select de pessoas -> atendentes.
Route::post('/inserir-atendente', [AtendenteController::class, 'RequestTest'])->name('inserir_atendente');

// Grupos
Route::get('/gerenciar-grupos', [GrupoController::class, 'index']);
Route::get('novo-grupo', [GrupoController::class,'create'])->name('novo-grupo');
Route::post('incluir-grupo', [GrupoController::class,'store']);
Route::post('editar-grupo', [GrupoController::class,'update']);
Route::post('apagar-grupo', [GrupoController::class,'destroy']);











