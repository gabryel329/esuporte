<?php

<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
=======
use App\Http\Controllers\EmpresasController;
use App\Http\Controllers\ResponsavelController;
>>>>>>> 3bc84db5a5eb09fed93a2b69745f9cc7499c94ed
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

#RESPONSAVEL
Route::get('/responsavel', [ResponsavelController::class, 'index'])->name('responsavel.index');
Route::post('/responsavel', [ResponsavelController::class, 'store'])->name('responsavel.store');
Route::put('/responsavel/{id}', [ResponsavelController::class, 'update'])->name('responsavel.update');
Route::delete('/responsavel/{id}', [ResponsavelController::class, 'destroy'])->name('responsavel.destroy');

#RESPONSAVEL
Route::get('/empresa', [EmpresasController::class, 'index'])->name('empresa.index');
Route::post('/empresa', [EmpresasController::class, 'store'])->name('empresa.store');
Route::put('/empresa/{id}', [EmpresasController::class, 'update'])->name('empresa.update');
Route::delete('/empresa/{id}', [EmpresasController::class, 'destroy'])->name('empresa.destroy');