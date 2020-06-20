<!-- ========================== Vista de registro de empresa en el panel de administrador ========================== -->

<?php
/* if (isset($_SESSION["Usuario"])) {
    $user = unserialize($_SESSION['Usuario']);
    $nombre = $_SESSION['Nombre'];
    $cedula = $_SESSION['Cedula'];
    $telefono = $_SESSION['Telefono'];
    $direccion = $_SESSION['Direccion'];
    $correo = $_SESSION['Correo'];
} else {
    header("Location:Inicio");
} */
require_once '../../controlador/sesiones.php';
include_once '../header.php';
require_once '../../controlador/conexion.php';

if (isset($_SESSION["usuario"])) {
    $nombre = $_SESSION['usuario'];
    if (isset($_SESSION['rol']) != 'Administrador') {
        header('Location: ../../index.php');
    } else {
        $nombre = $_SESSION['usuario'];
        $codigo = $_SESSION['codigo'];
        $cedulanit = $_SESSION['cedulanit'];
        $telefono = $_SESSION['telefono'];
        $direccion = $_SESSION['direccion'];
        $correo = $_SESSION['correo'];
    }
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
                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $nombre; ?></span>
                                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <!--
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Perfil
                                </a>-->
                                <a class="dropdown-item" href="Perfil_administrador">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i> Configuraci&oacute;n
                                </a>
                                <!-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i> Activity Log
                                </a> -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Cerras Sesi&oacute;n
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12 mb-12">
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h1 class="h3 mb-0 text-gray-900"><strong>Historial</strong></h1>
                                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm" data-toggle="modal" data-target="#logoutPDF">
                                    <i class="fas fa-download fa-sm text-white-50"></i> Descargar historial
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Content Row -->
                    <form class="user" method="POST">
                        <div class="row">
                            <div class="col-lg-12 mb-12">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-4">
                                        <h6 class="m-0 font-weight-bold text-primary">Historial de empresas</h6>
                                    </div>
                                    <div class="card-body">
                                        <p>Seleccione la semestre a buscar.</p>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <!-- Basic Card Example -->
                                                <select class="browser-default custom-select" id="buscarHistorial" name="buscarHistorial">
                                                    <option>Seleccione el semestre</option>
                                                    <option value="2020-2">2020 - 2</option>
                                                    <option value="2020-1">2020 - 1</option>
                                                    <option value="2019-2">2019 - 2</option>
                                                    <option value="2019-1">2019 - 1</option>
                                                    <option value="2018-2">2018 - 2</option>
                                                    <option value="2018-1">2018 - 1</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <button type="submit" class="btn btn-danger" data-dismiss="modal">Buscar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Estudiantes registrados</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                <thead class="p-3 bg-gray-700 text-white">
                                                    <tr>
                                                        <th>ID Convenio</th>
                                                        <th>Código</th>
                                                        <th>Estudiante</th>
                                                        <th>Empresa</th>
                                                        <th>Fecha convenio</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    try {
                                                        require_once '../../controlador/conexion.php';
                                                        if (isset($_POST['buscarHistorial'])) {
                                                            $estudiante = $_POST['buscarHistorial'];
                                                            $fecha  = $_POST['buscarHistorial'];
                                                            $fecha = explode("-", $fecha);
                                                            $anio = $fecha[0];
                                                            $periodo = $fecha[1];
                                                            if ($periodo == 1) {
                                                                $fechaAntes = $anio . '-02-01';
                                                                $fechaDespues = $anio . '-07-31';
                                                                $sql = "SELECT crear_convenio.id_convenio, estudiante.codigo, p1.nombre as estudiante, p2.nombre as empresa, crear_convenio.fechaConvenio from persona p1 inner join estudiante on p1.cedulanit = estudiante.cedula
                                                                inner join crear_convenio on crear_convenio.estudiante = estudiante.codigo inner join empresa on empresa.nit = crear_convenio.empresa inner join persona p2 on p2.cedulanit = empresa.nit
                                                                where fechaConvenio >= '$fechaAntes' and fechaConvenio <= '$fechaDespues'";
                                                            } else {
                                                                $fechaAntes = $anio . '-08-01';
                                                                $fechaDespues = ($anio + 1) . '-01-31';
                                                                $sql = "SELECT crear_convenio.id_convenio, estudiante.codigo, p1.nombre as estudiante, p2.nombre as empresa, crear_convenio.fechaConvenio from persona p1 inner join estudiante on p1.cedulanit = estudiante.cedula
                                                                inner join crear_convenio on crear_convenio.estudiante = estudiante.codigo inner join empresa on empresa.nit = crear_convenio.empresa inner join persona p2 on p2.cedulanit = empresa.nit
                                                                where fechaConvenio >= '$fechaAntes' and fechaConvenio <= '$fechaDespues'";
                                                            }

                                                            $resultado = $conexion->query($sql);

                                                            while ($empresa = $resultado->fetch_assoc()) { ?>
                                                                <tr align="center">
                                                                    <td><?php echo $empresa['id_convenio'] ?></td>
                                                                    <td><?php echo $empresa['codigo'] ?></td>
                                                                    <td><?php echo $empresa['estudiante'] ?></td>
                                                                    <td><?php echo $empresa['empresa'] ?></td>
                                                                    <td><?php echo $empresa['fechaConvenio'] ?></td>
                                                                </tr>
                                                    <?php }
                                                        }
                                                    } catch (Exception $e) {
                                                        $error = $e->getMessage()();
                                                        echo $error;
                                                    }

                                                    mysqli_close($conexion);
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.container-fluid -->
            </div>

            <div class="modal fade" id="logoutPDF" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"> Descargar PDF</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card-body">
                                <p>Seleccione la semestre a buscar.</p>
                                <form class="user" role="form"  id="FormBuscarHistorial" name="FormBuscarHistorial" method="POST" action="../../modelo/descargarExcel.php">
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <!-- Basic Card Example -->
                                            <select class="browser-default custom-select" id="buscarHistorial" name="buscarHistorial">
                                                <option>Seleccione el semestre</option>
                                                <option value="2020-2">2020 - 2</option>
                                                <option value="2020-1">2020 - 1</option>
                                                <option value="2019-2">2019 - 2</option>
                                                <option value="2019-1">2019 - 1</option>
                                                <option value="2018-2">2018 - 2</option>
                                                <option value="2018-1">2018 - 1</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <button type="submit" name="enviar" id="enviar" class="btn btn-danger" data-dismiss="modal" >Descargar</button>
                                            <!-- <a href="pdf.php" target="_blank">Descargar</a> -->
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <?php include_once '../footer.php'; ?>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
</body>