<?php
    
    include("conexion.php");

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $name = $_POST["nombre"];
    $id = $_POST["destino_id"];
    $address = $_POST["direccion"];
    $category = $_POST["categoria"];

    //Primer Paso - Generar la consulta
    $consulta = "INSERT INTO hoteles (nombre, destino_id, direccion, categoria) VALUES ('".$name."', '".$id."','".$address."','".$category."')";

    //Segundo Paso - Prepara la consulta
    $query = $bd->prepare($consulta);

    //Tercer Paso - Ejecutar la consulta
    $query->execute();

    header("Location:reserva.php");

?>