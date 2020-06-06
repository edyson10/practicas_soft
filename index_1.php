<?php
if (isset($_SESSION["Usuario"])) {
    header("Location:Inicio");
}
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Página web de las practicas de los estudiantes de la Universidad Francisco de Paula Santander.">
    <meta name="author" content="edyson leal">

    <title>Practic</title>

    <link rel="icon" type="image/png" href="vista/img/logo.ico" />

    <!-- Custom fonts for this template-->
    <link href="vista/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="vista/css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        html {
            min-height: 100%;
            position: relative;
        }

    </style>        

</head>

<body style="background-color: #aa1916;">
    <div class="container">
        <!-- Outer Row -->
        <br>
        <div class="row justify-content-center">
            <h1 class="font-weight-bold" style="font-size: 65px; color: #eee; font-family: 'Roboto', sans-serif;">PRACTIC</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Bienvenido</h1>
                                    </div>
                                    <form class="user" id="FormLogin" method="POST">
                                        <div class="form-group">
                                            <input name="ingresarUsuario" type="email" class="form-control form-control-user" id="ingresarUsuario" aria-describedby="emailHelp" placeholder="Ingrese su correo electrónico" >
                                        </div>
                                        <div class="form-group">
                                            <input name="ingresarContraseña" type="password" class="form-control form-control-user" id="ingresarContraseña" placeholder="Contraseña" >
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Recu&eacute;rdame</label>
                                            </div>
                                        </div>
                                        <button href="/vista/inicio.php" class="btn btn-primary btn-user btn-block" type="submit">Iniciar Sesi&oacute;n</button>
                                        <!--
                                          <hr>
                                         <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a> -->
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="recuperar">¿Olvidaste tu contraseña?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="page-footer font-small indigo" style="background: #272727; width: 100%; bottom: 0;">
        <!-- Footer Links -->
        <div class="container text-center text-md-left">
            <!-- Grid row -->
            <div class="row">
                <!-- Grid column -->
                <hr class="clearfix w-100 d-md-none">
                <!-- Grid column -->
                <div class="col-md-3 mx-auto">
                <a href="index.html"><img id="logo-footer" class="img-responsive" src="https://ww2.ufps.edu.co/public/imagenes/template/footer/logoufpsvertical.png" alt="Logo Pie de Página UFPS"></a>
                </div>
                <!-- Grid column -->
                <hr class="clearfix w-100 d-md-none">
                <!-- Grid column -->
                <div class="col-md-5 mx-auto">
                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4 border-bottom-danger">Contactos</h5>
                    <ul class="list-unstyled">
                        <li>Avenida Gran Colombia No. 12E-96 Barrio Colsag</li>
                        <li>
                        San José de Cúcuta - Colombia
                        </li>
                        <li>
                        Teléfono (057)(7) 5776655
                        </li>
                        <li>
                        Correos: <a href="mailto:oficinadeprensa@ufps.edu.co" class="">oficinadeprensa@ufps.edu.co</a>
                        </li>
                        <li>
                        <a href="mailto:oficinajuridica@ufps.edu.co" class="">oficinajuridica@ufps.edu.co</a>
                        </li>
                    </ul>
                </div>
                <!-- Grid column -->
                <hr class="clearfix w-100 d-md-none">
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
        <!-- Footer Links -->
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3" style="background: black"> 
        <script> document.write(new Date().getFullYear());</script> © Copyright
            <a href="https://ww2.ufps.edu.co/"> UFPS</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <!-- Bootstrap core JavaScript-->
    <script src="vista/vendor/jquery/jquery.min.js"></script>
    <script src="vista/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vista/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="vista/js/sb-admin-2.min.js"></script>

    <!-- Archivos personales -->
    <script type="text/javascript" src="vista/js/alertas.js"></script>
    <script type="text/javascript" src="vista/js/inicio.js"></script>
    <script type="text/javascript" src="vista/js/salir.js"></script>
</body>
</html>