<?php
require_once "app/model/conexion.php";

if (isset($_SESSION['login'])) {
    header("Location:welcome");
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Registro</title>
    <base href="./">
    <link rel="stylesheet" href="view/auth/assets/css/estilos.css">
</head>

<body>

    <main>
        <section id="auth">
            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="../../app/controller/user_login.php" class="formulario__login" method="POST">
                        <h2>Iniciar Sesión</h2>
                        <input type="email" name="email" placeholder="Correo Electronico">
                        <input type="password" name="password" placeholder="Contraseña">
                        <button>Entrar</button>
                    </form>

                    <!--Register-->
                    <form action="../../app/controller/user_register.php" class="formulario__register" method="POST">
                        <h2>Regístrarse</h2>
                        <input type="text" placeholder="Nombre completo" name="name">
                        <input type="email" placeholder="Correo Electronico" name="email">
                        <input type="tel" placeholder="telefono" name="phone">
                        <input type="text" placeholder="Direccion" name="direction">
                        <input type="password" placeholder="Contraseña" name="password">
                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <script src="view/auth/assets/js/script.js"></script>

</body>

</html>