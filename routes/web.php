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

use App\Http\Controllers\OcurrencesController;

Route::get('/', [OcurrencesController::class, 'index']);
Route::get('/ocurrences/create', [OcurrencesController::class, 'create'])->middleware('auth');
Route::get('/ocurrences/myocurrences', [OcurrencesController::class, 'myocurrences'])->middleware('auth');
Route::get('/ocurrences/scheduling', [OcurrencesController::class , 'scheduling']);
Route::get('/ocurrences/news', [OcurrencesController::class , 'news']);
Route::get('/ocurrences/called', [OcurrencesController::class , 'called'])->middleware('auth');
Route::post('/ocurrences', [OcurrencesController::class, 'store'])->middleware('auth');
Route::get('/ocurrences/{id}', [OcurrencesController::class, 'show'])->middleware('auth');
    
Route::get('/contact', function () { 
    return view('contact');
});

Route::get('/dashboard', [OcurrencesController::class, 'dashboard'])->middleware('auth');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Adicione a rota de redirecionamento aqui
    Route::get('/welcome', function () {
        return view('welcome');
    })->name('welcome'); // Altere 'welcome' para o nome que desejar
});

// Defina a rota padrão após o login
Route::get('/dashboard', function () {
    return view('welcome'); // Altere 'welcome' para o nome que desejar
})->middleware(['auth'])->name('dashboard');