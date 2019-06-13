
<!DOCTYPE html>
<html>
<head>
  <title>Registro</title>
  <link rel="stylesheet" type="text/css" href="css/form.css">
  <link href="css/business-casual.min.css" rel="stylesheet">
</head>
<body>
  
  <div class="wrapper fadeInDown">
      <div id="formContent">

        <h1>Registro</h1>

        <form action="controlador.php" method="GET">

          <input type="hidden" name="mod" value="usuario"/>
          <input type="hidden" name="ope" value="insertar"/>

          <input type="text" class="fadeIn second" name="nombre" placeholder="Usuario" required>
          <input type="password" class="fadeIn third" name="password" placeholder="Password" required>
          <input type="text" class="fadeIn third" name="telefono" placeholder="Telefono">
          <input type="text" class="fadeIn third" name="direccion" placeholder="Direccion">
          <input type="text" class="fadeIn third" name="cp" placeholder="Codigo Postal">

          <input type="submit" class="fadeIn fourth" value="Registrarse">
        </form>

        <div id="formFooter">
          <a class="underlineHover" href="controlador.php">Login</a>
          <a class="underlineHover" href="../Remo/index.php">Inicio</a>
        </div>

      </div>
	</div>
</body>
</html>