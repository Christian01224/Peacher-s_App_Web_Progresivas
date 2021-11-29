function login_usuario() {
    if ($('#user').val() == "") {
        var msg = "El campo 'Usuario' está vacío";
        error_alert(msg);
    } else if ($('#user_pass').val() == "") {
        var msg = "El campo 'Contraseña' está vacío";
        error_alert(msg);
    } else {
        var datos = new FormData()
        datos.append("usuario", $('#user').val());
        datos.append("user_pass", $('#user_pass').val());
        $.ajax({
            url: "ctrl_login",
            type: "POST",
            processData: false,
            contentType: false,
            data: datos,
            success: function(respuesta) {
                var resultado = JSON.parse(respuesta);
                if (resultado.status == 1) {
                    var msg = "Datos correctos";
                    success_alert(msg);
                } else {
                    var msg = "El usuario y/o contraseña son incorrectos";
                    error_alert(msg);
                }
            }
        });
    }




}


function success_alert(msg) {
    document.getElementById("texto_bienvenida").innerHTML =
        msg;
    $('#alerta_login_correcto').addClass('show');
    setTimeout(function() {
        $('#alerta_login_correcto').attr("class", "alert alert-success alert-dismissible fade");
    }, 2000)
}

function error_alert(msg) {
    document.getElementById("texto_error").innerHTML = msg;
    $('#alerta_login_error').addClass('show');
    setTimeout(function() {
        $('#alerta_login_error').attr("class", "alert alert-danger alert-dismissible fade");
    }, 2000)
}