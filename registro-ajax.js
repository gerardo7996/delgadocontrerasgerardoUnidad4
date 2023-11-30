//Realizamos el registro mediante el manejo de las peticiones con Ajax
$(document).ready(function() {
	$('#register_form').submit(function(e) {
		e.preventDefault();

		var user = $('#username').val();
		var emailuser = $('#emailuser').val();
		var password = $('#pswd').val();
		var status = $('#estatus').val();

		if ($('#username').val() == "") {
			Swal.fire({
                icon: 'warning',
                title: '¡Usuario Vacío!',
                text: '¡Escribe un nombre de usuario!',
                showConfirmButton: true,
                confirmButtonColor: '#B71C1C',
                confirmButtonText: '<i class="bi bi-check-circle-fill" style="margin-right:7.5px;"></i>Aceptar'
            })
            return false;
		} else if ($('#emailuser').val() == "") {
			Swal.fire({
                icon: 'warning',
                title: '¡Correo Vacío!',
                text: '¡Escribe un correo electrónico!',
                showConfirmButton: true,
               	confirmButtonColor: '#B71C1C',
                confirmButtonText: '<i class="bi bi-check-circle-fill" style="margin-right:7.5px;"></i>Aceptar'
            })
            return false;
		} else if ($('#pswd').val() == "") {
			Swal.fire({
                icon: 'warning',
                title: '¡Contraseña Vacía!',
                text: '¡Escribe una contraseña!',
                showConfirmButton: true,
                confirmButtonColor: '#B71C1C',
                confirmButtonText: '<i class="bi bi-check-circle-fill" style="margin-right:7.5px;"></i>Aceptar'
            })
            return false;
		} else {
			//Realizamos la petición del registro mediante Ajax
			$.ajax({
				type: "POST",
				url: "back-registro.php",
				data: { username: user, email: emailuser, psw: password, activo: status },
				success: function(response) {
					if (response == 1) {
						Swal.fire(
							'¡Error en registrar!',
							'Surgió un error y los datos no se registraron',
							'error'
						).then(() => {
                            window.location.href = 'registro.php';
                            $('#username').val('');
                            $('#emailuser').val('');
                            $('#pswd').val('');
                        })
					} else {
						Swal.fire(
							'¡Registro completado!',
							'El usuario fue registrado con éxito',
							'success'
						).then(() => {
							window.location.href = 'index.php';
                            $('#username').val('');
                            $('#emailuser').val('');
                            $('#pswd').val('');
						})
					}
				}
			});
			return false;
		}
	});
});