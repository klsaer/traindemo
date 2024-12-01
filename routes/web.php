<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'showIndex'])
    ->name('home');

Route::get('/', [MainController::class, 'showCards'])
    ->name('cards');

Route::get('/reports',[ReportController::class, 'index'])
    ->name('report.index');

Route::delete('/reports/{report}', [ReportController::class, 'destroy'])
    ->name('reports.destroy');

Route::post('/reports',[ReportController::class,'store'])
    ->name('reports.store');

Route::get('/reports/{report}', [ReportController::class,'show'])
    ->name('reports.show');

Route::put('/reports/{report}', [ReportController::class, 'update'])
    ->name('reports.update');





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
