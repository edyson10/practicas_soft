function ingresoExitoso(titulo, mensaje) {
    swal({
        title: titulo,
        text: mensaje,
        icon: "success",
        button: "Continuar"
    });
    location.reload();
}

function exito(titulo, mensaje) {
    swal({
        title: titulo,
        text: mensaje,
        icon: "success",
        button: "Continuar"
    });
}

function respuestaInfoEspera(mensaje) {
    swal({
        text: mensaje,
        buttons: false,
        closeOnClickOutside: false,
        closeOnEsc: false,
        icon: "info"
    });
}

function respuestaError(titulo, mensaje) {
    swal({
        title: titulo,
        text: mensaje,
        icon: "error"
    });
}

/**
 * Evento clic que permite eliminar profesor
 */
function eliminarProfesor(nombre) {
    var cedula = String(nombre);
    console.log("eliminado " + cedula);
    Swal.fire({
        title: 'Eliminar',
        text: "¿Estas seguro que quieres eliminar el registro?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, ¡eliminar!',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                url: '../../modelo/eliminar.php',
                data: {
                    cedula: cedula,
                    eliminar: 'eliminarProfesor'
                },
                type: 'POST',
                success: function(data) {
                    var resultado = JSON.parse(data);
                    console.log(resultado);
                    console.log('->' + resultado.cedulaProfesor);
                    if (resultado.respuesta == 'exito') {
                        Swal.fire(
                            'Eliminado!',
                            'El registro ha sido eliminado.',
                            'success'
                        )
                        setTimeout(function() {
                            window.location.href = "../pestanasAdmin/Visualizar_profesor.php";
                        }, 700);
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'No se pudo eliminar!'
                        })
                    }
                }
            });
        }
    })
}

/**
 * Evento clic que permite eliminar estudiante
 */
function eliminarEstudiante(nombre) {
    var cedula = String(nombre);
    console.log("eliminado " + cedula);
    Swal.fire({
        title: 'Eliminar',
        text: "¿Estas seguro que quieres eliminar el registro?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, ¡eliminar!',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                url: '../../modelo/eliminar.php',
                data: {
                    cedula: cedula,
                    eliminar: 'eliminarEstudiante'
                },
                type: 'POST',
                success: function(data) {
                    var resultado = JSON.parse(data);
                    console.log(resultado);
                    console.log(resultado.cedulaEstudiante);
                    if (resultado.respuesta == 'exito') {
                        Swal.fire(
                            'Eliminado!',
                            'El registro ha sido eliminado.',
                            'success'
                        )
                        setTimeout(function() {
                            window.location.href = "../pestanasAdmin/Visualizar_estudiante.php";
                        }, 700);
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'No se pudo eliminar!'
                        })
                    }
                }
            });
        }
    })
}