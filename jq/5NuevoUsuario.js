$(document).ready(function(){
    //===================VARIABLES ========================
    console.log("esta funcionando JS de Mantenimiento Sueldo correctamente");
    var fila; //captura valores de la fila para editar, ver, ver asesores asociado
    var idProveedor=0; // incializa la variable del id del Proveedor como variable global para ser utilizada en mas opciones
    var idAsesor=0;// incializa la variable del id del Asesor como variable global para ser utilizada en la opcion obtener datos y actualizar
    var action="nohayaccion";// incializa
    // boton editar  Proveedor
    //================FIN VARIABLES
    //================INICIO FUNCIONES
    //incializa la tabla con la libreria DataTable que lista todos 
    tablaVerUsuarios = $('#tablaVerUsuarios').DataTable({  // incializa la
        "columnDefs":[{
        "targets": -1,
        "data":null,
        // incia 3 botones del dataTable 
        "defaultContent": "<div class='text-center'><div class='button-style-three'> <button type='button' class='btn btn-custon-rounded-three btn-success btnVerUsuario'>Ver</button> <button  type='button' class='btn btn-custon-rounded-three btn-danger btnDesactivarUsuario'>Desactivar</button>  </div></div>"  
        }],
        
        //Para cambiar el lenguaje a español
    "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Último",
                "sNext":"Siguiente",
                "sPrevious": "Anterior"
            },
            "sProcessing":"Procesando...",
        }
    });
    //------------fin inicializacion de la estructura de DataTable que lista los
    
    
    
    //------------fin inicializacion de la estructura de DataTable que lista los
      // BOTON Mostrar Tipo de Empleado
        $("#formNuevoUsuario").submit(function( event ) { 
            action = 'guardarNuevoUsuario';
            idUsuario = $.trim($("#idUsuario").val()); // toma el valor que contenga los inputs 
            priNombreUsuario = $.trim($("#priNombreUsuario").val()); // toma el valor que contenga los inputs del formulario con el idnombreComercial y lo ingresa a una variable 
            segNombreUsuario = $.trim($("#segNombreUsuario").val());// toma el valor que contenga los inputs del formulario con el id proveedorNIT y lo ingresa a una variable 
            priApellidoUsuario = $.trim($("#priApellidoUsuario").val());
            segApellidoUsuario = $.trim($("#segApellidoUsuario").val());
            noIdentificacionUsuario = $.trim($("#noIdentificacionUsuario").val());
            sexoUsuario = $.trim($("#sexoUsuario").val());
            direccionUsuario = $.trim($("#direccionUsuario").val());
            telUsuario = $.trim($("#telUsuario").val());
            emailUsuario = $.trim($("#emailUsuario").val());
            nacimientoUsuario = $.trim($("#nacimientoUsuario").val());
            nombreUsuario = $.trim($("#nombreUsuario").val());
            passUsuario = $.trim($("#passUsuario").val());
            descripcionUsuario = $.trim($("#descripcionUsuario").val());
            estadoUsuario = $.trim($("#estadoUsuario").val());
            id_sueldoUsuario = $.trim($("#id_sueldoUsuario").val());
            id_comisionUsuario = $.trim($("#id_comisionUsuario").val());
            id_privilegiosUsuario = $.trim($("#id_privilegiosUsuario").val());
            id_horarioUsuario = $.trim($("#id_horarioUsuario").val());
            id_sucursalUsuario = $.trim($("#id_sucursalUsuario").val());
            
            $.ajax({ //aqui se indica que vamos a hacer con los datos obtenidos del formulario
                type: "POST",
                url: "ajax/ajax5NuevoUsuario.php", //indica el Ajax donde se procesara los parametros enviados 
                
                data: {action:action, 
                    // idUsuario:idUsuario,
                    priNombreUsuario:priNombreUsuario,
                    segNombreUsuario:segNombreUsuario,
                    priApellidoUsuario:priApellidoUsuario,
                    segApellidoUsuario:segApellidoUsuario,
                    noIdentificacionUsuario:noIdentificacionUsuario,
                    sexoUsuario:sexoUsuario,
                    direccionUsuario:direccionUsuario,
                    telUsuario:telUsuario,
                    emailUsuario:emailUsuario,
                    nacimientoUsuario:nacimientoUsuario,
                    nombreUsuario:nombreUsuario,
                    passUsuario:passUsuario,
                    descripcionUsuario:descripcionUsuario,
                    estadoUsuario:estadoUsuario,
                    id_sueldoUsuario:id_sueldoUsuario,
                    id_comisionUsuario:id_comisionUsuario,
                    id_privilegiosUsuario:id_privilegiosUsuario,
                    id_horarioUsuario:id_horarioUsuario,
                    id_sucursalUsuario:id_sucursalUsuario
                    },
                dataType: 'json', //indica que el valor que devuelve el ajax es json para poder manipular en js
                beforeSend: function(objeto){},
                success: function(data2){
                console.log("imprimir Resultado de guardar Nuevo Usuario"); 
                 
                               
                    if(data2 == 'error'){ // en caso de que el valor de data2 que viene del ajaxProveedore sea replica es porque la comparacion con BD ya existia el dato y no se pudo ejecutar la consulta 
                            Swal.fire({
                            title: "Error al ingresar a BD", //titulo del modal
                            icon: 'error', //tipo de advertencia modal
                            timer: 3000                     
                            });
                            console.log("rechazado Error");   // // imprime en consola para el desarrolador ver el valro que esta obteniendo 
                        }
                    else if(data2 == 'successful') { // de lo contrario el msj sera usuario guardado 
                            Swal.fire({
                                    title: "Nuevo USUARIO  Guardado Exitosamente",
                                    icon: 'success',
                                    timer: 2000
                                    }).then(function() {
                                    //window.location = "2Sucursales.php";
                                    });

                            console.log("Tipo de Empleado ingresadoCorrectamente"); 
                            var url = '4MantenimientoSueldo.php';    
                            $(location).attr('href',url); //redirecciona al formulario verProveedores
                        
                        }
            }
      });
        event.preventDefault();
        });
      
        
       ///////////// BOTON ver TipoEmpleado
        $(document).on("click", ".btnVerUsuario", function(){
            fila = $(this).closest("tr");
            ID_Usuario = parseInt(fila.find('td:eq(0)').text());
            nombreUsuario = fila.find('td:eq(1)').text();
            estadoUsuario= fila.find('td:eq(3)').text();
            
            action = "obtener_datosUsuario";
           
            $("#modalVerUsuario").trigger("reset"); //vacia los campos 
           
            $.ajax({ //ajax que va obtener valores de tabla de proveedor con id
                url: './ajax/ajax5NuevoUsuario.php', //al documento php ajax al cual iran los datos y de donde retornara valores de la consulta
                type: "POST",
                async: true,
                data: {action:action, ID_Usuario:ID_Usuario }, //envia valores al ajax action y el id
                
                success: function(response){ //recibe una respuesta con una array json
                console.log("Respuesta Datos Obtenidos USUARIO");
                console.log(action);
                
                    if (response != 'error') {
                            console.log(response); // imprimimos en consola para saber el array que nos devuelve
                            var data2 = JSON.parse(response); //parsea a fotmato el array del ajax en json
                             $('#idUsuario').val(data2.idUsuario);
                             $('#priNombreUsuario').val(data2.priNombreUsuario); // carga el valor de data2.nombre en un input del modal nuevo_proveedor el cual tenga el id nombreComercial y los de abajo tambien
                             $('#nombreUsuario').val(data2.usuario); // carga en el inpunt del modal con el id proveedorNIT lo que obtuvo de vuelta de la funcion obtener_datos del ajaxProveedore
                             $('#segNombreUsuario').val(data2.segNombreUsuario);
                             $('#passUsuario').val(data2.passUsuario);
                             $('#priApellidoUsuario').val(data2.priApellidoUsuario);
                             $('#descripcionUsuario').val(data2.descripcionUsuario);
                             $('#segApellidoUsuario').val(data2.segNombreUsuario);
                             $('#estadoUsuario').val(data2.estadoUsuario);
                             $('#noIdentificacionUsuario').val(data2.identificacionUsuario);
                             $('#id_sueldoUsuario').val(data2.SueldoEmpleado_idSueldoEmpleado);
                             $('#sexoUsuario').val(data2.sexoUsuario);
                             $('#id_comisionUsuario').val(data2.ComisionEmpleado_idComisionEmpleado);
                             $('#direccionUsuario').val(data2.direccionUsuario);
                             $('#id_privilegiosUsuario').val(data2.TipoEmpleado_idTipoEmpleado);
                             $('#telUsuario').val(data2.telefonoUsuario);
                             $('#id_horarioUsuario').val(data2.Horario_idHorario);
                             $('#emailUsuario').val(data2.correoUsuario);
                             $('#id_sucursalUsuario').val(data2.Sucursal_idSucursal);
                             $('#nacimientoUsuario').val(data2.fechaNacUsuario);
                             

                            
                            
                            $(".modal-header").css("background-color","#21c87a");//cambia de colo el header del modal
                            $(".modal-header").css("color","white"); //cambia el color de texto del header a blanco 
                            $(".modal-title").text("Usuario");//titulo del header
                           
                            $("#modalVerUsuario").modal("show"); //al clickear el boton nuevo proveedor lanza el modal que tiene el id Modal_Nuevo_Proveedor el cual es una clase alojada en /modal/editarProveedor llamada desde el archivo verProveedor
                            action = "editarDatosUsuario";//setea el valor nuevo de accion en este caso editar privilegio
                            console.log(action);
                            
                    }else{
                    
                    console.log("No existen datos")
                    
                        }
                

                },
                error: function(error){
                console.log(error);
                }
                
                    });

        });
        /////////////////////////////////
        
        
       ///////////// BOTON ver Editar Privilegios
        $(document).on("click", ".btnDesactivarComision", function(){

            fila = $(this).closest("tr");
            idTipoEmpleado = parseInt(fila.find('td:eq(0)').text());
            rolTipoEmpleado = fila.find('td:eq(1)').text();
            action = "obtener_datosTipoEmpleado";

            const $botonGuardar = document.querySelector("#guardarTipoEmpleado"); //selecciona el elemento del modal y lo pasa a una variable local
            $botonGuardar.style.display = "none"; //  muestra el boton guardar
            const $botonEditar = document.querySelector("#editarTipoEmpleado"); //selecciona el elemento del modal y lo pasa a una variable local
            $botonEditar.style.display = "none"; // NO muestra el boton guardar
            const $estadobloquePrivilegios = document.querySelector("#bloquePrivilegios"); //selecciona el elemento del modal y lo pasa a una variable local
            $estadobloquePrivilegios.style.display = "block"; // muestra el boton guardar
            action = "obtener_datosTipoEmpleado";

            $.ajax({ //ajax que va obtener valores de tabla de proveedor con id
                url: './ajax/ajax3TipoEmpleado.php', //al documento php ajax al cual iran los datos y de donde retornara valores de la consulta
                type: "POST",
                async: true,
                data: {action:action, idTipoEmpleado:idTipoEmpleado }, //envia valores al ajax action y el id
                
                success: function(response){ //recibe una respuesta con una array json
                console.log("Respuesta Datos Obtenidos");
                console.log(action);
                
                    if (response != 'error') {
                            console.log(response); // imprimimos en consola para saber el array que nos devuelve
                            var data2 = JSON.parse(response); //parsea a fotmato el array del ajax en json
                                              
                            $("#1").prop('checked', true);
                            $('#idTipoEmpleado' ).val(data2.idTipoEmpleado); // carga el valor de data2.nombre en un input del modal nuevo_proveedor el cual tenga el id nombreComercial y los de abajo tambien
                            $('#roltipoEmpleado').val(data2.rolTipoEmpleado); // carga en el inpunt del modal con el id proveedorNIT lo que obtuvo de vuelta de la funcion obtener_datos del ajaxProveedore
                            $('#descripcionTipoEmpleado').val(data2.descripcionTipoEmpleado);
                            $('#estadoTipoEmpleado').val(data2.estadoTipoEmpleado);
                            $('#privilegioGrupoID').val(data2.grupoPrivilegioTipoEmpleado);

                            $(".modal-header").css("background-color","#0cd5ac");//cambia de colo el header del modal
                            $(".modal-header").css("color","white"); //cambia el color de texto del header a blanco 
                            $(".modal-title").text("Ver Privilegios");//titulo del header
                            $("#modalNuevoTipoEmpleado").modal("show"); //al clickear el boton nuevo proveedor lanza el modal que tiene el id Modal_Nuevo_Proveedor el cual es una clase alojada en /modal/editarProveedor llamada desde el archivo verProveedor
                           
                            console.log("Muestra Datos Tipo Empleado");
                            action = "editarPrivilegiosTipoEmpleado";//setea el valor nuevo de accion en este caso editar privilegio
                            console.log(action);
                    }else{
                    
                    console.log("No existen datos")
                    
                        }
                

                },
                error: function(error){
                                    console.log(error);
                                    }
                
            }); 

        });

        // BOTON Editar nuevo TipoEmpleado
        $("#editarSueldoEmpleado").click(function(){
            IDsueldoEmpleado = $.trim($("#idSueldoEmpleado").val()); // toma el valor
            sueldoEmpleado = $.trim($("#sueldoEmpleado").val()); // toma el valor que contenga los inputs del formulario con el idnombreComercial y lo ingresa a una variable 
            descripcionSueldoEmpleado = $.trim($("#descripcionSueldoEmpleado").val());// toma el valor que con
            estadoSueldoEmpleado = $.trim($("#estadoSueldoEmpleado").val());
            //condicional que edita los datos de empleado
            if (action=='editarDatosSueldoEmpleado'){
                $.ajax({ //aqui se indica que vamos a hacer con los datos obtenidos del formulario
                    type: "POST",
                    url: "ajax/ajax4MantenimientoSueldo.php", //indica el Ajax donde se procesara los parametros enviados 
                    //data: parametros,
                    data: { action:action,
                            IDsueldoEmpleado:IDsueldoEmpleado,
                            sueldoEmpleado:sueldoEmpleado,
                            descripcionSueldoEmpleado:descripcionSueldoEmpleado,
                            estadoSueldoEmpleado:estadoSueldoEmpleado
                           },
            
                        dataType: 'json', //indica que el valor que devuelve el ajax es json para poder manipular en js
                        beforeSend: function(objeto){},
                        success: function(data2){
                                console.log("Resultado de Editar Sueldo EMPLEADO"); 
                                
                                            
                                if(data2 == 'error'){ // en caso de que el valor de data2 que viene del ajaxProveedore sea replica es porque la comparacion con BD ya existia el dato y no se pudo ejecutar la consulta 
                                        Swal.fire({
                                        title: "Error al Actaulizar en BD", //titulo del modal
                                        icon: 'error', //tipo de advertencia modal
                                        timer: 3000                     
                                        });
                                        console.log("rechazado Error");   // // imprime en consola para el desarrolador ver el valro que esta obteniendo 
                                    }
                            
                                else if(data2 == 'successful') { // de lo contrario el msj sera usuario guardado 
                                    Swal.fire({
                                            title: "Tipo Sueldo Actualizado Exitosamente",
                                            icon: 'success',
                                            timer: 2000
                                            }).then(function() {
                                            //window.location = "2Sucursales.php";
                                            });
                    
                                            console.log("Tipo de Empleado Actualizado Correctamente"); 
                                            var url = '4MantenimientoSueldo.php';    
                                            $(location).attr('href',url); //redirecciona al formulario verProveedores
                                        
                                        }
                            }
                    });
            }
            //de lo contrario si es otra accion realizara lo siguiente
           
           
            
        });
        //////////

        
        ////FIN FUNCIONES
    

}); // End Ready  //FIN DEL READY de la carga de la pagina 

