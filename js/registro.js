/*
Método para registrar un profesor en la vista del administrador
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
                if (data == 'exito') {
                    Swal.fire(
                        'Correcto!',
                        'Se ha registrado correctamente el profesor',
                        'success'
                    )
                    document.getElementById("FormRegistroProfesor").reset();
                } else if (data == 'error') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: '¡Profesor ya existente!'
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

/*
Método para registar un estudiante en la vista del administrador
*/
$(document).ready(function() {
    $("#FormRegistroEstudiante").on('submit', function(e) {
        e.preventDefault();
        var datos = $(this).serializeArray();
        console.log(datos);
        $.ajax({
            url: $(this).attr("action"),
            data: datos,
            type: $(this).attr("method"),
            success: function(data) {
                console.log(data);
                if (data == 'exito') {
                    Swal.fire(
                        'Correcto!',
                        'Se ha registrado correctamente el estudiante',
                        'success'
                    )
                    document.getElementById("FormRegistroProfesor").reset();
                } else if (data == 'error') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Estudiante ya existente!'
                    })
                }
            }
        });
    });
});

/*
Método para registar una empresa en la vista del administrador
*/
$(document).ready(function() {
    $("#FormRegistrompresa").on('submit', function(e) {
        e.preventDefault();
        var datos = $(this).serializeArray();
        console.log(datos);
        $.ajax({
            url: $(this).attr("action"),
            data: datos,
            type: $(this).attr("method"),
            success: function(data) {
                console.log(data);
                if (data == 'exito') {
                    Swal.fire(
                        'Correcto!',
                        'Se ha registrado correctamente la empresa',
                        'success'
                    )
                    document.getElementById("FormRegistroProfesor").reset();
                } else if (data == 'error') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Empresa ya existente!'
                    })
                }
            }
        });
    });
});