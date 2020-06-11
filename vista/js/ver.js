function verInformacion(cedula) {
    var cedulanit = String(cedula);
    console.log("cedula " + cedulanit);
    $('#exampleModalCenter').modal('show');
    $.ajax({
        url: '../../modelo/ver.php',
        data: {
            cedula: cedula,
            ver: 'verProfesor'
        },
        type: 'POST',
        success: function(data) {
            var resultado = JSON.parse(data);
            console.log(resultado);
            if (resultado.respuesta == 'exito') {
                document.getElementById('cedulaProf').innerHTML = resultado.usuario;
                console.log(resultado.usuario);
            }
        }
    })
}