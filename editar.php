<?php

    include("conexion.php");

    //print_r($_GET);

    $cliente_id = $_GET["cliente_id"];

    $consulta = "SELECT * FROM clientes WHERE cliente_id = " . $cliente_id;

    $query = $bd->prepare($consulta);
    $query->execute();

    $clientes = $query->fetchAll();

//    echo "<pre>";
//    print_r($usuario);
//    echo "</pre>";

    //echo $usuario[0]["nombre"];

?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Editar Usuario</title>
        <!--  Bootstrap      -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">
        
        <style>
             body{
                padding: 20px;
            }
        </style>
        
    </head>
    
    <body>
        
        <h1>Editar Usuario</h1>
        
        <form action="editar_respuesta.php" method="post">
            <div>Nombre</div>
            <input type="text" name="nombre" value="<?php echo $clientes[0]["nombre"]; ?>"><br><br>
            
            <div>apellido</div>
            <input type="text" name="apellido" value="<?php echo $clientes[0]["apellido"]; ?>"><br><br>
            
            <div>correo</div>
            <input type="text" name="email" value="<?php echo $clientes[0]["email"]; ?>"><br><br>
            
            <div>telefono</div>
            <input type="text" name="telefono" value="<?php echo $clientes[0]["telefono"]; ?>"><br><br>
            
            <input type="hidden" name="cliente_id" value="<?php echo $clientes[0]["cliente_id"]; ?>">
            
            <button>Modificar Usuario</button>
            
        </form>
    
    </body>
    
</html>
