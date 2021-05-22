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
     // Obtener datos PROVEEDORES
     if ($_POST['action'] == "infoSKUProductoCompra" ) {
        # code...
        if (!empty($_POST['skuProducto'])) {
            # code...
            $data = array();
            $ID = $_POST['skuProducto'];
            $query_select = mysqli_query($conexionbd,"SELECT idProducto,nombreProducto,skuProducto,precioVentaProducto FROM producto where skuProducto= '$ID'");
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

     // addDetalleCOMPRA TEMPORAL
    if ($_POST['action'] == "addProductoDetalleCompra" ) {
        # code...
       
        
        if(empty($_POST['idProductoCompra']) OR empty($_POST['costoProductoCompra']) OR empty($_POST['cantidadProductoCompra']) )//CONDIConal para que los campos no esten vacios
        {
            echo 'error';
        }else{
                    $skuProducto =$_POST['skuProducto'];
                    $idProductoCompra =$_POST['idProductoCompra'];
                    $cantidadProductoCompra =$_POST['cantidadProductoCompra'];
                    $costoProductoCompra =$_POST['costoProductoCompra'];
                    $nombreSucursal =$_POST['nombreSucursal'];
                    $nombreUsuario =$_POST['nombreUsuario'];
                    $tipoMovimiento =$_POST['tipoMovimiento'];
                    
                    $QueryMySQL="Call INSERTdetalleTemp('$tipoMovimiento', $idProductoCompra, $cantidadProductoCompra ,
                                                        $costoProductoCompra, '$nombreUsuario', $nombreSucursal)";

                    $resultado=mysqli_query($conexionbd,$QueryMySQL);
                    $numFilas=mysqli_num_rows($resultado);
                    
                    $detalleTabla='';
                    $iva=0;
                    $subTotal=0;
                    $total=0;
                    $arrayData=array();
                    
                    if($numFilas>0){ //condicional que el procedimiento add detalle devuelva una consulta
                            while($data = mysqli_fetch_assoc($resultado)){
                                $subTotalDetalle=round($data['tmp_cantidad']*$data['tmp_precio'],2);
                                $subTotal=round($subTotalDetalle + $subTotal ,2);
                                $total = round($subTotalDetalle + $total ,2);

                                $detalleTabla .='<tr>
                                                    <td class="text-center" name ="sku">'.$data['idtmp_Detalles'].'</td>
                                                    <td class="no-margin" name ="nombre"> <span class="text-muted">'.$data['skuProducto'].'</span> <br> '.$data['nombreProducto'].' </td>
                                                    <td class="text-center" name="cantidad">'.$data['tmp_cantidad'].'</td>
                                                    <td  class="text-center"  name="precio" id="">Q. '.$data['tmp_precio'].'</td>
                                                    <td class="text-center" name="subTotal" id="">Q. '.$subTotalDetalle.'</td>
                                                    <td class="text-center"> 
                                                        <button type="button" class="btn btn-custon-rounded-three btn-success btnverProductoDetalleCompra " >Ver</button>
                                                        <button  type="button" class="btn btn-custon-rounded-three btn-danger btnQuitProductoDetalleCompra "  >Quit</button>
                                                        
                                                    </td>
                                                </tr> ';
                                                // <td class="text-center"> 
                                                // <a class="" onclick="event.preventDefault(); del_product_detalle('.$data['skuProducto'].')">DEL<i class="far fa-trash-alt"></i></a>
                                                //</td>
                            }// fin de while que lee la tabla temporal

                            // $impuesto = round($subTotal * ($iva/100) ,2);
                            // $tot_siva = round($subTotal - $impuesto ,2);
                        // $total = $total;

                            $detalleTotales =' <tr>
                                                    <th class="text-center"></th>
                                                    <th class="text-center"></th>
                                                    <th class="text-center"></th>
                                                    
                                                    <th class="textrigh" >Subtotal Q.</th>
                                                    <th class="text-center" id="subTotalFactura">'.$total.'</th>
                                                    
                                                </tr>
                                                <tr>
                                                <th class="text-center"></th>
                                                    <th class="text-center"></th>
                                                    <th class="text-center"></th>

                                                    <th class="textrigh">IVA %.</th>
                                                    <th class="text-center" id="ivaFactura">'.$iva.' %</th>
                                                    
                                                </tr>
                                                <tr>
                                                <th class="text-center"></th>
                                                    <th class="text-center"></th>
                                                    <th class="text-center"></th>

                                                    <th class="textrigh">TOTAL Q.</th>
                                                    <th class="text-center" id="totalFactura" value="15">'.$total.'</th>
                                                    
                                                </tr> ';

                            $arrayData['detalles']=$detalleTabla;
                            $arrayData['totales']=$detalleTotales;
                            $arrayData['totalFactura']=$total;
                            echo  json_encode($arrayData, JSON_UNESCAPED_UNICODE);
                    }else{//condicional que nos indica si hay valores den el temporal
                        echo "error";
                        }
                    mysqli_close($conexionbd);
        }
         exit; 
    }/////////// fin add detalle COMPRA
    /////////////
   

    //////////// DELETE DETALLE COMPRA TEMPORAL
    if ($_POST['action'] == "deleteProductoDetalleCompra" ) {
        # code...
     
        
        // print_r($_POST['IdDetalleCompra']);

        if(empty($_POST['IdDetalleCompra']) OR empty($_POST['usuarioSistema']) )//CONDIConal para que los campos no esten vacios
        {
            echo 'error';
        }else{
                    $IdDetalleCompra =$_POST['IdDetalleCompra'];
                    $usuarioSistema =$_POST['usuarioSistema'];
                   
                    
                    $QueryMySQL="Call DELETEdetalleTemp($IdDetalleCompra, $usuarioSistema)";

                    $resultado=mysqli_query($conexionbd,$QueryMySQL);
                    $numFilas=mysqli_num_rows($resultado);
                    
                    $detalleTabla='';
                    $iva=0;
                    $subTotal=0;
                    $total=0;
                    $arrayData=array();
                    
                    if($numFilas>0){ //condicional que el procedimiento add detalle devuelva una consulta
                            while($data = mysqli_fetch_assoc($resultado)){
                                $subTotalDetalle=round($data['tmp_cantidad']*$data['tmp_precio'],2);
                                $subTotal=round($subTotalDetalle + $subTotal ,2);
                                $total = round($subTotalDetalle + $total ,2);

                                $detalleTabla .='<tr>
                                                    <td class="text-center" name ="sku">'.$data['idtmp_Detalles'].'</td>
                                                    <td class="no-margin" name ="nombre"><span class="text-muted">'.$data['skuProducto'].'</span> <br>'.$data['nombreProducto'].'  </td>
                                                    <td class="text-center" name="cantidad">'.$data['tmp_cantidad'].'</td>
                                                    <td  class="text-center"  name="precio" id="">Q. '.$data['tmp_precio'].'</td>
                                                    <td class="text-center" name="subTotal" id="">Q. '.$subTotalDetalle.'</td>
                                                    <td class="text-center"> 
                                                    <button type="button" class="btn btn-custon-rounded-three btn-success btnverProductoDetalleCompra " >Ver</button>
                                                    <button  type="button" class="btn btn-custon-rounded-three btn-danger btnQuitProductoDetalleCompra "  >Quit</button>
                                                    </td>
                                                </tr> ';
                                                
                            }// fin de while que lee la tabla temporal

                            // $impuesto = round($subTotal * ($iva/100) ,2);
                            // $tot_siva = round($subTotal - $impuesto ,2);
                        // $total = $total;

                            $detalleTotales =' <tr>
                                                    <th class="text-center"></th>
                                                    <th class="text-center"></th>
                                                    <th class="text-center"></th>
                                                    
                                                    <th class="textrigh" >Subtotal Q.</th>
                                                    <th class="text-center" id="subTotalFactura">'.$total.'</th>
                                                    
                                                </tr>
                                                <tr>
                                                <th class="text-center"></th>
                                                    <th class="text-center"></th>
                                                    <th class="text-center"></th>

                                                    <th class="textrigh">IVA %.</th>
                                                    <th class="text-center" id="ivaFactura">'.$iva.' %</th>
                                                    
                                                </tr>
                                                <tr>
                                                <th class="text-center"></th>
                                                    <th class="text-center"></th>
                                                    <th class="text-center"></th>

                                                    <th class="textrigh">TOTAL Q.</th>
                                                    <th class="text-center" id="totalFactura" value="15">'.$total.'</th>
                                                    
                                                </tr> ';

                            $arrayData['detalles']=$detalleTabla;
                            $arrayData['totales']=$detalleTotales;
                            $arrayData['totalFactura']=$total;
                            echo  json_encode($arrayData, JSON_UNESCAPED_UNICODE);
                           
                    }else{//condicional que nos indica si hay valores den el temporal
                         $arrayData='sinDatosTemp';
                         echo  json_encode($arrayData, JSON_UNESCAPED_UNICODE);
                        //echo "error response";
                        }
                    mysqli_close($conexionbd);
        }
         exit; 
    }/////////// fin DELETE DETALLE COMPRA TEMPORAL
    
    
    //////////// ANULA COMPRA TEMPORAL
    if ($_POST['action'] == "anularCompra" ) {
        # code...
     
        
        // print_r($_POST['IdDetalleCompra']);

        if(empty($_POST['nombreUsuario']) OR empty($_POST['tipoMovimiento']) )//CONDIConal para que los campos no esten vacios
        {
            echo 'error';
        }else{
                    $tipoMovimiento =$_POST['tipoMovimiento'];
                    $usuarioSistema =$_POST['nombreUsuario'];
                    $data2 = array();
                    
                    $QueryMySQL="DELETE FROM tmp_Detalles where tmp_tknUsuario = '$usuarioSistema' and tmp_TipoMovimiento='COMPRA';";
                     $resultado=mysqli_query($conexionbd,$QueryMySQL);
                    if($resultado){
                        $data2='successful';
                           
                    }else{//condicional que nos indica si hay valores den el temporal
                        $data2='error';
                        //echo "error response";
                        }
                        echo json_encode($data2); //devuelve el resultado
                        mysqli_close($conexionbd);
                        exit;
                    
        }
         exit; 
    }/////////// fin anularCompra COMPRA TEMPORAL
    
     //////////// FINALIZAR COMPRA 
     if ($_POST['action'] == "finalizarCompra" ) {
        # code...
     
        if(empty($_POST['nombreUsuario']) OR empty($_POST['id_Proveedor'])  OR empty($_POST['noComprobanteCompra']))//CONDIConal para que los campos no esten vacios
        {
            echo 'error';
        }else{
                    $idSucursal =$_POST['nombreSucursal'];
                    $nombreUsuario =$_POST['nombreUsuario'];
                    $id_Proveedor =$_POST['id_Proveedor'];
                    $tipoDocCompra =$_POST['tipoDocCompra'];
                    $fechaCompra =$_POST['fechaCompra'];
                    $formaPago =$_POST['formaPago'];
                    $noComprobanteCompra =$_POST['noComprobanteCompra'];
                    $tipoMovimiento =$_POST['tipoMovimiento'];
                    $data2 = array();
                    
                    $QueryMySQL="SELECT * FROM tmp_Detalles where tmp_tknUsuario = '$nombreUsuario' and tmp_TipoMovimiento='COMPRA';";
                     $resultado=mysqli_query($conexionbd,$QueryMySQL);
                    
                     $numFILAS =mysqli_num_rows($resultado);
                    if($numFILAS>0){
                        $QueryGenerarCompra="CALL INSERTgenerarCompra('$noComprobanteCompra',$idSucursal,$id_Proveedor,$nombreUsuario)";
                        $resultadoGenerarCompra=mysqli_query($conexionbd,$QueryGenerarCompra);
                        $numFILASGenerarCompra =mysqli_num_rows($resultadoGenerarCompra);
                        if ($numFILASGenerarCompra>0){
                                                        $data2='successful';
                                                        }else{//condicional que nos indica si hay valores den el temporal
                                                                $data2='error';
                                                                //echo "error response";
                                                                }
                               
                                echo json_encode($data2); //devuelve el resultado
                                mysqli_close($conexionbd);
                                exit;
                    
                     }
         exit; }
    }/////////// fin anularCompra COMPRA TEMPORAL


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
    /////////////
   
} //=========================fin del if del AJAXX===============================================================================================================================================================

//===================fin del archivo ajaxKARDEX
?>