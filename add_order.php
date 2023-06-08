<?php
session_start();
require_once './db.php';

$sql1 = "INSERT INTO repair_order_accessories (`accessories_id`, `count_accessories`, `materials_id`, `repair_order_id`, `count_materials`, `purchase_order_id`) VALUES ('{$id}', '{$_POST['accessories_count']}', '{$id}', '{$id}', '{$_POST['materials_count']}', '{$id}')";
$result1 = mysqli_query($connection, $sql1);

$sql2 = "INSERT INTO repair_order (`repaired_office_equipment`, `date_start`, `date_end`, `client_full_name`, `estimated_income`) VALUES ('{$_POST['repaired_office_equipment']}', '{$_POST['date_start']}', '{$_POST['date_end']}', '{$_POST['client_full_name']}', '{$_POST['estimated_income']}')";
$result2 = mysqli_query($connection, $sql2);

$sql3 = "INSERT INTO purchase_order (`client_full_name`, `delivery_date`, `purchase_price`) VALUES ('{$_POST['client_full_name']}', '{$_POST['delivery_date']}', '{$_POST['purchase_price']}')";
$result3 = mysqli_query($connection, $sql3);

$sql4 = "INSERT INTO accessories (`accessories_name`, `accessories_price`, `accessories_count`, `stock_id`) VALUES ('{$_POST['accessories_name']}', '{$_POST['accessories_price']}', '{$_POST['accessories_count']}', '{$_POST['stock_id']}')";
$result4 = mysqli_query($connection, $sql4);

$sql5 = "INSERT INTO materials (`materials_name`, `materials_price`, `materials_count`, `stock_id`) VALUES ('{$_POST['materials_name']}', '{$_POST['materials_price']}', '{$_POST['materials_count']}', '{$_POST['stock_id']}')";
$result5 = mysqli_query($connection, $sql5);






