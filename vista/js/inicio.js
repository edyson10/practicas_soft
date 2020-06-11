$(document).ready(function() {
    $("#FormLogin").on('submit', function(e) {
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
                if (resultado.respuesta == 'exitoso') {
                    Swal.fire(
                        'Iniciaste Sesión',
                        'Bienvenido(a) a Practic',
                        'success'
                    )
                    if (resultado.rol == 'admin') {
                        setTimeout(function() {
                            window.location.href = "vista/pestanasAdmin/Perfil_administrador.php";
                        }, 2000);
                    } else if (resultado.rol == 'empresa') {
                        setTimeout(function() {
                            window.location.href = "vista/pestanasEmp/Perfil_empresa.php";
                        }, 2000);
                    } else if (resultado.rol == 'estudiante') {
                        setTimeout(function() {
                            window.location.href = "vista/pestanasEst/Perfil_estudiante.php";
                        }, 2000);
                    } else if (resultado.rol == 'profesor') {
                        setTimeout(function() {
                            window.location.href = "vista/pestanasProf/Perfil_profesor.php";
                        }, 2000);
                    }
                } else if (resultado.respuesta == 'error') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Usuario, contraseña y/o rol incorrectos'
                    })
                }
            }
        });
    });
});