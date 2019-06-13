<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="css/form.css" rel="stylesheet">
	<link href="css/business-casual.min.css" rel="stylesheet">

	<!-- Custom fonts for this template -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/business-casual.min.css" rel="stylesheet">
	
</head>
<body>

	<div class="wrapper fadeInDown">
		
		<div id="formContent">

			<h1>Login</h1>
			
			<form action="controlador.php" method="GET">

				<input type="hidden" name="mod" value="usuario"/>
				<input type="hidden" name="ope" value="index"/>

				<input type="text" class="fadeIn second" name="nombre" placeholder="Usuario" required>
				<input type="password" class="fadeIn third" name="password" placeholder="Password" required>

				<input type="submit" class="fadeIn fourth" value="Iniciar Sesion">
			</form>

			<div id="formFooter">
				<a class="underlineHover" href="controlador.php?mod=usuario&ope=registro">Registro</a>
				<a class="underlineHover" href="../Remo/index.php">Inicio</a>
			</div>

		</div>
	</div>

</body>
</html>