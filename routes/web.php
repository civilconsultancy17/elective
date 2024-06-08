<?php

use App\Http\Controllers\MembersController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/admin/dashboard', function () {
    return view ('admin.dashboard.index');
});

Route::get('/', function () {
    return view('front.index');
});

Route::get('/show', [MembersController::class, 'show'])->name('show-lists');

//finalled