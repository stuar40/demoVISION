<?php 

//=========================INCIO del if del AJAXX===============================================================================================================================================================
if ($_POST) { 
    # code...
//Varaibles y archivos de conexion externos
include("../config/testconexion.php");



//=========================LISTA DE CONDICIONALES IF===============================================================================================================================================================
//////CARGAR DATOS DE la TABLA KARDEX************************************
if ($_POST['action']==='cargarLogo'){
    $idEmpresa=$_POST['idEmpresa'];
    $logoEmpresa=$_POST['logoEmpresa'];
   
    

    if(isset($_FILES[$logoEmpresa]['name'])){
        echo 'entro a cargar';
        $tipoArchivo=$_FILES[$logoEmpresa]['type'];
        $tipoPermitido=array("image/png","image/jpg","image/jpeg");
        $nombreArchivo=$_FILES[$logoEmpresa]['name'];
        $tamaArchivo=$_FILES[$logoEmpresa]['size'];
        $imgSubida=@fopen($_FILES[$logoEmpresa]['tmp_name'],'r');
        $binariosImg=@fread($imgSubida,$tamaArchivo);
        $binariosImg=mysqli_escape_string($conexionbd,$binariosImg);
       
        //$queryImg="UPDATE empresa SET logoEmpresa = '$binariosImg' WHERE (idEmpresa = '1')";
        $queryImg="UPDATE empresa SET logoEmpresa = '$binariosImg' WHERE (idEmpresa = '1')";
        $resultado=mysqli_query($conexionbd,$queryImg);
        echo $resultado;
        if($resultado){
       
            echo 'successful';
          
        }
        else {
         
          
            echo 'error';
        }
      }

    /************* */
    
    
    
   

} //fin del if que consulta datos del asesor 

if ($_POST['action']==='actualizarInfoEmpresa'){
    $data2 = array();
    $idEmpresa=$_POST['idEmpresa'];
    $nomEmpresa=$_POST['nomEmpresa'];
    $nitEmpresa=$_POST['nitEmpresa'];
    $registroEmpresa=$_POST['registroEmpresa'];
    $moneda=$_POST['moneda'];
    $web=$_POST['web'];
    $descripcion=$_POST['descripcion'];
    $pais=$_POST['pais'];
    $departamento=$_POST['departamento'];

    
        

        $queryEmpresa="UPDATE empresa SET 
                   nombreEmpresa = '$nomEmpresa', 
                   descripcionEmpresa = '$descripcion', 
                   nitEmpresa = '$nitEmpresa', 
                   registroEmpresa = '$registroEmpresa',
                   monedaEmpresa = '$moneda', 
                   paisEmpresa = '$pais', 
                   sitiowebEmpresa = '$web' 
                    WHERE (idEmpresa = '1')";

        $resultado=mysqli_query($conexionbd,$queryEmpresa);
        
        if($resultado){
       
            $data2='successful';
          
        }
        else {
         
          
            $data2='error';
        }
        echo json_encode($data2); //devuelve el resultado
        exit;
   

} //fin del if que consulta datos del asesor 





//=========================FIN DE LISTA DE CONDICIONALES IF===============================================================================================================================================================
} //=========================fin del if del AJAXX===============================================================================================================================================================

//===================fin del archivo ajaxKARDEX
?>