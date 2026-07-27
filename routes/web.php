<?php

use App\Models\PortalApp;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

use App\Http\Middleware\TrackTraffic;
use App\Models\PortalAppClick;

Route::get('/', function () {
    $apps = PortalApp::orderBy('sort_order', 'asc')->get();
    return view('welcome', compact('apps'));
})->middleware(TrackTraffic::class);

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('/click-app/{id}', function ($id) {
    try {
        PortalAppClick::create([
            'portal_app_id' => $id,
            'ip_address' => request()->ip(),
            'user_agent' => request()->userAgent(),
        ]);
        return response()->json(['status' => 'success']);
    } catch (\Exception $e) {
        return response()->json(['status' => 'error', 'message' => $e->getMessage()], 500);
    }
});

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::post('/apps', [AdminController::class, 'store'])->name('admin.store');
    Route::put('/apps/{id}', [AdminController::class, 'update'])->name('admin.update');
    Route::delete('/apps/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');
});

