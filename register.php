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
    <!-- Feedback start-->
    <div class="feedback d-flex al-cntr jc-cntr">
        <div class="wrapper">
            <div class="feedback-wrap d-flex jc-cntr al-cntr">
                <div class="feedback-title d-flex jc-cntr">
                    Регистрация
                </div>

                <div class="feedback-form-wrap d-flex jc-cntr">
                    <form class="feedback-form d-flex jc-cntr al-cntr" id="form-reg" name="form-reg" autocomplete="off" data-action="/mail.php" enctype="multipart/form-data" method="post">
                        <div class="feedback-form-line d-flex jc-cntr al-cntr">
                            <label for="name">Логин:</label>
                            <input type="text" id="login-reg" name="login-reg" placeholder="Введите логин" data-name="ФИО:" required dataReg="^[а-яА-ЯёЁa-zA-Z0-9]{2,}" />
                        </div>
                        <div class="feedback-form-line d-flex jc-cntr al-cntr">
                            <label for="phone">Телефон:</label>
                            <input type="text" id="phone" name="phone" placeholder="Телефон" dataReg="[^a-zа-я]" data-name="Телефон:" required="">
                        </div>
                        <div class="feedback-form-line d-flex jc-cntr al-cntr">
                            <label for="mail">Почта:</label>
                            <input type="text" id="mail" name="mail" placeholder="Почта" data-name="Почта:" dataReg="^(([a-zа-я0-9_-]+\.)*[a-zа-я0-9_-]+@[a-zа-я0-9-]+(\.[a-zа-я0-9-]+)*\.[a-zа-я]{2,6})+$" required="">
                        </div>
                        <div class="feedback-form-line d-flex jc-cntr al-cntr">
                            <label for="password">Пароль:</label>
                            <input type="password" id="password-reg" name="password-reg" dataReg="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$" placeholder="Введите пароль – минимум 6 символов, буквы И цифры" required="">
                        </div>
                        <div class="feedback-form-line d-flex jc-cntr al-cntr">
                            <label for="password">Подтвердите пароль:</label>
                            <input type="password" id="check-password-reg" name="check-password-reg" dataReg="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$" placeholder="Повторите пароль" required="">
                        </div>
                        <div class="feedback-form-line d-flex jc-cntr al-cntr">
                            <div class="feedback-button d-flex al-cntr jc-cntr" id="feedback-button-reg" name="feedback-button-reg">
                                Сохранить
                            </div>
                        </div>
                        <div class="feedback-form-line d-flex jc-cntr al-cntr">
                            Уже зарегестрированы?<a href="index.php" class="to-auth-href">Авторизуйтесь!</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Feedback end -->
    </div>

    <script src="/js/jquery-3.6.3.js"></script>
    <script src="/js/jquery.maskedinput.js"></script>
    <script src="/js/sweetalert2.js"></script>
    <script src="/js/validation-reg.js"></script>
</body>

</html>