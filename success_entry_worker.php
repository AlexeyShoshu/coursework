<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
    <title>КП_ШОШУ_112601</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/fonts.css">
    <link rel="stylesheet" href="./css/media.css">
</head>

<?php
require_once './db.php';
?>

<?
$query_repair_order = "SELECT * FROM repair_order";
$result_repair_order = mysqli_query($connection, $query_repair_order);
?>

<div class="access-level d-flex jc-cntr cb mb-25">Уровень доступа: работник</div>

<div class="item-wrap item-wrap-worker">
    <div class="item-table-name d-flex jc-cntr">
        Заказы на починку
    </div>

    <div class="item-block d-flex jc-sb">
        <div class="item item-main d-flex">ID</div>
        <div class="item d-flex">Дата начала</div>
        <div class="item d-flex">Дата окончания</div>
        <div class="item d-flex">ФИО клиента</div>
    </div>

    <? while ($rows_repair_order = mysqli_fetch_assoc($result_repair_order)) { ?>
        <div class="item-block d-flex jc-sb">
            <div class="item item-main d-flex"><? echo $rows_repair_order['id'] ?></div>
            <div class="item d-flex"><? echo $rows_repair_order['date_start'] ?></div>
            <div class="item d-flex"><? echo $rows_repair_order['date_end'] ?></div>
            <div class="item d-flex"><? echo $rows_repair_order['client_full_name'] ?></div>
        </div>
    <? } ?>

    <a class="button-add d-flex jc-cntr al-cntr" href="add_repair_order_form.php">
        Добавить заказ
    </a>
</div>

<?
$query_purchase_order = "SELECT * FROM purchase_order";
$result_purchase_order = mysqli_query($connection, $query_purchase_order);
?>

<div class="item-wrap item-wrap-worker">
    <div class="item-table-name d-flex jc-cntr">
        Заказы на доставку
    </div>

    <div class="item-block d-flex jc-sb">
        <div class="item item-main d-flex">ID</div>
        <div class="item d-flex">ФИО клиента</div>
        <div class="item d-flex">Дата доставки</div>
        <div class="item d-flex">Стоимость доставки</div>
    </div>

    <? while ($rows_purchase_order = mysqli_fetch_assoc($result_purchase_order)) { ?>
        <div class="item-block d-flex jc-sb">
            <div class="item item-main d-flex"><? echo $rows_purchase_order['id'] ?></div>
            <div class="item d-flex"><? echo $rows_purchase_order['client_full_name'] ?></div>
            <div class="item d-flex"><? echo $rows_purchase_order['delivery_date'] ?></div>
            <div class="item d-flex"><? echo $rows_purchase_order['purchase_price'] ?></div>
        </div>
    <? } ?>

    <a class="button-add d-flex jc-cntr al-cntr">
        Добавить заказ
    </a>
</div>

<?
$query_repair_order_accessories = "SELECT * FROM repair_order_accessories";
$result_repair_order_accessories = mysqli_query($connection, $query_repair_order_accessories);
?>

<div class="item-wrap item-wrap-worker">
    <div class="item-table-name d-flex jc-cntr">
        Комплектующие для починки
    </div>

    <div class="item-block d-flex jc-sb">
        <div class="item-roa item-main d-flex">ID</div>
        <div class="item-roa d-flex">ID комплектующего</div>
        <div class="item-roa d-flex">Кол-во комплектующих</div>
        <div class="item-roa item-main d-flex">ID материала</div>
        <div class="item-roa d-flex">ID заказа на починку</div>
        <div class="item-roa d-flex">Кол-во материала</div>
        <div class="item-roa d-flex">ID заказа на доставку</div>
    </div>

    <? while ($rows_repair_order_accessories = mysqli_fetch_assoc($result_repair_order_accessories)) { ?>
        <div class="item-block d-flex jc-sb">
            <div class="item-roa item-main d-flex"><? echo $rows_repair_order_accessories['id'] ?></div>
            <div class="item-roa d-flex"><? echo $rows_repair_order_accessories['accessories_id'] ?></div>
            <div class="item-roa d-flex"><? echo $rows_repair_order_accessories['count_accessories'] ?></div>
            <div class="item-roa d-flex"><? echo $rows_repair_order_accessories['materials_id'] ?></div>
            <div class="item-roa d-flex"><? echo $rows_repair_order_accessories['repair_order_id'] ?></div>
            <div class="item-roa d-flex"><? echo $rows_repair_order_accessories['count_materials'] ?></div>
            <div class="item-roa d-flex"><? echo $rows_repair_order_accessories['purchase_order_id'] ?></div>
        </div>
    <? } ?>

    <a class="button-add d-flex jc-cntr al-cntr">
        Добавить комплектующие
    </a>
</div>

<a class="button-print feedback-button d-flex jc-cntr al-cntr mb-25" onclick="window.print()">Вывод на печать</a>
<a class="button-print feedback-button d-flex jc-cntr al-cntr" href="/">Выход из системы</a>