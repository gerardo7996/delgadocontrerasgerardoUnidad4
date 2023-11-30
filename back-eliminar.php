<!-- Backend para eliminar a los usuarios -->
<?php
	//Primero, incluimos la conexión a la base de datos
	include ("cnn.php");
	//Traemos el id de cada usuario mediante la petición de Ajax
	$id_eliminar = $_POST['id'];
	//Creamos el objeto de conexión de MySQL
	$cnnPDO = new Conexion();
	//Ahora, mandamos a llamar la siguiente sentencia SQL para borrar al usuario
	$query = $cnnPDO->prepare("DELETE FROM dwishu4_usuarios WHERE id_usuario=:id");
	//Le asignamos al parámetro del ID el contenido de la variable
	$query->bindParam(':id',$id_eliminar);
	//Ejecutamos la sentencia SQL de la variable $query
	$query->execute(); 
?>