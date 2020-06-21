<!-- ========================== Vista de registro de empresa en el panel de profesor ========================== -->
<?php

require_once '../../controlador/sesiones.php';
include_once '../header.php';
require_once '../../controlador/conexion.php';

if (isset($_SESSION["usuario"])) {
    $nombre = $_SESSION['usuario'];
    if(isset($_SESSION['rol']) != 'Profesor'){
        header('Location: index.php');
    }
}

?>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <?php require_once 'menuProfesor.php'; ?>
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
                                <a class="dropdown-item" href="Perfil_profesor">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i> Configuraci&oacute;n
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Cerras Sesi&oacute;n
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-900"><strong>Asignaci&oacute;n</strong></h1>
                    </div>
                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-4">
                                    <h6 class="m-0 font-weight-bold text-primary">Crear asignaci&oacute;n</h6>
                                </div>
                                <div class="card-body">
                                    <form  class="user" id="FormCrearConvenio" method="POST" action="../../modelo/convenio.php">
                                        <p>Crear asignaci&oacute;n entre estudiante y empresa.</p>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <!-- Basic Card Example -->
                                                <select class="browser-default custom-select" id="estudianteConvenio" name="estudianteConvenio" >
                                                    <option>Seleccione el estudiante</option>
                                                    <?php
                                                    try {
                                                        require_once '../../controlador/conexion.php';
                                                        $sql = "SELECT persona.nombre, estudiante.codigo FROM persona INNER JOIN estudiante ON persona.cedulanit = estudiante.cedula order by persona.nombre asc";
                                                        $resultado = $conexion->query($sql);
                                                    } catch (Exception $e) {
                                                        $error = $e->getMessage()();
                                                        echo $error;
                                                    }

                                                    while ($estudiante = mysqli_fetch_array($resultado)) { ?>
                                                        <option value="<?php echo $estudiante['codigo']?>"><?php echo $estudiante['codigo'] . ' - ' . $estudiante['nombre']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <!-- Basic Card Example -->
                                                <select class="browser-default custom-select" id="empresaConvenio" name="empresaConvenio" >
                                                    <option>Seleccione la empresa</option>
                                                    <?php
                                                    try {
                                                        require_once '../../controlador/conexion.php';
                                                        $sql = "SELECT persona.nombre, empresa.nit FROM persona INNER JOIN empresa ON persona.cedulanit = empresa.nit order by persona.nombre asc";
                                                        $resultado = $conexion->query($sql);
                                                    } catch (Exception $e) {
                                                        $error = $e->getMessage()();
                                                        echo $error;
                                                    }

                                                    while ($estudiante = mysqli_fetch_array($resultado)) { ?>
                                                        <option value="<?php echo $estudiante['nit']?>"><?php echo $estudiante['nit'] . ' - ' . $estudiante['nombre']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4"></div>
                                            <div class="col-lg-4 col-md-4" style="text-align: center;">
                                                <button type="submit" class="btn btn-danger"  data-dismiss="modal">Crear</button>
                                            </div>
                                            <div class="col-lg-4 col-md-4"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Asociaciones registradas</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead class="p-3 bg-gray-700 text-white">
                                                <tr>
                                                    <th>ID Codigo</th>
                                                    <th>Estudiante</th>
                                                    <th>Empresa</th>
                                                    <th>Fecha inicio practicas</th>
                                                    <th>Eliminar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                try {
                                                    require_once '../../controlador/conexion.php';
                                                    $sql = "SELECT crear_convenio.id_convenio, p1.nombre AS estudiante, p2.nombre AS empresa, fechaConvenio FROM crear_convenio 
                                                    INNER JOIN estudiante ON estudiante.codigo = crear_convenio.estudiante INNER JOIN persona p1 ON p1.cedulanit = estudiante.cedula
                                                    INNER JOIN empresa ON crear_convenio.empresa = empresa.nit INNER JOIN persona p2 ON p2.cedulanit = empresa.nit";
                                                    $resultado = $conexion->query($sql);
                                                } catch (Exception $e) {
                                                    $error = $e->getMessage()();
                                                    echo $error;
                                                }

                                                while ($profesor = $resultado->fetch_assoc()) { ?>
                                                    <tr>
                                                        <td><?php echo $profesor['id_convenio']; ?></td>
                                                        <td><?php echo $profesor['estudiante'] ?></td>
                                                        <td><?php echo $profesor['empresa'] ?></td>
                                                        <td><?php echo $profesor['fechaConvenio'] ?></td>
                                                        <td>
                                                            <a href="#" onclick="eliminarAsociacion('<?php echo $profesor['id_convenio'] ?>')" class="btn btn-danger btn-icon-split">
                                                                <span class="icon text-white-50">
                                                                    <i class="fas fa-trash"></i>
                                                                </span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Page Wrapper -->
            <?php include_once '../footer.php'; ?>
        </div>
    </div>
</body>