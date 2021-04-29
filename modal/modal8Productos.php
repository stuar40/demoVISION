<!-- Modal de la ventana nuevo Sueldo para ver tipos de sieldo -->
                        <div id="modalNuevoProducto" class="modal modal-edu-general fullwidth-popup-InformationproModal fade " role="dialog">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header header-color-modal bg-color-2">
                                        <h4 class="modal-title">Producto</h4>
                                        <div class="modal-close-area modal-close-df">
                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                       <!-- Checkout Form -->
                                            <form class="form-horizontal" method="post" id="form_modalProducto" name="form_modalProducto">
                                                    <!-- Step Form Header -->
                                                
                                                    <!-- End Step Form Header -->
                                        
                                                    <!-- Step Form Content -->
                                                    <div id="stepFormContent">
                                                            <!-- Customer Info -->
                                                            <div id="newProducto" class="active">  <!-- asigna un id al bloque donde estan los campos de nuevo proveedor-->
                                                                
                                                                <!-- Billing Form -->
                                                                <div class="row">
                                                                         
                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="review-content-section">
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner">
                                                                                            <label>Nombre del Producto</label>
                                                                                            <input  type="hidden" name="idProducto" id="idProducto" disabled > <!-- se asignan identificadores -->
                                                                                            <input type="text" name="nombreProducto" id="nombreProducto"  class="form-control form__input" required
                                                                                            placeholder="Ingrese Nombre del Producto"
                                                                                            data-msg="Ingrese Nombre Producto."
                                                                                            minlength="1" maxlength="150"
                                                                                            data-error-class="u-has-error"
                                                                                            data-success-class="u-has-success">  <!-- se asignan identificadores y detalles al campo de texto de la direccion comercial del proveedor -->  
                                                                                        </div>
                                                                                        
                                                                                        
                                                                                        
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner">
                                                                                            <label >SKU Producto</label>
                                                                                            <input class="form-control form__input" type="text" name="skuProducto" id="skuProducto" required
                                                                                            placeholder="Ingrese CODIGO de barras del Producto"
                                                                                            data-msg="Ingrese Codigo de barras Producto."
                                                                                            minlength="1" maxlength="150"
                                                                                            data-error-class="u-has-error"
                                                                                            data-success-class="u-has-success"> <!-- se asignan identificadores y detalles al campo de texto de la descripcion del proveedor -->
                                                                                            
                                                                                        </div>
                                                                                        
                                                                                        
                                                                                        
                                                                                        
                                                                                    </div>
                                                                                </div>
                                                                                <br>
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner">
                                                                                                <label>Tipo de Producto</label>
                                                                                                <input type="text" name="tipoProducto" id="tipoProducto"  class="form-control form__input" required
                                                                                                placeholder="tipo Producto"
                                                                                                data-msg="tipo Producto."
                                                                                                minlength="1" maxlength="150"
                                                                                                data-error-class="u-has-error"
                                                                                                data-success-class="u-has-success"> 
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner">
                                                                                                <label>Marca Producto</label>
                                                                                                <input type="text" name="marcaProducto" id="marcaProducto"  class="form-control form__input" required
                                                                                                placeholder="Marca."
                                                                                                data-msg="Ingrese Marca."
                                                                                                minlength="1" maxlength="150"
                                                                                                data-error-class="u-has-error"
                                                                                                data-success-class="u-has-success"> 
                                                                                        </div>  
                                                                                    </div>
                                                                                </div>
                                                                                <br>
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner">
                                                                                                <label>Precio Costo</label>
                                                                                                <input type="text" name="precioCostoProducto" id="precioCostoProducto"  class="form-control form__input" required
                                                                                                placeholder="Precio Costo del Producto en Factura"
                                                                                                minlength="1" maxlength="50"
                                                                                                pattern="^[0-9]+(\.[0-9]{1,2})?$"  title="Solo numeros. Tamaño mínimo: 0.01 "
                                                                                                data-error-class="u-has-error"
                                                                                                data-success-class="u-has-success"> <!-- se asignan identificadores y detalles al campo de texto de la direccion comercial del proveedor -->
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner">
                                                                                                <label>Precio Venta</label>
                                                                                                <input type="text" name="precioVentaProducto" id="precioVentaProducto"  class="form-control form__input" required
                                                                                                placeholder="Precio sugerido de Venta del Producto"
                                                                                                minlength="1" maxlength="50"
                                                                                                pattern="^[0-9]+(\.[0-9]{1,2})?$"  title="Solo numeros. Tamaño mínimo: 0.01 "
                                                                                                data-error-class="u-has-error"
                                                                                                data-success-class="u-has-success"> 
                                                                                        </div>  
                                                                                    </div>
                                                                                </div>
                                                                                <br>
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner">
                                                                                                <label>Precio Promocional</label>
                                                                                                <input type="text" name="precioPromoProducto" id="precioPromoProducto"  class="form-control form__input" required
                                                                                                placeholder="Precio Promocional Autorizado para el Producto"
                                                                                                minlength="1" maxlength="50"
                                                                                                pattern="^[0-9]+(\.[0-9]{1,2})?$"  title="Solo numeros. Tamaño mínimo: 0.01 "
                                                                                                data-error-class="u-has-error"
                                                                                                data-success-class="u-has-success">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner">
                                                                                                <label>Stock Minimo</label>
                                                                                                <input type="text" name="stockMinProducto" id="stockMinProducto"  class="form-control form__input" required
                                                                                                minlength="1" maxlength="9"
                                                                                                pattern="[0-9]{1,9}"  title="SKU Tamaño mínimo: 1. Tamaño máximo: 9"
                                                                                                placeholder="Ingrese STOK Minimo para Alertar">
                                                                                        </div>  
                                                                                    </div>
                                                                                </div>
                                                                                <br>
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner">
                                                                                                <label>Presentacion Producto</label>
                                                                                                <select name="presentacionProducto" id="presentacionProducto" class="form-control" required>
                                                                                                
                                                                                                <option value="UNIDAD" selected="true" required>UNIDAD</option>
                                                                                                <option value="CAJA">CAJA</option>
                                                                                                <option value="PIEZA">PIEZA</option>
                                                                                                <option value="DOCENA">DOCENA</option>
                                                                                               
                                                                                            
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner">
                                                                                                <label>Estado del Producto</label>
                                                                                                <select name="estadoProducto" id="estadoProducto" class="form-control" required>
                                                                                                <option value="ACTIVO" selected="true" required>ACTIVO</option>
                                                                                                <option value="INACTIVO">INACTIVO</option>
                                                                                                </select>
                                                                                        </div>  
                                                                                    </div>
                                                                                </div>
                                                                                <br>
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner">
                                                                                                <label>Categoria</label>
                                                                                                <select name="id_Categoria" id="id_Categoria" class="form-control" required>
                                                                                                    <?php
                                                                                                    $sql= "SELECT * FROM  categoria ";
                                                                                                    $res=mysqli_query($conexionbd,$sql);
                                                                                                    while ($data=mysqli_fetch_row($res))
                                                                                                            {
                                                                                                                $dato0 = $data[0];
                                                                                                                $dato1 = $data[1];
                                                                                                                
                                                                                                    ?>
                                                                                                                <option value="<?php echo $dato0; ?>"> <?php echo $dato1; ?>  </option>
                                                                                                    <?php 	} ?>
                                                                                                </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner">
                                                                                                <label>Descripcion</label>
                                                                                                <textarea class="form-control form__input" type="text" name="descripcionProducto" id="descripcionProducto" 
                                                                                                placeholder="ingrese una descripcion"
                                                                                                data-msg="ingrese una descripcion."
                                                                                                maxlength="150"
                                                                                                pattern="[0-9]{0,150}"  title="Descripcion. Texto máximo: 150"
                                                                                                data-error-class="u-has-error"
                                                                                                data-success-class="u-has-success"></textarea> 
                                                                                        </div>  
                                                                                    </div>
                                                                                </div>
                                                                                <br>
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner">
                                                                                                <label>Imagen Cargada</label>
                                                                                                <div class="">
                                                                                                    <a href="#"><img src="img/courses/1.jpg" alt=""></a>
                                                                                                </div>
                                                                                                
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner">
                                                                                                <label>Imagen Producto</label>
                                                                                                <input type="text" name="imagenProducto" id="imagenProducto"  class="form-control form__input"
                                                                                                data-msg="Ingrese imagen."
                                                                                                minlength="1" maxlength="150"
                                                                                                data-error-class="u-has-error"
                                                                                                data-success-class="u-has-success"> 
                                                                                        </div>  
                                                                                    </div>
                                                                                </div>
                                                                                <br>
                                                                                <!-- /////////// fin de las filas de input -->
                                                                            
                                                                                <div class="modal-footer info-md">
                                                                                <br>
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner">
                                                                                           <!-- ESPACIO vacio para alinear a la derecha a los botones -->
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner pull-right col-lg-3">
                                                                                                <button type='Submit' class='pull-right btn btn-custon-rounded-three btn-success justify-content-sm-center align-items-sm-center' name ="guardarProducto" id="guardarProducto">Guardar</button> 
                                                                                                <button type='Submit' class='pull-right btn btn-custon-rounded-three btn-success' name ="editarProducto"id="editarProducto">Editar</button> 
                                                                                        </div>  
                                                                                        <div class="form-group-inner pull-right col-lg-3">
                                                                                                <button type='button' data-dismiss="modal" href="#" class='pull-right btn btn-custon-rounded-three btn-danger justify-content-sm-center align-items-sm-center'>Cancelar</button> 
                                                                                        </div>  
                                                                                    </div>
                                                                                </div>
                                                                                <br>
                                                    
                                                                            </div>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                    
                                               
                                            </form>
                                    </div>
                                    <div class="form-group-inner">
                                                        <!-- <div class="login-btn-inner">
                                                            <div class="row">
                                                                <div class="col-lg-8">
                                                                <button type='Submit' class='pull-left btn btn-custon-rounded-three btn-success justify-content-sm-center align-items-sm-center' name ="guardarProveedor"id="guardarProveedor">Guardar</button> 
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="login-horizental cancel-wp pull-left form-bc-ele">
                                                                    <button type='button' data-dismiss="modal" href="#" class='pull-left btn btn-custon-rounded-three btn-danger justify-content-sm-center align-items-sm-center'>Cancelar</button>
                                                                   
                                                                    <button type='Submit' class='pull-left btn btn-custon-rounded-three btn-success' name ="editarProveedor"id="editarProveedor">Editar</button> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                    </div>
                                   
                                </div>
                            </div>
                        </div>


