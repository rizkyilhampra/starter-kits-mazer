<?php

use App\Http\Controllers\BooksController;
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
    return view('index');
});

Route::prefix('books')->middleware('auth')->group(function () {
    Route::get('/', [BooksController::class, 'index'])->name('books.index');
    Route::get('/create', [BooksController::class, 'create'])->name('books.create');
    Route::post('/', [BooksController::class, 'store'])->name('books.store');
    Route::get('/{book}', [BooksController::class, 'show'])->name('books.show');
    Route::put('/{book}', [BooksController::class, 'update'])->name('books.update');
    Route::get('/{book}/edit', [BooksController::class, 'edit'])->name('books.edit');
    Route::delete('/{book}', [BooksController::class, 'destroy'])->name('books.destroy');
});

Route::middleware('can:admin')->group(function () {
    Route::get('/cobaadmin', function () {
        return 'admin';
    });
});

Route::middleware('can:user')->group(function () {
    Route::get('/cobauser', function () {
        return 'user';
    });
});
