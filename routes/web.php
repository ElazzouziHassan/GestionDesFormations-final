<?php

use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\FormateurController;
use App\Http\Controllers\FormationController;
use Illuminate\Support\Facades\Auth;
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

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group( function () {

    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

    // Etudiants Routes :
    Route::get('etudiant', [EtudiantController::class, 'index']);
    Route::get('etudiant/create', [EtudiantController::class, 'create']);
    Route::post('etudiant', [EtudiantController::class, 'store']);

    // Formateurs Routes :
    Route::get('formateur', [FormateurController::class, 'index']);
    Route::get('formateur/create', [FormateurController::class, 'create']);
    Route::post('formateur', [FormateurController::class, 'store']);

    // Formations Routes :
    Route::get('formation', [FormationController::class, 'index']);
    Route::get('formation/create', [FormationController::class, 'create']);
    Route::post('formation', [FormationController::class, 'store']);
});