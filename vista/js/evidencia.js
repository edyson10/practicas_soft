/*
Método para subir los archivos a la base de datos de evidencia en el panel de empresa
*/
$(document).ready(function() {
    $("#evidencia-empresa").on('submit', function(e) {
        e.preventDefault();
        var datos = new FormData(this)
            //console.log(datos);
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
                    )
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
                    )
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
    });
});

/*
Método para subir el convenio a la base de datos de radicado en el panel de empresa
*/
$(document).ready(function() {
    $("#froConvenioEmpresa").on('submit', function(e) {
        e.preventDefault();
        var datos = new FormData(this)
        console.log(datos);
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
                        'Se ha subido correctamente el convenio',
                        'success'
                    )
                    document.getElementById("froConvenioEmpresa").reset();
                } else if (data == 'error') {
                    Swal.fire({
                        icon: 'error',
                        title: '¡Ups!',
                        text: 'Error al subir el convenio'
                    })
                }
            }
        });
    });
});