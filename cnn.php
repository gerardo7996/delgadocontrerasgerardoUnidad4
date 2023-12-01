<?php
	//Realizamos la clase conexión para conectarse a MySQL con PDO
	class Conexion extends PDO
	{
		//Asignamos las credenciales de la base de datos a utilizar
		private $tipo_de_base='mysql';
		private $host='localhost:3306';
		private $nombre_de_base='dwishu4';
		private $usuario='root';
		private $contrasena='';

		//Ahora, modificamos el método constructor de la clase PDO
		public function __construct()
		{
			//Vamos a utilizar el try-catch para manejar las excepciones de la conexión
			try 
			{
				//Aquí definimos las credenciales de la BD en el método constructor
				parent::__construct($this->tipo_de_base.':host='.$this->host.';dbname='.$this->nombre_de_base,$this->usuario,$this->contrasena);
			} 
			catch (PDOException $ex) 
			{
				//Si ocurrió una excepción en la conexión, mostramos el siguiente mensaje
                echo '<h5 style="font-family:Century Gothic; font-size:25px; color:#000000; text-align:center; font-weight:600;">Ha surgido un error y no se puede conectar a la B.D. DETALLE: '.$ex->getMessage().'</h5>'; 
                echo '<center><img src="img/" width="330px"></center><br>'; 
			}
		}
	}
?>