import users from './validation-reg.js';

console.log(users.users)

window.onload = function () {
    let buttonAuth = document.getElementById('feedback-button-auth'),
        admin = document.getElementById('login-auth'),
        adminPassword = document.getElementById('password');

    buttonAuth.onclick = function () {
        if ((users.users.includes(admin.value)) && (users.usersPasswords.includes(adminPassword.value))) {
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
}


