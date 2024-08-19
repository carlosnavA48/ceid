<head>
        <title>Nuevo Usuario</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    </head>
    
    <?php
    include("conexion.php");

    //Paso 1.
    $consulta = "SELECT * FROM clientes";

    //Paso 2.
    $query = $bd->prepare($consulta);

    //Paso 3.
    $query->execute();

    //Paso 4. Traer la información de la cosulta
    $clientes = $query->fetchAll();

    
//    echo "<pre>";
//    print_r($usuarios);
//    echo "</pre>";

    //echo $usuarios[1]["correo"];
?>

<html>
    <br><br>
    <h1 style="background-color:purple;">Ingresar Nuevo Cliente</h1>
    <head>
        <title>Ver clientes</title>
        <meta charset="utf-8">
        
        <!--   Jquery     -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        
        <!--  Bootstrap      -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        
        <style>
            
            body{
                padding: 20px;
            }
            
            tr{
              text-align: center;
            }
            
            .icon-borrar{
                width: 20px;
                cursor: pointer;
            }
            
            .icon-edit{
                width: 30px;
                cursor: pointer;
            }
        </style>
    </head>
    
    <body>
        
    <h1>Lista de clientes</h1>
        
        <table border="2" class="table table-striped">
            <tr>
            
                <td>Nombre</td>
                <td>apellido</td>
                <td>email</td>
                <td>telefono</td>
                <td>Editar</td>
                <td>Borrar</td>
            </tr>
            
            <?php 
                for($x=0; $x < count($clientes); $x++){
            ?>  
                <tr>
                
                    <td><?php echo $clientes[$x]["nombre"]; ?></td>
                    <td><?php echo $clientes[$x]["apellido"]; ?></td>
                    <td><?php echo $clientes[$x]["email"]; ?></td>
                    <td><?php echo $clientes[$x]["telefono"]; ?></td>
                    <td>
                            <img class="icon-edit" src="img/edit.png" usid="<?php echo $clientes[$x]["cliente_id"] ?>">
                    </td>
                    <td>
                        <img class="icon-borrar" src="img/delete.png" usid="<?php echo $clientes[$x]["cliente_id"] ?>">
                    </td>
                </tr>
            <?php
                }
            ?>
            
        </table>
        
        <body>
        
        
        <br><br>
    
        <script>
            
            $(".icon-edit").click(function(){
               
                var cliente_id = $(this).attr("usid");
                
                window.location = "editar.php?cliente_id=" + cliente_id;
                
            });
            
            $(".icon-borrar").click(function(){
                
                var cliente_idx = $(this).attr("usid");
                
                if(confirm("Estas seguro qué deseas elimar al usuario?")){ 
                    window.location = "eliminar.php?cliente_id=" + cliente_idx; 
                }
                
            });
        
            
         
        
        </script>
    </body>
    


        </section>
        
        </script>

