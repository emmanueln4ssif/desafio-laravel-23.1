<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\AulaController;
use App\Http\Controllers\UserController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

//Funcionarios
//              url                                    nome no controller
    Route::get('/funcionarios', [FuncionarioController::class, 'index'])->name('funcionarios.index');
    Route::get('/funcionarios/create', [FuncionarioController::class, 'create'])->name('funcionarios.create');
    Route::get('/funcionarios/{funcionario}/edit', [FuncionarioController::class, 'edit'])->name('funcionarios.edit');
    Route::get('/funcionarios/{funcionario}', [FuncionarioController::class, 'show'])->name('funcionarios.show');
    Route::post('/funcionarios', [FuncionarioController::class, 'store'])->name('funcionarios.store');
    Route::post('/funcionarios/{funcionario}', [FuncionarioController::class, 'update'])->name('funcionarios.update');
    Route::post('/funcionarios/delete/{funcionario}', [FuncionarioController::class, 'destroy'])->name('funcionarios.destroy');

//Alunos
    Route::get('/alunos', [AlunoController::class, 'index'])->name('alunos.index');
    Route::get('/alunos/create', [AlunoController::class, 'create'])->name('alunos.create');
    Route::get('/alunos/{aluno}/edit', [AlunoController::class, 'edit'])->name('alunos.edit');
    Route::get('/alunos/{aluno}', [AlunoController::class, 'show'])->name('alunos.show');
    Route::post('/alunos', [AlunoController::class, 'store'])->name('alunos.store');
    Route::post('/alunos/{aluno}', [AlunoController::class, 'update'])->name('alunos.update');
    Route::post('/alunos/delete/{aluno}', [AlunoController::class, 'destroy'])->name('alunos.destroy');

//Aulas
    Route::get('/aulas', [AulaController::class, 'index'])->name('aulas.index');
    Route::get('/aulas/create', [AulaController::class, 'create'])->name('aulas.create');
    Route::get('/aulas/{funcionario}/edit', [AulaController::class, 'edit'])->name('aulas.edit');
    Route::get('/aulas/{aula}', [AulaController::class, 'show'])->name('aulas.show');
    Route::post('/aulas', [AulaController::class, 'store'])->name('aulas.store');
    Route::post('/aulas/{funcionario}', [AulaController::class, 'update'])->name('aulas.update');
    Route::post('/aulas/delete/{funcionario}', [AulaController::class, 'destroy'])->name('aulas.destroy');

//User(Admin)
    Route::get('/envio_email', [UserController::class, 'index'])->name('user.index');


});

require __DIR__.'/auth.php';