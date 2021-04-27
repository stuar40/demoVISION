<?php 

//=========================INCIO del if del AJAXX===============================================================================================================================================================
if ($_POST) { 
    # code...
//Varaibles y archivos de conexion externos
include("../config/testconexion.php");



//=========================LISTA DE CONDICIONALES IF===============================================================================================================================================================
    
    //////////////////Funcion para guardar una nueva sucursal 
    if ($_POST['action']==='guardarNuevoUsuario'){
        $data2 = array();

        // $idUsuario=$_POST['idUsuario'];
        $priNombreUsuario=$_POST['priNombreUsuario'];
        $segNombreUsuario=$_POST['segNombreUsuario'];
        $priApellidoUsuario=$_POST['priApellidoUsuario'];
        $segApellidoUsuario=$_POST['segApellidoUsuario'];
        $noIdentificacionUsuario=$_POST['noIdentificacionUsuario'];
        $sexoUsuario=$_POST['sexoUsuario'];
        $direccionUsuario=$_POST['direccionUsuario'];
        $telUsuario=$_POST['telUsuario'];
        $emailUsuario=$_POST['emailUsuario'];
        $nacimientoUsuario=$_POST['nacimientoUsuario'];
        $nombreUsuario=$_POST['nombreUsuario'];
        $passUsuario=$_POST['passUsuario'];
        $descripcionUsuario=$_POST['descripcionUsuario'];
        $estadoUsuario=$_POST['estadoUsuario'];
        $id_sueldoUsuario=$_POST['id_sueldoUsuario'];
        $id_comisionUsuario=$_POST['id_comisionUsuario'];
        $id_privilegiosUsuario=$_POST['id_privilegiosUsuario'];
        $id_horarioUsuario=$_POST['id_horarioUsuario'];
        $id_sucursalUsuario=$_POST['id_sucursalUsuario'];


       
        $queryNuevoUsuario="Call INSERTnuevoUsuario('$priNombreUsuario', '$segNombreUsuario', '$priApellidoUsuario', '$segApellidoUsuario',
            '$noIdentificacionUsuario', '$sexoUsuario', '$direccionUsuario', 
            '$telUsuario', '$emailUsuario', '$nacimientoUsuario',
            '$nombreUsuario', '$passUsuario', '$descripcionUsuario', '$estadoUsuario',
            '$id_sueldoUsuario', '$id_comisionUsuario', '$id_privilegiosUsuario', '$id_horarioUsuario', '$id_sucursalUsuario')";

            $resultado=mysqli_query($conexionbd,$queryNuevoUsuario);
            
            if($resultado){
        
                $data2='successful';
            
            }
            else {
            
            
                $data2='error';
            }
            echo json_encode($data2); //devuelve el resultado
            exit;
    

    } ////////////////////////////fin del if 
    //////////////////Funcion para guardar una COMISION de EMPLEADOS 
    if ($_POST['action']==='guardarComisionEmpleado'){
        $data2 = array();

        $comisionEmpleado=$_POST['comisionEmpleado'];
        $descripcionComisionEmpleado=$_POST['descripcionComisionEmpleado'];
        $estadoComisionEmpleado=$_POST['estadoComisionEmpleado'];
       
        $queryComisionEmpleado="Call INSERTcomisionEmpleado($comisionEmpleado,'$descripcionComisionEmpleado','$estadoComisionEmpleado') ";

            $resultado=mysqli_query($conexionbd,$queryComisionEmpleado);
            
            if($resultado){
        
                $data2='successful';
            
            }
            else {
            
            
                $data2='error';
            }
            echo json_encode($data2); //devuelve el resultado
            exit;
    

    } ////////////////////////////fin del if 


    
    //Editar TIPO Sueldo empleado 
    if ($_POST['action'] == "editarDatosSueldoEmpleado" ) {
        # code...
        $data2 = array();
        $IDsueldoEmpleado=$_POST['IDsueldoEmpleado'];
        $sueldoEmpleado =$_POST['sueldoEmpleado'];
        $descripcionSueldoEmpleado=$_POST['descripcionSueldoEmpleado'];
        $estadoSueldoEmpleado =$_POST['estadoSueldoEmpleado'];
        
        if (!empty($_POST['IDsueldoEmpleado'])) {
            # code...
            $sqlvalidarID= "SELECT * FROM sueldoempleado where idSueldoEmpleado =  $IDsueldoEmpleado";
            $res1=mysqli_query($conexionbd,$sqlvalidarID);
                        while ($data=mysqli_fetch_row($res1)){
                                                        $contador = $data[0];
                                                        }
                        if ($contador > 0)   {
                                            $queryUPDATE="CALL UPDATEsueldoEmpleado($IDsueldoEmpleado,$sueldoEmpleado,'$descripcionSueldoEmpleado','$estadoSueldoEmpleado')  ";
                                           
                                            $resultado=mysqli_query($conexionbd,$queryUPDATE);
                                            if($resultado){
                                                $data2='successful';
                                            }
                                            else {
                                                $data2='error';
                                                }
                                            }
                                     else{
                                            $data2 = 'error';
                                         }
                                            
                                         echo json_encode($data2); //devuelve el resultado
                                         exit;
        
            exit;
        }
    
    
    }
    ////////////////
    
    //Editar TIPO COMISION empleado 
    if ($_POST['action'] == "editarDatosComisionEmpleado" ) {
        # code...
        $data2 = array();
        $idComisionEmpleado=$_POST['idComisionEmpleado'];
        $comisionEmpleado =$_POST['comisionEmpleado'];
        $descripcionComisionEmpleado=$_POST['descripcionComisionEmpleado'];
        $estadoComisionEmpleado =$_POST['estadoComisionEmpleado'];
        
        if (!empty($_POST['idComisionEmpleado'])) {
            # code...
            $sqlvalidarID= "SELECT * FROM comisionempleado where idComisionEmpleado =  $idComisionEmpleado";
            $res1=mysqli_query($conexionbd,$sqlvalidarID);
                        while ($data=mysqli_fetch_row($res1)){
                                                        $contador = $data[0];
                                                        }
                        if ($contador > 0)   {
                                            $queryUPDATE="CALL UPDATEcomisionEmpleado($idComisionEmpleado,$comisionEmpleado,'$descripcionComisionEmpleado','$estadoComisionEmpleado')  ";
                                           
                                            $resultado=mysqli_query($conexionbd,$queryUPDATE);
                                            if($resultado){
                                                $data2='successful';
                                            }
                                            else {
                                                $data2='error';
                                                }
                                            }
                                     else{
                                            $data2 = 'error';
                                         }
                                            
                                         echo json_encode($data2); //devuelve el resultado
                                         exit;
        
            exit;
        }
    
    
    }
    /////////////
     // Obtener datos Sucursal
     if ($_POST['action'] == "obtener_datosUsuario" ) {
        # code...
       
        
        if (!empty($_POST['ID_Usuario'])) {
            # code...
       
            $data = array();
            $ID_Usuario = $_POST['ID_Usuario'];
            $query_select = mysqli_query($conexionbd,"SELECT * FROM usuario where idUsuario=$ID_Usuario");
            $num_rows = mysqli_num_rows($query_select);
        
                if ($num_rows > 0) {
                    # code...
                    $data=mysqli_fetch_assoc($query_select);
                    echo  json_encode($data, JSON_UNESCAPED_UNICODE);
                }else{
                    echo "error";
                }
        
            exit;
        }
    
    
    }
    /////////////
} //=========================fin del if del AJAXX===============================================================================================================================================================

//===================fin del archivo ajaxKARDEX
?>