<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="Perfil_administrador.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Administrador</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Usuarios
    </div>

    <!-- Nav Item - Teacher Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-user-circle"></i>
            <span>Profesor</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="Registrar_profesor.php">Registrar profesor</a>
                <a class="collapse-item" href="Visualizar_profesor.php">Visualizar profesor</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Student Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-user-graduate"></i>
            <span>Estudiante</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="Registrar_estudiante.php">Registrar estudiante</a>
                <a class="collapse-item" href="Visualizar_estudiante.php">Visualizar estudiante</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Student Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsCompany" aria-expanded="true" aria-controls="collapsCompany">
            <i class="fas fa-fw fa-building"></i>
            <span>Empresa</span>
        </a>
        <div id="collapsCompany" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="Registrar_empresa.php">Registrar empresa</a>
                <a class="collapse-item" href="Visualizar_empresa.php">Visualizar empresa</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Acciones
    </div>

    <!-- Nav Item - History -->
    <li class="nav-item">
        <a class="nav-link" href="Historial.php">
            <i class="fas fa-fw fa-chart-line"></i>
            <span>Historial</span>
        </a>
    </li>

    <!-- Nav Item - Configure -->
    <li class="nav-item">
        <a class="nav-link" href="Perfil_administrador.php">
            <i class="fas fa-fw fa-cog"></i>
            <span>Configuraci&oacute;n</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>