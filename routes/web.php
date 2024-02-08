<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;

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


Route::get('countries/create',[CountryController::class,'create']);
Route::post('countries/create',[CountryController::class,'store']);  
Route::get('countries',[CountryController::class,'show']);
Route::get('countries/{id}',[CountryController::class,'detail']);
Route::get('countries/edit/{id}',[CountryController::class,'edit']);
Route::get('countries/edit/{id}',[CountryController::class,'update']);

require __DIR__.'/auth.php';
