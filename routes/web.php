<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/leather_Accessories',[ProductController::class,'callleather'])->name('leather');
Route::get('/casual_Accessories',[ProductController::class,'callcasual'])->name('casual');
Route::get('/fitness_Accessories',[ProductController::class,'callfitness'])->name('fitness');
Route::get('/cycling_Accessories',[ProductController::class,'callcycling'])->name('cycling');
Route::get('/boxing_accessories',[ProductController::class,'callother'])->name('other');
Route::get('/fight_accessories',[ProductController::class,'callother1'])->name('other1');

