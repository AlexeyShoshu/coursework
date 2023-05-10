<?php
require_once './db.php';
$sql = "INSERT INTO repair_order (`date_start`, `date_end`, `client_full_name`) VALUES ('{$_POST['date_start']}', '{$_POST['date_end']}', '{$_POST['client_full_name']}')";
$result = mysqli_query($connection, $sql);
var_dump($result);

