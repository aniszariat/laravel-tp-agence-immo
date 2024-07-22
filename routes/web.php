<?php

use App\Http\Controllers\admin\PropertyController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\OptionsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/translate/{lang}', [LocalizationController::class, 'translate'])->name('translate');

Route::middleware('localization')->group(
    function () {
        Route::prefix('admin/')->name('admin.')->group(
            function () {
                Route::resource('property', PropertyController::class);
                route::resource('option', OptionsController::class);
            }
        );
    }
);
