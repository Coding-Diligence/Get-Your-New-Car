<?php
$system_info = php_uname();

if (strpos($system_info, 'Windows') !== false) {
    define('ENVIRONMENT', 'development');

    $paramsServer = array(
        'server'    => "localhost",
        'database'  => "car_management",
        'username'  => "root",
        'password'  => "",
        'port' => 3306,
    );

    define('DNS', 'https://car.test/');
    define('HOME', $_SERVER['CONTEXT_DOCUMENT_ROOT']);
} elseif (strpos($system_info, 'Darwin') !== false) {
    define('ENVIRONMENT', 'mac_development');

    $paramsServer = array(
        'server'    => "localhost",
        'database'  => "car_management_mac",
        'username'  => "root",
        'password'  => "",
        'port' => 3306,
    );

    define('DNS', 'https://car.test/');
    define('HOME', $_SERVER['CONTEXT_DOCUMENT_ROOT']);
} else {
    define('ENVIRONMENT', 'production');

    $paramsServer = array(
        'server' => "mysql.db",
        'database' => "car_management",
        'username' => "",
        'password' => "",
        'port' => 3306
    );

    define('DNS', 'https://www.car.fr/');
    define('HOME', $_SERVER['DOCUMENT_ROOT']);
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
