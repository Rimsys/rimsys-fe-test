<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/', [Controller::class, 'routes'])
    ->name('route information')
    ->withoutMiddleware('api');

Route::get('/example', [Controller::class, 'example'])->name('example route');
Route::get('/error', [Controller::class, 'error'])->name('error route');


Route::prefix('resume')->name('resume.')->group(function () {
    Route::get('{resume}', [ResumeController::class, 'show'])->name('show');
    Route::put('{resume}', [ResumeController::class, 'update'])->name('update');

    Route::prefix('{resume}')->name('experiences')->group(function () {
        Route::resource('experiences', ExperienceController::class)->except('create', 'edit');
    });
});
