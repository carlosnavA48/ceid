<?php

    include("conexion.php");

    //print_r($_GET);

    $transporte_id = $_GET["transporte_id"];

    $consulta = "SELECT * FROM transporte WHERE transporte_id = " . $transporte_id;

    $query = $bd->prepare($consulta);
    $query->execute();

    $transporte = $query->fetchAll();

//    echo "<pre>";
//    print_r($usuario);
//    echo "</pre>";

    //echo $usuario[0]["nombre"];

?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Editar Transporte</title>
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
        
        <h1>Editar Transporte</h1>
        
        <form action="editartra_respuesta.php" method="post">
            
            <div>Tipo</div>
            <input type="text" name="tipo" value="<?php echo $transporte[0]["tipo"]; ?>"><br><br>
            
            <div>Descripcion</div>
            <input type="text" name="descripcion" value="<?php echo $transporte[0]["descripcion"]; ?>"><br><br>
            
            <input type="hidden" name="transporte_id" value="<?php echo $transporte[0]["transporte_id"]; ?>">
            
            <button>Modificar transporte</button>
            
        </form>
    
    </body>
    
</html>
