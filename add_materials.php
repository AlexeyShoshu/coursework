<?php
require_once './db.php';
$sql = "INSERT INTO materials (`name`, `price`, `count`, `stock_id`) VALUES ('{$_POST['name']}', '{$_POST['price']}', '{$_POST['count']}', '{$_POST['stock_id']}')";
$result = mysqli_query($connection, $sql);
var_dump($result);


