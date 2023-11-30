<!-- BACK END PARA INICIAR SESIÓN EN EL SITIO -->
<?php
	//PRIMERO, INICIAMOS UNA SESIÓN EN EL SITIO
	session_start();
	//VALIDAMOS EL ENVÍO DEL FORMULARIO
	if (isset($_POST['loguear'])) {
		//LUEGO, NOS TRAEMOS LA CONEXIÓN A LA BASE DE DATOS CON PDO
		include ("cnn.php");
		//ENSEGUIDA NOS TRAEMOS LOS DATOS DEL FORMULARIO
		$username = $_POST['username'];
		$pswd = $_POST['pswd'];

		//VALIDAMOS QUE LOS CAMPOS NO ESTEN VACÍOS
		if (!empty($username) && !empty($pswd)) {
			//ENSEGUIDA, CREAMOS LA VARIABLE DE CONEXIÓN A LA BASE DE DATOS
			$cnnPDO = new Conexion();
			//MANEJAREMOS LA SIGUIENTE SENTENCIA SQL PARA CONSULTAR LOS DATOS EN LA TABLA
			$query=$cnnPDO->prepare("SELECT * FROM dwishu4_usuarios WHERE username=:user AND pswd=:pass");
			//ASIGNAMOS EL CONTENIDO DE LAS VARIABLES A LOS PARÁMETROS
			$query->bindParam(':user',$username);
			$query->bindParam(':pass',$pswd);
			//EJECUTAMOS LA SENTENCIA SQL DE LA VARIABLE $query
			$query->execute();
			//VAMOS A REALIZAR UN COUNT A LA TABLA PARA VERIFICAR SI LOS DATOS EXISTEN
			$count=$query->rowCount();
			//FILTRAMOS LOS DATOS DE LA TABLA EN EL SITIO
			$row=$query->fetch(PDO::FETCH_ASSOC);
			//AHORA, VAMOS A REALIZAR EL INICIO DE SESIÓN EN EL SITIO
			if ($count>0) {
				//VAMOS A MANEJAR LA SESIÓN PARA CADA CAMPO DE LA TABLA
				$_SESSION['username']=$row['username'];
				$_SESSION['pswd']=$row['pswd'];
				//MANEJAMOS UN HEADER PARA REDIRECCIONAR A LA PÁGINA DE INICIO
				header("location:pagina-inicio.php");
			} else {
				//SI EL CONTADOR DA IGUAL A 0, MOSTRAMOS LO SIGUIENTE
				echo '<script type="text/javascript">
					alert("Verifica tus credenciales de acceso");
					window.location.href = "index.php";
				</script>';
			}
		}
	}
?>