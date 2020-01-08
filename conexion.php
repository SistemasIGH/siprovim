<?php 
	
	$host = 'localhost';
	$user = 'root';
	$password = '';
	$db = 'sacmex';

	$conection = @mysqli_connect($host,$user,$password,$db);

	if(!$conection){
		echo "Error en la conexión";
	}

?>

<?php
$conn = new mysqli('localhost', 'root', '', 'sacmex') or die(mysqli_error());	
?>

<?php
     //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	$mysqli = new mysqli("localhost","root","","sacmex"); 
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>