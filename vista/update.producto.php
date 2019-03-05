<!DOCTYPE html>
<html>
<head>
    
    <title>Actualizar Producto</title>
 
    <link rel="stylesheet" type="text/css" href="css/estilo_formulario.css">

</head>
<body>

    <div class="login">

        <h1>Editar producto</h1>

        <form action="index.php" method="get">

            <input type="hidden" name="mod" value="producto" />
            <input type="hidden" name="ope" value="update" />
            <input type="hidden" name="idProducto" value="<?=$idProducto?>" />
            <input type="hidden" name="nombre" value="<?= $nombre ?>"/>

    
            <label for="precio">Precio de <?= $nombre ?>:</label>
            <input id="precio" name="precio" type="text" value="<?= $precio ?>"/>
            <br>
            
            <input type="submit" value="Editar producto" class="btn btn-primary btn-block btn-large"/>
        </form>
    </div>
</body>
</html>