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
Route::get('/ocurrences/create', [OcurrencesController::class, 'create']);
Route::get('/ocurrences/{$id}}', [OcurrencesController::class, 'show']);
Route::get('/ocurrences/myocurrences', [OcurrencesController::class, 'myocurrences']);
Route::get('/ocurrences/scheduling', [OcurrencesController::class , 'scheduling']);
Route::get('/ocurrences/news', [OcurrencesController::class , 'news']);
Route::get('/ocurrences/called', [OcurrencesController::class , 'called']);
Route::post('/ocurrences', [OcurrencesController::class, 'store']);


Route::get('/contact', function () {
    return view('contact');
});