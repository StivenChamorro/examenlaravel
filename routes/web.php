<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('libros/listar',[BookController::class,'index'])->name('book.index');
Route::get('libros/create',[BookController::class,'create']);
Route::post('libros/store', [BookController::class,'store'])->name('book.store');
Route::get('libro/{book}',[BookController::class,'show'])->name('book.show');
Route::put('curso/{book}',[BookController::class,'update'])->name('book.update');
Route::delete('curso/{book}',[BookController::class,'destroy'])->name('book.destroy');
Route::get('curso/{book}/editar',[BookController::class,'edit'])->name('book.edit');


