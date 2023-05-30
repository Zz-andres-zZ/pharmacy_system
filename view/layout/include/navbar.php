<header>
    <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none sticky-top d-lg-block" id="nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between align-items-center">
                <div>
                    <p class="m-0">BIENVENIDO
                        <span class="ms-3"><?= isset($_SESSION['usuario']) ?></span>
                    </p>
                </div>
                <div>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">bermudezluisa970@gmail.com</a>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">+57-311-586-5714</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand text-success logo h1 align-self-center" href="welcome">FarmaSalud</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="align-self-center collapse navbar-collapse flex-fill d-lg-flex justify-content-lg-end" id="main_nav">
                <ul id="menu_top" class="nav navbar-nav d-flex justify-content-between justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link" href="welcome">Casa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-2" href="about">Acerca de nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-2" href="shop">Tienda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-2" href="contacto">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-2" href="logaut">Salir</a>
                    </li>
                </ul>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>