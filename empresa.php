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
    <title>Add Professor | Kiaalap - Kiaalap Admin Template</title>
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
                                <li class="active"><a href="#description">Informacion Empresa</a></li>
                                
                                
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                   
                                
                                <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                    <form  method="POST" enctype="multipart/form-data" class="add-department" id="infoEmpresa">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                
                                                                <label>Nombre Comercial</label> 
                                                                <span class="text-danger">*</span>
                                                                <div class="form-group">
                                                                          <?php
                                                                          //Consultal a bD para cargar datos de la empresa 
                                                                          $respuesta = mysqli_query($conexionbd,"SELECT * FROM empresa;");
                                                                          while ($data=mysqli_fetch_array($respuesta))
                                                                          {
                                                      
                                                                            $idEmpresa = $data['idEmpresa'];
                                                                            $nombreEmpresa = $data['nombreEmpresa'];
                                                                            $logoEmpresa = $data['logoEmpresa'];
                                                                            $nitEmpresa = $data['nitEmpresa'];
                                                                            $registroEmpresa = $data['registroEmpresa'];
                                                                            $monedaEmpresa = $data['monedaEmpresa'];
                                                                            $paisEmpresa = $data['paisEmpresa'];
                                                                            $sitiowebEmpresa = $data['sitiowebEmpresa'];
                                                                            $descripcionEmpresa = $data['descripcionEmpresa'];

                                                                          }


                                                                          ?>
                                                                    
                                                                    <input name="idEmpresa" id="idEmpresa" type="hidden"   class="form-control" placeholder="idEmpresa"   value= "<?php echo $idEmpresa; ?>" disabled>
                                                                    <input name="nomEmpresa" id="nomEmpresa" type="text" class="form-control" placeholder="Nombre Empresa" value= "<?php echo $nombreEmpresa; ?>">
                                                                </div>
                                                                
                                                                <label >NIT Empresa </label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                <span class="h10 small">(opcional)</span>
                                                                <div class="form-group">
                                                                    <input name="nitEmpresa" id="nitEmpresa" type="text" class="form-control" placeholder="Nit" value= "<?php echo $nitEmpresa; ?>">
                                                                </div>

                                                                <label>No. Registro Empresa </label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                <span class="h10 small">(opcional)</span>
                                                                <div class="form-group">
                                                                    <input name="registroEmpresa" id="registroEmpresa" type="number" class="form-control" placeholder="No. Reegistro" value= "<?php echo $registroEmpresa; ?>" >
                                                                </div>

                                                                <label >Tipo de Moneda</label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                <span class="h10 small" class="form-control">(opcional)</span>
                                                                <div class="form-group">
                                                                  <select name="moneda" id="moneda" class="form-control">
                                                                    <option value= "<?php echo $monedaEmpresa;?>"  selected="true" required><?php echo $monedaEmpresa; ?></option>
                                                                    <option value="Q">Quetzales</option>
                                                                    <option value="$">Dolares</option>
                                                                    <option value="$">Pesos</option>
                                                                
                                                                  </select>
                                                                </div>

                                                                <label >Sitio web Empresa</label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                <span class="h10 ">(opcional)</span>
                                                              <div class="form-group ">
                                                                    <input name="web" id="web" type="text" class="form-control " placeholder="Sitio web" value= "<?php echo $sitiowebEmpresa; ?>"  >
                                                              </div>
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
                                                              <label >Logo Empresa</label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                <span class="h10 ">(opcional)</span>
                                                              <div class="form-group ">
                                                                  <div class="file-upload-inner file-upload-inner-right ts-forms">
                                                                      <div class="input append-small-btn">
                                                                          <div class="file-button">

                                                                          
                                                                              Browse
                                                                              <input type="file" name="foto" id="foto" onchange="document.getElementById('rutaFoto').value = this.value;">
                                                                             
                                                                          </div>
                                                                          <input type="text" id="rutaFoto" placeholder="no file selected">
                                                                          
                                                                          
                                                                      </div>
                                                                      
                                                                  </div>
                                                              </div>

                                                              
                                                            </div>

                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    
                                                                <label >Descripcion Empresa</label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                <span class="h10 small">(opcional)</span>
                                                                <div class="form-group res-mg-t-15">
                                                                    <textarea name="descripcion" id="descripcion"  placeholder="Descripcion"  ><?php echo $descripcionEmpresa; ?> </textarea>
                                                                </div>
                                                                
                                                                <label>Pais Empresa</label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                <span class="h10 small">(opcional)</span>
                                                                <div class="form-group">
                                                                    <select name="pais" id="pais" class="form-control">
                                                                      <option  value= "<?php echo $paisEmpresa; ?>" selected="true"> <?php echo $paisEmpresa; ?></option>
                                                                      <option value="Guatemala">Guatemala</option>
                                                                      <option value="Salvador">Salvador</option>
                                                                      <option value="Costa Rica">Costa Rica</option>
                                                                    
                                                                    </select>
                                                                </div>

                                                                <label >Departamento Empresa </label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                <span class="h10 small">(opcional)</span>
                                                                <div class="form-group">
                                                                    <select name="departamento" id="departamento" class="form-control">
                                                                    <option value="none" selected="" disabled="">Departamento</option>
                                                                    <option value="San Marcos">San Marcos</option>
                                                                    <option value="Quetzaltenango">Quetzaltenango</option>
                                                                    <option value="Huehuetenango">Huehuetenango</option>
                                                                    <option value="Guatemala">Guatemala</option>
                                                                    
                                                                  </select>
                                                                </div>
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
                                                                
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                
                                                                <input type='submit' class="btn btn-primary waves-effect waves-light"   value="cargarLogo" name="cargarLogo" id="cargarLogo"></input>
                                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Actualizar</button>
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
    <script type="text/javascript" src="jq/empresa.js">  </script> 
 
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
