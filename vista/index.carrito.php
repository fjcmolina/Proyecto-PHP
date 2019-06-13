<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Carrito</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.min.css" rel="stylesheet">
</head>
<body>

    <h1 class="site-heading text-center text-white d-none d-lg-block">
        <span class="site-heading-upper text-primary mb-3">Carrito</span>
    </h1>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
        <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">CLUB DEPORTIVO REMO LA ARAÑA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mx-auto">
            <li class="nav-item active px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="index.php">Inicio
                <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="controlador.php?mod=producto&ope=principal">Productos</a>
            </li>
            <li class="nav-item px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="controlador.php?mod=carrito&ope=index">Carrito</a>
            </li>
            <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="controlador.php?mod=usuario&ope=cerrar">Cerrar Sesion</a>
          </li>
            </ul>
        </div>
        </div>
    </nav>
    
    <table border="1">
        <tr>
            <th>Nombre</th> 
            <th>Precio</th> 
            <th>Cantidad</th> 
        </tr>
    

    <?php
        foreach($datos as $item){
    ?>
        <tr>
            <td><?=$item->getNombre();?> </td>
            <td><?=$item->getPrecio();?> </td>
            <td><?=$item->getCantidad();?> </td>
            
            <td> <a href="controlador.php?mod=carrito&ope=delete&idProducto=<?=$item->getIdProducto();?>" >Borrar</a> </td>
           
        </tr>
    <?php       
        }
    ?>  
    </table>
</body>
</html>