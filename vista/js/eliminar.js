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
                url: '../../modelo/eliminarProfesor.php',
                data: { cedula: cedula },
                type: 'POST',
                success: function(data) {
                    /* var resultado = JSON.parse(data);
                    console.log(resultado);
                    console.log('->' + resultado.cedulaProfesor); */
                    console.log(data)
                    if (data == 'exito') {
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
                url: '../../modelo/eliminarEstudiante.php',
                data: { cedula: cedula },
                type: 'POST',
                success: function(data) {
                    console.log(data);
                    /* var resultado = JSON.parse(data);
                    console.log(resultado);
                    console.log(resultado.cedulaEstudiante); */
                    if (data == 'exito') {
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

/**
 * Evento clic que permite eliminar empresa
 */
function eliminarEmpresa(empresa) {
    var nit = String(empresa);
    console.log("eliminado " + nit);
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
                url: '../../modelo/eliminarEmpresa.php',
                data: { nit_empresa: nit },
                type: 'POST',
                success: function(data) {
                    console.log(data)
                        /* var resultado = JSON.parse(data);
                        console.log(resultado);
                        console.log(resultado.cedulaEstudiante); */
                    if (data == 'exito') {
                        Swal.fire(
                            'Eliminado!',
                            'El registro ha sido eliminado.',
                            'success'
                        )
                        setTimeout(function() {
                            window.location.href = "../pestanasAdmin/Visualizar_empresa.php";
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

function eliminarAsociacion(asociacion) {
    var id_convenio = String(asociacion);
    console.log("eliminado " + id_convenio);
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
                url: '../../modelo/eliminarAsociacion.php',
                data: { id_convenio: id_convenio },
                type: 'POST',
                success: function(data) {
                    console.log(data);
                    if (data == 'exito') {
                        Swal.fire(
                            'Eliminado!',
                            'El registro ha sido eliminado.',
                            'success'
                        )
                        setTimeout(function() {
                            window.location.href = "../pestanasProf/Crear_asociacion.php";
                        }, 400);
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

function eliminarARL(asociacion) {
    var codigo = String(asociacion);
    console.log("eliminado " + id_convenio);
    Swal.fire({
        title: 'Eliminar',
        text: "¿Estas seguro que quieres eliminar el ARL?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, ¡eliminar!',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                url: '../../modelo/eliminarARL.php',
                data: { codigo: codigo },
                type: 'POST',
                success: function(data) {
                    console.log(data);
                    if (data == 'exito') {
                        Swal.fire(
                            'Eliminado!',
                            'El registro ha sido eliminado.',
                            'success'
                        )
                        setTimeout(function() {
                            window.location.href = "../pestanasProf/Practicas_evaluacion.php";
                        }, 400);
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