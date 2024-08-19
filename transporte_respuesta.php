<?php
    
    include("conexion.php");

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $id = $_POST["transporte_id"];
    $guy = $_POST["tipo"];
    $description = $_POST["descripcion"];

    //Primer Paso - Generar la consulta
    $consulta = "INSERT INTO transporte (transporte_id, tipo, descripcion) VALUES ( '".$id."','".$guy."','".$description."')";

    //Segundo Paso - Prepara la consulta
    $query = $bd->prepare($consulta);

    //Tercer Paso - Ejecutar la consulta
    $query->execute();

    header("Location:reservatra.php");

?>