/*
Método para registrar un profesor en la vista del administrador
*/
$(document).ready(function() {
    $("#FormRegistroProfesor").on('submit', function(e) {
        e.preventDefault();
        var datos = $(this).serializeArray();
        //console.log(datos);
        $.ajax({
            url: $(this).attr("action"),
            data: datos,
            type: $(this).attr("method"),
            success: function(data) {
                //console.log(data);
                var resultado = JSON.parse(data);
                //console.log('->' + resultado.respuesta);
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
Método para registar un estudiante en la vista del administrador
*/
$(document).ready(function() {
    $("#FormRegistroEstudiante").on('submit', function(e) {
        e.preventDefault();
        var datos = $(this).serializeArray();
        //console.log(datos);
        $.ajax({
            url: $(this).attr("action"),
            data: datos,
            type: $(this).attr("method"),
            success: function(data) {
                //console.log(data);
                var resultado = JSON.parse(data);
                //console.log('->' + resultado.respuesta);
                if (resultado.respuesta == 'exito') {
                    Swal.fire(
                        'Correcto!',
                        'Se ha registrado correctamente el estudiante',
                        'success'
                    )
                    document.getElementById("FormRegistroEstudiante").reset();
                } else if (resultado.respuesta == 'error') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error al registrar',
                        text: 'Estudiante ya existente!'
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
Método para registar una empresa en la vista del administrador
*/
$(document).ready(function() {
    $("#FormRegistroEmpresa").on('submit', function(e) {
        e.preventDefault();
        var datos = $(this).serializeArray();
        console.log(datos);
        if (document.getElementById("carga-convenio").files.length == 0) {
            Swal.fire({
                icon: 'error',
                title: '¡Ups!',
                text: 'No se ha cargado ningún archivo'
            })
        } else {
            $.ajax({
                url: $(this).attr("action"),
                data: datos,
                type: $(this).attr("method"),
                dataType: 'json',
                contentType: false,
                processData: false,
                async: true,
                cache: false,
                success: function(data) {
                    console.log(data);
                    var resultado = JSON.parse(data);
                    console.log('->' + resultado.respuesta);
                    if (resultado.respuesta == 'exito') {
                        Swal.fire(
                            'Correcto!',
                            'Se ha registrado correctamente la empresa',
                            'success'
                        )
                        document.getElementById("FormRegistrompresa").reset();
                    } else if (resultado.respuesta == 'error') {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error al registrar',
                            text: 'Empresa ya existente!'
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
        }
    });
});

/*
Método para crear el convenio entre el estudiante y la empresa
*/
$(document).ready(function() {
    $("#FormCrearConvenio").on('submit', function(e) {
        e.preventDefault();
        var datos = $(this).serializeArray();
        //console.log(datos);
        $.ajax({
            url: $(this).attr("action"),
            data: datos,
            type: $(this).attr("method"),
            success: function(data) {
                //console.log(data);
                var resultado = JSON.parse(data);
                //console.log('->' + resultado.respuesta);
                if (resultado.respuesta == 'exito') {
                    Swal.fire(
                        'Correcto!',
                        'Se ha registrado correctamente el convenio',
                        'success'
                    )
                    document.getElementById("FormCrearConvenio").reset();
                } else if (resultado.respuesta == 'error') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error al registrar',
                        text: 'Convenio ya existente!'
                    })
                }
            }
        });
    });
});