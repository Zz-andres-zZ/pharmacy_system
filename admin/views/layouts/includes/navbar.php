<?php $url = (isset($_GET['urls']) ? $_GET['urls'] : "") ?>
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="dashboard">Sistema de Farmacia</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>
    <!-- Navbar-->
    <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user fa-fw"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
                <a class="dropdown-item" href="#">Configuración</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logaut">Salir</a>
            </div>
        </li>
    </ul>
</nav>
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <div class="sb-sidenav-menu">
                    <div class="nav">

                        <!--ADMINISTRACION  -->
                        <div class="sb-sidenav-menu-heading">ADMINISTRACION</div>
                        <a class="nav-link <?= ($url == "" ? "active" : "") ?>" href="dashboard">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>

                        <!-- INTERFACES -->
                        <div class="sb-sidenav-menu-heading">INTERFACES</div>
                        <a class="nav-link collapsed <?= ($url == "layout-static" ? "active" : "") ?>" href="#collapseLayouts" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-columns"></i>
                            </div>
                            Layouts
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div id="collapseLayouts" class="accordion-collapse collapse" data-bs-target="#collapseLayouts" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="layout-static">Static Navigation</a>
                            </nav>
                        </div>

                        <a class="nav-link collapsed" href="#pagesCollapseAuth" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="pagesCollapseAuth">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-columns"></i>
                            </div>
                            Paginas
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div id="pagesCollapseAuth" class="accordion-collapse collapse" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <!-- ONE -->
                                <a class="nav-link collapsed" href="#collapseAuthentic" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseAuthentic">
                                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                    Autenticaciones
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div id="collapseAuthentic" class="accordion-collapse collapse" data-bs-target="#collapseAuthentic" data-bs-parent="#pagesCollapseAuth">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="login">Login</a>
                                        <a class="nav-link" href="register">Registro</a>
                                        <a class="nav-link" href="password">Forgot Password</a>
                                    </nav>
                                </div>
                            </nav>
                        </div>

                        <!-- COMPLEMENTOS -->
                        <div class="sb-sidenav-menu-heading">COMPLEMENTOS</div>
                        <a class="nav-link" href="charts">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Graficos
                        </a>
                        <a class="nav-link" href="tables">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Registros
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Conectado como :
                <span class="ms-5 small">Administrador</span>
            </div>
            FarmaSalud
        </div>
    </nav>
</div>