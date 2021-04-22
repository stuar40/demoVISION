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
    tablaComisionEmpleado = $('#tablaComisionEmpleado').DataTable({  // incializa la
        "columnDefs":[{
        "targets": -1,
        "data":null,
        // incia 3 botones del dataTable 
        "defaultContent": "<div class='text-center'><div class='button-style-three'> <button type='button' class='btn btn-custon-rounded-three btn-success btnVerComisionEmpleado'>Ver</button> <button  type='button' class='btn btn-custon-rounded-three btn-danger btnDesactivarComision'>Desactivar</button>  </div></div>"  
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
    tablaSueldoEmpleado = $('#tablaSueldoEmpleado').DataTable({  // incializa la
        "columnDefs":[{
            "targets": -1,
            "data":null,
            // incia 3 botones del dataTable 
            "defaultContent": "<div class='text-center'><div class='button-style-three'> <button type='button' class='btn btn-custon-rounded-three btn-success btnVerSueldoEmpleado'>Ver</button>   <button  type='button' class='btn btn-custon-rounded-three btn-danger btnDesactivarSueldo'>Desactivar</button></div></div>"  
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
    tablaHorarioEmpleado = $('#tablaHorarioEmpleado').DataTable({  // incializa la
        "columnDefs":[{
            "targets": -1,
            "data":null,
            // incia 3 botones del dataTable 
            "defaultContent": "<div class='text-center'><div class='button-style-three'> <button type='button' class='btn btn-custon-rounded-three btn-success btnVerHorarioEmpleado'>Ver</button>   <button  type='button' class='btn btn-custon-rounded-three btn-danger btnDesactivarHorario'>Desactivar</button></div></div>"  
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
      // BOTON Mostrar Tipo de Empleado
        $("#verSueldos").click(function(){
            const $contenedordivSueldoEmpleados= document.querySelector("#divSueldoEmpleados"); //selecciona el elemento del modal y lo pasa a una variable local
            $contenedordivSueldoEmpleados.style.display = "block"; // muestra el boton guardar
            const $contenedordivComisionEmpleado = document.querySelector("#divComisionEmpleado"); //selecciona el elemento del modal y lo pasa a una variable local
            $contenedordivComisionEmpleado.style.display = "none"; // muestra el boton guardar
            const $contenedordivHorarioEmpleado = document.querySelector("#divHorarionEmpleado"); //selecciona el elemento del modal y lo pasa a una variable local
            $contenedordivHorarioEmpleado.style.display = "none"; // muestra el boton guardar
    
        });
         // BOTON MostrarPrivilegios
         $("#verComisiones").click(function(){
            const $contenedordivSueldoEmpleados= document.querySelector("#divSueldoEmpleados"); //selecciona el elemento del modal y lo pasa a una variable local
            $contenedordivSueldoEmpleados.style.display = "none"; // muestra el boton guardar
            const $contenedordivComisionEmpleado = document.querySelector("#divComisionEmpleado"); //selecciona el elemento del modal y lo pasa a una variable local
            $contenedordivComisionEmpleado.style.display = "block"; // muestra el boton guardar
            const $contenedordivHorarioEmpleado = document.querySelector("#divHorarionEmpleado"); //selecciona el elemento del modal y lo pasa a una variable local
            $contenedordivHorarioEmpleado.style.display = "none"; // muestra el boton guardar
        });
         // BOTON MostrarPrivilegios
         $("#verHorarios").click(function(){
            const $contenedordivSueldoEmpleados= document.querySelector("#divSueldoEmpleados"); //selecciona el elemento del modal y lo pasa a una variable local
            $contenedordivSueldoEmpleados.style.display = "none"; // muestra el boton guardar
            const $contenedordivComisionEmpleado = document.querySelector("#divComisionEmpleado"); //selecciona el elemento del modal y lo pasa a una variable local
            $contenedordivComisionEmpleado.style.display = "none"; // muestra el boton guardar
            const $contenedordivHorarioEmpleado = document.querySelector("#divHorarionEmpleado"); //selecciona el elemento del modal y lo pasa a una variable local
            $contenedordivHorarioEmpleado.style.display = "block"; // muestra el boton guardar

        });

        // BOTON MostrarPrivilegios
        $("#nuevoSueldo").click(function(){
            const $botonGuardar = document.querySelector("#guardarSueldoEmpleado"); //selecciona el elemento del modal y lo pasa a una variable local
            $botonGuardar.style.display = "block"; //  muestra el boton guardar
            const $botonEditar = document.querySelector("#editarSueldoEmpleado"); //selecciona el elemento del modal y lo pasa a una variable local
            $botonEditar.style.display = "none"; // NO muestra el boton guardar
            $(".modal-header").css("background-color","#0cd5ac");//cambia de colo el header del modal
            $(".modal-header").css("color","white"); //cambia el color de texto del header a blanco 
            $(".modal-title").text("Nuevo Sueldo");//titulo del header
           
            $("#modalNuevoSueldoEmpleado").modal("show"); //al cl
        });
        $("#nuevaComision").click(function(){
            const $botonGuardar = document.querySelector("#guardarComisionEmpleado"); //selecciona el elemento del modal y lo pasa a una variable local
            $botonGuardar.style.display = "block"; //  muestra el boton guardar
            const $botonEditar = document.querySelector("#editarComisionEmpleado"); //selecciona el elemento del modal y lo pasa a una variable local
            $botonEditar.style.display = "none"; // NO muestra el boton guardar
            $(".modal-header").css("background-color","#0cd5ac");//cambia de colo el header del modal
            $(".modal-header").css("color","white"); //cambia el color de texto del header a blanco 
            $(".modal-title").text("Nueva Comision");//titulo del header
           
            $("#modalNuevoComisionEmpleado").modal("show"); //al cl
        });
        $("#nuevoHorario").click(function(){
            const $botonGuardar = document.querySelector("#guardarHorarioEmpleado"); //selecciona el elemento del modal y lo pasa a una variable local
            $botonGuardar.style.display = "block"; //  muestra el boton guardar
            const $botonEditar = document.querySelector("#editarHorarioEmpleado"); //selecciona el elemento del modal y lo pasa a una variable local
            $botonEditar.style.display = "none"; // NO muestra el boton guardar
            $(".modal-header").css("background-color","#0cd5ac");//cambia de colo el header del modal
            $(".modal-header").css("color","white"); //cambia el color de texto del header a blanco 
            $(".modal-title").text("Nuevo Horario Laboral");//titulo del header
           
            $("#modalNuevoHorarioEmpleado").modal("show"); //al cl
        });
        
        
        ////////// BOTON Guardar nuevo SUELDO EMPLEADO
        $("#guardarSueldoEmpleado").click(function(){
            // Capturando Texto que tienen los inputs del formulario modal donde esta el boton guardar
            sueldoEmpleado = $.trim($("#sueldoEmpleado").val()); // toma el valor que contenga los inputs del formulario con el idnombreComercial y lo ingresa a una variable 
            descripcionSueldoEmpleado = $.trim($("#descripcionSueldoEmpleado").val());// toma el valor que con
            estadoSueldoEmpleado = $.trim($("#estadoSueldoEmpleado").val());
            action="guardarSueldoEmpleado";
                $.ajax({ //aqui se indica que vamos a hacer con los datos obtenidos del formulario
                    type: "POST",
                    url: "ajax/ajax4MantenimientoSueldo.php", //indica el Ajax donde se procesara los parametros enviados 
                    //data: parametros,
                    data: { action:action,
                            sueldoEmpleado:sueldoEmpleado,
                            descripcionSueldoEmpleado:descripcionSueldoEmpleado,
                            estadoSueldoEmpleado:estadoSueldoEmpleado
                           },
            
                        dataType: 'json', //indica que el valor que devuelve el ajax es json para poder manipular en js
                        beforeSend: function(objeto){},
                        success: function(data2){
                                console.log("imprimir Resultado de Guardar Sueldo TIPO EMPLEADO"); 
                                
                                            
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
                                            title: "SUELDO de Empleado Guardado Exitosamente",
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
       ////////// BOTON Guardar nuevo COMISION EMPLEADO
       $("#guardarComisionEmpleado").click(function(){
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
        ////////// BOTON Guardar nuevo COMISION EMPLEADO
       $("#guardarHorarioEmpleado").click(function(){
        // Capturando Texto que tienen los inputs del formulario modal donde esta el boton guardar
        nombreHorarioEmpleado = $.trim($("#nombreHorarioEmpleado").val()); // toma el valor que contenga los inputs del formulario con el idnombreComercial y lo ingresa a una variable 
        diasHorarioEmpleado = $.trim($("#diasHorarioEmpleado").val());// toma el valor que con
        rangoHorarioEmpleado = $.trim($("#rangoHorarioEmpleado").val());// toma el valor que con
        estadoHorarioEmpleado = $.trim($("#estadoHorarioEmpleado").val());
        action="guardarHorarioEmpleado";
        //////////////////////
            $.ajax({ //aqui se indica que vamos a hacer con los datos obtenidos del formulario
                type: "POST",
                url: "ajax/ajax4MantenimientoSueldo.php", //indica el Ajax donde se procesara los parametros enviados 
                //data: parametros,
                data: { action:action,
                        nombreHorarioEmpleado:nombreHorarioEmpleado,
                        diasHorarioEmpleado:diasHorarioEmpleado,
                        rangoHorarioEmpleado:rangoHorarioEmpleado,
                        estadoHorarioEmpleado:estadoHorarioEmpleado
                       },
        
                    dataType: 'json', //indica que el valor que devuelve el ajax es json para poder manipular en js
                    beforeSend: function(objeto){},
                    success: function(data2){
                            console.log("imprimir Resultado de Guardar Horario EMPLEADO"); 
                            
                                        
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
                                        title: "Horario Guardado Exitosamente",
                                        icon: 'success',
                                        timer: 2000
                                        }).then(function() {
                                        //window.location = "2Sucursales.php";
                                        });
                
                                        console.log("Horario ingresadoCorrectamente"); 
                                        var url = '4MantenimientoSueldo.php';    
                                        $(location).attr('href',url); //redirecciona al formulario verProveedores
                                    //location.reload(); // actualizar la pagina despues de guardar el archivo 
                                    }
                        }
                });

        });
        //////

       ///////////// BOTON ver TipoEmpleado
        $(document).on("click", ".btnVerSueldoEmpleado", function(){
            fila = $(this).closest("tr");
            IDsueldoEmpleado = parseInt(fila.find('td:eq(0)').text());
            sueldoEmpleado = parseFloat(fila.find('td:eq(1)').text());
            descripcionSueldoEmpleado = fila.find('td:eq(2)').text();
            estadoSueldoEmpleado = fila.find('td:eq(3)').text();
            
            action = "obtener_datosSueldoEmpleado";
           
            
            const $botonGuardar = document.querySelector("#guardarSueldoEmpleado"); //selecciona el elemento del modal y lo pasa a una variable local
            $botonGuardar.style.display = "none"; //  muestra el boton guardar
            const $botonEditar = document.querySelector("#editarSueldoEmpleado"); //selecciona el elemento del modal y lo pasa a una variable local
            $botonEditar.style.display = "block"; // NO muestra el boton guardar
           
                            $('#idSueldoEmpleado').val(IDsueldoEmpleado); // carga el valor de data2.nombre en un input del modal nuevo_proveedor el cual tenga el id nombreComercial y los de abajo tambien
                            $('#sueldoEmpleado').val(sueldoEmpleado); // carga en el inpunt del modal con el id proveedorNIT lo que obtuvo de vuelta de la funcion obtener_datos del ajaxProveedore
                            $('#descripcionSueldoEmpleado').val(descripcionSueldoEmpleado);
                            $('#estadoSueldoEmpleado').val(estadoSueldoEmpleado);
                            
                            
                            
                            $(".modal-header").css("background-color","#0cd5ac");//cambia de colo el header del modal
                            $(".modal-header").css("color","white"); //cambia el color de texto del header a blanco 
                            $(".modal-title").text("Ver Sueldo Empleado");//titulo del header
                           
                            $("#modalNuevoSueldoEmpleado").modal("show"); //al clickear el boton nuevo proveedor lanza el modal que tiene el id Modal_Nuevo_Proveedor el cual es una clase alojada en /modal/editarProveedor llamada desde el archivo verProveedor
                            action = "editarDatosSueldoEmpleado";//setea el valor nuevo de accion en este caso editar privilegio
                            console.log(action);
                         
                            console.log("Muestra Datos Sueldo Empleado");



            
    
        });
        /////////////////////////////////
        
        ///////////// BOTON ver COMISIONES
        $(document).on("click", ".btnVerComisionEmpleado", function(){
            fila = $(this).closest("tr");
            idComisionEmpleado = parseInt(fila.find('td:eq(0)').text());
            comisionEmpleado = parseFloat(fila.find('td:eq(1)').text());
            descripcionComisionEmpleado = fila.find('td:eq(2)').text();
            estadoComisionEmpleado = fila.find('td:eq(3)').text();
            
            action = "obtener_datosComisionEmpleado";
           
            
            const $botonGuardar = document.querySelector("#guardarComisionEmpleado"); //selecciona el elemento del modal y lo pasa a una variable local
            $botonGuardar.style.display = "none"; //  muestra el boton guardar
            const $botonEditar = document.querySelector("#editarComisionEmpleado"); //selecciona el elemento del modal y lo pasa a una variable local
            $botonEditar.style.display = "block"; // NO muestra el boton guardar
           
                            $('#idComisionEmpleado').val(idComisionEmpleado); // carga el valor de data2.nombre en un input del modal nuevo_proveedor el cual tenga el id nombreComercial y los de abajo tambien
                            $('#comisionEmpleado').val(comisionEmpleado); // carga en el inpunt del modal con el id proveedorNIT lo que obtuvo de vuelta de la funcion obtener_datos del ajaxProveedore
                            $('#descripcionComisionEmpleado').val(descripcionComisionEmpleado);
                            $('#estadoComisionEmpleado').val(estadoComisionEmpleado);
                            
                            
                            
                            $(".modal-header").css("background-color","#0cd5ac");//cambia de colo el header del modal
                            $(".modal-header").css("color","white"); //cambia el color de texto del header a blanco 
                            $(".modal-title").text("Ver Comision Empleado");//titulo del header
                           
                            $("#modalNuevoComisionEmpleado").modal("show"); //al clickear el boton nuevo proveedor lanza el modal que tiene el id Modal_Nuevo_Proveedor el cual es una clase alojada en /modal/editarProveedor llamada desde el archivo verProveedor
                            action = "editarDatosComisionEmpleado";//setea el valor nuevo de accion en este caso editar privilegio
                            console.log(action);
                         


            
    
        });
        ///////////////////////////
         ///////////// BOTON ver COMISIONES
         $(document).on("click", ".btnVerHorarioEmpleado", function(){
            fila = $(this).closest("tr");
            idHorarioEmpleado = parseInt(fila.find('td:eq(0)').text());
            nombreHorarioEmpleado = fila.find('td:eq(1)').text();
            diasHorarioEmpleado = fila.find('td:eq(2)').text();
            rangoHorarioEmpleado = fila.find('td:eq(3)').text();
            estadoHorarioEmpleado = fila.find('td:eq(4)').text();
            
           
           
            
            const $botonGuardar = document.querySelector("#guardarHorarioEmpleado"); //selecciona el elemento del modal y lo pasa a una variable local
            $botonGuardar.style.display = "none"; //  muestra el boton guardar
            const $botonEditar = document.querySelector("#editarHorarioEmpleado"); //selecciona el elemento del modal y lo pasa a una variable local
            $botonEditar.style.display = "block"; // NO muestra el boton guardar
           
                            $('#idHorarioEmpleado').val(idHorarioEmpleado); // carga el valor de data2.nombre en un input del modal nuevo_proveedor el cual tenga el id nombreComercial y los de abajo tambien
                            $('#nombreHorarioEmpleado').val(nombreHorarioEmpleado); // carga en el inpunt del modal con el id proveedorNIT lo que obtuvo de vuelta de la funcion obtener_datos del ajaxProveedore
                            $('#diasHorarioEmpleado').val(diasHorarioEmpleado);
                            $('#rangoHorarioEmpleado').val(rangoHorarioEmpleado);
                            $('#estadoHorarioEmpleado').val(estadoHorarioEmpleado);
                            
                            
                            
                            $(".modal-header").css("background-color","#0cd5ac");//cambia de colo el header del modal
                            $(".modal-header").css("color","white"); //cambia el color de texto del header a blanco 
                            $(".modal-title").text("Ver Horario Empleado");//titulo del header
                           
                            $("#modalNuevoHorarioEmpleado").modal("show"); //al clickear el boton nuevo proveedor lanza el modal que tiene el id Modal_Nuevo_Proveedor el cual es una clase alojada en /modal/editarProveedor llamada desde el archivo verProveedor
                            action = "editarDatosHorarioEmpleado";//setea el valor nuevo de accion en este caso editar privilegio
                            console.log(action);
                        



            
    
        });
        ///////////////////////////
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

