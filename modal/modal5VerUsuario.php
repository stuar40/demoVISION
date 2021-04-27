<!-- Modal de la ventana nuevo Sueldo para ver tipos de sieldo -->
                        <div id="modalVerUsuario" class="modal modal-edu-general fullwidth-popup-InformationproModal fade " role="dialog">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header header-color-modal bg-color-2">
                                        <h4 class="modal-title">Usuario</h4>
                                        <div class="modal-close-area modal-close-df">
                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                            <!-- Checkout Form -->
                                            <form class="form-horizontal" method="post" id="form_modalVerUsuario" name="form_modalVerUsuario">
                                                    <!-- Step Form Header -->
                                                
                                                    <!-- End Step Form Header -->
                                        
                                                    <!-- Step Form Content -->
                                                    <div id="stepFormContent">
                                                            <!-- Customer Info -->
                                                            <div id="" class="active">  <!-- asigna un id al bloque donde estan los campos de nuevo proveedor-->
                                                                
                                                                <!-- Billing Form -->
                                                                <div class="row">
                                                                         
                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="review-content-section">
                                                                                <!--/////////////////////////////////////// INICIO Fila1 de dos cajas de texto -->
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner">
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
                                                                                            </div><!-- se asignan identificadores y detalles al campo de texto de la direccion comercial del proveedor -->  
                                                                                        </div>
                                                                                    </div>

                                                                                    <!-- Segund Columna  -->
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner">
                                                                                            <label >Nombre de Usuario</label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                                            <span class="text-danger">*</span>
                                                                                            <div class="form-group ">
                                                                                                <input name="nombreUsuario" id="nombreUsuario" type="text" class="form-control " placeholder="Nombre Usuario"    required
                                                                                                data-msg="Nombre de Usuario."
                                                                                                minlength="1" maxlength="20"
                                                                                                title="Tamaño máximo: 20 Caracteres"
                                                                                                data-error-class="u-has-error"
                                                                                                data-success-class="u-has-success"  >
                                                                                            </div> <!-- se asignan identificadores y detalles al campo de texto de la descripcion del proveedor -->
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- //// FIN de la Fila de 2 columnas con dos campos -->
                                                                                <!--///////////////////////////////////////INICIO Fila1 de dos cajas de texto -->
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="chosen-select-single mg-b-20">
                                                                                            <label >Segundo Nombre </label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                                            <span class="h10 small">(opcional)</span>
                                                                                            <div class="form-group">
                                                                                                <input name="segNombreUsuario" id="segNombreUsuario" type="text" class="select2_demo_3 form-control" placeholder="Segundo Nombre Empleado"  
                                                                                                data-msg="Ingrese Segundo Nombre ."
                                                                                                minlength="1" maxlength="45"
                                                                                                title="Tamaño máximo: 45 Caracteres"
                                                                                                data-error-class="u-has-error"
                                                                                                data-success-class="u-has-success">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-lg-6">
                                                                                        <div class="chosen-select-single mg-b-20">
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
                                                                                        </div>  
                                                                                    </div>
                                                                                </div>  <!-- //// FIN de la Fila de 2 columnas con dos campos -->

                                                                                 <!--///////////////////////////////////////INICIO Fila1 de dos cajas de texto -->
                                                                                 <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="chosen-select-single mg-b-20">
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
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-lg-6">
                                                                                        <div class="chosen-select-single mg-b-20">
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
                                                                                        </div>  
                                                                                    </div>
                                                                                </div>  <!-- //// FIN de la Fila de 2 columnas con dos campos -->

                                                                                 <!--///////////////////////////////////////INICIO Fila1 de dos cajas de texto -->
                                                                                 <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="chosen-select-single mg-b-20">
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
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-lg-6">
                                                                                        <div class="chosen-select-single mg-b-20">
                                                                                            <label >Estado Usuario</label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                                            <span class="text-danger">*</span>
                                                                                            <div class="form-group res-mg-t-15">
                                                                                            <select name="estadoUsuario" id="estadoUsuario" class="form-control" required>
                                                                                                
                                                                                                <option value="ACTIVO" selected="true" required>ACTIVO</option>
                                                                                                <option value="INACTIVO">INACTIVO</option>
                                                                                            
                                                                                            
                                                                                            </select>
                                                                                            </div>
                                                                                        </div>  
                                                                                    </div>
                                                                                </div>  <!-- //// FIN de la Fila de 2 columnas con dos campos -->

                                                                                 <!--///////////////////////////////////////INICIO Fila1 de dos cajas de texto -->
                                                                                 <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="chosen-select-single mg-b-20">
                                                                                            <label>No. Identificacion</label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                                            <span class="text-danger">*</span>
                                                                                            <div class="form-group">
                                                                                                <input name="noIdentificacionUsuario" id="noIdentificacionUsuario" type="number" class="form-control" placeholder="No. Identificacion Empleado"  required
                                                                                                minlength="3" maxlength="15"
                                                                                                pattern="[0-9]{3,15}"  title="Identificacion. Tamaño máximo: 15"
                                                                                                placeholder="Ingrese No. de Identificacion" >
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-lg-6">
                                                                                        <div class="chosen-select-single mg-b-20">
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
                                                                                        </div>  
                                                                                    </div>
                                                                                </div>  <!-- //// FIN de la Fila de 2 columnas con dos campos -->

                                                                                <!--///////////////////////////////////////INICIO Fila1 de dos cajas de texto -->
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="chosen-select-single mg-b-20">
                                                                                            <label >Sexo Empleado</label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                                            <span class="text-danger">*</span>
                                                                                            <div class="form-group">
                                                                                            <select name="sexoUsuario" id="sexoUsuario" class="form-control" required>
                                                                                                
                                                                                                <option value="M" selected="true" required>Masculino</option>
                                                                                                <option value="F">Femenino</option>
                                                                                                <option value="O">Otro</option>
                                                                                            
                                                                                            </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-lg-6">
                                                                                        <div class="chosen-select-single mg-b-20">
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
                                                                                        </div>  
                                                                                    </div>
                                                                                </div>  <!-- //// FIN de la Fila de 2 columnas con dos campos -->

                                                                                <!--///////////////////////////////////////INICIO Fila1 de dos cajas de texto -->
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="chosen-select-single mg-b-20">
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
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-lg-6">
                                                                                        <div class="chosen-select-single mg-b-20">
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
                                                                                        </div>  
                                                                                    </div>
                                                                                </div>  <!-- //// FIN de la Fila de 2 columnas con dos campos -->


                                                                                <!--///////////////////////////////////////INICIO Fila1 de dos cajas de texto -->
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="chosen-select-single mg-b-20">
                                                                                            <label >Telefono Empleado</label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                                            <span class="text-danger">*</span>
                                                                                            <div class="form-group ">
                                                                                                <input name="telUsuario" id="telUsuario" type="text" class="form-control " placeholder="Telefono Empleado" 
                                                                                                minlength="3" maxlength="12"
                                                                                                pattern="[0-9]{3,12}"  title="Telefono. Tamaño máximo: 15"
                                                                                                placeholder="Ingrese No. de Telefono"  >
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-lg-6">
                                                                                        <div class="chosen-select-single mg-b-20">
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
                                                                                        </div>  
                                                                                    </div>
                                                                                </div>  <!-- //// FIN de la Fila de 2 columnas con dos campos -->

                                                                                <!--///////////////////////////////////////INICIO Fila1 de dos cajas de texto -->
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="chosen-select-single mg-b-20">
                                                                                            <label >Correo Electronico</label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                                            <span class="h10 ">(opcional)</span>
                                                                                            <div class="form-group ">
                                                                                                <input name="emailUsuario" id="emailUsuario" type="email" class="form-control " placeholder="Correo Electronico" 
                                                                                                    placeholder="Ingrese Correo Electronico del Asesor"   >
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-lg-6">
                                                                                        <div class="chosen-select-single mg-b-20">
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
                                                                                        </div>  
                                                                                    </div>
                                                                                </div>  <!-- //// FIN de la Fila de 2 columnas con dos campos -->
                                                                                <!--///////////////////////////////////////INICIO Fila1 de dos cajas de texto -->
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="chosen-select-single mg-b-20">
                                                                                            <label >Fecha de Nacimiento</label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                                            <span class="text-danger">*</span>
                                                                                            <div class="form-group ">
                                                                                                <input name="nacimientoUsuario" id="nacimientoUsuario" type="date" class="form-control " placeholder="Fecha de Nacimiento "  required >
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-lg-6">
                                                                                        <div class="chosen-select-single mg-b-20">
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
                                                                                        </div>  
                                                                                    </div>
                                                                                </div>  <!-- //// FIN de la Fila de 2 columnas con dos campos -->

                                                                            </div> <!-- //// FIN del Conentedor de las filas -->
                                                                        </div> <!-- //// FIN de la COLUMNA Global -->
                                                                        
                                                            
                                                                </div><!-- //// FIN de la Fila GLOBAL -->
                                                                

                                                            </div><!-- //// FIN del DIV -->
                                                        </div><!-- //// FIN del DIV stepFormContent-->
                                                   
                                            </form><!-- //// FIN del FORM-->
                                        </div><!-- //// FIN del DIV modal-body-->
                                    
                                    <div class="modal-footer info-md">

                                    <div class="form-group-inner">
                                                        <div class="login-btn-inner">
                                                            <div class="row">
                                                                <div class="col-lg-9"></div>
                                                                <div class="col-lg-3">
                                                                    <div class="login-horizental cancel-wp pull-left form-bc-ele">
                                                                    <button type='button' data-dismiss="modal" href="#" class='pull-left btn btn-custon-rounded-three btn-danger justify-content-sm-center align-items-sm-center'>Cancelar</button>
                                                                    <button type='button' class='pull-left btn btn-custon-rounded-three btn-success' name ="editarUsuario"id="editarUsuario">Editar</button> 
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