<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Layout;
use App\Models\Order;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/users', function () {
//     return (["users" => User::all()]);
// });
Route::get('/layout/{id}', function ($id) {
    return ["layouts" => Layout::where('game_id', '=', $id)->get()];
});

Route::post('/login', [AuthController::class, 'login']);

Route::post('/register', [AuthController::class, 'register']);


// Route::get('/gettoken', [AuthController::class,'gettoken']);


// Order Routes
Route::get('/order/get', function() {
    return ["orders" => Order::all()];
});
Route::get('/order/{id}', [OrderController::class, 'getOrder']);
Route::post('/order/create', [OrderController::class,'newOrder']);
Route::post('/order/update/{id}', [OrderController::class,'updateOrder']);