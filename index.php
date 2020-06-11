<?php

require_once 'controlador/conexion.php';

?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pr&aacute;ctic</title>

    <link rel="icon" type="image/png" href="vista/img/logo.ico" />

    <!-- Custom fonts for this template-->
    <link href="vista/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="vista/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="vista/css/sweetalert2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vista/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
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
                                    <form class="user" id="FormLogin" method="POST" name="FormLogin" action="modelo/login.php">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="ingresarUsuario" id="ingresarUsuario" aria-describedby="emailHelp" placeholder="Ingrese su correo electrónico" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="ingresarContrasena" id="ingresarContrasena" placeholder="Contraseña" required>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 col-md-6">
                                                <select class="dropdown" style="border-radius: 20px !important;" id="ingresarTipo" name="ingresarTipo">
                                                    <option value="">Seleccione el rol &nbsp;&nbsp;&nbsp;</option>
                                                    <option value="Administrador">Administrador</option>
                                                    <option value="Empresa">Empresa</option>
                                                    <option value="Estudiante">Estudiante</option>
                                                    <option value="Profesor">Profesor</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button type="submit" name="enviar" class="btn btn-primary btn-user btn-block">Iniciar Sesi&oacute;n</button>
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
                                    <!--
                                    <div class="text-center">
                                        <a class="small" href="recuperar">¿Olvidaste tu contraseña?</a>
                                    </div>-->
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
                    <a href="https://ww2.ufps.edu.co/" target="_blank"><img id="logo-footer" class="img-responsive" src="https://ww2.ufps.edu.co/public/imagenes/template/footer/logoufpsvertical.png" alt="Logo Pie de Página UFPS"></a>
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
            <script>
                document.write(new Date().getFullYear());
            </script> © Copyright
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

    <script src="vista/js/sweetalert2.min.js"></script>

    <script src="vista/js/registro.js"></script>

    <script src="vista/js/alertas.js"></script>

    <script src="vista/js/inicio.js"></script>

    <!-- Page level plugins -->
    <script src="vista/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="vista/js/demo/chart-area-demo.js"></script>
    <script src="vista/js/demo/chart-pie-demo.js"></script>

    <!-- Page level plugins -->
    <script src="vista/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vista/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="vista/js/demo/datatables-demo.js"></script>
</body>

</html>