<!-- Modal de Nueva comision que los empleados pueden tener  -->
                        <div id="modalNuevoComisionEmpleado" class="modal modal-edu-general fullwidth-popup-InformationproModal fade " role="dialog">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header header-color-modal bg-color-2">
                                        <h4 class="modal-title">Sucursal</h4>
                                        <div class="modal-close-area modal-close-df">
                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                       <!-- Checkout Form -->
                                            <form class="form-horizontal" method="post" id="form_modalComisionEmpleado" name="form_modalComisionEmpleado">
                                                    <!-- Step Form Header -->
                                                
                                                    <!-- End Step Form Header -->
                                        
                                                    <!-- Step Form Content -->
                                                    <div id="stepFormContent">
                                                            <!-- Customer Info -->
                                                            <div id="newComisionEmpleado" class="active">  <!-- asigna un id al bloque donde estan los campos de nuevo proveedor-->
                                                                
                                                                <!-- Billing Form -->
                                                                <div class="row">
                                                                         
                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="review-content-section">
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner">
                                                                                            <label>Comision Empleado</label>
                                                                                            <input  type="hidden" name="idComisionEmpleado" id="idComisionEmpleado" disabled > <!-- se asignan identificadores -->
                                                                                            <input type="text" name="comisionEmpleado" id="comisionEmpleado"  class="form-control form__input" placeholder="Comision Sueldo de Empleado" required
                                                                                                minlength="1" maxlength="50"
                                                                                                pattern="^[0-9]+(\.[0-9]{1,2})?$"  title="Solo numeros. Tamaño mínimo: 0.01 "
                                                                                                data-error-class="u-has-error"
                                                                                                data-success-class="u-has-success"> <!-- se asignan identificadores y detalles al campo de texto -->  
                                                                                        </div>
                                                                                        
                                                                                        
                                                                                        
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner">
                                                                                            <label >Descripcion Comision</label>
                                                                                            <textarea class="form-control form__input" type="text" name="descripcionComisionEmpleado" id="descripcionComisionEmpleado" 
                                                                                            data-msg="ingrese una descripcion de la Comision."
                                                                                            maxlength="150"
                                                                                            pattern="[0-9]{0,150}"  title="Números. Tamaño máximo: 150"
                                                                                            data-error-class="u-has-error"
                                                                                            placeholder="Descripcion"
                                                                                            data-success-class="u-has-success"></textarea><!-- se asignan identificadores y detalles al campo de texto de la descripcion del proveedor -->
                                                                                            
                                                                                        </div>
                                                                                        
                                                                                        
                                                                                        
                                                                                        
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    
                                                                                    <div class="col-lg-12">
                                                                                        <div class="chosen-select-single mg-b-20">
                                                                                                <label>Estado</label>
                                                                                                <select name="estadoComisionEmpleado" id="estadoComisionEmpleado" class="select2_demo_3 form-control">
                                                                                                    <option value="ACTIVO" selected="true">ACTIVO</option>
                                                                                                    <option value="INACTIVO">INACTIVO</option>
                                                                                                </select>
                                                                                        </div>  
                                                                                    </div>
                                                                                </div>
                                                                                
                                                                                

                                                                            </div>
                                                                        </div>
                                                                        
                                                            
                                                                </div>
                                                                

                                                            </div>
                                                        </div>
                                                   
                                            </form>
                                    </div>
                                    
                                    <div class="modal-footer info-md">

                                    <div class="form-group-inner">
                                                        <div class="login-btn-inner">
                                                            <div class="row">
                                                                <div class="col-lg-9"></div>
                                                                <div class="col-lg-3">
                                                                    <div class="login-horizental cancel-wp pull-left form-bc-ele">
                                                                    <button type='button' data-dismiss="modal" href="#" class='pull-left btn btn-custon-rounded-three btn-danger justify-content-sm-center align-items-sm-center'>Cancelar</button>
                                                                    <button type='button' class='pull-left btn btn-custon-rounded-three btn-success justify-content-sm-center align-items-sm-center' name ="guardarComisionEmpleado"id="guardarComisionEmpleado">Guardar</button> 
                                                                    <button type='button' class='pull-left btn btn-custon-rounded-three btn-success' name ="editarComisionEmpleado"id="editarComisionEmpleado">Editar</button> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    
