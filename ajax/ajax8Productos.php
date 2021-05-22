<?php 

//=========================INCIO del if del AJAXX===============================================================================================================================================================
if ($_POST) { 
    # code...
//Varaibles y archivos de conexion externos
include("../config/testconexion.php");



//=========================LISTA DE CONDICIONALES IF===============================================================================================================================================================
    
    //////////////////Funcion para guardar una nueva sucursal 
    if ($_POST['action']==='guardarNuevoProducto'){
        $data2 = array();

        $idProducto=$_POST['idProducto'];
        $nombreProducto=$_POST['nombreProducto'];
        $skuProducto=$_POST['skuProducto'];
        $tipoProducto=$_POST['tipoProducto'];
        $marcaProducto=$_POST['marcaProducto'];
        $presentacionProducto=$_POST['presentacionProducto'];
        $estadoProducto=$_POST['estadoProducto'];
        $id_Categoria=$_POST['id_Categoria'];
        $descripcionProducto=$_POST['descripcionProducto'];
        $imagenProducto=$_POST['imagenProducto'];
        $precioCostoProducto=$_POST['precioCostoProducto'];
        $precioVentaProducto=$_POST['precioVentaProducto'];
        $precioPromoProducto=$_POST['precioPromoProducto'];
        $stockMinProducto=$_POST['stockMinProducto'];
        
       
        $QueryMySQL="Call INSERTnuevoProducto('$skuProducto', '$nombreProducto', '$tipoProducto ', 
        '$descripcionProducto', '$marcaProducto', '$presentacionProducto', 
        '$estadoProducto', $id_Categoria,
         '$stockMinProducto', '$precioVentaProducto', '$precioPromoProducto') ";

            $resultado=mysqli_query($conexionbd,$QueryMySQL);
            
            if($resultado){
                $data2=mysqli_fetch_assoc($resultado);
                //$data2='successful';
            
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
     if ($_POST['action'] == "obtener_datosProducto" ) {
        # code...
       
        
        if (!empty($_POST['IDProducto'])) {
            # code...
       
            $data = array();
            $ID = $_POST['IDProducto'];
            $query_select = mysqli_query($conexionbd,"SELECT * FROM producto where idProducto=$ID");
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
    if ($_POST['action'] == "editarProducto" ) {
        # code...
        $data2 = array();
        $idProducto=$_POST['idProducto'];
        $nombreProducto =$_POST['nombreProducto'];
        $skuProducto=$_POST['skuProducto'];
        $tipoProducto =$_POST['tipoProducto'];
        $marcaProducto=$_POST['marcaProducto'];
        $presentacionProducto =$_POST['presentacionProducto'];
        $estadoProducto=$_POST['estadoProducto'];
        $id_Categoria =$_POST['id_Categoria'];
        $descripcionProducto=$_POST['descripcionProducto'];
        $imagenProducto =$_POST['imagenProducto'];
        $precioCostoProducto=$_POST['precioCostoProducto'];
        $precioVentaProducto=$_POST['precioVentaProducto'];
        $precioPromoProducto=$_POST['precioPromoProducto'];
        $stockMinProducto=$_POST['stockMinProducto'];
        
        
        if (!empty($_POST['idProducto'])) {
            # code...
            $sqlvalidarID= "SELECT * FROM producto where idProducto =  $idProducto";
            $res1=mysqli_query($conexionbd,$sqlvalidarID);
                        while ($data=mysqli_fetch_row($res1)){
                                                        $contador = $data[0];
                                                        }
                        if ($contador > 0)   {
                                            $queryUPDATE="Call UPDATEproducto( $idProducto,'$skuProducto', '$nombreProducto', '$tipoProducto ',
                                             '$descripcionProducto', '$marcaProducto', '$presentacionProducto', '$estadoProducto',
                                             $id_Categoria,$stockMinProducto,'$precioVentaProducto','$precioPromoProducto') ";
                                           
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
    if ($_POST['action'] == "validarSKU" ) {
        # code...
     
        if(empty($_POST['skuProducto']) )//CONDIConal para que los campos no esten vacios
        {
            echo 'error';
        }else{
                    $skuProducto =$_POST['skuProducto'];
                    $data2 = array();
                    
                    $QueryMySQL="SELECT * FROM producto where skuProducto ='$skuProducto';";
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