/*
Método para subir los archivos a la base de datos de evidencia en el panel de empresa
*/
$(document).ready(function() {
    $("#evidencia-empresa").on('submit', function(e) {
        e.preventDefault();
        var datos = new FormData(this)
            //console.log(datos);
        if (document.getElementById("archivo-empresa").files.length == 0) {
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
                    //console.log(data);
                    /* var resultado = JSON.parse(data);
                    console.log('->' + resultado.respuesta); */
                    if (data == 'exito') {
                        Swal.fire(
                            'Correcto!',
                            'Se ha subido correctamente la evidencia',
                            'success'
                        ), setTimeout(function() {
                            location.reload();
                        }, 2000);
                        document.getElementById("evidencia-empresa").reset();
                    } else if (dataa == 'error') {
                        Swal.fire({
                            icon: 'error',
                            title: '¡Ups!',
                            text: 'Error al subir la evidencia'
                        })
                    }
                }
            });
        }
    });
});

/*
Método para subir el radicado a la base de datos de radicado en el panel de empresa
*/
$(document).ready(function() {
    $("#fromRadicadoEmpresa").on('submit', function(e) {
        e.preventDefault();
        var datos = new FormData(this)
            //console.log(datos);
        if (document.getElementById("radicado-empresa").files.length == 0) {
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
                    //console.log(data);
                    /* var resultado = JSON.parse(data);
                    console.log('->' + resultado.respuesta); */
                    if (data == 'exito') {
                        Swal.fire(
                            'Correcto!',
                            'Se ha subido correctamente el radicado',
                            'success'
                        ), setTimeout(function() {
                            location.reload();
                        }, 2000);
                        document.getElementById("fromRadicadoEmpresa").reset();
                    } else if (dataa == 'error') {
                        Swal.fire({
                            icon: 'error',
                            title: '¡Ups!',
                            text: 'Error al subir el radicado'
                        })
                    }
                }
            });
        }
    });
});

/*
Método para subir el convenio a la base de datos en el panel de empresa
*/
$(document).ready(function() {
    $("#fromConvenioEmpresa").on('submit', function(e) {
        e.preventDefault();
        var datos = new FormData(this)
            //console.log(datos);
        if (document.getElementById("convenio-empresa").files.length == 0) {
            Swal.fire({
                icon: 'error',
                title: '¡Ups!',
                text: 'No se ha cargado ningún archivoooo'
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
                    if (data == 'exito') {
                        Swal.fire(
                            'Correcto!',
                            'Se ha subido correctamente el convenio',
                            'success'
                        )
                        location.reload();
                    } else if (data == 'error') {
                        Swal.fire({
                            icon: 'error',
                            title: '¡Ups!',
                            text: 'Error al subir el convenio'
                        })
                    }
                }
            });
        }
    });
});

/*
Método para subir el ARL a la base de datos en el panel de estudiante
*/
$(document).ready(function() {
    $("#formArlEstudiante").on('submit', function(e) {
        e.preventDefault();
        var datos = new FormData(this)
            //console.log(datos);
        if (document.getElementById("arl-estudiante").files.length == 0) {
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
                    //console.log(data);
                    /* var resultado = JSON.parse(data);
                    console.log('->' + resultado.respuesta); */
                    if (data == 'exito') {
                        Swal.fire(
                            'Correcto!',
                            'Se ha subido correctamente el ARL',
                            'success'
                        ), setTimeout(function() {
                            location.reload();
                        }, 2000);
                        document.getElementById("formArlEstudiante").reset();
                    } else if (data == 'error') {
                        Swal.fire({
                            icon: 'error',
                            title: '¡Ups!',
                            text: 'Error al subir el ARL'
                        })
                    }
                }
            });
        }
    });
});

/*
 Método para subir el Plan de trabajo del estudiante 
 a la base de datos en el panel de estudiante
 */
$(document).ready(function() {
    $("#formPlanEstudiante").on('submit', function(e) {
        e.preventDefault();
        var datos = new FormData(this)
            //console.log(datos);
        if (document.getElementById("plan-estudiante").files.length == 0) {
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
                    /* var resultado = JSON.parse(data);
                    console.log('->' + resultado.respuesta); */
                    if (data == 'exito') {
                        Swal.fire(
                            'Correcto!',
                            'Se ha subido correctamente el plan de trabajo',
                            'success'
                        ), setTimeout(function() {
                            location.reload();
                        }, 2000);
                        document.getElementById("formPlanEstudiante").reset();
                    } else if (data == 'error') {
                        Swal.fire({
                            icon: 'error',
                            title: '¡Ups!',
                            text: 'Error al subir el plan de trabajo'
                        })
                    }
                }
            });
        }
    });
});

/*
 Método para subir la evidencia del estudiante 
 en el panel de estudiante.
 */
$(document).ready(function() {
    $("#fromEvidenciaEstudiante").on('submit', function(e) {
        e.preventDefault();
        var datos = new FormData(this)
        if (document.getElementById("evidencia-estudiante").files.length == 0) {
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
                    //console.log(data);
                    /* var resultado = JSON.parse(data);
                    console.log('->' + resultado.respuesta); */
                    if (data == 'exito') {
                        Swal.fire(
                            'Correcto!',
                            'Se ha subido correctamente la evidencia',
                            'success'
                        ), setTimeout(function() {
                            location.reload();
                        }, 2000);
                        document.getElementById("fromEvidenciaEstudiante").reset();
                    } else if (data == 'error') {
                        Swal.fire({
                            icon: 'error',
                            title: '¡Ups!',
                            text: 'Error al subir la evidencia'
                        })
                    }
                }
            });
        }
    });
});

/*
Metodo para subir el convenio de la empresa en el panel de docente
*/

const inputFile = document.querySelector("#convenio-empresa");

btnEnviar.addEventListener('click', () => {
    if (inputFile.files.length > 0) {
        let formData = new FormData();
        var empresa = document.getElementById("empresaConvenio");
        var nit = empresa.options[empresa.selectedIndex].value;
        console.log(nit);
        formData.append("nit", nit);
        formData.append("archivo", inputFile.files[0]);
        fetch("../../modelo/cargarConvenioEmpresa.php", {
                method: 'POST',
                body: formData,
                cache: 'no-cache'
            })
            .then(respuesta => respuesta.text())
            .then(decodificado => {
                console.log(decodificado);
                if (decodificado == 'existe') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Ya existe un convenio subido'
                    })
                } else if (decodificado == 'mal') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Debe de seleccionar una empresa correcta'
                    })
                } else if (decodificado == 'exito') {
                    Swal.fire(
                        'Exito',
                        'Has subido correctamente el convenio',
                        'success'
                    )
                    setTimeout(function() {
                        location.reload();
                    }, 1000);
                } else if (decodificado == 'error') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'No se pudo cargar el convenio'
                    })
                }
            });
    } else {
        Swal.fire({
            icon: 'error',
            title: '¡Ups!',
            text: 'No se ha cargado ningún archivo'
        })
    }
});