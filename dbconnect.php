<?php 
    // define('DB_HOST', 'mysql://std-mysql.ist.mospolytech.ru:3306/std_2277_web_lab5');
    // define('DB_HOST', 'https://phpmyadmin.fit.mospolytech.ru/');
    // define('DB_USER', 'std_2277_web_lab5'); 
    // define('DB_PASSWORD', 'web_lab5'); 
    // define('DB_NAME', 'std_2277_web_lab5');
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root'); 
    define('DB_PASSWORD', ''); 
    define('DB_NAME', 'web_lab5');
    $mysql = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    if ($mysql->connect_error) {
        echo "Failed to connect to MySQL: " . $mysql->connect_error;
        exit();
    }
?>
