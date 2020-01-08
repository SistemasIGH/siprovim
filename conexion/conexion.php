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