<?php
    
    include("conexion.php");

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $name = $_POST["nombre"];
    $id = $_POST["destino_id"];
    $address = $_POST["direccion"];
    $category = $_POST["categoria"];
    $hotel_id = $_POST["hotel_id"];

    $consulta = "UPDATE hoteles SET nombre = '" . $name . "', destino_id = '" . $id. "', direccion = '" . $address . "', categoria = '" . $category . "' WHERE hotel_id = " . $hotel_id;

    //echo $consulta;

    $query = $bd->prepare($consulta);

    $query->execute();

    header("Location:ver_hotel.php");

    
?>