/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/javascript.js to edit this template
 */


function sendBE(){
    var validation=true;
    var numberformat = /^\d+$/;
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var nameformat = /^[a-zA-Z]+$/;
    if(numberformat.test($("#exampleInputPhone").val()) === false){
        alert("Номер телефона должен состоять из цифр");
        validation = false;
    }
    if(mailformat.test($("#exampleInputEmail").val()) === false){
        alert("Некорректно введен Email");
        validation = false;
    }    
    if(nameformat.test($("#exampleInputName").val()) === false){
        alert("Имя должно состоять из латинских символов");
        validation = false;
    }
    if(validation){
        var formData = $("#formRegister").serialize();
            $.ajax({
                url: 'registrationController.php',
                type: "GET",
                data: formData,
                beforeSend: function () {
                    $('#buttonSubmit').attr('disabled', 'disabled');
                }
            }).done(function (result) {
                alert("Ваш запрос был обработан успешно");
                $("#exampleInputPhone").val("")
                $("#exampleInputName").val("")
                $("#exampleInputEmail").val("")
                $('#buttonSubmit').removeAttr('disabled');
            });
    }
}