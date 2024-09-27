<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\SectionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('records', [RecordController::class, 'index'])->name('records.index');
    Route::resource('sections', SectionController::class);
});

//Record Routes
Route::resource('records', RecordController::class)->except(['index']);
Route::put('/records/{id}/update-status', [RecordController::class, 'updateStatus'])->name('records.updateStatus');

//Update User Details
Route::put('/update-profile', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');

Route::get('/{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
