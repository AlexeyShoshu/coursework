<?php
require_once './db.php';
$sql = "INSERT INTO purchase_order (`client_full_name`, `delivery_date`, `purchase_price`) VALUES ('{$_POST['client_full_name']}', '{$_POST['delivery_date']}', '{$_POST['purchase_price']}')";
$result = mysqli_query($connection, $sql);
var_dump($result);

