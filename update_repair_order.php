<?php

require_once './db.php';
$test = "SELECT id FROM repair_order ORDER BY id DESC LIMIT 1";
$resultTest = mysqli_query($connection, $test);
$row = mysqli_fetch_array($resultTest);
$id = (int) $row['id'];
$sql2 = "UPDATE repair_order SET `repaired_office_equipment` = '{$_POST['repaired_office_equipment']}', `date_start` = '{$_POST['date_start']}', `date_end` = '{$_POST['date_end']}', `client_full_name` = '{$_POST['client_full_name']}', `estimated_income` = '{$_POST['estimated_income']}'  WHERE id = {$id}";
$result2 = mysqli_query($connection, $sql2);




