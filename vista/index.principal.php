<?php  

    session_start();

    //Si la session no esta activa nos redirecciona al login
    if (!isset($_SESSION["nombre"])){
        header("location: controlador.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Productos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/principal.css">
    <script src="main.js"></script>
</head>

<body>
    <ul>
        <li><a href="controlador.php?mod=producto&ope=principal">Producto</a></li>
        <li><a href="controlador.php?mod=carrito&ope=index">Carrito</a></li>
        <li><a href="controlador.php?mod=usuario&ope=cerrar">Cerrar Sesion</a></li>
    </ul>

    <h1>Lista de Productos</h1>


    <table border="1">
    <tr>
            <th>Nombre</th> 
            <th>Precio</th> 
            <th>Descripcion</th> 
            <th>Foto</th> 
            
        </tr> 
    <?php
        foreach($datos as $item){
    ?>
        <tr>
           
            <td><?=$item->getNombre();?> </td>
            <td><?=$item->getPrecio();?> euros</td> 
            <td><?=$item->getDescripcion();?> </td>
            <td><?=$item->getFoto();?> </td>

          
           <td><a href="controlador.php?mod=carrito&ope=insertar&idProducto=<?=$item->getIdProducto();?>"> Añadir al Carrito</a></td>
        </tr>
        

    <?php
        }
    ?>
    </table>

</body>
</html>