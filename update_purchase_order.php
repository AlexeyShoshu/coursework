<?php

require_once './db.php';
$test = "SELECT id FROM purchase_order ORDER BY id DESC LIMIT 1";
$resultTest = mysqli_query($connection, $test);
$row = mysqli_fetch_array($resultTest);
$id = (int) $row['id'];
$sql2 = "UPDATE purchase_order SET `delivery_date` = '{$_POST['delivery_date']}', `purchase_price` = '{$_POST['purchase_price']}', `client_full_name` = '{$_POST['client_full_name']}' WHERE id = {$id}";
$result2 = mysqli_query($connection, $sql2);




