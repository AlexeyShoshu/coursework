window.onload = function () {

    let formAdd = document.getElementById('form-add'),
        buttonAdd = document.getElementById('feedback-button-add');
        testDate = document.getElementById('date-start-repair');

    buttonAdd.onclick = function (el) {
        let error = 0;
            array = [];
        Array.from(formAdd.elements).forEach((el) => {
            let regex = new RegExp(el.getAttribute("dataReg"));
            if (regex.test(el.value) === false || el.value == '') {
                error++;
                el.classList.add('error');
            } else {
                el.classList.remove('error');
            }
        })

        // if (error == 0) {
        //     formAdd.reset();
        //     Swal.fire({
        //         icon: 'success',
        //         title: 'Заказ создан!',
        //         timer: 5000
        //     })
        // } else {
        //     el.preventDefault();
        //     Swal.fire({
        //         icon: 'error',
        //         title: 'Проверьте правильность введенных данных!',
        //         timer: 5000
        //     })
        // }

        if (error == 0) {
            $.ajax({
                url: formAdd.getAttribute('data-action'),
                method: "post",
                data: new FormData(formAdd),
                processData: false,
                contentType: false,
                success: function () {
                    Swal.fire({
                        icon: 'success',
                        title: 'Заказ создан!',
                        timer: 5000
                    })
                    formAdd.reset();
                },
                error: function () {
                    Swal.fire({
                        icon: 'error',
                        title: 'Проблемы с сетью!',
                        timer: 5000
                    })
                }
            })
        } else {
            el.preventDefault();
            Swal.fire({
                icon: 'error',
                title: 'Проверьте правильность введенных данных!',
                timer: 5000
            })
        }
    }
}
