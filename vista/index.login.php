<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/estilo_formulario.css">
</head>
<body>
	
	<div class="login">
		<h1>Login</h1>
		<form action="controlador.php" method="GET">
			<input type="hidden" name="mod" value="usuario"/>
			<input type="hidden" name="ope" value="index"/>
			<input type="text" placeholder="Usuario" name="nombre" required="required"/><br>
			<input type="password" placeholder="Password" name="password" required="required"/><br>
			<input type="submit" class="btn btn-primary btn-block btn-large" value="Iniciar Sesion"/>
			<br>
			
			<a href="controlador.php?mod=usuario&ope=registro" class="btn btn-primary btn-block btn-large">Registro</a>
		</form>
		
	</div>
</body>
</html>