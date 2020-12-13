function verInformacionDocente(cedula) {
    var cedulanit = String(cedula);
    //console.log("cedula " + cedulanit);
    $('#exampleModalCenter').modal('show');
    $.ajax({
        url: '../../modelo/ver.php',
        data: {
            ver: 'verDocente',
            cedula: cedula
        },
        type: 'POST',
        success: function(data) {
            var resultado = JSON.parse(data);
            //console.log(resultado);
            if (resultado.respuesta == 'exito') {
                document.getElementById('nombreProfesor').value = resultado.usuario;
                document.getElementById('cedulaProf').value = resultado.cedulanit;
                document.getElementById('direccionProfesor').value = resultado.direccion;
                document.getElementById('telefonoProfesor').value = resultado.telefono;
                document.getElementById('fechaProfesor').value = resultado.fecha;
                document.getElementById('correoProfesor').value = resultado.correo;
                document.getElementById('codigoProfesor').value = resultado.codigo;
            }
        }
    })
}

function verInformacionEstudiante(cedula) {
    var cedulanit = String(cedula);
    //console.log("cedula " + cedulanit);
    $('#exampleModalCenter').modal('show');
    $.ajax({
        url: '../../modelo/ver.php',
        data: {
            ver: 'verEstudiante',
            cedula: cedula
        },
        type: 'POST',
        success: function(data) {
            var resultado = JSON.parse(data);
            //console.log(resultado);
            if (resultado.respuesta == 'exito') {
                document.getElementById('nombreProfesor').value = resultado.usuario;
                document.getElementById('cedulaProf').value = resultado.cedulanit;
                document.getElementById('direccionProfesor').value = resultado.direccion;
                document.getElementById('telefonoProfesor').value = resultado.telefono;
                document.getElementById('fechaProfesor').value = resultado.fecha;
                document.getElementById('correoProfesor').value = resultado.correo;
                document.getElementById('codigoProfesor').value = resultado.codigo;
            }
        }
    })
}

function verInformacionEmpresa(cedula) {
    var cedulanit = String(cedula);
    console.log("cedula " + cedulanit);
    $('#exampleModalCenter').modal('show');
    $.ajax({
        url: '../../modelo/ver.php',
        data: {
            ver: 'verEmpresa',
            cedula: cedula
        },
        type: 'POST',
        success: function(data) {
            var resultado = JSON.parse(data);
            //console.log(resultado);
            if (resultado.respuesta == 'exito') {
                document.getElementById('nombreEmpresa').value = resultado.usuario;
                document.getElementById('nitEmpresa').value = resultado.cedulanit;
                document.getElementById('direccionEmpresa').value = resultado.direccion;
                document.getElementById('telefonoEmpresa').value = resultado.telefono;
                document.getElementById('correoEmpresa').value = resultado.correo;
                document.getElementById('representante_legal').value = resultado.representante;
            }
        }
    })
}