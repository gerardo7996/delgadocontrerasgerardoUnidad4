<!-- Backend de registro a la base de datos -->
<?php
	//Primero, incluimos la conexión a la base de datos
	include ("cnn.php");
	//Luego, nos traemos los datos del formulario por medio de la petición de Ajax
	$username = $_POST['username'];
	$email = $_POST['email'];
	$pswd = $_POST['psw'];
	$status = $_POST['activo'];

	//Validamos que los campos no esten vacíos
	if (!empty($username) && !empty($email) && !empty($pswd) && !empty($status)) {
		//Creamos el objeto de conexión de MySQL
		$conexion = new Conexion();
		//Mandamos la siguiente sentencia SQL para realizar el registro
		$query = $conexion->prepare("INSERT INTO dwishu4_usuarios (username, emailuser, pswd, estatus) VALUES (:user, :emailuser, :pass, :status)");
		//Asignamos el contenido de las variables a los parámetros
		$query->bindParam(':user',$username);
        $query->bindParam(':emailuser',$email);
        $query->bindParam(':pass',$pswd);
        //Para insertar el estado del usuario, definimos el método PDO::PARAM_INT
        $query->bindParam(':status',$status,PDO::PARAM_INT);
        //Ejecutamos la sentencia SQL de la variable $query
        $query->execute();
        //Finalmente, enviamos la respuesta de la variable $query a la petición de Ajax
        $response = 2;
	}
	echo $response; //Aquí imprimimos el resultado de respuesta de la variable $response
?>