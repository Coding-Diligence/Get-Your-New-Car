<?php
switch ($_SERVER['SERVER_NAME']) {
    case '127.0.0.1':
    case 'localhost':
        define('ENVIRONMENT', 'developpement');

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
/* $cars = [
    ['Subaru', 9000, 'blue', 3000, 'new', 'assets/voiture1.jpg'],
    ['Gtrr', 18000, 'white', 15000, 'used', 'assets/voiture2.jpg'],
    ['Dirt Car', 2500, 'blue', 17000, 'used','assets/voiture3.jpg'],
    ['Mitsubishi', 22000, 'grey', 148600, 'used','assets/voiture4.jpg'],
    ['Honda Type R 1998–2001', 29000, 'white', 1000, 'new','assets/voiture5.jpg'],
    ['Mitsubishi Evo', 1700, 'white', 0, 'new','assets/voiture6.jpg']
];

foreach ($cars as $car) {
    $name = $car[0];
    $price = $car[1];
    $color = $car[2];
    $kilometrage = $car[3];
    $state = $car[4];
    $img = $car[5];

    //SQL INSERT statement
    $sql = "INSERT INTO cars (name, price, color, kilometrage, state, image_path) VALUES ('$name', $price, '$color', '$kilometrage', '$state', '$img')";

    //Execute the SQL statement
    if ($bdLink->query($sql) === TRUE) {
        echo "New record created successfully";
    }
} */