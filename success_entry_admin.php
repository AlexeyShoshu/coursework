<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
    <title>КП_ШОШУ_112601</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/fonts.css">
    <link rel="stylesheet" href="./css/media.css">
</head>

<body>

    <?php
    require_once './db.php';
    ?>

    <?
    $query_repair_order = "SELECT * FROM repair_order";
    $result_repair_order = mysqli_query($connection, $query_repair_order);
    ?>

    <div class="access-level d-flex jc-cntr cb mb-25">Уровень доступа: администратор</div>

    <div class="item-wrap">
        <div class="item-table-name d-flex jc-cntr">
            Заказы на починку
        </div>

        <div class="item-block d-flex jc-sb">
            <div class="item-repair item-main d-flex">ID</div>
            <div class="item-repair d-flex">Ремонтируемая оргтехника</div>
            <div class="item-repair d-flex">Дата начала</div>
            <div class="item-repair d-flex">Дата окончания</div>
            <div class="item-repair d-flex">ФИО клиента</div>
            <div class="item-repair d-flex">Предполагаемый доход</div>
            <div class="item-repair d-flex"></div>
        </div>

        <? while ($rows_repair_order = mysqli_fetch_assoc($result_repair_order)) { ?>
            <div class="item-block d-flex jc-sb">
                <div class="item-repair item-main d-flex"><? echo $rows_repair_order['id'] ?></div>
                <div class="item-repair d-flex"><? echo $rows_repair_order['repaired_office_equipment'] ?></div>
                <div class="item-repair d-flex"><? echo $rows_repair_order['date_start'] ?></div>
                <div class="item-repair d-flex"><? echo $rows_repair_order['date_end'] ?></div>
                <div class="item-repair d-flex"><? echo $rows_repair_order['client_full_name'] ?></div>
                <div class="item-repair d-flex"><? echo $rows_repair_order['estimated_income'] ?></div>
                <a href='update_repair_order_form.php' class="item-repair button-add jc-cntr al-cntr d-flex">Обновить</a>
            </div>
        <? } ?>
    </div>

    <?
    $query_purchase_order = "SELECT * FROM purchase_order";
    $result_purchase_order = mysqli_query($connection, $query_purchase_order);
    ?>

    <div class="item-wrap">
        <div class="item-table-name d-flex jc-cntr">
            Заказы на доставку
        </div>

        <div class="item-block d-flex jc-sb">
            <div class="item item-main d-flex">ID</div>
            <div class="item d-flex">ФИО клиента</div>
            <div class="item d-flex">Дата доставки</div>
            <div class="item d-flex">Стоимость доставки</div>
            <div class="item d-flex"></div>
        </div>

        <? while ($rows_purchase_order = mysqli_fetch_assoc($result_purchase_order)) { ?>
            <div class="item-block d-flex jc-sb">
                <div class="item item-main d-flex"><? echo $rows_purchase_order['id'] ?></div>
                <div class="item d-flex"><? echo $rows_purchase_order['client_full_name'] ?></div>
                <div class="item d-flex"><? echo $rows_purchase_order['delivery_date'] ?></div>
                <div class="item d-flex"><? echo $rows_purchase_order['purchase_price'] ?></div>
                <a href='update_purchase_order_form.php' class="item button-add jc-cntr al-cntr d-flex">Обновить</a>
            </div>
        <? } ?>
    </div>

    <?
    $query_accessories = "SELECT * FROM accessories";
    $result_accessories = mysqli_query($connection, $query_accessories);
    ?>

    <div class="item-wrap">
        <div class="item-table-name d-flex jc-cntr">
            Комплектующие
        </div>

        <div class="item-block d-flex jc-sb">
            <div class="item-acc item-main d-flex">ID</div>
            <div class="item-acc d-flex">Название</div>
            <div class="item-acc d-flex">Стоимость</div>
            <div class="item-acc d-flex">Количество</div>
            <div class="item-acc d-flex">ID склада</div>
            <div class="item-acc d-flex"></div>
        </div>

        <? while ($rows_accessories = mysqli_fetch_assoc($result_accessories)) { ?>
            <div class="item-block d-flex jc-sb">
                <div class="item-acc item-main d-flex"><? echo $rows_accessories['id'] ?></div>
                <div class="item-acc d-flex"><? echo $rows_accessories['accessories_name'] ?></div>
                <div class="item-acc d-flex"><? echo $rows_accessories['accessories_price'] ?></div>
                <div class="item-acc d-flex"><? echo $rows_accessories['accessories_count'] ?></div>
                <div class="item-acc d-flex"><? echo $rows_accessories['stock_id'] ?></div>
                <a href='update_accessories_form.php' class="item-acc button-add jc-cntr al-cntr d-flex">Обновить</a>
            </div>
        <? } ?>
    </div>

    <?
    $query_materials = "SELECT * FROM materials";
    $result_materials = mysqli_query($connection, $query_materials);
    ?>

    <div class="item-wrap">
        <div class="item-table-name d-flex jc-cntr">
            Материалы
        </div>

        <div class="item-block d-flex jc-sb">
            <div class="item-acc item-main d-flex">ID</div>
            <div class="item-acc d-flex">Название</div>
            <div class="item-acc d-flex">Стоимость</div>
            <div class="item-acc d-flex">Количество</div>
            <div class="item-acc d-flex">ID склада</div>
            <div class="item-acc d-flex"></div>
        </div>

        <? while ($rows_materials = mysqli_fetch_assoc($result_materials)) { ?>
            <div class="item-block d-flex jc-sb">
                <div class="item-acc item-main d-flex"><? echo $rows_materials['id'] ?></div>
                <div class="item-acc d-flex"><? echo $rows_materials['materials_name'] ?></div>
                <div class="item-acc d-flex"><? echo $rows_materials['materials_price'] ?></div>
                <div class="item-acc d-flex"><? echo $rows_materials['materials_count'] ?></div>
                <div class="item-acc d-flex"><? echo $rows_materials['stock_id'] ?></div>
                <a href='update_materials_form.php' class="item-acc button-add jc-cntr al-cntr d-flex">Обновить</a>
            </div>
        <? } ?>
    </div>

    <?
    $query_stock = "SELECT * FROM stock";
    $result_stock = mysqli_query($connection, $query_stock);
    ?>

    <div class="item-wrap">
        <div class="item-table-name d-flex jc-cntr">
            Склады
        </div>

        <div class="item-block d-flex jc-sb">
            <div class="item-stock item-main d-flex">ID</div>
            <div class="item-stock d-flex">Адрес склада</div>
            <div class="item-stock d-flex">Объем склада</div>
        </div>

        <? while ($rows_stock = mysqli_fetch_assoc($result_stock)) { ?>
            <div class="item-block d-flex jc-sb">
                <div class="item-stock item-main d-flex"><? echo $rows_stock['id'] ?></div>
                <div class="item-stock d-flex"><? echo $rows_stock['stock_address'] ?></div>
                <div class="item-stock d-flex"><? echo $rows_stock['stock_valume'] ?></div>
            </div>
        <? } ?>
    </div>

    <?
    $query_repair_order_accessories = "SELECT * FROM repair_order_accessories";
    $result_repair_order_accessories = mysqli_query($connection, $query_repair_order_accessories);
    ?>

    <div class="item-wrap">
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
    </div>

    <div class="button-print-wrap d-flex">
        <a class="button-print feedback-button d-flex jc-cntr al-cntr mb-25" href="add_order_form.php">Добавить заказ</a>
        <a class="button-print feedback-button d-flex jc-cntr al-cntr mb-25" onclick="window.print()">Вывод на печать</a>
        <a class="button-print feedback-button d-flex jc-cntr al-cntr" href="/">Выход из системы</a>
    </div>

</body>