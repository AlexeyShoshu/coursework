import users from './validation-reg.js';


let buttonAuth = document.getElementById('feedback-button-auth'),
    admin = document.getElementById('login-auth'),
    adminPassword = document.getElementById('password');

buttonAuth.onclick = function () {
    if ((users.includes(admin)) && (usersPasswords.includes(adminPassword))) {
        Swal.fire({
            icon: 'success',
            title: 'Вход выполнен!',
            timer: 5000
        })
    } else {
        Swal.fire({
            icon: 'error',
            title: 'Проверьте правильность введенных данных!',
            timer: 5000
        })
    }
};

