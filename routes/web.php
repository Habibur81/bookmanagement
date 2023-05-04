<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooktableController;

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
    return view('from');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\BooktableController::class, 'index'])->name('home');
Route::post('/insert_info', [App\Http\Controllers\BooktableController::class, 'insert'])->name('insert_info');
Route::get('/showindex', [App\Http\Controllers\BooktableController::class, 'show_information'])->name('showindex');
Route::get('/edit_book/{id}', [App\Http\Controllers\BooktableController::class, 'edit'])->name('edit_book');
Route::post('/edit_info/{id}', [App\Http\Controllers\BooktableController::class, 'edit_info'])->name('edit_info');
Route::delete('/delete_info/{id}', [App\Http\Controllers\BooktableController::class, 'delete'])->name('delete_info');

