<?php

namespace Mahedihanik\CurrencyExchange\Controllers;


use Illuminate\Http\Request;
use Mahedihanik\CurrencyExchange\CurrencyToExchange;

class CurrencyExchangeController
{
    public function __invoke(Request $request): string
    {
        $result = (new CurrencyToExchange)->getExchangeRate($request->amount,$request->code);
        return view('mahedihanik::index', compact('result'));
    }
}
