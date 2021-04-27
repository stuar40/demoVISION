<?php
   include('login/session.php');
   include('menus/menuizq.php');
   include("config/testconexion.php");
   




?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Nuevo Usuario | MacroVision</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- dropzone CSS
		============================================ -->
    <link rel="stylesheet" href="css/dropzone/dropzone.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>

        <?php
              include('menus/menusup.php');
        ?>
        
        <div class="header-advance-area">
           
            <!-- Mobile Menu start -->
            
            <!-- Mobile Menu end -->
            
        </div>
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Nuevo Usuario del Sistema</a></li>
                                
                                
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                   
                                
                                <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                    <form  method="POST" enctype="multipart/form-data" class="add-department" id="formNuevoUsuario">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                
                                                                <label>Primer Nombre Empleado</label> 
                                                                <span class="text-danger">*</span>
                                                                <div class="form-group">
                                                                    <input name="idUsuario" id="idUsuario" type="hidden"   class="form-control" placeholder="id Usuario"   disabled>
                                                                    <input type="text" class="form-control form__input"  name="priNombreUsuario" id="priNombreUsuario" placeholder="Primer Nombre Empleado" required
                                                                      data-msg="Ingrese Nombre ."
                                                                      minlength="1" maxlength="50"
                                                                      title="Nombre  Tamaño máximo: 50 Caracteres"
                                                                      data-error-class="u-has-error"
                                                                      data-success-class="u-has-success">
                                                                </div>
                                                                <br>
                                                                <label >Segundo Nombre </label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                <span class="h10 small">(opcional)</span>
                                                                <div class="form-group">
                                                                    <input name="segNombreUsuario" id="segNombreUsuario" type="text" class="form-control" placeholder="Segundo Nombre Empleado"  
                                                                      data-msg="Ingrese Segundo Nombre ."
                                                                      minlength="1" maxlength="45"
                                                                      title="Tamaño máximo: 45 Caracteres"
                                                                      data-error-class="u-has-error"
                                                                      data-success-class="u-has-success">
                                                                </div>
                                                                <br>

                                                                <label>Primer Apellido </label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                <span class="text-danger">*</span>
                                                                <div class="form-group">
                                                                    <input name="priApellidoUsuario" id="priApellidoUsuario" type="text" class="form-control" placeholder="Primer Apellido"   required
                                                                      data-msg="Ingrese Primer Apellido."
                                                                      minlength="1" maxlength="45"
                                                                      title="Tamaño máximo: 45 Caracteres"
                                                                      data-error-class="u-has-error"
                                                                      data-success-class="u-has-success" >
                                                                </div>
                                                                <br>

                                                                <label>Segundo Apellido </label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                <span class="h10 small">(opcional)</span>
                                                                <div class="form-group">
                                                                    <input name="segApellidoUsuario" id="segApellidoUsuario" type="text" class="form-control" placeholder="Primer Apellido"    
                                                                      data-msg="Ingrese Segundo Apellido ."
                                                                      minlength="1" maxlength="50"
                                                                      title="Tamaño máximo: 50 Caracteres"
                                                                      data-error-class="u-has-error"
                                                                      data-success-class="u-has-success">
                                                                </div>
                                                                <br>
                                                                
                                                                <label>No. Identificacion</label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                <span class="text-danger">*</span>
                                                                <div class="form-group">
                                                                    <input name="noIdentificacionUsuario" id="noIdentificacionUsuario" type="number" class="form-control" placeholder="No. Identificacion Empleado"  required
                                                                      minlength="3" maxlength="15"
                                                                      pattern="[0-9]{3,15}"  title="Identificacion. Tamaño máximo: 15"
                                                                      placeholder="Ingrese No. de Identificacion" >
                                                                </div>
                                                                <br>

                                                                <label >Sexo Empleado</label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                <span class="text-danger">*</span>
                                                                <div class="form-group">
                                                                  <select name="sexoUsuario" id="sexoUsuario" class="form-control" required>
                                                                    
                                                                    <option value="M" selected="true" required>Masculino</option>
                                                                    <option value="F">Femenino</option>
                                                                    <option value="O">Otro</option>
                                                                
                                                                  </select>
                                                                </div>
                                                                <br>

                                                                <label >Direccion Empleado</label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                <span class="h10 ">(opcional)</span>
                                                                <div class="form-group ">
                                                                      <input name="direccionUsuario" id="direccionUsuario" type="text" class="form-control " placeholder="Direccion Empleado"  
                                                                      data-msg="Direccion Empleado."
                                                                      minlength="1" maxlength="100"
                                                                      title="Tamaño máximo: 100 Caracteres"
                                                                      data-error-class="u-has-error"
                                                                      data-success-class="u-has-success"  >
                                                                </div>
                                                                <br>

                                                                <label >Telefono Empleado</label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                <span class="text-danger">*</span>
                                                                <div class="form-group ">
                                                                      <input name="telUsuario" id="telUsuario" type="text" class="form-control " placeholder="Telefono Empleado" 
                                                                      minlength="3" maxlength="12"
                                                                      pattern="[0-9]{3,12}"  title="Telefono. Tamaño máximo: 15"
                                                                      placeholder="Ingrese No. de Telefono"  >
                                                                </div>
                                                                <br>
                                                                <label >Correo Electronico</label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                <span class="h10 ">(opcional)</span>
                                                                <div class="form-group ">
                                                                      <input name="emailUsuario" id="emailUsuario" type="email" class="form-control " placeholder="Correo Electronico" 
                                                                        placeholder="Ingrese Correo Electronico del Asesor"   >
                                                                </div>
                                                                <br>
                                                                <label >Fecha de Nacimiento</label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                <span class="text-danger">*</span>
                                                                <div class="form-group ">
                                                                      <input name="nacimientoUsuario" id="nacimientoUsuario" type="date" class="form-control " placeholder="Fecha de Nacimiento "  required >
                                                                </div>
                                                                <br>
                                                               

                                                              
                                                            </div>

                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <label >Nombre de Usuario</label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                <span class="text-danger">*</span>
                                                                <div class="form-group ">
                                                                      <input name="nombreUsuario" id="nombreUsuario" type="text" class="form-control " placeholder="Nombre Usuario"    required
                                                                      data-msg="Nombre de Usuario."
                                                                      minlength="1" maxlength="20"
                                                                      title="Tamaño máximo: 20 Caracteres"
                                                                      data-error-class="u-has-error"
                                                                      data-success-class="u-has-success"  >
                                                                </div>
                                                                <br>

                                                                <label >Contraseña Usuario</label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                <span class="text-danger">*</span>
                                                                <div class="form-group res-mg-t-15">
                                                                    <input name="passUsuario" id="passUsuario" type="text" class="form-control " placeholder="Pass Usuario"    required
                                                                      data-msg="Contraseña Usuario."
                                                                      minlength="1" maxlength="100"
                                                                      title="Tamaño máximo: 100 Caracteres"
                                                                      data-error-class="u-has-error"
                                                                      data-success-class="u-has-success"  >
                                                                </div>
                                                                <br>

                                                                <label >Descripcion Usuario</label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                <span class="h10 small">(opcional)</span>
                                                                <div class="form-group res-mg-t-15">
                                                                    <input name="descripcionUsuario" id="descripcionUsuario" type="text" class="form-control " placeholder="Descripcion Usuario"  
                                                                      data-msg="Direccion Empleado."
                                                                      minlength="1" maxlength="150"
                                                                      title="Tamaño máximo: 150 Caracteres"
                                                                      data-error-class="u-has-error"
                                                                      data-success-class="u-has-success"   >
                                                                </div>
                                                                <br>

                                                                <label >Estado Usuario</label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                <span class="text-danger">*</span>
                                                                <div class="form-group res-mg-t-15">
                                                                <select name="estadoUsuario" id="estadoUsuario" class="form-control" required>
                                                                    
                                                                    <option value="ACTIVO" selected="true" required>ACTIVO</option>
                                                                    <option value="INACTIVO">INACTIVO</option>
                                                                   
                                                                
                                                                  </select>
                                                                </div>
                                                                <br>

                                                                <label>Sueldo Empleado</label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                <span class="text-danger">*</span>
                                                                <div class="form-group">
                                                                    <select name="id_sueldoUsuario" id="id_sueldoUsuario" class="form-control" required>
                                                                      
                                                                     <?php
                                                                      $sql= "SELECT idSueldoEmpleado, descripcionSueldoEmpleado, SueldoEmpleado FROM  sueldoempleado where estadoSueldoEmpleado ='ACTIVO'";
                                                                      $res=mysqli_query($conexionbd,$sql);
                                                                      while ($data=mysqli_fetch_row($res))
                                                                              {
                                                                                $dato1 = $data[0];
                                                                                $dato2 = $data[1];
                                                                                $dato3 = $data[2];
                                                                      ?>
                                                                                <option value="<?php echo $dato1; ?>"> <?php echo $dato2; ?> Q. <?php echo $dato3; ?> </option>
                                                                      <?php 	} ?>
                                                                    </select>
                                                                </div>
                                                                <br>

                                                                <label >Comision Empleado </label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                <span class="text-danger">*</span>
                                                                <div class="form-group">
                                                                    <select name="id_comisionUsuario" id="id_comisionUsuario" class="form-control">
                                                                    <?php
                                                                      $sql= "SELECT idComisionEmpleado,ComisionEmpleado,descripcionComisionEmpleado FROM  comisionempleado where estadoComisionEmpleado='ACTIVO' ";
                                                                      $res=mysqli_query($conexionbd,$sql);
                                                                      while ($data=mysqli_fetch_row($res))
                                                                              {
                                                                                $dato1 = $data[0];
                                                                                $dato2 = $data[1];
                                                                                $dato3 = $data[2];
                                                                      ?>
                                                                                <option value="<?php echo $dato1; ?>"> <?php echo $dato2; ?>%  <?php echo $dato3; ?> </option>
                                                                      <?php 	} ?>
                                                                    
                                                                  </select>
                                                                </div>
                                                                <br>

                                                                <label >Privilegios Empleado </label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                <span class="text-danger">*</span>
                                                                <div class="form-group">
                                                                    <select name="id_privilegiosUsuario" id="id_privilegiosUsuario" class="form-control">
                                                                    <?php
                                                                      $sql= "SELECT idTipoEmpleado,rolTipoEmpleado FROM  tipoempleado where estadoTipoEmpleado='ACTIVO' ";
                                                                      $res=mysqli_query($conexionbd,$sql);
                                                                      while ($data=mysqli_fetch_row($res))
                                                                              {
                                                                                $dato1 = $data[0];
                                                                                $dato2 = $data[1];
                                                                                
                                                                      ?>
                                                                                <option value="<?php echo $dato1; ?>"> <?php echo $dato2; ?> </option>
                                                                      <?php 	} ?>
                                                                    
                                                                  </select>
                                                                </div>
                                                                <br>

                                                                <label >Horario Empleado </label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                <span class="text-danger">*</span>
                                                                <div class="form-group">
                                                                    <select name="id_horarioUsuario" id="id_horarioUsuario" class="form-control">
                                                                    <?php
                                                                      $sql= "SELECT idHorario,nombreHorario,tiempoHorario FROM horario where estadoHorario ='ACTIVO' ";
                                                                      $res=mysqli_query($conexionbd,$sql);
                                                                      while ($data=mysqli_fetch_row($res))
                                                                              {
                                                                                $dato1 = $data[0];
                                                                                $dato2 = $data[1];
                                                                                $dato3 = $data[2];
                                                                      ?>
                                                                                <option value="<?php echo $dato1; ?>"> <?php echo $dato2; ?>  <?php echo $dato3; ?> </option>
                                                                      <?php 	} ?>
                                                                    
                                                                  </select>
                                                                </div>
                                                                <br>

                                                                <label >Sucursal Empleado </label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                <span class="text-danger">*</span>
                                                                <div class="form-group">
                                                                    <select name="id_sucursalUsuario" id="id_sucursalUsuario" class="form-control">
                                                                    <?php
                                                                      $sql= "SELECT idSucursal,nombreSucursal,ciudadSucursal FROM  sucursal ";
                                                                      $res=mysqli_query($conexionbd,$sql);
                                                                      while ($data=mysqli_fetch_row($res))
                                                                              {
                                                                                $dato1 = $data[0];
                                                                                $dato2 = $data[1];
                                                                                $dato3 = $data[2];
                                                                      ?>
                                                                                <option value="<?php echo $dato1; ?>"> <?php echo $dato2; ?> - <?php echo $dato3; ?> </option>
                                                                      <?php 	} ?>
                                                                    
                                                                  </select>
                                                                </div>
                                                                <br>

                                                                <?php 
                                                                         if(isset($_REQUEST['cargarlogo'])){
                                                                            if(isset($_FILES['foto']['name'])){
                                                                              $tipoArchivo=$_FILES['foto']['type'];
                                                                              $tipoPermitido=array("image/png","image/jpg","image/jpeg");
                                                                              $nombreArchivo=$_FILES['foto']['name'];
                                                                              $tamaArchivo=$_FILES['foto']['size'];
                                                                              $imgSubida=@fopen($_FILES['foto']['tmp_name'],'r');
                                                                              $binariosImg=@fread($imgSubida,$tamaArchivo);
                                                                              $binariosImg=mysqli_escape_string($conexionbd,$binariosImg);
                                                                              
                                                                              //$queryImg="UPDATE empresa SET logoEmpresa = '$binariosImg' WHERE (idEmpresa = '1')";
                                                                              $queryImg="UPDATE empresa SET logoEmpresa = '$binariosImg' WHERE (idEmpresa = '1')";
                                                                              $resultado=mysqli_query($conexionbd,$queryImg);
                                                                              if($resultado){
                                                                             
                                                                                echo "ingresado correctamente";
                                                                                
                                                                              }
                                                                              else {
                                                                                # code...
                                                                                echo "Error";
                                                                                

                                                                              }
                                                                            }
                                                                          }

                                                                          ?>
                                                                          <br>
                                                                <label >Foto Empleado</label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                <span class="h10 ">(opcional)</span>
                                                                <div class="form-group ">
                                                                  <div class="file-upload-inner file-upload-inner-right ts-forms">
                                                                      <div class="input append-small-btn">
                                                                          <div class="file-button">
                                                                               Buscar
                                                                              <input type="file" name="foto" id="foto" onchange="document.getElementById('rutaFoto').value = this.value;">
                                                                          </div>
                                                                              <input type="text" id="rutaFoto" placeholder="Ninguna Foto Seleccionada">
                                                                      </div>
                                                                    </div>
                                                                </div>
                                                                <br>

                                                                <div class="form-group alert-up-pd">
                                                                    <div class=" col-md-6 col-sm-6 col-xs-12">
                                                                        <div class="student-inner-std res-mg-b-30">
                                                                            <div class="student-img">
                                                                                  <?php
                                                                                  //Mostrando logo
                                                                                  $queryImg="SELECT idEmpresa, logoEmpresa from empresa where idEmpresa = '1'";
                                                                                  $resultado=mysqli_query($conexionbd,$queryImg);
                                                                                  while ($data=mysqli_fetch_array($resultado))
                                                                                      {
                                                                                        $idEmpresa = $data['idEmpresa'];
                                                                                        $logoEmpresa = $data['logoEmpresa'];
                                                                                        }
                                                                                  ?>
                                                                                <img src="data:image/jpg;base64,<?php echo base64_encode($logoEmpresa) ?>" alt="" />
                                                                            </div>
                                                                            <div class="student-dtl">
                                                                                <h2>Logo Actual</h2>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <input type='submit' class="btn btn-primary waves-effect waves-light"   value="Guardar Usuario" name="guardarUsuario" id="guardarUsuario"></input>
                                                                    <button type="" class="btn btn-primary waves-effect waves-light">Actualizar Logo</button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                                

                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
  
  include('menus/footer.php');
 
       ?>

    </div>

    <!-- Variables para Jquery del proyecto=============================== -->
     <!-- Aqui se llaman a los archivos jquery con la funcion ready para poder ejecutar los archivos ajax  -->
    <!-- <script src="js/vendor/jquery-1.12.4.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="jq/5NuevoUsuario.js">  </script> 
 
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- maskedinput JS
		============================================ -->
    <script src="js/jquery.maskedinput.min.js"></script>
    <script src="js/masking-active.js"></script>
    <!-- datepicker JS
		============================================ -->
    <script src="js/datepicker/jquery-ui.min.js"></script>
    <script src="js/datepicker/datepicker-active.js"></script>
    <!-- form validate JS
		============================================ -->
    <script src="js/form-validation/jquery.form.min.js"></script>
    <script src="js/form-validation/jquery.validate.min.js"></script>
    <script src="js/form-validation/form-active.js"></script>
    <!-- dropzone JS
		============================================ -->
    <script src="js/dropzone/dropzone.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="js/tawk-chat.js"></script>

    <!-- Libreria DataTables para talbas -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.css"/>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.js"></script>
 
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>

</html>
