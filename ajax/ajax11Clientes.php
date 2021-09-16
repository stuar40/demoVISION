<?php 

//=========================INCIO del if del AJAXX===============================================================================================================================================================
if ($_POST) { 
    # code...
//Varaibles y archivos de conexion externos
include("../config/testconexion.php");



//=========================LISTA DE CONDICIONALES IF===============================================================================================================================================================
    
    //////////////////Funcion para guardar una nueva sucursal 
    if ($_POST['action']==='guardarNuevoCliente'){
        $data2 = array();

        $idCliente=$_POST['idCliente'];
        $nombreCliente=$_POST['nombreCliente'];
        $apellidoCliente=$_POST['apellidoCliente'];
        $nitCliente=$_POST['nitCliente'];
        $telCliente=$_POST['telCliente'];
        $emailCliente=$_POST['emailCliente'];
        $direccionCliente=$_POST['direccionCliente'];
        $sexoCliente=$_POST['sexoCliente'];
        $estadoCliente=$_POST['estadoCliente'];
        $idSucursal=$_POST['idSucursal'];
        
        
       
        $QueryMySQL="Call INSERTnuevoCliente('$nombreCliente','$apellidoCliente','$nitCliente', 
                                             '$telCliente','$emailCliente','$direccionCliente',
                                            '$sexoCliente','$estadoCliente','$idSucursal') ";

            $resultado=mysqli_query($conexionbd,$QueryMySQL);
            
            if($resultado){
                //$data2=mysqli_fetch_assoc($resultado);
                $data2='successful';
            
            }
            else {
            
            
                $data2='error';
            }
            echo json_encode($data2); //devuelve el resultado
            exit;
    

    } ////////////////////////////fin del if 
    //////////////////Funcion para guardar una COMISION de EMPLEADOS 
    if ($_POST['action']==='obtener_'){
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

     // Obtener datos PROVEEDORES
     if ($_POST['action'] == "obtener_datosCliente" ) {
        # code...
       
        
        if (!empty($_POST['nitCliente'])) {
            # code...
       
            $data = array();
            $nitCliente = $_POST['nitCliente'];
            $query_select = mysqli_query($conexionbd,"SELECT * FROM cliente where nitCliente=$nitCliente");
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

    
    //Editar TIPO Sueldo empleado 
    if ($_POST['action'] == "editarCliente" ) {
        # code...
        $data2 = array();
        $idCliente=$_POST['idCliente'];
        $nombreCliente=$_POST['nombreCliente'];
        $apellidoCliente=$_POST['apellidoCliente'];
        //$nitCliente=$_POST['nitCliente'];
        $telCliente=$_POST['telCliente'];
        $emailCliente=$_POST['emailCliente'];
        $direccionCliente=$_POST['direccionCliente'];
        $sexoCliente=$_POST['sexoCliente'];
        $estadoCliente=$_POST['estadoCliente'];
        $idSucursal=$_POST['idSucursal'];
        
        
        if (!empty($_POST['idCliente'])) {
            # code...
            $sqlvalidarID= "SELECT * FROM cliente where idCliente =  $idCliente";
            $res1=mysqli_query($conexionbd,$sqlvalidarID);
                        while ($data=mysqli_fetch_row($res1)){
                                                        $contador = $data[0];
                                                        }
                        if ($contador > 0)   {
                                            $queryUPDATE="Call UPDATECliente($idCliente,'$nombreCliente', '$apellidoCliente', 
                                                                                    $telCliente, '$emailCliente', 
                                                                                    '$direccionCliente', '$sexoCliente','$estadoCliente',
                                                                                    $idSucursal)";
                                           
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
    
    //////////// Validar SKU Duplicado 
    if ($_POST['action'] == "validarNIT" ) {
        # code...
     
        if(empty($_POST['nitCliente']) )//CONDIConal para que los campos no esten vacios
        {
            echo 'error';
        }else{
                    $nitCliente =$_POST['nitCliente'];
                    $data2 = array();
                    
                    $QueryMySQL="SELECT nitCliente FROM cliente where nitCliente='$nitCliente';";
                     $resultado=mysqli_query($conexionbd,$QueryMySQL);
                    
                     $numFILAS =mysqli_num_rows($resultado);
                        if ($numFILAS>0){
                                            $data2='repetido';
                                        }else{//condicional que nos indica si hay valores den el temporal
                                                $data2='unico';
                                                //echo "error response";
                                             }
                               
                                echo json_encode($data2); //devuelve el resultado
                                mysqli_close($conexionbd);
                                exit;
                    
                     
                     
         exit; }
    }/////////// fin Validar SKU

    
} //=========================fin del if del AJAXX===============================================================================================================================================================

//===================fin del archivo ajaxKARDEX
?>