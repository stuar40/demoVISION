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
    tablaProductos = $('#tablaProductos').DataTable({  // incializa la
        "columnDefs":[{
        "targets": -1,
        "data":null,
        // incia 3 botones del dataTable 
        "defaultContent": "<div class='text-center'><div class='button-style-three'> <button type='button' class='btn btn-custon-rounded-three btn-success btnVerProducto'>Ver</button> <button  type='button' class='btn btn-custon-rounded-three btn-danger btnDesactivarProducto'>Desactivar</button>  </div></div>"  
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
    
    //incializa la tabla con la libreria DataTable que lista todos 
    tablaCategorias = $('#tablaCategorias').DataTable({  // incializa la
        "columnDefs":[{
            "targets": -1,
            "data":null,
            // incia 3 botones del dataTable 
            "defaultContent": "<div class='text-center'><div class='button-style-three'> <button type='button' class='btn btn-custon-rounded-three btn-success btnVerCategoria'>Ver</button>   <button  type='button' class='btn btn-custon-rounded-three btn-danger btnDesactivarCategoria'>Desactivar</button></div></div>"  
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
        $("#verProductos").click(function(){
            const $contenedordivProductos= document.querySelector("#divProductos"); //selecciona el elemento del modal y lo pasa a una variable local
            $contenedordivProductos.style.display = "block"; // muestra el boton guardar
            const $contenedordivCategorias = document.querySelector("#divCategorias"); //selecciona el elemento del modal y lo pasa a una variable local
            $contenedordivCategorias.style.display = "none"; // muestra el boton guardar
           
    
        });
         // BOTON MostrarPrivilegios
         $("#verCategorias").click(function(){
            const $contenedordivProductos= document.querySelector("#divProductos"); //selecciona el elemento del modal y lo pasa a una variable local
            $contenedordivProductos.style.display = "none"; // muestra el boton guardar
            const $contenedordivCategorias = document.querySelector("#divCategorias"); //selecciona el elemento del modal y lo pasa a una variable local
            $contenedordivCategorias.style.display = "block"; // muestra el boton guardar
        });
        

        // BOTON MostrarPrivilegios
        $("#nuevoProducto").click(function(){
            const $botonGuardar = document.querySelector("#guardarProducto"); //selecciona el elemento del modal y lo pasa a una variable local
            $botonGuardar.style.display = "block"; //  muestra el boton guardar
            const $botonEditar = document.querySelector("#editarProducto"); //selecciona el elemento del modal y lo pasa a una variable local
            $botonEditar.style.display = "none"; // NO muestra el boton guardar
            $(".modal-header").css("background-color","#0cd5ac");//cambia de colo el header del modal
            $(".modal-header").css("color","white"); //cambia el color de texto del header a blanco 
            $(".modal-title").text("Nuevo Producto");//titulo del header
            $("#form_modalProducto").trigger("reset"); //vacia los campos
            $("#modalNuevoProducto").modal("show"); //al cl
            action="guardarNuevoProducto"; //le da un valor globar a la variable que se usara en el submit del formulario modal nuevoProveedor
        });
        $("#nuevoAsesor").click(function(){
            const $botonGuardar = document.querySelector("#guardarComisionEmpleado"); //selecciona el elemento del modal y lo pasa a una variable local
            $botonGuardar.style.display = "block"; //  muestra el boton guardar
            const $botonEditar = document.querySelector("#editarComisionEmpleado"); //selecciona el elemento del modal y lo pasa a una variable local
            $botonEditar.style.display = "none"; // NO muestra el boton guardar
            $(".modal-header").css("background-color","#0cd5ac");//cambia de colo el header del modal
            $(".modal-header").css("color","white"); //cambia el color de texto del header a blanco 
            $(".modal-title").text("Nueva Asesor");//titulo del header
            $("#form_modalProveedor").trigger("reset"); //vacia los campos
            $("#modalNuevoComisionEmpleado").modal("show"); //al cl
        });
       
        
        
        ////////// BOTON Guardar nuevo SUELDO EMPLEADO
        //         $("#guardarProveedor").submit(function( event ) { 
        $("#form_modalProducto").submit(function( event ) { 
            // Capturando Texto que tienen los inputs del formulario modal donde esta el boton guardar
            idProducto = $.trim($("#idProducto").val()); // toma el valor que contenga los inputs del formulario con el idnombreComercial y lo ingresa a una variable 
            nombreProducto = $.trim($("#nombreProducto").val());// toma el valor que con
            skuProducto = $.trim($("#skuProducto").val());
            tipoProducto = $.trim($("#tipoProducto").val());// toma el valor que con
            marcaProducto = $.trim($("#marcaProducto").val());
            presentacionProducto = $.trim($("#presentacionProducto").val());// toma el valor que con
            estadoProducto = $.trim($("#estadoProducto").val());
            id_Categoria = $.trim($("#id_Categoria").val());// toma el valor que con
            descripcionProducto = $.trim($("#descripcionProducto").val());
            precioCostoProducto = $.trim($("#precioCostoProducto").val());// toma el valor que con
            precioVentaProducto = $.trim($("#precioVentaProducto").val());// toma el valor que con
            precioPromoProducto = $.trim($("#precioPromoProducto").val());// toma el valor que con
            stockMinProducto = $.trim($("#stockMinProducto").val());// toma el valor que con
            imagenProducto = $.trim($("#imagenProducto").val());// toma el valor que con
            
            
            
                if(action == 'guardarNuevoProducto'){ 
                    $.ajax({ //AJAX aqui se indica que vamos a hacer con los datos obtenidos del formulario
                        type: "POST",
                        url: "ajax/ajax8Productos.php", //indica el Ajax donde se procesara los parametros enviados 
                        
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
                                    console.log("imprimir Resultado de Guardar el Producto"); 
                                    console.log(data2);
                                                
                                    if(data2 == 'error'){ // en caso de que el valor de data2 que viene del ajaxProveedore sea replica es porque la comparacion con BD ya existia el dato y no se pudo ejecutar la consulta 
                                            Swal.fire({
                                            title: "Error al ingresar a BD", //titulo del modal
                                            icon: 'error', //tipo de advertencia modal
                                            timer: 3000                     
                                            });
                                            console.log("rechazado Error");   // // imprime en consola para el desarrolador ver el valro que esta obteniendo 
                                        }
                                
                                    else {//if(data2 == 'successful') { // de lo contrario el msj sera usuario guardado 
                                            Swal.fire({
                                                    title: "Producto Guardado Exitosamente",
                                                    icon: 'success',
                                                    timer: 2000
                                                    }).then(function() {
                                                    //window.location = "2Sucursales.php";
                                                    console.log("Producto ingresadoCorrectamente"); 
                                                    var url = '8Productos.php';    
                                                    $(location).attr('href',url); //redirecciona al formulario verProveedores
                                                    });
                            
                                                   
                                        
                                            }
                                }
                        });
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
       ////////// BOTON Guardar nuevo ASESOR de PROVEEDOR
       $("#guardarAsesorProveedor").click(function(){
        // Capturando Texto que tienen los inputs del formulario modal donde esta el boton guardar
        comisionEmpleado = $.trim($("#comisionEmpleado").val()); // toma el valor que contenga los inputs del formulario con el idnombreComercial y lo ingresa a una variable 
        descripcionComisionEmpleado = $.trim($("#descripcionComisionEmpleado").val());// toma el valor que con
        estadoComisionEmpleado = $.trim($("#estadoComisionEmpleado").val());
        action="guardarComisionEmpleado";
            $.ajax({ //aqui se indica que vamos a hacer con los datos obtenidos del formulario
                type: "POST",
                url: "ajax/ajax4MantenimientoSueldo.php", //indica el Ajax donde se procesara los parametros enviados 
                //data: parametros,
                data: { action:action,
                        comisionEmpleado:comisionEmpleado,
                        descripcionComisionEmpleado:descripcionComisionEmpleado,
                        estadoComisionEmpleado:estadoComisionEmpleado
                       },
        
                    dataType: 'json', //indica que el valor que devuelve el ajax es json para poder manipular en js
                    beforeSend: function(objeto){},
                    success: function(data2){
                            console.log("imprimir Resultado de Guardar Comision TIPO EMPLEADO"); 
                            
                                        
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
                                        title: "Comision de Empleado Guardado Exitosamente",
                                        icon: 'success',
                                        timer: 2000
                                        }).then(function() {
                                        //window.location = "2Sucursales.php";
                                        });
                
                                        console.log("Tipo de Empleado ingresadoCorrectamente"); 
                                        var url = '4MantenimientoSueldo.php';    
                                        $(location).attr('href',url); //redirecciona al formulario verProveedores
                                    //location.reload(); // actualizar la pagina despues de guardar el archivo 
                                    }
                        }
                });

        });
        //////
       

       ///////////// BOTON ver TipoEmpleado
        $(document).on("click", ".btnVerProducto", function(){
            fila = $(this).closest("tr");
            IDProducto = parseInt(fila.find('td:eq(0)').text());
            codigoProducto = fila.find('td:eq(1)').text();
            nombreProducto = fila.find('td:eq(2)').text();
            presentacionProducto =fila.find('td:eq(3)').text();
            estadoProducto= fila.find('td:eq(4)').text();
            action = "obtener_datosProducto";
           
            $("#form_modalProducto").trigger("reset"); //vacia los campos
            const $botonGuardar = document.querySelector("#guardarProducto"); //selecciona el elemento del modal y lo pasa a una variable local
            $botonGuardar.style.display = "none"; //  muestra el boton guardar
            const $botonEditar = document.querySelector("#editarProducto"); //selecciona el elemento del modal y lo pasa a una variable local
            $botonEditar.style.display = "block"; // NO muestra el boton guardar
           
            $.ajax({ //ajax que va obtener valores de tabla de proveedor con id
                url: './ajax/ajax8Productos.php', //al documento php ajax al cual iran los datos y de donde retornara valores de la consulta
                type: "POST",
                async: true,
                data: {action:action, IDProducto:IDProducto, codigoProducto:codigoProducto}, //envia valores al ajax action y el id
                
                success: function(response){ //recibe una respuesta con una array json
                console.log("Respuesta Datos Obtenidos Proveedores");
                console.log(action);
                
                    if (response != 'error') {
                            console.log(response); // imprimimos en consola para saber el array que nos devuelve
                            var data2 = JSON.parse(response); //parsea a fotmato el array del ajax en json
                             $('#idProducto').val(data2.idProducto);
                             $('#nombreProducto').val(data2.nombreProducto); // carga el valor de data2.nombre en un input del modal nuevo_proveedor el cual tenga el id nombreComercial y los de abajo tambien
                             $('#skuProducto').val(data2.skuProducto); // carga en el inpunt del modal con el id proveedorNIT lo que obtuvo de vuelta de la funcion obtener_datos del ajaxProveedore
                             $('#tipoProducto').val(data2.tipoProducto);
                             $('#marcaProducto').val(data2.marcaProducto);
                             $('#presentacionProducto').val(data2.presentacionProducto);
                             $('#estadoProducto').val(data2.estadoProducto);
                             $('#id_Categoria').val(data2.Categoria_idCategoria);
                             $('#descripcionProducto').val(data2.descripcionProducto);
                             
                             $('#precioVentaProducto').val(data2.precioVentaProducto);
                             $('#precioPromoProducto').val(data2.precioPromoProducto);
                             $('#stockMinProducto').val(data2.stockMinimoProducto);
                             

                            
                            
                            $(".modal-header").css("background-color","#21c87a");//cambia de colo el header del modal
                            $(".modal-header").css("color","white"); //cambia el color de texto del header a blanco 
                            $(".modal-title").text("Editar Producto");//titulo del header
                            
                            $("#modalNuevoProducto").modal("show"); //al cl//al clickear el boton nuevo proveedor lanza el modal que tiene el id Modal_Nuevo_Proveedor el cual es una clase alojada en /modal/editarProveedor llamada desde el archivo verProveedor
                            action = "editarProducto";//setea el valor nuevo de accion en este caso editar privilegio
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

