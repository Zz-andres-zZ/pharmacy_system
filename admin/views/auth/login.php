<?php
/* session_start();
if ($_POST) {

	$usuario = $_POST['usuario'];
	$password = $_POST['password'];

	$sql = "SELECT id, password, nombre, tipo_usuario FROM usuarios WHERE usuario='$usuario'";
	//echo $sql;
	$resultado = $mysqli->query($sql);
	$num = $resultado->num_rows;

	if ($num > 0) {
		$row = $resultado->fetch_assoc();
		$password_bd = $row['password'];

		$pass_c = sha1($password);

		if ($password_bd == $pass_c) {

			$_SESSION['id'] = $row['id'];
			$_SESSION['nombre'] = $row['nombre'];
			$_SESSION['tipo_usuario'] = $row['tipo_usuario'];

			header("Location: principal.php");
		} else {
			echo "La contraseña no coincide";
		}
	} else {
		echo "NO existe usuario";
	}
}
require_once "apps/configs/config_login_admin.php";
if (isset($_SESSION['user_admin'])) {
    header("Location:welcome");
} */
?>

<div id="layoutAuthentication">
	<div id="layoutAuthentication_content">
		<main class="py-3">
			<div class="container py-5">
				<div class="row m-0 justify-content-center">
					<div class="col-lg-5">
						<div class="card shadow-lg border-0 rounded-lg mt-5">
							<div class="card-header">
								<h3 class="text-center font-weight-light my-4">ADMINISTRACION</h3>
							</div>
							<div class="card-body">
								<form method="POST" action="#">
									<div class="form-group">
										<label class="small mb-1" for="inputEmailAddress">Usuario</label>
										<input class="form-control" id="inputEmailAddress" name="usuario" type="text" placeholder="Enter email address">
									</div>
									<div class="form-group">
										<label class="small mb-1" for="inputPassword">Contraseña</label>
										<input class="form-control" id="inputPassword" name="password" type="password" placeholder="Enter password">
									</div>
									<div class="form-group">
										<div class="custom-control custom-checkbox">
											<input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
											<label class="custom-control-label" for="rememberPasswordCheck">Recordar contraseña</label>
										</div>
									</div>
									<div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
										<a class="small" href="password">¿Has olvidado tu contraseña?</a>
										<button type="submit" class="btn btn-primary">Login</button>
									</div>
								</form>
							</div>
							<div class="card-footer text-center">
								<div class="small">
									<a href="register">¿Necesitas una cuenta? ¡Inscribirse!</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>
</div>