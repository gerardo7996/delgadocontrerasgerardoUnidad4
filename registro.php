<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Título de la página -->
	<title>Registrar usuario</title>
	<!-- Icono de la página -->
	<link rel="shortcut icon" href="img/invitacion.png" type="image/x-icon">
	<!-- CDN Bootstrap 5.3.2 CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<!-- CDN Bootstrap Icons 1.11.2 CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
	<!-- Estilos de la página -->
	<link rel="stylesheet" href="registro.css">
</head>
<body>
	<div class="container w-75 bg-dark rounded shadow" style="background-image: url('img/grupo.png'); background-position: center left; background-size: contain; background-position-x: -23.5px;">
		<div class="row align-items-stretch">
			<div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6">
				
			</div>
			<div class="col bg-warning p-5 rounded-end">
				<div class="text-end">
					<img src="img/anadir-amigo.png" width="48" alt="">
				</div>
				<h2 class="fw-bold text-center py-2">Regístrate</h2>
				<!-- Formulario de registro -->
				<form id="register_form" method="POST">
					<div class="mb-4">
						<label for="username" class="form-label">Usuario</label>
						<div class="input-group flex-nowrap">
							<span class="input-group-text" id="addon-wrapping"><i class="bi bi-person-fill-add"></i></span>
							<input type="text" class="form-control" name="username" id="username" placeholder="Escribe un nombre de usuario" aria-label="username" aria-describedby="addon-wrapping">
						</div>
					</div>
					<div class="mb-4">
						<label for="emailuser" class="form-label">Correo Electrónico</label>
						<div class="input-group flex-nowrap">
							<span class="input-group-text" id="addon-wrapping"><i class="bi bi-envelope-at-fill"></i></span>
							<input type="email" class="form-control" name="emailuser" id="emailuser" placeholder="Escribe un correo electrónico" aria-label="emailuser" aria-describedby="addon-wrapping">
						</div>
					</div>
					<div class="mb-4">
						<label for="pswd" class="form-label">Contraseña</label>
						<div class="input-group flex-nowrap">
							<span class="input-group-text" id="addon-wrapping"><i class="bi bi-key-fill"></i></span>
							<input type="password" name="pswd" id="pswd" class="form-control" placeholder="Escribe una contraseña" aria-label="pswd" aria-describedby="addon-wrapping">
							<input type="hidden" class="form-control" name="estatus" id="estatus" value="1" aria-label="estatus" aria-describedby="addon-wrapping">
						</div>
					</div>
					<div class="d-grid">
                        <button type="submit" class="btn btn-outline-dark" name="registrar" id="registrar"><i class="bi bi-send-plus-fill"></i>¡Regístrate!</button>
                        <span style="margin-top: 10px;">¿Ya tienes cuenta?<a href="index.php">Inicia Sesión</a></span>
                    </div>
				</form>
			</div>
		</div>
	</div>
	<!-- Bootstrap 5.3.2 JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<!-- Popper JavaScript 2.11.8 -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
	<!-- Líbreria de jQuery 3.7.1 -->
	<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
	<!-- Líbreria de SweetAlert 2 11 -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
<!-- Petición de Ajax con JavaScript para el registro -->
<script type="text/javascript" src="registro-ajax.js"></script>