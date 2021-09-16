<?php 

//=========================INCIO del if del AJAXX===============================================================================================================================================================
if ($_POST) { 
    # code...
//Varaibles y archivos de conexion externos
include("../config/conexion.php");



//=========================LISTA DE CONDICIONALES IF===============================================================================================================================================================
//////CARGAR

if ($_POST['action']==='login'){
    session_start();

     $data2 = array();

     //SELECT idUsuario,usuario,ciudadSucursal,passUsuario FROM usuario inner join sucursal on usuario.Sucursal_idSucursal=sucursal.idSucursal where usuario
     $result = mysqli_query($conexionbd,"SELECT idUsuario,priNombreUsuario,usuario,passUsuario,TipoEmpleado_idTipoEmpleado,Sucursal_idSucursal,ciudadSucursal FROM usuario inner join sucursal on usuario.Sucursal_idSucursal=sucursal.idSucursal where usuario='" . $_POST["nombreUsuario"] . "' and passUsuario = '". $_POST["passUsuario"]."'");
     $row  = mysqli_fetch_array($result);
     if(is_array($row)) {
     $_SESSION["id"] = $row['idUsuario'];
     $_SESSION["username"] = $row['usuario'];
     $_SESSION["tipoEmpleado"] = $row['TipoEmpleado_idTipoEmpleado'];
     $_SESSION["name"] = $row['priNombreUsuario'];
     $_SESSION["sucursalID"] = $row['Sucursal_idSucursal'];
     $_SESSION["ciudadSucursal"] = $row['ciudadSucursal'];
     $data2= $row['usuario'];
     } else {
     // $message = "Invalid Username or Password!";
      $data2='error';
     }
 
    
        echo json_encode($data2); //devuelve el resultado
        exit;
   

} //fin del if que consulta datos del asesor 

/////CARGAR

if ($_POST['action']==='insertarSesion'){
    session_start();

    $data2 = array();
    $myusername = $_POST['nombreUsuario'];
    
    
    $sql = "SELECT idUsuario FROM usuario WHERE usuario = '$myusername' ";
    $result = mysqli_query($conexionbd,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    
    // If result matched $myusername and $mypassword, table row must be 1 row
      
    if($count == 1) {
   
       $_SESSION['login_user'] = $myusername;
       $_SESSION['user_login_status']=$myusername;
       $_SESSION['user_id']=$myusername;
       $_SESSION['username']=$myusername;
       $NombredeUsuario=$_SESSION['username'];
       //echo "prueba4";
       //header("location: principal.php");
       $data2= 'successful';
    }else {
        
       $error = "Your Login Name or Password is invalid";
       $data2='error';
      
    }
    
        echo json_encode($data2); //devuelve el resultado
        exit;
   

} //fin del if que consulta datos del asesor 



//=========================FIN DE LISTA DE CONDICIONALES IF===============================================================================================================================================================
} //=========================fin del if del AJAXX===============================================================================================================================================================

//===================fin del archivo ajaxKARDEX
?>