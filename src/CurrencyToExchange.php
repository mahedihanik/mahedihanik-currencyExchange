<?php
namespace Mahedihanik\CurrencyExchange;

use Illuminate\Support\Facades\Http;

class CurrencyToExchange
{
    public function getExchangeRate($amount,$currencyCode): string
    {
        $responseXmlDataSet = Http::get('https://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml');
        $currencyAndRateDataset = [];
        foreach (simplexml_load_string($responseXmlDataSet)->Cube->Cube->Cube as $xmlData){
            $currencyAndRateDataset [(string)$xmlData['currency']] = (float)$xmlData['rate'];
        }
        $defaultCurrencyCode = 'EUR';
        (array_key_exists($currencyCode,$currencyAndRateDataset) == 1)
            ? $convertedRate = round($amount/$currencyAndRateDataset[$currencyCode],2)
            : $convertedRate = 0.00;
        return $amount.' '.$currencyCode.' '.'='.' '.$convertedRate.' '.$defaultCurrencyCode.' '.'[ '.'Exchange Rate = '.$currencyAndRateDataset[$currencyCode].' ]';
    }
}
