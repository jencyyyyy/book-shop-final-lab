<?php

use App\Http\Controllers\BookController;
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

Route::get('/', function () {
    return view('welcome');
}); 

Route::get('/books',[BookController::class,'index'])->name('books.home');

Route::get('/books/{id}/show',[BookController::class,'show'])->name('books.show');


Route::get('/books/create',[BookController::class,'create'])->name('books.create');
Route::post('/books/store',[BookController::class,'store'])->name('books.store');

Route::delete("/books/{id}/delete",[BookController::class,'destroy'])->name('books.destroy');

