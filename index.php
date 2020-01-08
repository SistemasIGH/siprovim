<?php 
	
$alert = '';
session_start();
if(!empty($_SESSION['active']))
{
	header('location: sistema/');
}else{

	if(!empty($_POST))
	{
		if(empty($_POST['usuario']) || empty($_POST['clave']))
		{
			$alert = 'Ingrese su usuario y su calve';
		}else{

			require_once 'conexion/consulta_login.php';

		}

	}
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login | SACMEX</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- Bootstrap CSS --->
	
</head>
<body>
	<img src="img/Logo-cdmx.png" style="width: 350px; margin-left: 100px;">
	<section id="container" style="margin-top: -150px;">
		
		<form action="" method="post">
			
			
			<img src="img/sacmex.png" alt="Login">

			<input type="text" name="usuario" placeholder="Usuario">
			<input type="password" name="clave" placeholder="Contraseña" minlength="6" maxlength="15" required pattern="[A-Za-z0-9]+">
			<div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
			<input type="submit" value="INGRESAR">

		</form>

	</section>
</body>

</html>