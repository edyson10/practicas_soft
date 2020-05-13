$(document).ready(function() {
    $("#FormLogin").validate({
        rules: {
            ingresarUsuario: { required: true, text: true },
            ingresarContraseña: { required: true }
        },
        messages: {
            ingresarUsuario: { required: "<span style='color:red'> ✘ </span>", text: "<span style='color:red'> ✘ </span>" },
            ingresarContraseña: "<span style='color:red'> ✘ </span>"
        },

        submitHandler: function(form) {
            var datos = {
                ingresarUsuario: $("#ingresarUsuario").val(),
                ingresarContraseña: $("#ingresarContraseña").val()
            };

            $.ajax({
                url: 'vista/modulos/ajax.php',
                method: 'post',
                data: datos,
                dataType: "json",

                beforeSend: function() {
                    respuestaInfoEspera("Espera un momento por favor.");
                },
                success: function(respuesta) {
                    if (respuesta["exito"]) {
                        ingresoExitoso("Iniciaste Sesión", "Bienvenido a nuestra Aplicación");
                    } else if (!respuesta["exito"]) {
                        respuestaError("Error al Iniciar", "Revisa el usuario y la contraseña");
                    }

                },
                error: function(jqXHR, estado, error) {
                    console.log(estado);
                    console.log(error);
                    console.log(jqXHR);
                },

            });
        }
    });
});