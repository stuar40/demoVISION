<?php


// // PARTE 2
//    session_start();
//    include("config/testconexion.php"); // Estableciendo la conexion a la base de datos
   
   
//    // Guardando la sesion
//    $user_check=$_SESSION['login_user_sys'];
//    // SQL Query para completar la informacion del usuario
//    $ses_sql=mysqli_query($conexionbd, "select usuario from usuario where usuario='$user_check' ");
//    $row = mysqli_fetch_assoc($ses_sql);
//    $login_session =$row['usuario'];
//    echo ">Proceso seesion";
//    echo ">userckeck:";
//    echo $user_check;
//    echo ">SESSIONuser:";
//   echo  $_SESSION['login_user_sys'];
//    echo ">FINconsulta_seesion";

//    if(!isset($login_session)){
//    mysqli_close($conexionbd); // Cerrando la conexion
//    echo "Fallo en Session";
//    header('Location: index.php'); // Redirecciona a la pagina de inicio
   
//    }

   // PARTE1 
   // $user_check = $_SESSION['login_user'];
   
   // $ses_sql = mysqli_query($conexionbd, " SELECT usuario FROM usuario WHERE usuario = '$user_check' ");
   
   // $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   // $login_session = $row['usuario'];
   
   // if(!isset($_SESSION['login_user'])){
   //    header("location:index.php");
   //    die();
   // }


////PARTE3
   //session_start();
   if(!isset($_SESSION)){
      session_start();
     }
if (!isset($_SESSION['id']) ) {
   echo '<script type="text/javascript">window.location.href="index.php";</script>';   
  // header("location: ../index.php");
  exit;
      }
      
      if (isset($_SESSION['id']) AND $_SESSION['tipoEmpleado'] == 1) {
         echo '<script type="text/javascript">window.location.href="principal.php";</script>';
      //  header("location: ./principal.php");
    exit;
        }


        if (isset($_SESSION['id']) AND $_SESSION['tipoEmpleado'] == 2) {
         //echo '<script type="text/javascript">window.location.href="principal3.php";</script>';
       //  header("location:./principal3.php");
      exit;
          }

?>