<?php

use App\Http\Controllers\ColorSetController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::controller(ColorSetController::class)->group(function () {
    Route::get('color-set', 'index')->name('color.set.index');
    Route::get('color-set/create', 'create')->name('color.set.create');
    Route::get('color-set/edit', 'edit')->name('color.set.edit');
    Route::post('color-set/store', 'store')->name('color.set.store');
    Route::post('color-set/update', 'update')->name('color.set.update');

    Route::post('variable/update', 'variable_update')->name('variable.update');
    Route::get('generate/css', 'generate')->name('generate');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
