/*
Método para actualizar un profesor en la vista del administrador
*/
$(document).ready(function() {
    $("#FormRegistroProfesor").on('submit', function(e) {
        e.preventDefault();
        var datos = $(this).serializeArray();
        console.log(datos);
        $.ajax({
            url: $(this).attr("action"),
            data: datos,
            type: $(this).attr("method"),
            success: function(data) {
                console.log(data);
                var resultado = JSON.parse(data);
                console.log('->' + resultado.respuesta);
                if (resultado.respuesta == 'exito') {
                    Swal.fire(
                        'Correcto!',
                        'Se ha registrado correctamente el profesor',
                        'success'
                    )
                    document.getElementById("FormRegistroProfesor").reset();
                } else if (resultado.respuesta == 'error') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error al registrar',
                        text: '¡Profesor ya existente!'
                    })
                } else if (resultado.respuesta == 'mal') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Las contraseñas no coinciden'
                    })
                }
            }
        });
    });
});

/*
Método para actualizar una empresa
*/
$(document).ready(function() {
    $("#FormActualizarEmpresa").on('submit', function(e) {
        e.preventDefault();
        var datos = $(this).serializeArray();
        console.log(datos);
        $.ajax({
            url: $(this).attr("action"),
            data: datos,
            type: $(this).attr("method"),
            success: function(data) {
                console.log(data);
                /* var resultado = JSON.parse(data);
                console.log('->' + resultado.respuesta); */
                if (data == 'exito') {
                    Swal.fire(
                        'Correcto!',
                        'Se actualizado la correctamente la empresa',
                        'success'
                    )
                    document.getElementById("FormActualizarEmpresa").reset();
                } else if (data == 'error') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Ups!',
                        text: 'Ocurrio un problema al actualizar'
                    })
                } else if (data == 'mal') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Las contraseñas no coinciden'
                    })
                }
            }
        });
    });
});