<?php  
	
	session_start();

	$nombre = $_SESSION["nombre"];
	
	if($nombre !== "admin"){
		if (isset($nombre)){
			header("Location: index.php?mod=producto&ope=principal");
		}
	}else{
		if (isset($nombre)){
			header("Location: index.php?mod=producto&ope=index");
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/estilo_formulario.css">
</head>
<body>
	
	<div class="login">
		<h1>Login</h1>
	<form action="index.php" method="GET">

		<input type="hidden" name="mod" value="usuario"/>
        <input type="hidden" name="ope" value="index"/>

		<input type="text" placeholder="Usuario" name="nombre" required="required"/><br>
		<input type="password" placeholder="Password" name="password" required="required"/><br>
		<input type="submit" class="btn btn-primary btn-block btn-large" value="Iniciar Sesion"/>
		<br>
		<a href="index.php?mod=usuario&ope=registro" class="btn btn-primary btn-block btn-large">Registro</a>
	</form>
</div>
</body>
</html>