<?php

use App\Models\PortalApp;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    $apps = PortalApp::orderBy('sort_order', 'asc')->get();
    return view('welcome', compact('apps'));
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::post('/apps', [AdminController::class, 'store'])->name('admin.store');
    Route::put('/apps/{id}', [AdminController::class, 'update'])->name('admin.update');
    Route::delete('/apps/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');
});

