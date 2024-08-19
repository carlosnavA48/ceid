<?php
    
    include("conexion.php");

    echo "<pre>";
    print_r($_GET);
    echo "</pre>";

    $transporte_id = $_GET["transporte_id"];

    $consulta = "DELETE FROM transporte WHERE transporte_id = " . $transporte_id;
   
    $query = $bd->prepare($consulta);

    $query->execute();

    header("Location:ver_tra.php");

?>