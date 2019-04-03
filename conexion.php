<!-- archivo de conexión a la base de datos que se utilizara en la sección
de productos -->
<?php
	/*conexion con el servidor local, usuario, contraseña y la base de datos que
	se utilizara*/
	$conexion = new mysqli("localhost", "root", "", "k_pan");

	/*condición que ayudara a saber si la conexión con la base de datos fue exitosa*/
	if($conexion){
		echo "Conexion exitosa";
	}else{
		echo "no hay conexion";
	}
?>