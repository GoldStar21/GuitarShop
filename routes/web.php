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

Route::get('/', function () {
    return view('welcome');
});


//Ruta koja pokazuje create stranicu. Putanja, kontorler.
//Route::get('webshop/create', [GuitarController::class, 'create']);

//Route::get('/', [ProductController::class, 'index']);
Route::resource('webshop', GuitarController::class);

//Route::post('/webshop', [GuitarController::class, 'store'])->name('webshop.store');