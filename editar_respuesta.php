<?php
    
    include("conexion.php");

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $name = $_POST["nombre"];
    $last = $_POST["apellido"];
    $email = $_POST["email"];
    $phone = $_POST["telefono"];
    $cliente_id = $_POST["cliente_id"];

    $consulta = "UPDATE clientes SET nombre = '" . $name . "', apellido = '" . $last. "', email = '" . $email . "', telefono = '" . $phone . "' WHERE cliente_id = " . $cliente_id;

    //echo $consulta;

    $query = $bd->prepare($consulta);

    $query->execute();

    header("Location:ver_cliente.php");

    
?>