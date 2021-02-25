# binance
balance

[![Latest Version](https://img.shields.io/github/release/jaggedsoft/php-binance-api.svg?style=flat-square)](https://github.com/jaggedsoft/php-binance-api/releases) 
[![GitHub last commit](https://img.shields.io/github/last-commit/jaggedsoft/php-binance-api.svg?style=flat-square)](#) 
[![HitCount](http://hits.dwyl.io/jaggedsoft/php-binance-api.svg)](http://hits.dwyl.io/jaggedsoft/php-binance-api) 
[![Packagist Downloads](https://img.shields.io/packagist/dt/jaggedsoft/php-binance-api.svg?style=flat-square)](https://packagist.org/packages/jaggedsoft/php-binance-api) 


[![Build Status](https://travis-ci.org/jaggedsoft/php-binance-api.svg?branch=master&style=flat-square)](https://travis-ci.org/jaggedsoft/php-binance-api) 
[![Coverage Status](https://coveralls.io/repos/github/jaggedsoft/php-binance-api/badge.svg?branch=master&style=flat-square)](https://coveralls.io/github/jaggedsoft/php-binance-api) 
[![CodeCov](https://codecov.io/gh/jaggedsoft/php-binance-api/branch/master/graph/badge.svg?style=flat-square)](https://codecov.io/github/jaggedsoft/php-binance-api/) 
[![Codacy Badge](https://api.codacy.com/project/badge/Coverage/683459a5a71c4875956cf23078a0c39b)](https://www.codacy.com/app/dmzoneill/php-binance-api?utm_source=github.com&utm_medium=referral&utm_content=jaggedsoft/php-binance-api&utm_campaign=Badge_Coverage)
[![Code consistency](https://squizlabs.github.io/PHP_CodeSniffer/analysis/jaggedsoft/php-binance-api/grade.svg?style=flat-square)](https://squizlabs.github.io/PHP_CodeSniffer/analysis/jaggedsoft/php-binance-api)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/683459a5a71c4875956cf23078a0c39b)](https://www.codacy.com/app/dmzoneill/php-binance-api?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=jaggedsoft/php-binance-api&amp;utm_campaign=Badge_Grade)

# PHP Binance API
This project is designed to help you make your own projects that interact with the [Binance API](https://github.com/binance-exchange/binance-official-api-docs). You can stream candlestick chart data, market depth, or use other advanced features such as setting stop losses and iceberg orders. This project seeks to have complete API coverage including WebSockets.

#### Installation
```
composer require "jaggedsoft/php-binance-api @dev"
```
<details>
 <summary>Click for help with installation</summary>

## Install Composer
If the above step didn't work, install composer and try again.
#### Debian / Ubuntu
```
sudo apt-get install curl
curl -s http://getcomposer.org/installer | php
php composer.phar install
```
Composer not found? Use this command instead:
```
php composer.phar require "jaggedsoft/php-binance-api @dev"
```

#### Windows:
[Download installer for Windows](https://github.com/jaggedsoft/php-binance-api/#installing-on-windows)

</details>


# bitfinex-api-php
Bitfinex PHP API - Access all features of https://www.bitfinex.com trading platform

Get API keys from https://www.bitfinex.com/account/api

## Usage Example
    <?php
    include_once('Bitfinex.php');
    
    $api_key = 'xxxxxxxxxx';
    $api_secret = 'yyyyyyyyyy';
    $bfx = new Bitfinex($api_key, $api_secret);
    
    var_dump($bfx->get_symbols());
    ?>

## Support me
Bitcoin donations are welcome at [1x1UnfVJu7cprs3E2jjQ9WRcdDi5KJxAU](https://blockchain.info/address/1x1UnfVJu7cprs3E2jjQ9WRcdDi5KJxAU). Thank you!
