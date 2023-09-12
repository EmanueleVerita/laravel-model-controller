<?php

use Illuminate\Support\Facades\Route;

//controllers


use App\Http\Controllers\Guest\MainController;

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

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/films/{id}' , [MainController::class, 'singlefilm'])->name('films.show');


Route::get('/contatti', function () {
    return view('contact');
});
