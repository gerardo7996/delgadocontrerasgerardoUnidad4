<!-- Backend para cerrar la sesión del sitio -->
<?php
	//Primero, iniciamos la sesión
	session_start();
	//Luego, destruimos la sesión por completo usando la función session_destroy() para cerrarla por completo
	session_destroy();
	//Manejamos el siguiente código de JavaScript para volver al login
	echo '<script type="text/javascript">
		window.location.href = "index.php";
	</script>';
?>