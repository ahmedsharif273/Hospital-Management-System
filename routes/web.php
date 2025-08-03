<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\Runner\HookMethod;
use App\Http\Controllers\HomeController;
Route::get('/', function () {
    return view('welcome');
});

Route ::get('/home',[HomeController::class,'redriect']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
