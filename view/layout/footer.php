<!-- Start Footer -->
<footer class="bg-dark" id="footer">
    <div class="container">
        <div class="row m-0">
            <div class="col-md-4 pt-5">
                <h2 class="h2 text-success border-bottom pb-3 border-light logo">FarmaSalud</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li>
                        <i class="fas fa-map-marker-alt fa-fw"></i>
                        Dirección: Cra. 1 #31-25, Quibdó, Chocó
                    </li>
                    <li>
                        <i class="fa fa-phone fa-fw"></i>
                        <a class="text-decoration-none" href="+57-311-586-5714">Celular: +57-311-586-5714</a>
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
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery-1.11.0.min.js"></script>
<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="assets/js/fontawesome.min.js" crossorigin="anonymous"></script>
<script src="assets/js/app.js"></script>
<script src="assets/js/custom.js"></script>
<!-- End Script -->

<!-- Start Slider Script -->
<script src="assets/js/slick.min.js"></script>
<script>
    $('#carousel-related-product').slick({
        infinite: true,
        arrows: false,
        slidesToShow: 4,
        slidesToScroll: 3,
        dots: true,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 3
                }
            }
        ]
    });
</script>

<!-- End Slider Script -->

</body>

</html>