<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Título de la página -->
	<title>Página Principal</title>
	<!-- Icono de la página -->
	<link rel="shortcut icon" href="img/sitio-web.png" type="image/x-icon">
	<!-- CDN Bootstrap 5.3.2 CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<!-- CDN Bootstrap Icons 1.11.2 CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
	<!-- CDN Bootstrap DataTables 1.13.7 CSS -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
	<!-- Estilos de la página -->
	<link rel="stylesheet" href="inicio.css">
</head>
<body class="sb-nav-fixed">
	<nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <span class="navbar-brand">DWI Saber Hacer U4</span>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
                        <a class="nav-link" href="info-desarrolladores.php">Sobre Nosotros</a>
                    </li>
				</ul>
			</div>
            <a class="d-flex btn btn-outline-warning" href="back-logout.php"><i class="bi bi-backspace"></i><strong>Cerrar Sesión</strong></a>
        </div>
    </nav>
    <br><br>
	<div class="container-fluid bg-white rounded shadow"><br>
		<center>
			<img src="img/seguidores.png" class="registers-icon">
		</center>
		<h4 class="fw-bold text-center">Tabla de usuarios registrados</h4><hr>
		<h5 class="mt-3">En esta tabla se muestran los detalles de los usuarios registrados en el sitio</h5>
		<!-- Tabla de usuarios registrados -->
		<div class="table-resposive">
			<table class="table table-bordered table-stripped" id="tblUsuarios" style="width: 100%;">
				<thead>
					<tr>
						<th scope="col" style="background-color: #E65100; color: whitesmoke;">ID_Usuario</th>
						<th scope="col" style="background-color: #E65100; color: whitesmoke;">Usuario</th>
						<th scope="col" style="background-color: #E65100; color: whitesmoke;">Correo Electrónico</th>
						<th scope="col" style="background-color: #E65100; color: whitesmoke;">Estatus</th>
						<th scope="col" style="background-color: #E65100; color: whitesmoke;">Acción</th>
					</tr>
				</thead>
				<tbody>
					<?php
						//Incluimos la conexión a la base de datos
						include ("cnn.php");
						//Creamos la variable de conexión
						$cnnPDO = new Conexion();
						//Mandamos a llamar la siguiente sentencia SQL para consultar los datos
						$query = "SELECT * FROM dwishu4_usuarios";
						//Preparamos la sentencia SQL
						$statement = $cnnPDO->prepare($query);
						//Después, ejecutamos la sentencia SQL
						$statement->execute();
						//Creamos una variable por medio del método de PDO::FETCH_OBJ
						$data = $statement->fetchAll(PDO::FETCH_OBJ);
						//Creamos un ciclo foreach para mostrar los datos de la tabla
						foreach ($data as $row):
					?>
					<tr>
						<th scope="row" style="color: #000000; font-weight: 600;"><?php echo $row->id_usuario; ?></th>
						<td><?php echo $row->username; ?></td>
						<td><?php echo $row->emailuser; ?></td>
						<td><?php echo $row->estatus; ?></td>
						<td><center>
							<a class="btn btn-danger" onclick="aceptar_borrado(<?php echo $row->id_usuario; ?>);"><i class="bi bi-trash-fill"></i></a>
						</center></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
			<br>
		</div>
	</div>
	<br><br>
    <section class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <span class="navbar-brand">Copyright @ 2023.</span>
            <a href="https://getbootstrap.com/" class="btn btn-outline-warning"><i class="bi bi-share-fill"></i>Sitio web oficial de Bootstrap</a>
        </div>
    </section>
	<!-- Bootstrap 5.3.2 JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<!-- Popper JavaScript 2.11.8 -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
	<!-- Líbreria de jQuery 3.7.1 -->
	<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
	<!-- Líbreria de SweetAlert 2 11 -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<!-- CDN DataTables JavaScript 1.13.7-->
	<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
	<!-- CDN Bootstrap DataTables JavaScript 1.13.7-->
	<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
</body>
</html>
<!-- Petición de Ajax para eliminar usuarios e iniciar la DataTable -->
<script type="text/javascript" src="eliminacion-ajax.js"></script>