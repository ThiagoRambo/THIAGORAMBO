<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailsWeightController;

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

Route::get('/user', [DetailsWeightController::class,'index']);

#Route::get('/DetalhesDePessagem', DetailsWeightController::class)->name('weightdetails');

