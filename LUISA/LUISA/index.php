<!DOCTYPE html>
<html lang="en">

<head>
    <title>FarmaSalud</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style-one.css">
     

    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
</head>

<body>
    <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-end">
                <div>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">bermudezluisa970@gmail.com</a>
                    <div>

                    </div>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">+57-311-586-5714</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->

    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="./index.php">
                FarmaSalud
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                    <li class="nav-item">
                            
                            <a class="nav-link" href="./index.php">Casa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./about.php">Acerca de nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./shop.php">Tienda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./contacto.php">Contacto</a>
                        </li>
                    </ul>
                </div>
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
    <!-- Close Header -->

    <!-- Start Banner Hero -->
    <div id="farmasalud_carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#farmasalud_carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#farmasalud_carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#farmasalud_carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/banner_img_001.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>FarmaSalud</b> Medicamentos para tu salud</h1>
                                <h3 class="h2">Esta es la farmacia más completa y confiable</h3>
                                <p>
                                    FarmaSalud es una farmacia online con acceso a mas de 1 millon de medicamentos, donde puedes realizar tu compra 
                                    y tu compra será enviada a tu dirección adquiere tu medicamento. 
                                    <a rel="sponsored" class="text-success" href="shop.php" target="_blank">mirar catalogo</a>. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/banner_img_002.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">CUIDADO DEL CORAZÓN</h1>
                                <h3 class="h2">Algo de esto es útil</h3>
                                <p>
                                Durante casi 25 años, miles de médicos en todo el estado de Utah han referido exclusivamente a pacientes a la 
                                Farmacia de compuestos del Centro de Medicina para sus medicamentos compuestos. Esto se debe a la combinación de  
                                <strong>excelente servicio</strong>, precio y calidad. En FarmaSalud, la calidad es primordial.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/banner_img_003.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">UNA FARMACIA MODERNA Y DE SERVICIO COMPLETO</h1>
                                <h3 class="h2">Cuidarte es nuestra misión </h3>
                                <p>
                                En FarmaSalud, creemos que la salud no es solo la ausencia de enfermedades, 
                                sino un estado de inmensa vitalidad. Nuestra misión es ayudarlo a sentirse mejor, vivir más tiempo y convertirse en lo mejor posible.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#farmasalud_carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#farmasalud_carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->

    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Categorias del mes</h1>
                <p>
                    Encontraras algunas de las categorias que ofrecemos
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./assets/img/category_img_01.jpeg" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3">Antibioticos</h5>
                <p class="text-center"><a class="btn btn-success" href="./shop.php" >Ir a la Tienda</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./assets/img/category_img_02.jpeg" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Analgésico</h2>
                <p class="text-center"><a class="btn btn-success" href="./shop.php" >Ir a la Tienda</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./assets/img/category_img_03.jpeg" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Anticonceptivo</h2>
                <p class="text-center"><a class="btn btn-success" href="./shop.php" >Ir a la Tienda</a></p>
            </div>
        </div>
    </section>
    <!-- End Categories of The Month -->


    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Producto destacado</h1>
                    <p>
                        Aqui encontraras nuestros productos desatacados
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="./assets/img/feature_prod_01.png" class="card-img-top" alt="..." width="414" height="310.5">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">$7.200</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Cetirizina</a>
                            <p class="card-text">
                            Indicado para el alivio de los síntomas nasales y oculares de la rinitis alérgica estacional y perenne, para el alivio de los síntomas de la urticaria crónica idiopática.
                            </p>
                            <p class="text-muted">Reseñas (24)</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="./assets/img/feature_prod_02.png" class="card-img-top" alt="..." width="414" height="310.5">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">$110.000</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Vitamina E</a>
                            <p class="card-text">
                                Nutriente liposoluble presente en muchos alimentos. En el cuerpo, actúa como antioxidante, al ayudar a proteger las células contra los daños causados por los radicales libres
                            </p>
                            <p class="text-muted">Reseñas (48)</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="./assets/img/feature_prod_03.png" class="card-img-top" alt="..." width="414" height="310.5">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">$25.050</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Losartán</a>
                            <p class="card-text">
                                Actúa bloqueando la acción de determinadas sustancias naturales que contraen los vasos sanguíneos, lo que permite que la sangre circule mejor y que el corazón bombee con mayor eficiencia.
                            </p>
                            <p class="text-muted">Reseñas (74)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Product -->


    <!-- Start Footer -->
    <footer class="bg-dark" id="footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">FarmaSalud</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                                Dirección: Cra. 1 #31-25, Quibdó, Chocó
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="+57-311-586-5714">Celuelar: +57-311-586-5714</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:bermudezluisa970@gmail.com">Correo: bermudezluisa970@gmail.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Productos</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">- Analgésico (contra el dolor)</a></li>
                        <li><a class="text-decoration-none" href="#">- Anestésico (para adormecer a los pacientes en cirugía)</a></li>
                        <li><a class="text-decoration-none" href="#">- Ansiolítico (contra la ansiedad)</a></li>
                        <li><a class="text-decoration-none" href="#">- Antibiótico (contra las infecciones bacterianas)</a></li>
                        <li><a class="text-decoration-none" href="#">- Anticolinérgico (con efectos sobre el sistema nervioso)</a></li>
                        <li><a class="text-decoration-none" href="#">- Anticonceptivo (para prevenir el embarazo)</a></li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Información adicional</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="./index.php">Casa</a></li>
                        <li><a class="text-decoration-none" href="./about.php">Acerca de nosotros</a></li>
                        <li><a class="text-decoration-none" href="#">Ubicacion de la tienda</a></li>
                        <li><a class="text-decoration-none" href="#">Preguntas frecuentes</a></li>
                        <li><a class="text-decoration-none" href="./contacto.php">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>