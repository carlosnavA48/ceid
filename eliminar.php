<?php
    
    include("conexion.php");

    echo "<pre>";
    print_r($_GET);
    echo "</pre>";

    $cliente_id = $_GET["cliente_id"];

    $consulta = "DELETE FROM clientes WHERE cliente_id = " . $cliente_id;
   
    $query = $bd->prepare($consulta);

    $query->execute();

    header("Location:ver_cliente.php");

?>