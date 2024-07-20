<?php

use App\Http\Controllers\admin\PropertyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin/')->name('admin.')->group(
    function () {
        // Route::get('/property', [PropertyController::class, 'index'])->name('all');
        Route::resource('property', PropertyController::class);
    }
);
