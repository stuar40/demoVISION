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
                                                    <td class="text-center" name ="sku">'.$data['skuProducto'].'</td>
                                                    <td class="text-center" name ="nombre">'.$data['nombreProducto'].'</td>
                                                    <td class="text-center" name="cantidad">'.$data['tmp_cantidad'].'</td>
                                                    <td  class="text-center"  name="precio" id="">Q. '.$data['tmp_precio'].'</td>
                                                    <td class="text-center" name="subTotal" id="">Q. '.$subTotalDetalle.'</td>
                                                    <td class="text-center"> 
                                                        <button type="button" class="btn btn-custon-rounded-three btn-success btnVerCategoria">Ver</button>
                                                        <button  type="button" class="btn btn-custon-rounded-three btn-danger btnDesactivarCategoria">Quit</button>
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
    }
    /////////////
   
   
} //=========================fin del if del AJAXX===============================================================================================================================================================

//===================fin del archivo ajaxKARDEX
?>