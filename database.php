<?php
switch (true) {
    case $_SERVER['SERVER_NAME'] === '127.0.0.1':
    case $_SERVER['SERVER_NAME'] === 'localhost':
        define('ENVIRONMENT', 'development');

        // Set parameters for local development environment
        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
            // Windows environment
            $paramsServer = array(
                'server'    => "localhost",
                'database'  => "car_management",
                'username'  => "root",
                'password'  => "",
                'port' => 3306,
            );

            define('DNS', 'https://car.test/');
            define('HOME', $_SERVER['CONTEXT_DOCUMENT_ROOT']);
        } elseif (strtoupper(substr(PHP_OS, 0, 3)) === 'MAC') {
            // Mac environment
            $paramsServer = array(
                'server'    => "localhost",
                'database'  => "car_management_mac",
                'username'  => "root",
                'password'  => "root",
                'port' => 3306,
            );

            define('DNS', 'https://car.test/');
            define('HOME', $_SERVER['CONTEXT_DOCUMENT_ROOT']);
        }

        define('PREFIX', '');
        define('PATH_FILES', "files/");

        break;

    default:
        define('ENVIRONMENT', 'production');

        // Set parameters for production environment
        $paramsServer = array(
            'server' => "mysql.db",
            'database' => "car_management",
            'username' => "",
            'password' => "",
            'port' => 3306
        );

        define('PREFIX', '');
        define('DNS', 'https://www.portfolio.fr/');
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
