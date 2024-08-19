<?php
    
    include("conexion.php");

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $name = $_POST["nombre"];
    $last = $_POST["apellido"];
    $email = $_POST["email"];
    $phone = $_POST["telefono"];

    //Primer Paso - Generar la consulta
    $consulta = "INSERT INTO clientes (nombre, apellido, email, telefono) VALUES ('".$name."', '".$last."','".$email."','".$phone."')";

    //Segundo Paso - Prepara la consulta
    $query = $bd->prepare($consulta);

    //Tercer Paso - Ejecutar la consulta
    $query->execute();

    header("Location:nuevo.php");

?>