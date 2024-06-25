<?php

use App\Http\Controllers\ColorSetController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('template', function () {
    return view('guest.index');
})->name('guest');

Route::controller(ColorSetController::class)->group(function () {
    Route::get('palette', 'index')->name('palette');
    Route::get('palette/create', 'create')->name('palette.create');
    Route::get('palette/edit', 'edit')->name('palette.edit');
    Route::post('palette/store', 'store')->name('palette.store');
    Route::post('palette/update', 'update')->name('palette.update');

    Route::post('palette/variable/update', 'variable_update')->name('palette.variable.update');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
