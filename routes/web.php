<?php

use Illuminate\Support\Facades\Route;
use Stephenjude\PaymentGateway\Http\Controllers\PaymentGatewayController;

Route::get(config('payment-gateways.routes.checkout.path'), [PaymentGatewayController::class, 'index'])
    ->name(config('payment-gateways.routes.checkout.name'));

Route::get(config('payment-gateways.routes.callback.path'), [PaymentGatewayController::class, 'store'])
    ->name(config('payment-gateways.routes.callback.name'));