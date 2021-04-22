<!-- Modal de la ventana nuevo Sueldo para ver tipos de sieldo -->
                        <div id="modalNuevoSueldoEmpleado" class="modal modal-edu-general fullwidth-popup-InformationproModal fade " role="dialog">
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
                                            <form class="form-horizontal" method="post" id="form_modalTipoEmpleado" name="form_modalTipoEmpleado">
                                                    <!-- Step Form Header -->
                                                
                                                    <!-- End Step Form Header -->
                                        
                                                    <!-- Step Form Content -->
                                                    <div id="stepFormContent">
                                                            <!-- Customer Info -->
                                                            <div id="newSucursal" class="active">  <!-- asigna un id al bloque donde estan los campos de nuevo proveedor-->
                                                                
                                                                <!-- Billing Form -->
                                                                <div class="row">
                                                                         
                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="review-content-section">
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner">
                                                                                            <label>Sueldo Empleado</label>
                                                                                            <input  type="hidden" name="idSueldoEmpleado" id="idSueldoEmpleado" disabled > <!-- se asignan identificadores -->
                                                                                            <input type="text" name="sueldoEmpleado" id="sueldoEmpleado"  class="form-control form__input" placeholder="Sueldo de Empleado" required
                                                                                                minlength="1" maxlength="50"
                                                                                                pattern="^[0-9]+(\.[0-9]{1,2})?$"  title="Solo numeros. Tamaño mínimo: 0.01 "
                                                                                                data-error-class="u-has-error"
                                                                                                data-success-class="u-has-success"> <!-- se asignan identificadores y detalles al campo de texto de la direccion comercial del proveedor -->  
                                                                                        </div>
                                                                                        
                                                                                        
                                                                                        
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner">
                                                                                            <label >Descripcion Sueldo</label>
                                                                                            <textarea class="form-control form__input" type="text" name="descripcionSueldoEmpleado" id="descripcionSueldoEmpleado" 
                                                                                            placeholder="ingrese una descripcion del Proveedor"
                                                                                            data-msg="ingrese una descripcion del Proveedor."
                                                                                            maxlength="150"
                                                                                            pattern="[0-9]{0,150}"  title="Descripcion. Texto máximo: 150"
                                                                                            data-error-class="u-has-error"
                                                                                            data-success-class="u-has-success"></textarea> <!-- se asignan identificadores y detalles al campo de texto de la descripcion del proveedor -->
                                                                                            
                                                                                        </div>
                                                                                        
                                                                                        
                                                                                        
                                                                                        
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="chosen-select-single mg-b-20">
                                                                                                <label>Privilegios</label>
                                                                                                <select name="privilegioGrupoID" id="privilegioGrupoID" class="select2_demo_3 form-control">
                                                                                                    <option value="1" selected="true">Ventas</option>
                                                                                                    
                                                                                                </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="chosen-select-single mg-b-20">
                                                                                                <label>Estado</label>
                                                                                                <select name="estadoSueldoEmpleado" id="estadoSueldoEmpleado" class="select2_demo_3 form-control">
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
                                                                    <button type='button' class='pull-left btn btn-custon-rounded-three btn-success justify-content-sm-center align-items-sm-center' name ="guardarSueldoEmpleado"id="guardarSueldoEmpleado">Guardar</button> 
                                                                    <button type='button' class='pull-left btn btn-custon-rounded-three btn-success' name ="editarSueldoEmpleado"id="editarSueldoEmpleado">Editar</button> 
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