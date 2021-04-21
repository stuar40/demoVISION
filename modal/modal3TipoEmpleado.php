



                        
                        <div id="modalNuevoTipoEmpleado" class="modal modal-edu-general fullwidth-popup-InformationproModal fade " role="dialog">
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
                                                                                            <label>Tipo Empleado</label>
                                                                                            <input  type="hidden" name="idTipoEmpleado" id="idTipoEmpleado" disabled > <!-- se asignan identificadores -->
                                                                                            <input type="text" name="roltipoEmpleado" id="roltipoEmpleado"  class="form-control form__input" placeholder="Tipo de Empleado" required
                                                                                            data-msg="Ingrese Tipo de Empleado."
                                                                                            maxlength="150"
                                                                                            data-error-class="u-has-error"
                                                                                            data-success-class="u-has-success">
                                                                                        </div>
                                                                                        
                                                                                        
                                                                                        
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner">
                                                                                            <label >Descripcion</label>
                                                                                            <textarea class="form-control form__input" type="text" name="descripcionTipoEmpleado" id="descripcionTipoEmpleado" 
                                                                                            data-msg="ingrese una descripcion del Empleado."
                                                                                            maxlength="150"
                                                                                            pattern="[0-9]{0,150}"  title="Números. Tamaño máximo: 150"
                                                                                            data-error-class="u-has-error"
                                                                                            placeholder="Descripcion"
                                                                                            data-success-class="u-has-success"></textarea><!-- se asignan identificadores y detalles al campo de texto de la descripcion del proveedor -->
                                                                                            
                                                                                        </div>
                                                                                        
                                                                                        
                                                                                        
                                                                                        
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                    <div class="chosen-select-single mg-b-20">
                                                                                        <label>Privilegios</label>
                                                                                        <select name="privilegioGrupoID" id="privilegioGrupoID" class="select2_demo_3 form-control">
                                                                                               
                                                                                                <option value="1" selected="true">Ventas</option>
                                                                                                <option value="2">Bodega</option>
                                                                                                <option value="3">Optometrista</option>
                                                                                                <option value="4">Supervisor</option>
                                                                                                <option value="5">Gerente</option>
                                                                                                <option value="6">Administrador</option>
                                                                                                
                                                                                            </select>
                                                                                    </div>
                                                                                        
                                                                                        
                                                                                        
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                    <div class="chosen-select-single mg-b-20">
                                                                                        <label>Estado</label>
                                                                                        <select name="estadoTipoEmpleado" id="estadoTipoEmpleado" class="select2_demo_3 form-control">
                                                                                               
                                                                                                <option value="ACTIVO" selected="true">ACTIVO</option>
                                                                                                <option value="INACTIVO">INACTIVO</option>
                                                                                               
                                                                                            </select>
                                                                                    </div>  
                                                                                        <label >Privilegios</label>
                                                                                        <div id="bloquePrivilegios" >
                                                                                            
                                                                                           
                                                                                        
                                                                                        
                                                                                            <?php 
                                                                                            $query_select = mysqli_query($conexionbd,"SELECT *  FROM privilegios ");
                                                                                            $num_rows = mysqli_num_rows($query_select);
                                                                                            ?>
                                                                                            <?php
                                                                                                if ($num_rows > 0) {
                                                                                                    # code...
                                                                                                    
                                                                                                    while ($row = mysqli_fetch_assoc($query_select)) {
                                                                                                    
                                                                                                    
                                                                                                ?>          
                                                                                                    <div class="col-lg-6  pull-left">
                                                                                                        <label class="pull-left">
                                                                                                        <input  type="checkbox" id="<?php echo $row['idPrivilegios']?>" value="<?php echo $row['idPrivilegios']?>" > <i></i> <?php echo $row['privilegio']?> </label>
                                                                                                    </div> 
                                                                                                        
                                                                                                <?php }
                                                                                                }else{
                                                                                                    echo "notData";
                                                                                                } 
                                                                                                ?>
                                                                                                <div class="col-lg-6  pull-left">
                                                                                                        <label class="pull-left">
                                                                                                        <input  type="checkbox" id="prueba" value="prueba" > <i></i> prueba </label>
                                                                                                    </div>
                                                                                                        
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
                                                                    <button type='button' class='pull-left btn btn-custon-rounded-three btn-success justify-content-sm-center align-items-sm-center' name ="guardarSucursal"id="guardarTipoEmpleado">Guardar</button> 
                                                                    <button type='button' class='pull-left btn btn-custon-rounded-three btn-success' name ="editarSucursal"id="editarTipoEmpleado">Editar</button> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                    
                                    </div>
                                </div>
                            </div>
                        </div>