<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SewaController;
use App\Http\Controllers\DatapeminjamController;

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

Route::group(['middleware' => ['auth','ceklevel:1']], function () {
    Route::get('/sewa', [SewaController::class, 'index'])->name('sewa.index');
    Route::get('/book', [BookController::class, 'index'])->name('book.index');
    Route::get('/book/create', [BookController::class, 'create'])->name('book.create');
    Route::post('/book', [BookController::class, 'store'])->name('book.store');
    Route::delete('/book/{book}', [BookController::class, 'destroy'])->name('book.destroy');
    Route::get('/book/{book}/edit', [BookController::class, 'edit'])->name('book.edit');
    Route::patch('/book/{book}', [BookController::class, 'update'])->name('book.update');
    Route::get('/datapeminjam/create', [DatapeminjamController::class, 'create'])->name('datapeminjam.create');
    Route::get('/datapeminjam', [DatapeminjamController::class, 'list'])->name('datapeminjam.list');
    Route::post('/datapeminjam', [DatapeminjamController::class, 'store'])->name('datapeminjam.store'); 
    Route::get('/datapeminjam/{datapeminjam}/edit', [DatapeminjamController::class, 'edit'])->name('datapeminjam.edit');
    Route::patch('/datapeminjam/{datapeminjam}', [DatapeminjamController::class, 'update'])->name('datapeminjam.update');
});

Route::group(['middleware' => ['auth','ceklevel:2']], function () {
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
});