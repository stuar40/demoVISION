<?php 

//=========================INCIO del if del AJAXX===============================================================================================================================================================
if ($_POST) { 
    # code...
//Varaibles y archivos de conexion externos
include("../config/testconexion.php");



//=========================LISTA DE CONDICIONALES IF===============================================================================================================================================================
    
    //Funcion para guardar una nueva sucursal 
    if ($_POST['action']==='guardarNuevaSucursal'){
        $data2 = array();

        $nombreSucursal=$_POST['nombreSucursal'];
        $departamentoSucursal=$_POST['departamentoSucursal'];
        $direccionSucursal=$_POST['direccionSucursal'];
        $telefonoSucursal=$_POST['telefonoSucursal'];
        $correoSucursal=$_POST['correoSucursal'];
        $horarioSucursal=$_POST['horarioSucursal'];
        $descripcionSucursal=$_POST['descripcionSucursal'];
        $EmpresaID=$_POST['EmpresaID'];
        

        
            

            $querySucursal="INSERT INTO `sucursal` (`nombreSucursal`, `descripcionSucursal`, `ciudadSucursal`, `direccionSucursal`, `telefonoSucursal`, `correoSucursal`, `horarioSucursal`, `Empresa_idEmpresa`) 
            VALUES ('$nombreSucursal', '$descripcionSucursal', '$departamentoSucursal', '$direccionSucursal', '$telefonoSucursal', '$correoSucursal', '$horarioSucursal', '$EmpresaID')  ";

            $resultado=mysqli_query($conexionbd,$querySucursal);
            
            if($resultado){
        
                $data2='successful';
            
            }
            else {
            
            
                $data2='error';
            }
            echo json_encode($data2); //devuelve el resultado
            exit;
    

    } //fin del if que consulta datos del asesor 

    //Editar Informacion de Sucursal
    if ($_POST['action']==='editarSucursal'){
        $data2 = array();

        $nombreSucursal=$_POST['nombreSucursal'];
        $departamentoSucursal=$_POST['departamentoSucursal'];
        $direccionSucursal=$_POST['direccionSucursal'];
        $telefonoSucursal=$_POST['telefonoSucursal'];
        $correoSucursal=$_POST['correoSucursal'];
        $horarioSucursal=$_POST['horarioSucursal'];
        $descripcionSucursal=$_POST['descripcionSucursal'];
        $idSucursal=$_POST['idSucursal'];
        

        
            

            $querySucursal="UPDATE `sucursal` SET `nombreSucursal` = '$nombreSucursal', `descripcionSucursal` = '$descripcionSucursal', `ciudadSucursal` = '$departamentoSucursal', `direccionSucursal` = '$direccionSucursal', `telefonoSucursal` = '$telefonoSucursal', `correoSucursal` = '$correoSucursal', `horarioSucursal` = '$horarioSucursal' WHERE (`idSucursal` = '$idSucursal')";


            $resultado=mysqli_query($conexionbd,$querySucursal);
            
            if($resultado){
        
                $data2='successful';
            
            }
            else {
            
            
                $data2='error';
            }
            echo json_encode($data2); //devuelve el resultado
            exit;
    

    } //fin del if que consulta datos del asesor 

    ///// Boton ELIMINAR Asesor ASOCIADO del  DataTable del formulario verAsesor.php 
    if ($_POST['action'] == 'eliminar_Sucursal') {
        
        # code...
        $data2 = array();
        $action = $_POST['action'];
        
            if($action=='eliminar_Sucursal')
                {
                        $idSucursal = $_POST['idSucursal'];
                        
                    
                        # code...
                        $sql = "DELETE FROM `sucursal` WHERE (`idSucursal` = '$idSucursal')";
                        

                        $resultadoEliminar=mysqli_query($conexionbd,$sql);
                        if($resultadoEliminar){
                                $data2="eliminado";
                    
                        }else{
                                $data2 = 'error';
                                die("Error".mysqli_error($conexionbd));
                            
                        }
                        echo json_encode($data2); //devuelve el resultado
                        exit;} 
                    //pruebas 2
            
    } //FIN del a opcion que ELIMINA                                              

    // Obtener datos Sucursal
            if ($_POST['action'] == "obtener_datosSucursal" ) {
                # code...
               
                
                if (!empty($_POST['idSucursal'])) {
                    # code...
               
                    $data = array();
                    $idSucursal = $_POST['idSucursal'];
                    $query_select = mysqli_query($conexionbd,"SELECT * FROM sucursal where idSucursal=$idSucursal");
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

} //=========================fin del if del AJAXX===============================================================================================================================================================

//===================fin del archivo ajaxKARDEX
?>