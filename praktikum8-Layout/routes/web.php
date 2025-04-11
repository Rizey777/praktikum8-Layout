<?php
use App\Http\Controllers\LayoutController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [LayoutController::class,'admin']);
Route::get('/user', [LayoutController::class, 'user']);

