<?
// отображение сообщений об ошибках
ini_set('display_errors', 1);

// подключаем другие файлы
//require 'bootstrap.php';

// подключаем файл ядра
require 'application/app.php';
require 'vendor/autoload.php';

$_POST['inc'] = 'binance'; // binance | bitfinex // подключение шаблона

new Table($_POST['inc']);
