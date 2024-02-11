<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuitarController;


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

Route::resource('guitars_table', GuitarController::class);

Route::get('/shop', function(){
    return view('shop.index');
})->name('shop.index');
