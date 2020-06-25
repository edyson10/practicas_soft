<?php

require_once '../../controlador/sesiones.php';
include_once '../header.php';
require_once '../../controlador/conexion.php';

/* if (isset($_SESSION['rol']) != 1) {
    header('Location: ../../index.php');
} else {
    $nombre = $_SESSION['usuario'];
    $codigo = $_SESSION['codigo'];
    $cedulanit = $_SESSION['cedulanit'];
    $telefono = $_SESSION['telefono'];
    $direccion = $_SESSION['direccion'];
    $correo = $_SESSION['correo'];
} */


$codigo = $_SESSION['codigo'];
$correo = $_SESSION['correo'];
$nombre = $_SESSION['usuario'];

$sql = "SELECT persona.nombre, administrador.codigo, persona.cedulanit, persona.telefono, persona.direccion, persona.correo, administrador.fechaNacimiento 
        from persona inner join administrador on persona.cedulanit = administrador.cedula where persona.correo = '$correo' or administrador.codigo = '$codigo'";

$ejecutar = mysqli_query($conexion, $sql);
$rowcount = mysqli_num_rows($ejecutar);

if ($rowcount > 0) {
    $row = $ejecutar->fetch_array(MYSQLI_ASSOC);
    $usuario = $row['nombre'];
    $codigo = $row['codigo'];
    $cedulanit = $row['cedulanit'];
    $telefono = $row['telefono'];
    $direccion = $row['direccion'];
    $correo = $row['correo'];
}

?>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <?php require_once 'menuAdministrador.php'; ?>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hola <?php echo $nombre; ?></span>
                                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Perfil
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="controller/logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Cerras Sesi&oacute;n
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->
                <!-- START CONTENIDO DE LA PAGINA -->
                <div id="contenido">
                    <div class="container-fluid">
                        <!-- Page Heading -->
                        <div class="row">
                            <div class="col-lg-2 mb-2"></div>
                            <div class="col-lg-8 mb-8">
                                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                    <h1 class="h3 mb-0 text-gray-900"><strong>Perfil</strong></h1>
                                </div>
                            </div>
                            <div class="col-lg-2 mb-2"></div>
                        </div>
                        <!-- Content Row -->
                        <div class="row">
                            <div class="col-lg-2 mb-2"></div>
                            <div class="col-lg-8 mb-8">
                                <!-- Approach -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-danger">Datos personales</h6>
                                    </div>
                                    <div class="card-body">
                                        <form class="user" role="form" id="FormActualizarAdministrador" name="FormActualizarAdministrador" method="POST" action="../../modelo/actualizarAdministrador.php">
                                            <div class=" form-group ">
                                                <input type="nombre" class="form-control form-control-user " id="nombreProfesor" placeholder="<?php echo $usuario; ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" id="cedulaProfesor" placeholder="<?php echo $cedulanit; ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" id="codigoProfesor" placeholder="<?php echo $codigo; ?>" readonly>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <input type="text" class="form-control form-control-user" id="direccionAdministrador" name="direccionAdministrador" placeholder="<?php echo $direccion; ?>">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="number" class="form-control form-control-user" id="telefonoAdministrador" name="telefonoAdministrador" placeholder="<?php echo $telefono; ?>">
                                                </div>
                                            </div>
                                            <div class=" form-group ">
                                                <input type="email " class="form-control form-control-user" id="emailProfesor" placeholder="<?php echo $correo; ?>" readonly>
                                            </div>
                                            <div class="form-group row ">
                                                <div class="col-sm-6 mb-3 mb-sm-0 ">
                                                    <input type="password" class="form-control form-control-user" id="contraseñaAdministrador" name="contraseñaAdministrador" placeholder="Contraseña">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="password" class="form-control form-control-user" id="repContraseñaAdministrador" name="repContraseñaAdministrador" placeholder="Repita la contraseña">
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-user btn-block">Actualizar datos</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 mb-2"></div>
                        </div>
                    </div>
                </div>
                <!-- END CONTENIDO DE LA PAGINA -->
            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <?php include_once '../footer.php'; ?>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
</body>