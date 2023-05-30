<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Registro</title>
    <base href="./">
    <link rel="stylesheet" href="view/auth/assets/css/estilos.css">
    <link rel="stylesheet" href="view/auth/assets/css/bootstrap.min.css">
</head>

<body>

    <main class="mt-3">
        <section id="auth">
            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button class="btn btn-primary" id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button class="btn btn-primary" id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="#" id="form_login" class="formulario__login " method="POST">
                        <h2>Iniciar Sesión</h2>
                        <input type="email" id="email" name="email" autofocus class="form-control field" placeholder="Correo Electronico">
                        <input type="password" id="password" name="password" class="form-control field" placeholder="Contraseña">
                        <input type="submit" class="btn btn-primary" id="login" value="Entrar">
                    </form>

                    <!--Register-->
                    <form action="#" id="form_register" class="formulario__register " method="POST">
                        <h2 class="mb-4">Regístrarse</h2>
                        <input type="text" class="form-control field" id="name" autofocus placeholder="Nombre completo" name="name">
                        <input type="email" class="form-control field" id="email" placeholder="Correo Electronico" name="email">
                        <input type="tel" class="form-control field" id="phone" placeholder="telefono" name="phone">
                        <input type="text" class="form-control field" id="direction" placeholder="Direccion" name="direction">
                        <input type="password" class="form-control field" id="password" placeholder="Contraseña" name="password">
                        <input type="submit" class="btn btn-primary" id="register" value="Regístrarse">
                    </form>
                </div>
            </div>
        </section>
    </main>

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="view/auth/assets/js/bootstrap.bundle.min.js"></script>
    <script src="view/auth/assets/js/script.js"></script>

</body>

</html>