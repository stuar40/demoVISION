<?php 

//=========================INCIO del if del AJAXX===============================================================================================================================================================
if ($_POST) { 
    # code...
//Varaibles y archivos de conexion externos
include("../config/testconexion.php");



//=========================LISTA DE CONDICIONALES IF===============================================================================================================================================================
    
    //////////////////Funcion para guardar una nueva sucursal 
    if ($_POST['action']==='guardarSueldoEmpleado'){
        $data2 = array();

        $sueldoEmpleado=$_POST['sueldoEmpleado'];
        $descripcionSueldoEmpleado=$_POST['descripcionSueldoEmpleado'];
        $estadoSueldoEmpleado=$_POST['estadoSueldoEmpleado'];
       
        $querySueldoEmpleado="Call INSERTsueldoEmpleado($sueldoEmpleado,'$descripcionSueldoEmpleado','$estadoSueldoEmpleado') ";

            $resultado=mysqli_query($conexionbd,$querySueldoEmpleado);
            
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

    //////////////////Funcion para guardar una HORARIO de EMPLEADOS 
    if ($_POST['action']==='guardarHorarioEmpleado'){
        $data2 = array();

        $nombreHorarioEmpleado=$_POST['nombreHorarioEmpleado'];
        $diasHorarioEmpleado=$_POST['diasHorarioEmpleado'];
        $rangoHorarioEmpleado=$_POST['rangoHorarioEmpleado'];
        $estadoHorarioEmpleado=$_POST['estadoHorarioEmpleado'];
       
        $queryHorarioEmpleado="Call INSERThorarioEmpleado('$nombreHorarioEmpleado','$diasHorarioEmpleado','$rangoHorarioEmpleado','$estadoHorarioEmpleado') ";

            $resultado=mysqli_query($conexionbd,$queryHorarioEmpleado);
            
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
    //Editar TIPO HORARIO empleado 
    if ($_POST['action'] == "editarDatosHorarioEmpleado" ) {
        # code...
        $data2 = array();
        $idHorarioEmpleado=$_POST['idHorarioEmpleado'];
        $nombreHorarioEmpleado =$_POST['nombreHorarioEmpleado'];
        $diasHorarioEmpleado=$_POST['diasHorarioEmpleado'];
        $rangoHorarioEmpleado =$_POST['rangoHorarioEmpleado'];
        $estadoHorarioEmpleado =$_POST['estadoHorarioEmpleado'];
        
        if (!empty($_POST['idHorarioEmpleado'])) {
            # code...
            $sqlvalidarID= "SELECT * FROM horario where idhorario =  $idHorarioEmpleado";
            $res1=mysqli_query($conexionbd,$sqlvalidarID);
                        while ($data=mysqli_fetch_row($res1)){
                                                        $contador = $data[0];
                                                        }
                        if ($contador > 0)   {
                                            $queryUPDATE="CALL UPDATEhorario($idHorarioEmpleado,'$nombreHorarioEmpleado','$diasHorarioEmpleado','$rangoHorarioEmpleado','$estadoHorarioEmpleado')  ";
                                           
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
} //=========================fin del if del AJAXX===============================================================================================================================================================

//===================fin del archivo ajaxKARDEX
?>