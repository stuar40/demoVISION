<?php 

//=========================INCIO del if del AJAXX===============================================================================================================================================================
if ($_POST) { 
    # code...
//Varaibles y archivos de conexion externos
include("../config/testconexion.php");



//=========================LISTA DE CONDICIONALES IF===============================================================================================================================================================
    
    //////////////////Funcion para guardar una nueva sucursal 
    if ($_POST['action']==='guardarProveedor'){
        $data2 = array();

        $idProveedor=$_POST['idProveedor'];
        $nombreProveedor=$_POST['nombreProveedor'];
        $nitProveedor=$_POST['nitProveedor'];
        $razonSocialProveedor=$_POST['razonSocialProveedor'];
        $telefono1Proveedor=$_POST['telefono1Proveedor'];
        $telefono2Proveedor=$_POST['telefono2Proveedor'];
        $emailProveedor=$_POST['emailProveedor'];
        $direccionProveedor=$_POST['direccionProveedor'];
        $ciudadProveedor=$_POST['ciudadProveedor'];
        $paisProveedor=$_POST['paisProveedor'];
        $descripcionProveedor=$_POST['descripcionProveedor'];
       
        $queryProveedor="Call INSERTnuevoProveedor( '$nombreProveedor', '$razonSocialProveedor', '$nitProveedor', '$direccionProveedor', 
                                                    '$ciudadProveedor', '$paisProveedor', '$emailProveedor', '$telefono1Proveedor', '$telefono2Proveedor',
                                                    '$descripcionProveedor') ";

            $resultado=mysqli_query($conexionbd,$queryProveedor);
            
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

     // Obtener datos PROVEEDORES
     if ($_POST['action'] == "obtener_datosProveedor" ) {
        # code...
       
        
        if (!empty($_POST['IDProveedor'])) {
            # code...
       
            $data = array();
            $IDProveedor = $_POST['IDProveedor'];
            $query_select = mysqli_query($conexionbd,"SELECT * FROM proveedor where idProveedor=$IDProveedor");
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
    if ($_POST['action'] == "editarProveedor" ) {
        # code...
        $data2 = array();
        $idProveedor=$_POST['idProveedor'];
        $nombreProveedor =$_POST['nombreProveedor'];
        $nitProveedor=$_POST['nitProveedor'];
        $razonSocialProveedor =$_POST['razonSocialProveedor'];
        $telefono1Proveedor=$_POST['telefono1Proveedor'];
        $telefono2Proveedor =$_POST['telefono2Proveedor'];
        $emailProveedor=$_POST['emailProveedor'];
        $direccionProveedor =$_POST['direccionProveedor'];
        $ciudadProveedor=$_POST['ciudadProveedor'];
        $paisProveedor =$_POST['paisProveedor'];
        $descripcionProveedor=$_POST['descripcionProveedor'];
        
        
        if (!empty($_POST['idProveedor'])) {
            # code...
            $sqlvalidarID= "SELECT * FROM proveedor where idProveedor =  $idProveedor";
            $res1=mysqli_query($conexionbd,$sqlvalidarID);
                        while ($data=mysqli_fetch_row($res1)){
                                                        $contador = $data[0];
                                                        }
                        if ($contador > 0)   {
                                            $queryUPDATE="Call UPDATEproveedor( '$idProveedor','$nombreProveedor', '$razonSocialProveedor', '$nitProveedor', '$direccionProveedor', 
                                            '$ciudadProveedor', '$paisProveedor', '$emailProveedor', '$telefono1Proveedor', '$telefono2Proveedor',
                                            '$descripcionProveedor') ";
                                           
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
    
} //=========================fin del if del AJAXX===============================================================================================================================================================

//===================fin del archivo ajaxKARDEX
?>