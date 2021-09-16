<?php
///////////////////////////////////////////////////////////////////////////////////////////////////
session_start();
$message="";
   include("config/testconexion.php"); // Estableciendo la conexion a la base de datos
   //$con = mysqli_connect('75.102.22.187','oonigyuo_estuardo','Eddy5795.','oonigyuo_testoptica') or die('Unable To connect');
       $result = mysqli_query($conexionbd,"SELECT * FROM usuario WHERE usuario='" . $_POST["username"] . "' and passUsuario = '". $_POST["password"]."'");
       $row  = mysqli_fetch_array($result);
       if(is_array($row)) {
       $_SESSION["id"] = $row['idUsuario'];
       $_SESSION["name"] = $row['usuario'];
       $_SESSION["tipoEmpleado"] = $row['TipoEmpleado_idTipoEmpleado'];
       echo 'entro busqueda';
       } else {
        $message = "Invalid Username or Password!";
        echo 'fallo busqueda';
       }

      
   
?>