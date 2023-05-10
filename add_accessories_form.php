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
                    Добавить комплектующие
                </div>

                <div class="feedback-form-wrap d-flex jc-cntr">
                    <form class="feedback-form d-flex jc-cntr al-cntr" id="form-add" name="form-add" autocomplete="off" method="POST" data-action="/add_accessories.php">
                        <div class="feedback-form-line d-flex jc-cntr al-cntr">
                            <label for="full-name">Название</label>
                            <input type="full-name" id="name" name="name" placeholder="Введите название" dataReg="^[а-яА-ЯёЁ\s]+$" required>
                        </div>
                        <div class="feedback-form-line d-flex jc-cntr al-cntr">
                            <label for="password">Стоимость:</label>
                            <input type="text" id="price" placeholder="Введите стоимость" name="price" dataReg="^[0-9]+$" required />
                        </div>
                        <div class="feedback-form-line d-flex jc-cntr al-cntr">
                            <label for="password">Количество:</label>
                            <input type="text" id="count" placeholder="Введите количество" name="count" dataReg="^[0-9]+$" required />
                        </div>
                        <div class="feedback-form-line d-flex jc-cntr al-cntr">
                            <label for="password">Выберите ID склада (1/2)</label>
                            <input type="text" id="stock_id" placeholder="Введите стоимость" name="stock_id" dataReg="^(1|2)$" required />
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