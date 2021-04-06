<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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
    return view('welcome');
});


Route::get('/example/table', function () {
    return view('example.table');
});

Auth::routes();
Route::get('user', function(){
    return view('page.user.index');
})->name('user.index');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('/book', [App\Http\Controllers\BookController::class, 'index'])->name('book.index');
// Route::get('/book/create', [App\Http\Controllers\BookController::class, 'create'])->name('book.create');

// Route::post('/book', [App\Http\Controllers\BookController::class, 'store'])->name('book.index');

Route::get('/book', [BookController::class, 'index'])->name('book.index');
Route::get('/book/create', [BookController::class, 'create'])->name('book.create');
Route::post('/book', [BookController::class, 'store'])->name('book.store');
Route::delete('/book/{book}', [BookController::class, 'destroy'])->name('book.destroy');
Route::get('/book/{book}/edit', [BookController::class, 'edit'])->name('book.edit');
Route::patch('/book/{book}', [BookController::class, 'update'])->name('book.update');