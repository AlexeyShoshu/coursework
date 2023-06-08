window.onload = function () {

    $(".to-reg-href").on("click", function () {
        $('.feedback-reg').toggle('.d-none');
        $('.feedback-auth').toggle('.d-none');
    });

    $(".to-auth-href").on("click", function () {
        $('.feedback-reg').toggle('.d-none');
        $('.feedback-auth').toggle('.d-none');
    });

    let users = ['admin'],
        usersPasswords = ['qwe123'];

    $("#phone").mask("+375(99) 999-99-99");

    let formReg = document.getElementById('form-reg'),
        buttonReg = document.getElementById('feedback-button-reg');

    buttonReg.onclick = function (el) {
        let error = 0;
        Array.from(formReg.elements).forEach((el) => {
            let regex = new RegExp(el.getAttribute("dataReg"));
            if (regex.test(el.value) === false || el.value == '') {
                error++;
                el.classList.add('error');
            } else {
                el.classList.remove('error');
            }
        })

        let passwordReg = document.getElementById('password-reg'),
            checkPasswordReg = document.getElementById('check-password-reg'),
            regexPasswordReg = new RegExp(passwordReg.getAttribute("dataReg"));

        if (passwordReg.value !== checkPasswordReg.value || regexPasswordReg.test(passwordReg.value) === false) {
            error++;
            passwordReg.classList.add('error');
            checkPasswordReg.classList.add('error');
        } else {
            passwordReg.classList.remove('error');
            checkPasswordReg.classList.remove('error');
        }

        if (error == 0) {
            let username = document.getElementById('login-reg');
            if (users.includes(username.value)) {
                Swal.fire({
                    icon: 'error',
                    title: 'Такой аккаунт уже существует!',
                    timer: 5000
                })

            } else {
                users.push(username.value);
                usersPasswords.push(passwordReg.value);
                formReg.reset();
                Swal.fire({
                    icon: 'success',
                    title: 'Аккаунт создан!',
                    timer: 5000
                })
            }
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Проверьте правильность введенных данных!',
                timer: 5000
            })
        }
    }

    let buttonAuth = document.getElementById('feedback-button-auth'),
        admin = document.getElementById('login-auth'),
        adminPassword = document.getElementById('password');

    buttonAuth.onclick = function (el) {
        if ((users.includes(admin.value)) && (usersPasswords.includes(adminPassword.value))) {
            Swal.fire({
                icon: 'success',
                title: 'Вход выполнен!',
                timer: 5000
            })
            if (admin.value == 'admin' && adminPassword.value == 'qwe123') {
                buttonAuth.href = 'success_entry_admin.php';
            } else {
                buttonAuth.href = 'success_entry_worker.php';
            }
        } else {
            el.preventDefault();
            Swal.fire({
                icon: 'error',
                title: 'Проверьте правильность введенных данных!',
                timer: 5000
            })
        }
    };
}
