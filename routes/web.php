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
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'doLogin')->name('doLogin');
    Route::delete('/logout', 'logout')->name('logout');
});
