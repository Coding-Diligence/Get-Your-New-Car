<?php
switch ($_SERVER['SERVER_NAME']) {
    case '127.0.0.1':
    case 'localhost':
        define('ENVIRONMENT', 'development');

        $paramsServer = array(
            'server'    => "localhost",
            'database'  => "car_management",
            'username'  => "root",
            'password'  => "",
            'port' => 3306,
        );

        define('PREFIX', '');
        define('DNS', 'https://car.test/' . PREFIX);
        define('HOME', $_SERVER['CONTEXT_DOCUMENT_ROOT']);

        define('PATH_FILES', "files/");

        break;

    case 'localhost': 
        define('ENVIRONMENT', 'mac_development');

        $paramsServer = array(
            'server'    => "localhost",
            'database'  => "car_management", 
            'username'  => "root",
            'password'  => "root",
            'port' => 3306,
        );

        define('PREFIX', '');
        define('DNS', 'https://car.test/' . PREFIX); 
        define('HOME', $_SERVER['CONTEXT_DOCUMENT_ROOT']);

        define('PATH_FILES', "files/");

        break;

    default:
        define('ENVIRONMENT', 'production');

        $paramsServer = array(
            'server' => "mysql.db",
            'database' => "car_management",
            'username' => "",
            'password' => "",
            'port' => 3306
        );

        define('PREFIX', '');
        define('DNS', 'https://www.portfolio.fr/' . PREFIX);
        define('HOME', $_SERVER['DOCUMENT_ROOT']);

        define('PATH_FILES', "files/");
        exit;
}

session_start();
try {
    $bdLink = new PDO('mysql:host=' . $paramsServer['server'] . ';port=' . $paramsServer['port'] . ';dbname=' . $paramsServer['database'] . ';charset=utf8', $paramsServer['username'], $paramsServer['password']);
    $bdLink->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $bdLink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $_SESSION['db'] = 'Database Connected';
} catch (PDOException $e) {
    $_SESSION['db'] = 'Error!';
    die();
}
