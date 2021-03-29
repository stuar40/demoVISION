


                        <div id="modalNuevaSucursal" class="modal modal-edu-general fullwidth-popup-InformationproModal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header header-color-modal bg-color-2">
                                        <h4 class="modal-title">Sucursal</h4>
                                        <div class="modal-close-area modal-close-df">
                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                       <!-- Checkout Form -->
                                            <form class="form-horizontal" method="post" id="Sucursal" name="Sucursal">
                                                    <!-- Step Form Header -->
                                                
                                                    <!-- End Step Form Header -->
                                        
                                                    <!-- Step Form Content -->
                                                    <div id="stepFormContent">
                                                            <!-- Customer Info -->
                                                            <div id="newSucursal" class="active">  <!-- asigna un id al bloque donde estan los campos de nuevo proveedor-->
                                                                
                                                                <!-- Billing Form -->
                                                                <div class="row">
                                                                    
                                                                        <div class="col-md-6">
                                                                            <!-- Input  primer bloque ingresa el nombre comercial del proveedor  -->
                                                                            <div class="js-form-message mb-6">
                                                                                <label>Nombre Sucursal</label> <span class="text-danger">*</span>
                                                                            
                                                        
                                                                                <div class="js-focus-state input-group form">
                                                                                    <input class="form-control form__input" type="hidden" name="idSucursal" id="idSucursal" disabled > <!-- se asignan identificadores y detalles alnombre del asesor de proveedores -->
                                                                                    <input  class="form-control form__input" type="text" name="nombreSucursal" id="nombreSucursal" required
                                                                                            data-msg="Ingrese Nombre Sucursal."
                                                                                            minlength="1" maxlength="150"
                                                                                            data-error-class="u-has-error"
                                                                                            data-success-class="u-has-success">  <!-- se asignan identificadores y detalles al campo de texto del nombre comercial del proveedor -->
                                                                                </div> 
                                                                            </div>
                                                                            <!-- End Input -->
                                                                        </div>
                                                        
                                                                        <div class="col-md-6">
                                                                            <!-- Input 2 segundo bloque ingreso de NIT del proveedor -->
                                                                            <div class="js-form-message mb-6">
                                                                                <label> <!-- etiqueta del campo de texto  donde se almacena el NIT comercial del proveedor -->
                                                                                Departamento
                                                                                <span class="text-danger">*</span>
                                                                                </label>
                                                                                <div class="js-focus-state input-group form">
                                                                                    <input  class="form-control form__input" type="text" name="departamentoSucursal" id="departamentoSucursal" required
                                                                                            minlength="6" maxlength="9"
                                                                                            pattern="[0-9]{6,12}"  title="Numero de NIT (Sin Guion) Tamaño mínimo: 8. Tamaño máximo: 12"
                                                                                            placeholder=""> <!-- se asignan identificadores y detalles al campo de texto del NIT  comercial del proveedor -->
                                                                                </div>
                                                                            </div>
                                                                            <!-- End Input -->
                                                                        </div>
                                                
                                                                    
                                                        
                                                                        <div class="w-100"></div> 
                                                                        
                                                                        <div class="col-md-6">
                                                                            <!-- Input3 bloque de ingreso de direccion del proveedor -->
                                                                            <div class="js-form-message mb-6">
                                                                                <label ><!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                                    Direccion Comercial
                                                                                </label>
                                                        
                                                                                <div class="js-focus-state input-group form">
                                                                                    <input  class="form-control form__input" type="text" name="direccionSucursal" id="direccionSucursal" 
                                                                                            
                                                                                            data-msg="Por favor ingrese la direccion"
                                                                                            minlength="1" maxlength="150"
                                                                                            data-error-class="u-has-error"
                                                                                            data-success-class="u-has-success"> <!-- se asignan identificadores y detalles al campo de texto de la direccion comercial del proveedor -->
                                                                                </div>
                                                                            </div>
                                                                            <!-- End Input -->
                                                                        </div>
                                                        
                                                        
                                                                        <div class="col-md-6">
                                                                            <!-- Input bloque de ingreso de numero de telefono del proveedor-->
                                                                            <div class="js-form-message mb-6">
                                                                                <label ><!-- etiqueta del campo de texto  donde se ingresa el numero del proveedor -->
                                                                                    Telefono Sucursal
                                                                                    
                                                                                </label>
                                                        
                                                                                <div class="js-focus-state input-group form">
                                                                                    <input class="form-control form__input" type="num" name="telefonoSucursal" id="telefonoSucursal" required
                                                                                        minlength="3" maxlength="12"
                                                                                        pattern="[0-9]{3,12}"  title="Telefono. Tamaño mínimo: 3. Tamaño máximo: 12">  <!-- se asignan identificadores y detalles al campo de texto del No telefono del proveedor -->
                                                                                </div>
                                                                            </div>
                                                                            <!-- End Input -->
                                                                        </div>
                                                        
                                                        
                                                            
                                                                        <div class="w-100"></div>   <!-- Bloque de ancho de la fila -->
                                                                        <div class="col-md-6">
                                                                            <!-- Input3 bloque de ingreso de direccion del proveedor -->
                                                                            <div class="js-form-message mb-6">
                                                                                <label ><!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                                    Correo Electronico
                                                                                </label>
                                                        
                                                                                <div class="js-focus-state input-group form">
                                                                                    <input  class="form-control form__input" type="text" name="correoSucursal" id="correoSucursal" 
                                                                                            
                                                                                            data-msg="Por favor ingrese la direccion"
                                                                                            minlength="1" maxlength="150"
                                                                                            data-error-class="u-has-error"
                                                                                            data-success-class="u-has-success"> <!-- se asignan identificadores y detalles al campo de texto de la direccion comercial del proveedor -->
                                                                                </div>
                                                                            </div>
                                                                            <!-- End Input -->
                                                                        </div>
                                                        
                                                        
                                                                        <div class="col-md-6">
                                                                            <!-- Input bloque de ingreso de numero de telefono del proveedor-->
                                                                            <div class="js-form-message mb-6">
                                                                                <label ><!-- etiqueta del campo de texto  donde se ingresa el numero del proveedor -->
                                                                                    Horario Sucursal
                                                                                    
                                                                                </label>
                                                        
                                                                                <div class="js-focus-state input-group form">
                                                                                    <input class="form-control form__input" type="num" name="horarioSucursal" id="horarioSucursal" required
                                                                                        minlength="3" maxlength="12"
                                                                                        pattern="[0-9]{3,12}"  title="Telefono. Tamaño mínimo: 3. Tamaño máximo: 12">  <!-- se asignan identificadores y detalles al campo de texto del No telefono del proveedor -->
                                                                                </div>
                                                                            </div>
                                                                            <!-- End Input -->
                                                                        </div>
                                                        
                                                        
                                                            
                                                                        <div class="w-100"></div>   <!-- Bloque de ancho de la fila -->
                                                        
                                                                        <div class="col-md-6">   <!--Bloque de Columna son 2 columnas por fila -->
                                                                            <!-- Input Bloque de ingreso de la descripcion del proveedor-->
                                                                            <div class="js-form-message mb-6">
                                                                                <label><!-- etiqueta del campo de texto  donde se ingresa la descripcion del proveedor -->
                                                                                    Descripcion
                                                                                </label>
                                                            
                                                                                <div class="js-focus-state input-group form">
                                                                                            <textarea class="form-control form__input" type="text" name="descripcionSucursal" id="descripcionSucursal" 
                                                                                            data-msg="ingrese una descripcion del Proveedor."
                                                                                            maxlength="150"
                                                                                            pattern="[0-9]{0,150}"  title="Números. Tamaño máximo: 150"
                                                                                            data-error-class="u-has-error"
                                                                                            data-success-class="u-has-success"></textarea><!-- se asignan identificadores y detalles al campo de texto de la descripcion del proveedor -->
                                                                                </div>
                                                                            </div>
                                                                            <!-- End Input -->
                                                                        </div>
                                                        
                                                                        <div class="col-md-6">
                                                                            <!-- Input -->
                                                                            <label>Empresa</label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                            
                                                                            <div class="form-group">
                                                                                <select name="EmpresaID" id="EmpresaID" class="form-control">
                                                                                <option  value= "1" selected="true"> MacroVIsion</option>
                                                                                <option value="2">Empresa2</option>
                                                                                <option value="3">Empresa 3</option>
                                                                                <option value="4">Opticas Costa Rica</option>
                                                                                
                                                                                </select>
                                                                            </div>
                                                                            <!-- End Input -->
                                                                        </div>
                                                        
                                                        
                                                        
                                                                        <div class="w-100"></div>
                                                                        
                                                                            
                                                                        
                                                            
                                                                </div>
                                                            </div>
                                                    </div>
                                                
                                            </form>
                                    </div>
                                    
                                    <div class="modal-footer info-md">
                                        <div class='button-style-three justify-content-sm-center align-items-sm-center'> 
                                            <button type='button' data-dismiss="modal" href="#" class='btn btn-custon-rounded-three btn-danger justify-content-sm-center align-items-sm-center'>Cancelar</button>
                                            <button type='button' class='btn btn-custon-rounded-three btn-success justify-content-sm-center align-items-sm-center' name ="guardarSucursal"id="guardarSucursal">Guardar</button> 
                                            <button type='button' class='btn btn-custon-rounded-three btn-success' name ="editarSucursal"id="editarSucursal">Editar</button> 
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>