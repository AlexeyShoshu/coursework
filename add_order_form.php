<!DOCTYPE html>
<html lang="ru">

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
    <div class="feedback-add d-flex al-cntr jc-cntr">
        <div class="wrapper">
            <div class="feedback-wrap d-flex jc-cntr al-cntr">
                <div class="feedback-title d-flex jc-cntr">
                    Добавить заказ
                </div>

                <div class="feedback-form-wrap d-flex jc-cntr">
                    <form class="feedback-form d-flex jc-cntr al-cntr" id="form-add" name="form-add" autocomplete="off" method="POST" data-action="/add_order.php">
                        <div class="feedback-form-line d-flex jc-cntr al-cntr">
                            <label for="repaired_office_equipment">Ремонтируемая оргтехника</label>
                            <input type="text" id="repaired_office_equipment" name="repaired_office_equipment" placeholder="Введите ремонтируемую оргтехнику" dataReg="^[а-яА-Я\s]+$" required>
                        </div>
                        <div class="feedback-form-line d-flex jc-cntr al-cntr">
                            <label for="full-name">ФИО клиента</label>
                            <input type="full-name" id="client_full_name" name="client_full_name" placeholder="Введите ФИО" dataReg="^[а-яА-ЯёЁ\s.]+$" required>
                        </div>
                        <div class="feedback-form-line d-flex jc-cntr al-cntr">
                            <label for="name">Дата начала:</label>
                            <input type="date" min="2023-06-02" max="2023-06-02" id="date_start" name="date_start" dataReg="^[0-9-]+$" required />
                        </div>
                        <div class="feedback-form-line d-flex jc-cntr al-cntr">
                            <label for="password">Дата окончания:</label>
                            <input type="date" min="2023-06-03" max="2023-06-14" id="date_end" name="date_end" dataReg="^[0-9-]+$" required />
                        </div>
                        <div class="feedback-form-line d-flex jc-cntr al-cntr">
                            <label for="accessories_name">Название комплектующего:</label>
                            <input type="text" id="accessories_name" name="accessories_name" placeholder="Введите название" dataReg="^[а-яА-ЯёЁ\s]+$" required>
                        </div>
                        <div class="feedback-form-line d-flex jc-cntr al-cntr">
                            <label for="accessories_price">Стоимость комплектующего:</label>
                            <input type="text" id="accessories_price" placeholder="Введите стоимость" name="accessories_price" dataReg="^[0-9]+$" required />
                        </div>
                        <div class="feedback-form-line d-flex jc-cntr al-cntr">
                            <label for="accessories_count">Количество комплектующих:</label>
                            <input type="text" id="accessories_count" placeholder="Введите количество" name="accessories_count" dataReg="^[0-9]+$" required />
                        </div>
                        <div class="feedback-form-line d-flex jc-cntr al-cntr">
                            <label for="materials_name">Название материала:</label>
                            <input type="text" id="materials_name" name="materials_name" placeholder="Введите название" dataReg="^[а-яА-ЯёЁ\s]+$" required>
                        </div>
                        <div class="feedback-form-line d-flex jc-cntr al-cntr">
                            <label for="materials_price">Стоимость материала:</label>
                            <input type="text" id="materials_price" placeholder="Введите стоимость" name="materials_price" dataReg="^[0-9]+$" required />
                        </div>
                        <div class="feedback-form-line d-flex jc-cntr al-cntr">
                            <label for="materials_count">Количество материалов:</label>
                            <input type="text" id="materials_count" placeholder="Введите количество" name="materials_count" dataReg="^[0-9]+$" required />
                        </div>
                        <div class="feedback-form-line d-flex jc-cntr al-cntr">
                            <label for="stock_id">Выберите ID склада (1/2):</label>
                            <input type="text" id="stock_id" placeholder="Введите стоимость" name="stock_id" dataReg="^(1|2)$" required />
                        </div>
                        <div class="feedback-form-line d-flex jc-cntr al-cntr">
                            <label for="delivery_date">Дата доставки:</label>
                            <input type="date" min="2023-06-15" max="2023-06-30" id="delivery_date" name="delivery_date" dataReg="^[0-9-]+$" required />
                        </div>
                        <div class="feedback-form-line d-flex jc-cntr al-cntr">
                            <label for="purchase_price">Стоимость доставки:</label>
                            <input type="text" id="purchase_price" placeholder="Введите стоимость" name="purchase_price" dataReg="^[0-9]+$" required />
                        </div>
                        <div class="feedback-form-line d-flex jc-cntr al-cntr">
                            <label for="estimated_income">Предполагаемый доход:</label>
                            <input type="text" min="2023-05-10" id="estimated_income" placeholder="Введите доход" name="estimated_income" dataReg="^[0-9]+$" required />
                        </div>
                        <div class="feedback-form-line d-flex jc-cntr al-cntr">
                            <a class="feedback-button d-flex al-cntr jc-cntr" id="feedback-button-add" name="feedback-button-add">
                                Добавить
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/jquery-3.6.3.js"></script>
    <script src="/js/sweetalert2.js"></script>
    <script src="/js/validation-add.js"></script>
</body>

</html>