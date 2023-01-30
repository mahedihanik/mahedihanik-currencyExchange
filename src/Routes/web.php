<?php

use Illuminate\Support\Facades\Route;

Route::get('/exchange/{amount}/{code}', \Mahedihanik\CurrencyExchange\Controllers\CurrencyExchangeController::class);
