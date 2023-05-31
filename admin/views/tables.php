<?php
/* session_start();
	require 'conexion.php';
	if(!isset($_SESSION['id'])){
		header("Location: index.php");
	}
	$id = $_SESSION['id'];
	$tipo_usuario = $_SESSION['tipo_usuario'];
	if($tipo_usuario == 1){
		$where = "";
		} else if($tipo_usuario == 2){
		$where = "WHERE id=$id";
	}
	$sql = "SELECT * FROM usuarios $where";
	$resultado = $mysqli->query($sql); */
?>

<div id="layoutSidenav">
	<?php require_once "views/layouts/includes/asside.php"; ?>
	<div id="layoutSidenav_content">
		<main id="table">
			<div class="container-fluid">
				<h1 class="mt-4">Tables</h1>
				<ol class="breadcrumb mb-4">
					<li class="breadcrumb-item">
						<a href="dashboard">Dashboard</a>
					</li>
					<li class="breadcrumb-item active">Tables</li>
				</ol>
				<div class="card mb-4">
					<div class="card-body">
						DataTables is a third party plugin that is used to generate the demo table below.
						For more information about DataTables, please visit the
						<a target="_blank" href="#">official DataTables documentation</a>.
					</div>
				</div>
				<div class="card mb-4">
					<div class="card-header">
						<i class="fas fa-table mr-1"></i>
						DataTable Example
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Usuario</th>
										<th>Password</th>
										<th>Nombre</th>
										<th>Tipo Usuario</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th>Usuario</th>
										<th>Password</th>
										<th>Nombre</th>
										<th>Tipo Usuario</th>
									</tr>
								</tfoot>
								<tbody>
									<?php while ($row = $resultado->fetch_assoc()) { ?>
										<tr>
											<td><?php echo $row['usuario']; ?></td>
											<td><?php echo $row['password']; ?></td>
											<td><?php echo $row['nombre']; ?></td>
											<td><?php echo $row['tipo_usuario']; ?></td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</main>
		<footer class="py-4 bg-light mt-auto">
			<?php require_once "layouts/includes/footasside.php"; ?>
		</footer>
	</div>
</div>