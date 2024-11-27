<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ListaController;
use App\Http\Controllers\CargoController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth'])->group(function () {
    // Asegúrate de que la ruta /empleados apunte a ListaController
    Route::get('/empleados', [ListaController::class, 'empleados'])->name('empleados.index');
    
    // Asegúrate de que la ruta /cargos apunte a ListaController
    Route::get('/cargos', [ListaController::class, 'cargos'])->name('cargos.index');
});

Route::get('/empleados/create', [EmpleadoController::class, 'create'])->name('employees.create');
Route::post('/empleados', [EmpleadoController::class, 'store'])->name('employees.store');
Route::get('/empleados', [EmpleadoController::class, 'index'])->name('empleados.index');
Route::get('/cargos', [CargoController::class, 'index'])->name('cargos.index');




require __DIR__.'/auth.php';
