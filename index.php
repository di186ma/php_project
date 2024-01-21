<?php

use Dotenv\Dotenv;
use Framework\Container;
use Framework\DbConnection;

if ( file_exists(dirname(__FILE__).'/vendor/autoload.php') ) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}
echo $_GET['path'];
    if (file_exists(".env"))
    {
        $dotenv = Dotenv::createImmutable(__DIR__);
        $dotenv->load(); //все параметры окружения помещаются в массив $_ENV
        echo "<br>Окружение загружено<p>";
        // var_dump($_ENV);
    }
    else {
        echo "Ошибка загрузки ENV<br>";
    }

//exit();
//// Получаем значения GET-параметров
//$param1 = $_GET['param1'];
//$param2 = $_GET['param2'];

// Получаем URL-запроса
//$url = $_SERVER['REQUEST_URI'];
//?param1=value1&param2=value2

// Выводим значения GET-параметров и URL-запроса
//echo "Параметр 1: " . $param1 . "<br>";
//echo "Параметр 2: " . $param2 . "<br>";
//echo "URL запрос: " . $url;

    Container::getApp()->run();


    die();