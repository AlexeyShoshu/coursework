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
                    Вход в систему
                </div>

                <div class="feedback-form-wrap d-flex jc-cntr">
                    <form class="feedback-form d-flex jc-cntr al-cntr" id="form-auth" name="form-auth" autocomplete="off"
                        data-action="/mail.php" enctype="multipart/form-data" method="post">
                        <div class="feedback-form-line d-flex jc-cntr al-cntr">
                            <label for="name">Логин:</label>
                            <input type="text" id="login-auth" name="login-auth" placeholder="Введите логин" data-name="Логин: " required
                                data-reg="^a-zA-Zа-яА-Я{2,}$" />
                        </div>
                        <div class="feedback-form-line d-flex jc-cntr al-cntr">
                            <label for="password">Пароль:</label>
                            <input type="password" id="password" name="password" placeholder="Введите пароль" required="">
                        </div>
                        <div class="feedback-form-line d-flex jc-cntr al-cntr">
                            <div class="feedback-button d-flex al-cntr jc-cntr" id="feedback-button-auth"
                                name="feedback-button-auth">
                                Войти
                            </div>
                        </div>
                        <div class="feedback-form-line d-flex jc-cntr al-cntr">
                            У вас нет аккаунта?<a href="register.php" class="to-reg-href">Зарегестрируйтесь!</a>
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
    <script src="/js/validation-auth.js" type="module"></script>
</body>

</html>