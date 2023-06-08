<?php

require_once './db.php';
$test = "SELECT id FROM accessories ORDER BY id DESC LIMIT 1";
$resultTest = mysqli_query($connection, $test);
$row = mysqli_fetch_array($resultTest);
$id = (int) $row['id'];
$sql2 = "UPDATE accessories SET `accessories_name` = '{$_POST['accessories_name']}', `accessories_price` = '{$_POST['accessories_price']}', `accessories_count` = '{$_POST['accessories_count']}', `stock_id` = '{$_POST['stock_id']}' WHERE id = {$id}";
$result2 = mysqli_query($connection, $sql2);