<?php

use App\Events\OrderShipmentStatusUpdated;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    OrderShipmentStatusUpdated::dispatch($order);
    return view('welcome');
});

Route::get('/test', function () {
    return view('welcome');
});
