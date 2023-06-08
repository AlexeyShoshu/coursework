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
                    Обновить заказ на доставку
                </div>

                <div class="feedback-form-wrap d-flex jc-cntr">
                    <form class="feedback-form d-flex jc-cntr al-cntr" id="form-add" name="form-add" autocomplete="off" method="POST" data-action="/update_purchase_order.php">
                        <div class="feedback-form-line d-flex jc-cntr al-cntr">
                            <label for="full-name">ФИО клиента</label>
                            <input type="full-name" id="client_full_name" name="client_full_name" placeholder="Введите ФИО" dataReg="^[а-яА-ЯёЁ\s.]+$" required>
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