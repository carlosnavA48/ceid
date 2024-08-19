<?php
    
    include("conexion.php");

    echo "<pre>";
    print_r($_GET);
    echo "</pre>";

    $hotel_id = $_GET["hotel_id"];

    $consulta = "DELETE FROM hoteles WHERE hotel_id = " . $hotel_id;
   
    $query = $bd->prepare($consulta);

    $query->execute();

    header("Location:ver_hotel.php");

?>