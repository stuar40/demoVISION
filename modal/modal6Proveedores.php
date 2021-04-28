<!-- Modal de la ventana nuevo Sueldo para ver tipos de sieldo -->
                        <div id="modalNuevoProveedor" class="modal modal-edu-general fullwidth-popup-InformationproModal fade " role="dialog">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header header-color-modal bg-color-2">
                                        <h4 class="modal-title">Proveedor</h4>
                                        <div class="modal-close-area modal-close-df">
                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                       <!-- Checkout Form -->
                                            <form class="form-horizontal" method="post" id="form_modalProveedor" name="form_modalProveedor">
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
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner">
                                                                                            <label>Nombre Comercial</label>
                                                                                            <input  type="hidden" name="idProveedor" id="idProveedor" disabled > <!-- se asignan identificadores -->
                                                                                            <input type="text" name="nombreProveedor" id="nombreProveedor"  class="form-control form__input" required
                                                                                            placeholder="Ingrese Nombre del proveedor"
                                                                                            data-msg="Ingrese Nombre Comercial."
                                                                                            minlength="1" maxlength="150"
                                                                                            data-error-class="u-has-error"
                                                                                            data-success-class="u-has-success">  <!-- se asignan identificadores y detalles al campo de texto de la direccion comercial del proveedor -->  
                                                                                        </div>
                                                                                        
                                                                                        
                                                                                        
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner">
                                                                                            <label >NIT Proveedor</label>
                                                                                            <input class="form-control form__input" type="text" name="nitProveedor" id="nitProveedor" 
                                                                                            minlength="6" maxlength="9"
                                                                                            pattern="[0-9]{6,9}"  title="Numero de NIT (Sin Guion) Tamaño mínimo: 6. Tamaño máximo: 9"
                                                                                            placeholder="Ingrese NIT del proveedor"> <!-- se asignan identificadores y detalles al campo de texto de la descripcion del proveedor -->
                                                                                            
                                                                                        </div>
                                                                                        
                                                                                        
                                                                                        
                                                                                        
                                                                                    </div>
                                                                                </div>
                                                                                <br>
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner">
                                                                                                <label>Razon Social Proveedor</label>
                                                                                                <input type="text" name="razonSocialProveedor" id="razonSocialProveedor"  class="form-control form__input" required
                                                                                                placeholder="Ingrese Razon social del proveedor"
                                                                                                data-msg="Ingrese Razon Social."
                                                                                                minlength="1" maxlength="150"
                                                                                                data-error-class="u-has-error"
                                                                                                data-success-class="u-has-success"> 
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner">
                                                                                                <label>No. Telefono</label>
                                                                                                <input type="text" name="telefono1Proveedor" id="telefono1Proveedor"  class="form-control form__input" required
                                                                                                minlength="3" maxlength="12"
                                                                                                pattern="[0-9]{3,12}"  title="Telefono solo numeros. Tamaño mínimo: 3 máximo: 12"
                                                                                                placeholder="Ingrese No. de Telefono">
                                                                                        </div>  
                                                                                    </div>
                                                                                </div>
                                                                                <br>
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner">
                                                                                                <label>No. Telefono Secundario</label>
                                                                                                <input type="text" name="telefono2Proveedor" id="telefono2Proveedor"  class="form-control form__input" 
                                                                                                minlength="3" maxlength="12"
                                                                                                pattern="[0-9]{3,12}"  title="Telefono solo numeros. Tamaño mínimo: 3 máximo: 12"
                                                                                                placeholder="Ingrese No. de Telefono Secundario">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner">
                                                                                                <label>Correo ELectronico</label>
                                                                                                <input type="email" name="emailProveedor" id="emailProveedor"  class="form-control form__input" 
                                                                                                placeholder="Ingrese correo electronico del proveedor"
                                                                                               >
                                                                                        </div>  
                                                                                    </div>
                                                                                </div>
                                                                                <br>
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner">
                                                                                                <label>Direccion comercial</label>
                                                                                                <input type="text" name="direccionProveedor" id="direccionProveedor"  class="form-control form__input" required
                                                                                                placeholder="Ingrese Direccion comercial del proveedor"
                                                                                                data-msg="Por favor ingrese la direccion"
                                                                                                title="Direccion del Proveedor"
                                                                                                minlength="1" maxlength="150"
                                                                                                data-error-class="u-has-error"
                                                                                                data-success-class="u-has-success">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner">
                                                                                                <label>Ciudad del Proveedor</label>
                                                                                                <input type="text" name="ciudadProveedor" id="ciudadProveedor"  class="form-control form__input" 
                                                                                                placeholder="Ingrese la ciudad comercial del proveedor"
                                                                                                data-msg="Por favor ingrese la ciudad"
                                                                                                title="ciudad del Proveedor"
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
                                                                                                <label>Pais del Proveedor</label>
                                                                                                <input type="text" name="paisProveedor" id="paisProveedor"  class="form-control form__input" required
                                                                                                placeholder="Ingrese el pais del proveedor"
                                                                                                data-msg="Ingrese el pais del Proveedor."
                                                                                                minlength="1" maxlength="150"
                                                                                                data-error-class="u-has-error"
                                                                                                data-success-class="u-has-success"> 
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner">
                                                                                                <label>Descripcion del Proveedor</label>
                                                                                                <textarea class="form-control form__input" type="text" name="descripcionProveedor" id="descripcionProveedor" 
                                                                                                placeholder="ingrese una descripcion del Proveedor"
                                                                                                data-msg="ingrese una descripcion del Proveedor."
                                                                                                maxlength="150"
                                                                                                pattern="[0-9]{0,150}"  title="Descripcion. Texto máximo: 150"
                                                                                                data-error-class="u-has-error"
                                                                                                data-success-class="u-has-success"></textarea> 
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
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner pull-right col-lg-3">
                                                                                                <button type='Submit' class='pull-right btn btn-custon-rounded-three btn-success justify-content-sm-center align-items-sm-center' name ="guardarProveedor"id="guardarProveedor">Guardar</button> 
                                                                                                <button type='Submit' class='pull-right btn btn-custon-rounded-three btn-success' name ="editarProveedor"id="editarProveedor">Editar</button> 
                                                                                        </div>  
                                                                                        <div class="form-group-inner pull-right col-lg-3">
                                                                                                <button type='button' data-dismiss="modal" href="#" class='pull-right btn btn-custon-rounded-three btn-danger justify-content-sm-center align-items-sm-center'>Cancelar</button> 
                                                                                        </div>  
                                                                                    </div>
                                                                                </div>
                                                                                <br>
                                                    

                                    
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