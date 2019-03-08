
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/estilo_formulario.css">
</head>
<body>
  <br>

  <div class="registro">
    <h1>Registro de Usuario</h1>

    <form action="controlador.php" method="get" >

        <input type="hidden" name="mod" value="usuario"/>
        <input type="hidden" name="ope" value="insertar"/>

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" placeholder="Nombre" required="required"><br>

        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password" required="required"><br>

        <label for="telefono">Telefono</label>
        <input type="text" name="telefono" placeholder="Telefono"><br>

        <label for="direccion">Direccion</label>
        <input type="text" name="direccion" placeholder="Direccion"><br>

        <label for="cp">Codigo Postal</label>
        <input type="text" name="cp" placeholder="CodigoPostal"><br>

        <button type="submit" class="btn btn-primary btn-block btn-large">Registrar</button>  
     </form>  
  </div>

</body>
</html>