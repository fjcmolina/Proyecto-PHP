<!DOCTYPE html>
<html>
<head>
    
    <title>Actualizar Producto</title>
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

			<h1>Actualizar <?= $nombre ?></h1>
			
			<form action="controlador.php" method="GET">

                <input type="hidden" name="mod" value="producto" />
                <input type="hidden" name="ope" value="update" />

				<input type="hidden" class="fadeIn second" name="idProducto" value="<?=$idProducto?>">
				<input type="hidden" class="fadeIn third" name="nombre" placeholder="Precio" value="<?= $nombre ?>">

                <input type="text" class="fadeIn second" name="precio" value="<?=$precio?>">

				<input type="submit" class="fadeIn fourth" value="Actualizar Prodcuto">
			</form>

			<div id="formFooter">
				<a class="underlineHover" href="controlador.php">Panel de Administracion</a>
			</div>

		</div>
	</div>

</body>
</html>