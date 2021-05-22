<?php
   //include('login/session.php');
   session_start();
   include("config/testconexion.php");
   include('menus/menuizq.php');
  
   




?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Compras | MacroVision</title>
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
    <!-- modals CSS
		============================================ -->
    <link rel="stylesheet" href="css/modals.css">
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
         <!-- Single pro tab review Start-->
         <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                            <ul id="myTabedu1" class="tab-review-design">
                                
                                <li class="active"><a href="#reviews"> DETALLES DE COMPRA</a></li>
                                
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                
                                <div class="product-tab-list tab-pane fade active in" id="reviews">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                               
                                                
                                               
                                                <div class="row mg-b-15">
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="skill-title">
                                                                    <h2>Agregar Articulos</h2>
                                                                    <hr />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ex-pro">
                                                            <div class="row">
                                                                  <div class="col-lg-6">
                                                                      <div class="form-group-inner">
                                                                          <label>Sucursal</label><br>
                                                                          <select name="nombreSucursal" id="nombreSucursal" class="form-control" required>
                                                                           <?php
                                                                           $sql= "SELECT idSucursal,nombreSucursal FROM  sucursal";
                                                                           $res=mysqli_query($conexionbd,$sql);
                                                                           while ($data=mysqli_fetch_row($res))
                                                                                   {
                                                                                       $dato0 = $data[0];
                                                                                       $dato1 = $data[1];
                                                                                      
                                                                           ?>
                                                                                       <option value="<?php echo $dato0; ?>"> <?php echo $dato1; ?>  </option>
                                                                           <?php 	} ?>
                                                                           </select> <!-- se asignan identificadores y detalles al campo de texto de la descripcion del proveedor -->
                                                                          
                                                                      </div>
                                                                  </div>
                                                                  
                                                                  <div class="col-lg-6">
                                                                      <div class="form-group-inner">
                                                                          <label >Usuario</label><br>
                                                                          <select name="nombreUsuario" id="nombreUsuario" class="form-control" required>
                                                                           <?php
                                                                           $sql= "SELECT idUsuario,priNombreUsuario,priApellidoUsuario FROM  usuario";
                                                                           $res=mysqli_query($conexionbd,$sql);
                                                                           while ($data=mysqli_fetch_row($res))
                                                                                   {
                                                                                       $dato0 = $data[0];
                                                                                       $dato1 = $data[1];
                                                                                       $dato2 = $data[2];
                                                                                      
                                                                           ?>
                                                                                       <option value="<?php echo $dato0; ?>"> <?php echo $dato1; ?> <?php echo $dato2; ?>  </option>
                                                                           <?php 	} ?>
                                                                           </select> 

                                                                          
                                                                          
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                              <br>
                                                        </div>
                                                        <div class="ex-pro">
                                                            <div class="row">
                                                                  <div class="col-lg-8">
                                                                      <div class="form-group-inner">
                                                                          <label>Buscar Producto</label><br>
                                                                          
                                                                          <input type="text" name="nombreProductoBuscar" id="nombreProductoBuscar"  class="form-control form__input" required
                                                                          placeholder="INGRESE CODIGO DEL PRODUCTO"
                                                                          data-msg="Ingrese Codigo del Producto."
                                                                          minlength="1" maxlength="150"
                                                                          data-error-class="u-has-error"
                                                                          data-success-class="u-has-success">  <!-- se asignan identificadores y detalles al campo de texto de la direccion comercial del proveedor -->  
                                                                      </div>
                                                                  </div>
                                                                  
                                                                  <div class="col-lg-4">
                                                                      <div class="form-group-inner">
                                                                          <label >Agregar Articulos</label><br>
                                                                          <button type='input' class='pull-left btn btn-custon-rounded-three btn-success' name ="agregarArticuloNuevo"id="agregarArticuloNuevo">+ Agregrar Articulos</button>  <!-- se asignan identificadores y detalles al campo de texto de la descripcion del proveedor -->
                                                                          
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                              <br>

                                                              <hr />
                                                              <div class="row">
                                                                  <div class="col-lg-2">
                                                                      <div class="form-group-inner">
                                                                          <label>Cod Producto</label><br>
                                                                          <input  type="hidden" name="idProductoCompra" id="idProductoCompra" disabled > <!-- se asignan identificadores -->
                                                                          <input type="text" name="codidoProductoCompra" id="codigoProductoCompra"  class="form-control " disabled required
                                                                           data-success-class="u-has-success">  <!-- se asignan identificadores y detalles al campo de texto de la direccion comercial del proveedor -->  
                                                                      </div>
                                                                  </div>
                                                                  
                                                                  <div class="col-lg-3">
                                                                      <div class="form-group-inner">
                                                                          <label class="text-center" >Nombre Articulo</label><br>
                                                                          <input class="form-control btnCosto" type="text" name="nombreProductoCompra" id="nombreProductoCompra" disabled>
                                                                          
                                                                      </div>
                                                                  </div>
                                                                  
                                                                  <div class="col-lg-1">
                                                                      <div class="form-group-inner">
                                                                          <label class="text-center">Cantidad</label><br>
                                                                          <input class="form-control " type="text" value="1" name="cantidadProductoCompra" id="cantidadProductoCompra" disabled>
                                                                          
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-lg-1">
                                                                      <div class="form-group-inner">
                                                                          <label class="text-center">Precio</label><br>
                                                                          <input class="form-control " type="text" value="0" name="costoProductoCompra" id="costoProductoCompra" disabled>
                                                                          
                                                                      </div>
                                                                  </div>
                                                                  
                                                                  <div class="col-lg-1">
                                                                      <div class="form-group-inner">
                                                                          <label class="text-center" >SubTotal</label><br>
                                                                          <input class="form-control btnCosto" type="text" value="0" name="subTotalProductoCompra" id="subTotalProductoCompra" disabled>
                                                                          
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-lg-2">
                                                                      <div class="form-group-inner">
                                                                          <label class="text-center" >Agregar a Factura</label><br>
                                                                          <button type='input' class='pull-left btn btn-custon-rounded-three btn-success' name ="addDetalleFactura"id="addDetalleFactura" style="display: none">Agregar a Factura</button>
                                                                          
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                              <br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mg-b-15">
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="skill-title">
                                                                    <h2>Detalles de Compra</h2>
                                                                    <hr />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ex-pro">
                                                        <table class="table  table-condensed table-hover table-responsive-md  justify-center " id="tablaDetalleCompra">
                                                <thead >
                                                    <tr class="bgcolor btn-facebook">									
                                                        <th class="text-center">Codigo</th>
                                                        <th class="text-center" >Producto</th>
                                                        <th class="text-center" >Cantidad</th>
                                                        <th  class="text-center" >Precio</th>
                                                        <th class="text-center">Subtotal</th>
                                                        <th class="text-center">Acciones</th>
                                                      </tr>
                                                      
                                                     
                                                </thead>
                                                
                                                <tbody id="detalle_Compra">
                                                          <!-- Contenido Generado automaticament por ajax Agregar detallle -->
                                                           
                                                </tbody>
                                                <tfoot id="detalle_Totales">
                                                <!-- Contendio generado automaticamente por ajax agregar detall -->
                                                 
                                                  </tfoot>
                                              </table>
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
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="profile-info-inner">
                            
                            <div class="profile-details-hr">
                                
                                <div class="row">
                                    <div class="col-lg-12">
                                    
                                    <div class="panel panel-success" id="panel-cobro">
                                        <div class=" modal-header header-color-modal bg-color-2 panel-heading">
                                          <h6 class="panel-title"></h6><h1 id="big_total"  name ="big_total" class="modal-header header-color-modal bg-color-2 text-center text-black">TOTAL Q 00.00</h1>
                                        </div>

                                        <div class="panel-body">
                                            <!-- Checkout Form -->
                                            <form class="form-horizontal" method="post" id="form_DetallesEncabezado" name="form_DetallesEncabezado">
                                                    <!-- Step Form Header -->
                                                
                                                    <!-- End Step Form Header -->
                                        
                                                    <!-- Step Form Content -->
                                                    <div id="stepFormContent">
                                                            <!-- Customer Info -->
                                                            <div id="newProveedor" class="active">  <!-- asigna un id al bloque donde estan los campos de nuevo proveedor-->
                                                                
                                                                <!-- Billing Form -->
                                                                <div class="row">
                                                                         
                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="review-content-section">
                                                                                <div class="row">
                                                                                    <div class="col-lg-12">
                                                                                        <div class="form-group-inner">
                                                                                            <label >Proveedor</label>
                                                                                              <div class="input-group custom-go-button">
                                                                                                <select name="id_Proveedor" id="id_Proveedor" class="form-control" required>
                                                                                                <?php
                                                                                                $sql= "SELECT idProveedor,nombreProveedor FROM  proveedor";
                                                                                                $res=mysqli_query($conexionbd,$sql);
                                                                                                while ($data=mysqli_fetch_row($res))
                                                                                                        {
                                                                                                            $dato1 = $data[0];
                                                                                                            $dato2 = $data[1];
                                                                                                           
                                                                                                ?>
                                                                                                            <option value="<?php echo $dato1; ?>"> <?php echo $dato2; ?>  </option>
                                                                                                <?php 	} ?>
                                                                                                </select> <!-- se asignan identificadores y detalles al campo de texto de la descripcion del proveedor -->
                                                                                                <span class="input-group-btn"><button type="button" name ="nuevoProveedor"id="nuevoProveedor" class="btn btn-success">Nuevo</button></span>
                                                                                                
                                                                                              </div>
                                                                                        </div>
                                                                                        
                                                                                        
                                                                                        
                                                                                        
                                                                                    </div>
                                                                                </div>
                                                                                <br>
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner">
                                                                                                <label>Tipo Doc</label>
                                                                                                <select name="tipoDocCompra" id="tipoDocCompra" class="form-control" required>
                                                                                                
                                                                                                            <option value="FACTURA"> FACTURA </option>
                                                                                                            <option value="TIKET"> TIKET </option>
                                                                                                            <option value="RECIBO"> RECIBO </option>
                                                                                               
                                                                                                </select> <!-- se asignan identificadores y detalles al campo de texto de la descripcion del proveedor -->
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner">
                                                                                              <label >Fecha</label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                                                  <span class="text-danger">*</span>
                                                                                                 
                                                                                                      <input name="fechaCompra" id="fechaCompra" type="date" class="form-control " placeholder="Fecha de Nacimiento "  required >
                                                                                                  
                                                                                        </div>  
                                                                                    </div>
                                                                                </div>
                                                                               
                                                                                <br>
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner">
                                                                                                <label>Forma de Pago</label>
                                                                                                <select name="formaPago" id="formaPago" class="form-control" required>
                                                                                                
                                                                                                            <option value="CONTADO"> CONTADO </option>
                                                                                                            <option value="CREDITO"> CREDITO </option>
                                                                                                            
                                                                                               
                                                                                                </select> <!-- se asignan identificadores y detalles al campo de texto de la descripcion del proveedor -->
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner">
                                                                                                <label>No. Comprobante</label>
                                                                                                <input type="text" name="noComprobanteCompra" id="noComprobanteCompra"  class="form-control form__input" 
                                                                                                placeholder="#0001"
                                                                                                data-msg="No. Comprobante"
                                                                                                title="Comprobante"
                                                                                                minlength="1" maxlength="150"
                                                                                                data-error-class="u-has-error"
                                                                                                data-success-class="u-has-success">
                                                                                        </div>  
                                                                                    </div>
                                                                                </div>
                                                                                <br>
                                                                                
                                                                                <!-- /////////// fin de las filas de input -->
                                                                            </div>
                                                                        </div>
                                                                        
                                                            
                                                                </div>
                                                                

                                                            </div>
                                                    </div>
                                                    <div class="modal-footer info-md">
                                                    <br>
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner">
                                                                                           <!-- ESPACIO vacio para alinear a la derecha a los botones -->
                                                                                            <div class="form-group-inner pull-right col-lg-3">
                                                                                                <button type='button' data-dismiss="modal" href="#" class='pull-right btn btn-custon-rounded-three btn-danger justify-content-sm-center align-items-sm-center' name ="AnularCompra" id="AnularCompra">Cancelar</button> 
                                                                                            </div>  
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner pull-right col-lg-3">
                                                                                                <button type='Submit' class='pull-right btn btn-custon-rounded-three btn-success justify-content-sm-center align-items-sm-center' name ="guardarCompra"id="guardarCompra" style="display: none">Guardar</button> 
                                                                                                
                                                                                        </div>  
                                                                                        
                                                                                    </div>
                                                                                </div>
                                                                                <br>
                                                    

                                    
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
       
       <?php
        include('menus/footer.php');
       ?>
       <!-- ========== LLama a ventanas Modales ========== -->
        <?php
            //  include("modal/modalprueba.php") ; // modal que permite Guardar el usuario
             include("modal/modal7Compras.php") ;// modal que permite Guardar el usuario
        ?>

    </div>

    <!-- Variables para Jquery del proyecto=============================== -->
     <!-- Aqui se llaman a los archivos jquery con la funcion ready para poder ejecutar los archivos ajax  -->
    <!-- <script src="js/vendor/jquery-1.12.4.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="jq/7Compras.js">  </script> 
 
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
      <!-- icheck JS
		============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="js/tawk-chat.js"></script>
    <!-- touchspin JS
		============================================ -->
    <script src="js/touchspin/jquery.bootstrap-touchspin.min.js"></script>
    <script src="js/touchspin/touchspin-active.js"></script>
    
<!-- data table JS
		============================================ -->
    

    <!-- Libreria DataTables para talbas -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.css"/>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.js"></script>
 
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>

</html>
