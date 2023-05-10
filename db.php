<?php

$host = 'localhost';
$port = 3306; 
$user = 'root';
$password = 'root';
$db_name = 'mydb'; 

$connection = mysqli_connect($host, $user, $password, $db_name, $port);

if (!$connection) {
    die("Ошибка подключения: " . mysqli_connect_error());
}
?>