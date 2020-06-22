<!-- ========================== Vista de registro de empresa en el panel de administrador ========================== -->

<?php

require_once '../../controlador/sesiones.php';
include_once '../header.php';
require_once '../../controlador/conexion.php';

$nombre = $_SESSION['usuario'];

?>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <?php require_once 'menuEstudiante.php'; ?>
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
                                <a class="dropdown-item" href="#">
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
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-900"><strong>Practica y evaluaci&oacute;n</strong></h1>
                    </div>
                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-4">
                                    <h6 class="m-0 font-weight-bold text-primary">Documentaci&oacute;n</h6>
                                </div>
                                <div class="card-body">
                                    <p>En los siguientes recuadros subir en formato PDF el ARL y el Plan de trabajo.</p>
                                    <!-- Cargar documentacion de ARL -->
                                    <h6 class="m-0 font-weight-bold text-danger">Cargar ARL</h6><br>
                                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-12 my-12 my-md-0 mw-100 navbar-search" style="width: 100%;" 
                                    name="formArlEstudiante" id="formArlEstudiante" method="POST" action="../../modelo/cargarARL.php" enctype="multipart/form-data">
                                        <div class="input-group">
                                            <input type="file" class="form-control bg-light border-0 small" id="arl-estudiante" name="arl-estudiante" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit">
                                                    <i class="fas fa-sm">Guardar</i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <br><br>
                                    <br>
                                    <!-- Cargar plan de trabajo -->
                                    <h6 class="m-0 font-weight-bold text-danger">Cargar Plan de trabajo</h6><br>
                                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-12 my-12 my-md-0 mw-100 navbar-search" style="width: 100%;" 
                                    name="formPlanEstudiante" id="formPlanEstudiante" method="POST" action="../../modelo/cargarPlanTrabajo.php" enctype="multipart/form-data">
                                        <div class="input-group">
                                            <input type="file" class="form-control bg-light border-0 small" id="plan-estudiante" name="plan-estudiante" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit">
                                                    <i class="fas fa-sm">Guardar</i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <br><br>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-4">
                                    <h6 class="m-0 font-weight-bold text-primary">Evaluaci&oacute;n</h6>
                                </div>
                                <div class="card-body">
                                    <p>En el siguiente recuadro subir en formato PDF la evaluaci&oacute;n de la empresa y del estudiante.</p>
                                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-12 my-12 my-md-0 mw-100 navbar-search" style="width: 100%;">
                                        <h6 class="m-0 font-weight-bold text-danger">Cargar ARL</h6><br>
                                        <div class="input-group">
                                            <input type="text" class="form-control bg-light border-0 small" placeholder="Descargar evaluación" aria-label="Search" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">
                                                    <i class="fas fa-sm">Descargar</i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <br><br>
                                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-12 my-12 my-md-0 mw-100 navbar-search" style="width: 100%;"
                                    name="fromEvidenciaEstudiante" id="fromEvidenciaEstudiante" method="POST" action="../../modelo/evidencia_estudiante.php" enctype="multipart/form-data">
                                        <h6 class="m-0 font-weight-bold text-danger">Cargar evaluación</h6><br>
                                        <div class="input-group">
                                            <input type="file" class="form-control bg-light border-0 small" id="evidencia-estudiante" name="evidencia-estudiante" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit">
                                                    <i class="fas fa-sm">Guardar</i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <?php include_once '../footer.php'; ?>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
</body>