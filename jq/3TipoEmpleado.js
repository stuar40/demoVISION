$(document).ready(function(){
    //===================VARIABLES ========================
    console.log("esta funcionando correctamente");
    var fila; //captura valores de la fila para editar, ver, ver asesores asociado
    var idProveedor=0; // incializa la variable del id del Proveedor como variable global para ser utilizada en mas opciones
    var idAsesor=0;// incializa la variable del id del Asesor como variable global para ser utilizada en la opcion obtener datos y actualizar
    var action="nohayaccion";// incializa
    // boton editar  Proveedor
    //================FIN VARIABLES
    //================INICIO FUNCIONES
    //incializa la tabla con la libreria DataTable que lista todos 
    tablaTipoEmpleado = $('#tablaTipoEmpleado').DataTable({  // incializa la
        "columnDefs":[{
        "targets": -1,
        "data":null,
        // incia 3 botones del dataTable 
        "defaultContent": "<div class='text-center'><div class='button-style-three'> <button type='button' class='btn btn-custon-rounded-three btn-success btnVerTipoEmpleado'>Ver</button> <button  type='button' class='btn btn-custon-rounded-three btn-warning btnEditarPrivilegios'>Privilegios</button>  <button  type='button' class='btn btn-custon-rounded-three btn-danger btnEliminarSucursal'>Desactivar</button></div></div>"  
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
    tablaPrivilegios = $('#tablaPrivilegios').DataTable({  // incializa la
        
        
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
        $("#vertipoEmpleado").click(function(){
            const $contenedoTipoEmpleado = document.querySelector("#divTipoEmpleado"); //selecciona el elemento del modal y lo pasa a una variable local
            $contenedoTipoEmpleado.style.display = "block"; // muestra el boton guardar
            const $contenedorPrivilegios = document.querySelector("#divPrivilegios"); //selecciona el elemento del modal y lo pasa a una variable local
            $contenedorPrivilegios.style.display = "none"; // muestra el boton guardar

    
        });
         // BOTON MostrarPrivilegios
         $("#verPrivilegios").click(function(){
            const $contenedoTipoEmpleado = document.querySelector("#divTipoEmpleado"); //selecciona el elemento del modal y lo pasa a una variable local
            $contenedoTipoEmpleado.style.display = "none"; // muestra el boton guardar
            const $contenedorPrivilegios = document.querySelector("#divPrivilegios"); //selecciona el elemento del modal y lo pasa a una variable local
            $contenedorPrivilegios.style.display = "block"; // muestra el boton guardar
    
        });
         // BOTON MostrarModal nuevo TipoEmpleado
         $("#tipoEmpleado").click(function(){
            const $botonGuardar = document.querySelector("#guardarTipoEmpleado"); //selecciona el elemento del modal y lo pasa a una variable local
            $botonGuardar.style.display = "block"; // NO muestra el boton guardar
            const $botonEditar = document.querySelector("#editarTipoEmpleado"); //selecciona el elemento del modal y lo pasa a una variable local
            $botonEditar.style.display = "none"; // muestra el boton guardar
            const $estadobloquePrivilegios = document.querySelector("#bloquePrivilegios"); //selecciona el elemento del modal y lo pasa a una variable local
            $estadobloquePrivilegios.style.display = "none"; // muestra el boton guardar

            $(".modal-header").css("background-color","#0cd5ac");//cambia de colo el header del modal
            $(".modal-header").css("color","white"); //cambia el color de texto del header a blanco 
            $(".modal-title").text("Nuevo Tipo Empleado");//titulo del header
            $('#form_modalTipoEmpleado').trigger("reset");
            $("#modalNuevoTipoEmpleado").modal("show"); //al clickear el boton nuevo proveedor lanza el modal que tiene el id Modal_Nuevo_Proveedor el cual es una clase alojada en /modal/editarProveedor llamada desde el archivo verProveedor
            action = 'guardarTipoEmpleado';
    
        });

       ///////////// BOTON ver TipoEmpleado
            $(document).on("click", ".btnVerTipoEmpleado", function(){
            fila = $(this).closest("tr");
            idTipoEmpleado = parseInt(fila.find('td:eq(0)').text());
            rolTipoEmpleado = fila.find('td:eq(1)').text();
            action = "obtener_datosTipoEmpleado";

            const $botonGuardar = document.querySelector("#guardarTipoEmpleado"); //selecciona el elemento del modal y lo pasa a una variable local
            $botonGuardar.style.display = "none"; //  muestra el boton guardar
            const $botonEditar = document.querySelector("#editarTipoEmpleado"); //selecciona el elemento del modal y lo pasa a una variable local
            $botonEditar.style.display = "block"; // NO muestra el boton guardar
            const $estadobloquePrivilegios = document.querySelector("#bloquePrivilegios"); //selecciona el elemento del modal y lo pasa a una variable local
            $estadobloquePrivilegios.style.display = "none"; // muestra el boton guardar
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
                    
                            $('#idTipoEmpleado' ).val(data2.idTipoEmpleado); // carga el valor de data2.nombre en un input del modal nuevo_proveedor el cual tenga el id nombreComercial y los de abajo tambien
                            $('#roltipoEmpleado').val(data2.rolTipoEmpleado); // carga en el inpunt del modal con el id proveedorNIT lo que obtuvo de vuelta de la funcion obtener_datos del ajaxProveedore
                            $('#descripcionTipoEmpleado').val(data2.descripcionTipoEmpleado);
                            $('#estadoTipoEmpleado').val(data2.estadoTipoEmpleado);
                            $('#privilegioGrupoID').val(data2.grupoPrivilegioTipoEmpleado);
                            
                            
                            $(".modal-header").css("background-color","#0cd5ac");//cambia de colo el header del modal
                            $(".modal-header").css("color","white"); //cambia el color de texto del header a blanco 
                            $(".modal-title").text("Ver Tipo Empleado");//titulo del header
                           
                            $("#modalNuevoTipoEmpleado").modal("show"); //al clickear el boton nuevo proveedor lanza el modal que tiene el id Modal_Nuevo_Proveedor el cual es una clase alojada en /modal/editarProveedor llamada desde el archivo verProveedor
                            action = "editarDatosTipoEmpleado";//setea el valor nuevo de accion en este caso editar privilegio
                            console.log(action);
                            console.log("Muestra Datos Tipo Empleado");
                           
                    }else{
                    
                    console.log("No existen datos")
                    
                        }
                

                },
                error: function(error){
                                    console.log(error);
                                    }
                
            }); 

            
    
        });
        
       ///////////// BOTON ver Editar Privilegios
        $(document).on("click", ".btnEditarPrivilegios", function(){

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
        $("#editarTipoEmpleado").click(function(){
            idTipoEmpleado = $.trim($("#idTipoEmpleado").val()); // toma el valor
            roltipoEmpleado = $.trim($("#roltipoEmpleado").val()); // toma el valor que contenga los inputs del formulario con el idnombreComercial y lo ingresa a una variable 
            descripcionTipoEmpleado = $.trim($("#descripcionTipoEmpleado").val());// toma el valor que con
            privilegioGrupoID = $.trim($("#privilegioGrupoID").val());
            estadoTipoEmpleado = $.trim($("#estadoTipoEmpleado").val());
            //condicional que edita los datos de empleado
            if (action=='editarDatosTipoEmpleado'){
                $.ajax({ //aqui se indica que vamos a hacer con los datos obtenidos del formulario
                    type: "POST",
                    url: "ajax/ajax3TipoEmpleado.php", //indica el Ajax donde se procesara los parametros enviados 
                    //data: parametros,
                    data: { action:action,
                            idTipoEmpleado:idTipoEmpleado,
                            roltipoEmpleado:roltipoEmpleado,
                            descripcionTipoEmpleado:descripcionTipoEmpleado,
                            privilegioGrupoID:privilegioGrupoID,
                            estadoTipoEmpleado:estadoTipoEmpleado
                           },
            
                        dataType: 'json', //indica que el valor que devuelve el ajax es json para poder manipular en js
                        beforeSend: function(objeto){},
                        success: function(data2){
                                console.log(" Resultado de Editar tIPO EMPLEADO"); 
                                
                                            
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
                                            title: "Tipo de Empleado Actualizado Exitosamente",
                                            icon: 'success',
                                            timer: 2000
                                            }).then(function() {
                                            //window.location = "2Sucursales.php";
                                            });
                    
                                            console.log("Tipo de Empleado Actualizado Correctamente"); 
                                            var url = '3TipoEmpleado.php';    
                                            $(location).attr('href',url); //redirecciona al formulario verProveedores
                                        //location.reload(); // actualizar la pagina despues de guardar el archivo 
                                        }
                            }
                    });
            }
            //de lo contrario si es otra accion realizara lo siguiente
            else if(action=='editarPrivilegiosTipoEmpleado'){
                var selected='';
                var privilegio = [];
                var i = 0;
                var contador2 = 0;
                
    
                $('#form_modalTipoEmpleado input:checkbox').each(function(){//busca en el formulario modaltipo cuales checkbox estan checkeados
                    if (this.checked) {
                        privilegio[i]=$(this).val();
                        i++;
    
                    }
                   // resultado+=$(opcion).attr('value');
                                    
                });
                while (contador2 < i) {
                    // Este bloque de código se ejecutará 100 veces
                    console.log('Privilegio ID ' + privilegio[contador2]);
                    contador2++; // incrementa la variable i
                }
            }
           
            
        });
        //////////
        // BOTON Guardar nuevo TipoEmpleado
        $("#guardarTipoEmpleado").click(function(){
            
            roltipoEmpleado = $.trim($("#roltipoEmpleado").val()); // toma el valor que contenga los inputs del formulario con el idnombreComercial y lo ingresa a una variable 
            descripcionTipoEmpleado = $.trim($("#descripcionTipoEmpleado").val());// toma el valor que con
            privilegioGrupoID = $.trim($("#privilegioGrupoID").val());
                $.ajax({ //aqui se indica que vamos a hacer con los datos obtenidos del formulario
                    type: "POST",
                    url: "ajax/ajax3TipoEmpleado.php", //indica el Ajax donde se procesara los parametros enviados 
                    //data: parametros,
                    data: { action:action,
                            roltipoEmpleado:roltipoEmpleado,
                            descripcionTipoEmpleado:descripcionTipoEmpleado,
                            privilegioGrupoID:privilegioGrupoID
                           },
            
                        dataType: 'json', //indica que el valor que devuelve el ajax es json para poder manipular en js
                        beforeSend: function(objeto){},
                        success: function(data2){
                                console.log("imprimir Resultado de Guardar tIPO EMPLEADO"); 
                                
                                            
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
                                            title: "Tipo de Empleado Guardado Exitosamente",
                                            icon: 'success',
                                            timer: 2000
                                            }).then(function() {
                                            //window.location = "2Sucursales.php";
                                            });
                    
                                            console.log("Tipo de Empleado ingresadoCorrectamente"); 
                                            var url = '3TipoEmpleado.php';    
                                            $(location).attr('href',url); //redirecciona al formulario verProveedores
                                        //location.reload(); // actualizar la pagina despues de guardar el archivo 
                                        }
                            }
                    });

        });
     //////////FIN FUNCIONES
    

}); // End Ready  //FIN DEL READY de la carga de la pagina 

