

# Currency Exchange API - Laravel 9 
## Installation with Composer

### Step 1 ( Add below code in composer.json at your project root directory ):
```bash
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/mahedihanik/mahedihanik-currencyExchange"
        }
    ],
```
### Step 2 ( Run below command in your laravel project root ):
```bash
composer require mahedihanik/currency-exchange
```
### Step 3 ( Add below line at config/app.php in providers array ):
```bash
Mahedihanik\CurrencyExchange\ServiceProviders\CurrencyExchangeProvider::class
```
### Step 4 ( For currency conversion type below link in your address bar and enter ):
```bash
http://domain/exchange/amount/currency_code || Example : http://127.0.0.1:8000/exchange/58/USD
```






