<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Layout;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    return (["users" => User::all()]);
});
Route::get('/layout/{id}', function ($id) {
    return (["layouts" => Layout::where('game_id', '=', $id)->get()]);
});

Route::post('/login', [AuthController::class, 'login']);

Route::post('/register', [AuthController::class, 'register']);