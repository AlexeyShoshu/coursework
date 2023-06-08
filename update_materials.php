<?php

require_once './db.php';
$test = "SELECT id FROM materials ORDER BY id DESC LIMIT 1";
$resultTest = mysqli_query($connection, $test);
$row = mysqli_fetch_array($resultTest);
$id = (int) $row['id'];
$sql2 = "UPDATE materials SET `materials_name` = '{$_POST['materials_name']}', `materials_price` = '{$_POST['materials_price']}', `materials_count` = '{$_POST['materials_count']}', `stock_id` = '{$_POST['stock_id']}' WHERE id = {$id}";
$result2 = mysqli_query($connection, $sql2);