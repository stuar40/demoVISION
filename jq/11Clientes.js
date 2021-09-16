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
    tablatodosClientes = $('#tablatodosClientes').DataTable({  // incializa la 
        "columnDefs":[{
        "targets": -1,
        "data":null,
        // incia 3 botones del dataTable 
        "defaultContent": "<div class='text-center'><div class='button-style-three'> <button type='button' class='btn btn-custon-rounded-three btn-success btnVerCliente'>Ver</button> <button  type='button' class='btn btn-custon-rounded-three btn-danger btnDesactivarProducto'>Desactivar</button>  </div></div>"  
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
   
    //------------fin inicializacion de la estructura de DataTable que lista los
      // BOTON Mostrar Tipo de Empleado
        $("#verClientes").click(function(){
            const $contenedordivProductos= document.querySelector("#divtodosClientes"); //selecciona el elemento del modal y lo pasa a una variable local
            $contenedordivProductos.style.display = "block"; // muestra el boton guardar
           
           
    
        });
        
        

        // BOTON nuevo Cliente MOdal
        $("#nuevoCliente").click(function(){
            const $botonGuardar = document.querySelector("#guardarCliente"); //selecciona el elemento del modal y lo pasa a una variable local
            $botonGuardar.style.display = "block"; //  muestra el boton guardar
            const $botonEditar = document.querySelector("#editarCliente"); //selecciona el elemento del modal y lo pasa a una variable local
            $botonEditar.style.display = "none"; // NO muestra el boton guardar
            $(".modal-header").css("background-color","#0cd5ac");//cambia de colo el header del modal
            $(".modal-header").css("color","white"); //cambia el color de texto del header a blanco 
            $(".modal-title").text("Nuevo Cliente");//titulo del header
            $("#form_modalCliente").trigger("reset"); //vacia los campos
            $("#modalNuevoCliente").modal("show"); //al cl
            action="validarNIT"; //le da un valor globar a la variable que se usara en el submit del formulario modal nuevoProveedor
        });

       
        
        
        ////////// BOTON Guardar nuevo SUELDO EMPLEADO
        //         $("#guardarProveedor").submit(function( event ) { 
        $("#form_modalCliente").submit(function( event ) { 
            // Capturando Texto que tienen los inputs del formulario modal donde esta el boton guardar
            idCliente = $.trim($("#idCliente").val()); // toma el valor que contenga los inputs del formulario con el idnombreComercial y lo ingresa a una variable 
            nombreCliente = $.trim($("#nombreCliente").val());// toma el valor que con
            apellidoCliente = $.trim($("#apellidoCliente").val());
            nitCliente = $.trim($("#nitCliente").val());// toma el valor que con
            telCliente = $.trim($("#telCliente").val());
            emailCliente = $.trim($("#emailCliente").val());// toma el valor que con
            direccionCliente = $.trim($("#direccionCliente").val());
            sexoCliente = $.trim($("#sexoCliente").val());// toma el valor que con
            estadoCliente = $.trim($("#estadoCliente").val());
            idSucursal = $.trim($("#idSucursal").val());// toma el valor que con
            
            
            
            
                if(action == 'validarNIT'){ 
                    /////AJAX que valida si el SKU es repetido o es unico
                    $.ajax({ //aqui se indica que vamos a hacer con los datos obtenidos del formulario
                        type: "POST",
                        url: "ajax/ajax11Clientes.php", //indica el Ajax donde se procesara los parametros enviados 
                        //data: parametros,
                        data: { action:action,
                                nitCliente:nitCliente
                               },
                
                            dataType: 'json', //indica que el valor que devuelve el ajax es json para poder manipular en js
                            beforeSend: function(objeto){},
                            success: function(data2){
                                                console.log(data2);
                                    if(data2 == 'repetido'){ // en caso de que el valor de data2 que viene del ajaxProveedore sea replica es porque la comparacion con BD ya existia el dato y no se pudo ejecutar la consulta 
                                            Swal.fire({
                                            title: "NIT Repetido - Ingresar Otro", //titulo del modal
                                            icon: 'error', //tipo de advertencia modal
                                            timer: 3000                     
                                            });
                                            nitCliente = $("#nitCliente").val('');
                                           
                                        }
                                
                                    else if(data2 == 'unico') { // de lo contrario el msj sera usuario guardado 
                                        console.log("NIT Unico Procedemos a ingresar Prod"); 
                                        action="guardarNuevoCliente";
                                              //<<<<<<<<<<<<AJAX GUARDA PRODUCTO
                                                 ////AJAX que Guarda el Producto
                  
                                            $.ajax({ //AJAX aqui se indica que vamos a hacer con los datos obtenidos del formulario
                                                type: "POST",
                                                url: "ajax/ajax11Clientes.php", //indica el Ajax donde se procesara los parametros enviados 
                                                
                                                data: { action:action,
                                                        idCliente:idCliente,
                                                        nombreCliente:nombreCliente,
                                                        apellidoCliente:apellidoCliente,
                                                        nitCliente:nitCliente,
                                                        telCliente:telCliente,
                                                        emailCliente:emailCliente,
                                                        direccionCliente:direccionCliente,
                                                        sexoCliente:sexoCliente,
                                                        estadoCliente:estadoCliente,
                                                        idSucursal:idSucursal
                                                                                     
                                                                                                            
                                                    },
                                        
                                                    dataType: 'json', //indica que el valor que devuelve el ajax es json para poder manipular en js
                                                    beforeSend: function(objeto){},
                                                    success: function(data2){
                                                            console.log("imprimir Resultado de Guardar el Cliente"); 
                                                            console.log(data2);
                                                                        
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
                                                                            title: "Cliente Guardado Exitosamente",
                                                                            icon: 'success',
                                                                            timer: 2000
                                                                            }).then(function() {
                                                                            //window.location = "2Sucursales.php";
                                                                            console.log("Producto ingresadoCorrectamente"); 
                                                                            var url = '11Clientes.php';    
                                                                            $(location).attr('href',url); //redirecciona al formulario verProveedores
                                                                            });
                                                    
                                                                        
                                                                
                                                                    }
                                                        }
                                                });////FIN del AJAX que guarda el producto
                                               
                                            }
                                }
                        });/////FIN AJAX que valida si el SKU es repetido o es unico

                   
                  
                 }//fin de la condicional que selecciona si va guardar o editar cno el submit
                 else if(action == 'editarProducto') { // de lo contrario 
                    $.ajax({ //AJAX aqui se indica que vamos a hacer con los datos obtenidos del formulario
                        type: "POST",
                        url: "ajax/ajax8Productos.php", //indica el Ajax donde se procesara los parametros enviados 
                        //data: parametros,
                        data: { action:action,
                                idProducto:idProducto,
                                nombreProducto:nombreProducto,
                                skuProducto:skuProducto,
                                tipoProducto:tipoProducto,
                                marcaProducto:marcaProducto,
                                presentacionProducto:presentacionProducto,
                                estadoProducto:estadoProducto,
                                id_Categoria:id_Categoria,
                                descripcionProducto:descripcionProducto,
                                imagenProducto:imagenProducto,
                                precioCostoProducto:precioCostoProducto,
                                precioVentaProducto:precioVentaProducto,
                                precioPromoProducto:precioPromoProducto,
                                stockMinProducto:stockMinProducto
                                
                            },
                
                            dataType: 'json', //indica que el valor que devuelve el ajax es json para poder manipular en js
                            beforeSend: function(objeto){},
                            success: function(data2){
                                    console.log("imprimir Resultado de Editar el pRODUCTto"); 
                                    
                                                
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
                                                title: "Producto Editado Exitosamente",
                                                icon: 'success',
                                                timer: 2000
                                                }).then(function() {
                                                //window.location = "2Sucursales.php";
                                                });
                        
                                                console.log("Producto Editado Correctamente"); 
                                                var url = '8Productos.php';    
                                                $(location).attr('href',url); //redirecciona al formulario verProveedores
                                        
                                            }
                                }
                        });
                 }

            event.preventDefault();
        });
         //////
     
       

       ///////////// BOTON ver TipoEmpleado
        $(document).on("click", ".btnVerCliente", function(){
            fila = $(this).closest("tr");
            nitCliente = parseInt(fila.find('td:eq(0)').text());
            // codigoProducto = fila.find('td:eq(1)').text();
            // nombreProducto = fila.find('td:eq(2)').text();
            // presentacionProducto =fila.find('td:eq(3)').text();
            // estadoProducto= fila.find('td:eq(4)').text();
            action = "obtener_datosCliente";
           
            $("#form_modalCliente").trigger("reset"); //vacia los campos
            const $botonGuardar = document.querySelector("#guardarCliente"); //selecciona el elemento del modal y lo pasa a una variable local
            $botonGuardar.style.display = "none"; //  muestra el boton guardar
            const $botonEditar = document.querySelector("#editarCliente"); //selecciona el elemento del modal y lo pasa a una variable local
            $botonEditar.style.display = "block"; // NO muestra el boton guardar
           
            $.ajax({ //ajax que va obtener valores de tabla de proveedor con id
                url: './ajax/ajax11Clientes.php', //al documento php ajax al cual iran los datos y de donde retornara valores de la consulta
                type: "POST",
                async: true,
                data: {action:action, nitCliente:nitCliente}, //envia valores al ajax action y el id
                
                success: function(response){ //recibe una respuesta con una array json
                console.log("Respuesta Datos Obtenidos Clientes");
                console.log(action);
                
                    if (response != 'error') {
                            console.log(response); // imprimimos en consola para saber el array que nos devuelve
                            var data2 = JSON.parse(response); //parsea a fotmato el array del ajax en json
                             $('#idCliente').val(data2.idCliente);
                             $('#nombreCliente').val(data2.nombreCliente); // carga el valor de data2.nombre en un input del modal nuevo_proveedor el cual tenga el id nombreComercial y los de abajo tambien
                             $('#apellidoCliente').val(data2.apellidoCliente); // carga en el inpunt del modal con el id proveedorNIT lo que obtuvo de vuelta de la funcion obtener_datos del ajaxProveedore
                             $('#nitCliente').val(data2.nitCliente);
                             $('#telCliente').val(data2.telefonoCliente);
                             $('#emailCliente').val(data2.correoCliente);
                             $('#direccionCliente').val(data2.direccionCliente);
                             $('#sexoCliente').val(data2.sexoCliente);
                             $('#estadoCliente').val(data2.estadoCliente);
                             
                             $('#idSucursal').val(data2.Sucursal_idSucursal);
                           
                             

                            
                            
                            $(".modal-header").css("background-color","#0cd5ac");//cambia de colo el header del modal
                            $(".modal-header").css("color","white"); //cambia el color de texto del header a blanco 
                            $(".modal-title").text("Editar Cliente");//titulo del header
                            
                            $("#modalNuevoCliente").modal("show"); //al cl//al clickear el boton nuevo proveedor lanza el modal que tiene el id Modal_Nuevo_Proveedor el cual es una clase alojada en /modal/editarProveedor llamada desde el archivo verProveedor
                            action = "editarCliente";//setea el valor nuevo de accion en este caso editar privilegio
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
        $("#editarCliente").click(function(){
            idCliente = $.trim($("#idCliente").val()); // toma el valor que contenga los inputs del formulario con el idnombreComercial y lo ingresa a una variable 
            nombreCliente = $.trim($("#nombreCliente").val());// toma el valor que con
            apellidoCliente = $.trim($("#apellidoCliente").val());
            nitCliente = $.trim($("#nitCliente").val());// toma el valor que con
            telCliente = $.trim($("#telCliente").val());
            emailCliente = $.trim($("#emailCliente").val());// toma el valor que con
            direccionCliente = $.trim($("#direccionCliente").val());
            sexoCliente = $.trim($("#sexoCliente").val());// toma el valor que con
            estadoCliente = $.trim($("#estadoCliente").val());
            idSucursal = $.trim($("#idSucursal").val());// toma el valor que con
            
            if (action=='editarCliente'){
                $.ajax({ //aqui se indica que vamos a hacer con los datos obtenidos del formulario
                    type: "POST",
                    url: "ajax/ajax11Clientes.php", //indica el Ajax donde se procesara los parametros enviados 
                    //data: parametros,
                    data: { action:action,
                            idCliente:idCliente,
                            nombreCliente:nombreCliente,
                            apellidoCliente:apellidoCliente,
                           // nitCliente:nitCliente,
                            telCliente:telCliente,
                            emailCliente:emailCliente,
                            direccionCliente:direccionCliente,
                            sexoCliente:sexoCliente,
                            estadoCliente:estadoCliente,
                            idSucursal:idSucursal   
                           },
            
                        dataType: 'json', //indica que el valor que devuelve el ajax es json para poder manipular en js
                        beforeSend: function(objeto){},
                        success: function(data2){
                                console.log("Resultado de Editar Cliente"); 
                                
                                            
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
                                            title: "Actualizado Exitosamente",
                                            icon: 'success',
                                            timer: 2000
                                            }).then(function() {
                                            //window.location = "2Sucursales.php";
                                            });
                    
                                            console.log("Cliente Actualizado Correctamente"); 
                                            var url = '11Clientes.php';    
                                            $(location).attr('href',url); //redirecciona al formulario verProveedores
                                        
                                        }
                            }
                    });
            }
            //de lo contrario si es otra accion realizara lo siguiente
           
           
            
        });
        //////////

         // BOTON Editar Comision Empleado
         $("#editarComisionEmpleado").click(function(){
            idComisionEmpleado = $.trim($("#idComisionEmpleado").val()); // toma el valor
            comisionEmpleado = $.trim($("#comisionEmpleado").val()); // toma el valor que contenga los inputs del formulario con el idnombreComercial y lo ingresa a una variable 
            descripcionComisionEmpleado = $.trim($("#descripcionComisionEmpleado").val());// toma el valor que con
            estadoComisionEmpleado = $.trim($("#estadoComisionEmpleado").val());
            //condicional que edita los datos de empleado
            if (action=='editarDatosComisionEmpleado'){
                $.ajax({ //aqui se indica que vamos a hacer con los datos obtenidos del formulario
                    type: "POST",
                    url: "ajax/ajax4MantenimientoSueldo.php", //indica el Ajax donde se procesara los parametros enviados 
                    //data: parametros,
                    data: { action:action,
                            idComisionEmpleado:idComisionEmpleado,
                            comisionEmpleado:comisionEmpleado,
                            descripcionComisionEmpleado:descripcionComisionEmpleado,
                            estadoComisionEmpleado:estadoComisionEmpleado
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
                                            title: "Tipo Comision Actualizado Exitosamente",
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

        //////// // BOTON Editar Horario Empleado
         $("#editarHorarioEmpleado").click(function(){
            idHorarioEmpleado = $.trim($("#idHorarioEmpleado").val()); // toma el valor
            nombreHorarioEmpleado = $.trim($("#nombreHorarioEmpleado").val()); // toma el valor que contenga los inputs del formulario con el idnombreComercial y lo ingresa a una variable 
            diasHorarioEmpleado = $.trim($("#diasHorarioEmpleado").val());// toma el valor que con
            rangoHorarioEmpleado = $.trim($("#rangoHorarioEmpleado").val());
            estadoHorarioEmpleado = $.trim($("#estadoHorarioEmpleado").val());
            //condicional que edita los datos de empleado
            if (action=='editarDatosHorarioEmpleado'){
                $.ajax({ //aqui se indica que vamos a hacer con los datos obtenidos del formulario
                    type: "POST",
                    url: "ajax/ajax4MantenimientoSueldo.php", //indica el Ajax donde se procesara los parametros enviados 
                    //data: parametros,
                    data: { action:action,
                            idHorarioEmpleado:idHorarioEmpleado,
                            nombreHorarioEmpleado:nombreHorarioEmpleado,
                            diasHorarioEmpleado:diasHorarioEmpleado,
                            rangoHorarioEmpleado:rangoHorarioEmpleado,
                            estadoHorarioEmpleado:estadoHorarioEmpleado
                           },
            
                        dataType: 'json', //indica que el valor que devuelve el ajax es json para poder manipular en js
                        beforeSend: function(objeto){},
                        success: function(data2){
                                console.log("Resultado de Editar Horario EMPLEADO"); 
                                
                                            
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
                                            title: "Tipo Horario Actualizado Exitosamente",
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

