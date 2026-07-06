<?php

use App\Models\PortalApp;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $apps = PortalApp::orderBy('sort_order', 'asc')->get();
    return view('welcome', compact('apps'));
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});
