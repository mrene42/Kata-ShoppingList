<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ItemController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/items', [ItemController::class, 'index'])->name('apiindex');
Route::post('/items', [ItemController::class, 'store'])->name('apistore');
Route::get('/items/{id}', [ItemController::class, 'show'])->name('apishow');
Route::put('/items/{id}', [ItemController::class, 'update'])->name('apiupdate');
Route::delete('/items/{id}', [ItemController::class, 'destroy'])->name('apidestroy');
Route::delete('/items', [ItemController::class, 'destroyAll'])->name('apidestroyall');