window.onload = function () {

    $("#phone").mask("+375(99) 999-99-99");

    let formReg = document.getElementById('form-reg'), 
        buttonReg = document.getElementById('feedback-button-reg');
        users = ['admin'];
        usersPasswords = ['123'];

    buttonReg.onclick = function () {
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

        let passwordReg = document.getElementById('password-reg');
        let checkPasswordReg = document.getElementById('check-password-reg');
        let regexPasswordReg = new RegExp(passwordReg.getAttribute("dataReg"));

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
            Swal.fire({
                icon: 'success',
                title: 'Аккаунт создан!',
                timer: 5000
            })

            users.push(username.value);
            usersPasswords.push(passwordReg.value);
            console.log(users);
            console.log(usersPasswords);
            formReg.reset();

        } else {
            console.log(error);
            Swal.fire({
                icon: 'error',
                title: 'Проверьте правильность введенных данных!',
                timer: 5000
            })
        }
    }
};

export { users, usersPasswords };