<!-- Modal de Nueva comision que los empleados pueden tener  -->
<div id="modalNuevoHorarioEmpleado" class="modal modal-edu-general fullwidth-popup-InformationproModal fade " role="dialog">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header header-color-modal bg-color-2">
                                        <h4 class="modal-title">Horario</h4>
                                        <div class="modal-close-area modal-close-df">
                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                       <!-- Checkout Form -->
                                            <form class="form-horizontal" method="post" id="form_modalHorarioEmpleado" name="form_modalHorarioEmpleado">
                                                    <!-- Step Form Header -->
                                                
                                                    <!-- End Step Form Header -->
                                        
                                                    <!-- Step Form Content -->
                                                    <div id="stepFormContent">
                                                            <!-- Customer Info -->
                                                            <div id="newHorarioEmpleado" class="active">  <!-- asigna un id al bloque donde estan los campos de nuevo proveedor-->
                                                                
                                                                <!-- Billing Form -->
                                                                <div class="row">
                                                                         
                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="review-content-section">
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner">
                                                                                            <label>Nombre de Horario</label>
                                                                                            <input  type="hidden" name="idHorarioEmpleado" id="idHorarioEmpleado" disabled > <!-- se asignan identificadores -->
                                                                                            <input type="text" name="nombreHorarioEmpleado" id="nombreHorarioEmpleado"  class="form-control form__input" placeholder="horario de Empleado" required
                                                                                            data-msg="ingrese un horario Empleado."
                                                                                            maxlength="150"
                                                                                            title="Números. Tamaño máximo: 150"
                                                                                            data-error-class="u-has-error"
                                                                                            placeholder="Descripcion"
                                                                                            data-success-class="u-has-success"> <!-- se asignan identificadores y detalles al campo de texto -->  
                                                                                        </div>
                                                                                        
                                                                                        
                                                                                        
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner">
                                                                                            <label >Dias de Horario</label>
                                                                                            <textarea class="form-control form__input" type="text" name="diasHorarioEmpleado" id="diasHorarioEmpleado" 
                                                                                            data-msg="ingrese una descripcion de la Comision."
                                                                                            maxlength="150"
                                                                                            title="Números. Tamaño máximo: 150"
                                                                                            data-error-class="u-has-error"
                                                                                            placeholder="Descripcion"
                                                                                            data-success-class="u-has-success"></textarea><!-- se asignan identificadores y detalles al campo de texto de la descripcion del proveedor -->
                                                                                            
                                                                                        </div>
                                                                                        
                                                                                        
                                                                                        
                                                                                        
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                <div class="col-lg-6">
                                                                                        <div class="chosen-select-single mg-b-20">
                                                                                                <label>Horario</label>
                                                                                                <input type="text" name="rangoHorarioEmpleado" id="rangoHorarioEmpleado"  class="form-control form__input" placeholder="Rango horario de Empleado" required
                                                                                                data-msg="ingrese un horario Empleado."
                                                                                                maxlength="150"
                                                                                                title="Números. Tamaño máximo: 150"
                                                                                                data-error-class="u-has-error"
                                                                                                placeholder="Descripcion"
                                                                                                data-success-class="u-has-success"> <!-- se asignan identificadores y detalles al campo de texto --> 

                                                                                        </div>  
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="chosen-select-single mg-b-20">
                                                                                                <label>Estado</label>
                                                                                                <select name="estadoHorarioEmpleado" id="estadoHorarioEmpleado" class="select2_demo_3 form-control">
                                                                                                    <option value="ACTIVO" selected="true">ACTIVO</option>
                                                                                                    <option value="INACTIVO">INACTIVO</option>
                                                                                                </select>
                                                                                        </div>  
                                                                                    </div>
                                                                                </div>
                                                                                
                                                                                

                                                                            </div>
                                                                        </div>
                                                                        
                                                            
                                                                </div>
                                                                

                                                            </div>
                                                        </div>
                                                   
                                            </form>
                                    </div>
                                    
                                    <div class="modal-footer info-md">

                                    <div class="form-group-inner">
                                                        <div class="login-btn-inner">
                                                            <div class="row">
                                                                <div class="col-lg-9"></div>
                                                                <div class="col-lg-3">
                                                                    <div class="login-horizental cancel-wp pull-left form-bc-ele">
                                                                    <button type='button' data-dismiss="modal" href="#" class='pull-left btn btn-custon-rounded-three btn-danger justify-content-sm-center align-items-sm-center'>Cancelar</button>
                                                                    <button type='button' class='pull-left btn btn-custon-rounded-three btn-success justify-content-sm-center align-items-sm-center' name ="guardarHorarioEmpleado"id="guardarHorarioEmpleado">Guardar</button> 
                                                                    <button type='button' class='pull-left btn btn-custon-rounded-three btn-success' name ="editarHorarioEmpleado"id="editarHorarioEmpleado">Editar</button> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                    
                                    </div>
                                </div>
                            </div>
                        </div>