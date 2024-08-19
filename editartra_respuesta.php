<?php
    
    include("conexion.php");

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

   
    $guy = $_POST["tipo"];
    $description = $_POST["descripcion"];
    $transporte_id = $_POST["transporte_id"];

    $consulta = "UPDATE transporte SET  tipo = '" . $guy . "', descripcion = '" . $description . "' WHERE transporte_id = " . $transporte_id;

    //echo $consulta;

    $query = $bd->prepare($consulta);

    $query->execute();

    header("Location:ver_tra.php");

    
?>