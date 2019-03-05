<!DOCTYPE html>
<html>
<head>
   
    <title> Nuevo Producto</title>
    <link rel="stylesheet" type="text/css" href="css/estilo_formulario.css">

    
</head>
<body>

    <div class="login">

        <h1>Crear producto</h1>

        <form action="index.php" method="get">

            <input type="hidden" name="mod" value="producto" />
            <input type="hidden" name="ope" value="crear" />

        
            <label for="nombre">Nombre:</label>
            <input id="nombre" name="nombre" type="text" value="" required />
            <br>
            <label for="precio">Precio:</label>
            <input id="precio" name="precio" type="text" value="" />
            <br>
            <input type="submit" class="btn btn-primary btn-block btn-large" value="Crear producto"/>
        </form>
    </div>
</body>
</html>