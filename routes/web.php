<?php

use App\Http\Controllers\admin\PropertyController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\OptionsController;
use App\Http\Controllers\PropertyController as ControllersPropertyController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/translate/{lang}', [LocalizationController::class, 'translate'])->name('translate');

Route::post('/try', function () {
    echo 'HELLO';
})->name('try');

Route::middleware('localization')->group(
    function () {
        /* This code snippet is defining a group of routes that are prefixed with 'admin/', require
        authentication middleware, and have a route name prefix of 'admin.'. This means that all
        routes defined within this group will have the 'admin.' prefix added to their names, and
        they will also require authentication before being accessed. */
        // Route::prefix('admin/')->middleware('auth')->name('admin.')->group(
        Route::prefix('admin/')->name('admin.')->group(
            function () {
                Route::resource('property', PropertyController::class);
                route::resource('option', OptionsController::class);
            }
        );
        Route::controller(ControllersPropertyController::class)->prefix('/biens')->name('property.')->group(
            function () {
                $idRegex = '[0-9]+';
                $slugRegex = '[0-9a-z\-]+';

                Route::get('/', 'index')->name('index');
                Route::get('/{slug}-{property}', 'show')->name('show')->where(
                    [
                        'property' => $idRegex,
                        'slug' => $slugRegex,
                    ]
                );
                Route::post('/{property}/contact', 'contact')->name('contact');
            }
        );
    }
);

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->middleware('auth')->name('login');
    Route::post('/login', 'doLogin')->name('doLogin');
    Route::delete('/logout', 'logout')->middleware('guest')->name('logout');
});
