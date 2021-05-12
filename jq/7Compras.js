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
    tablaDetalleCompra = $('#tablaDetalleCompra').DataTable({  // incializa la
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
      

        // BOTON MostrarPrivilegios
        $("#agregarArticuloNuevo").click(function(){
            const $botonGuardar = document.querySelector("#guardarProducto"); //selecciona el elemento del modal y lo pasa a una variable local
            $botonGuardar.style.display = "block"; //  muestra el boton guardar
            
            $(".modal-header").css("background-color","#0cd5ac");//cambia de colo el header del modal
            $(".modal-header").css("color","white"); //cambia el color de texto del header a blanco 
            $(".modal-title").text("Nuevo Producto");//titulo del header
            $("#form_modalProducto").trigger("reset"); //vacia los campos
            $("#modalNuevoProductoCompra").modal("show"); //al cl
            action="guardarNuevoProducto"; //le da un valor globar a la variable que se usara en el submit del formulario modal nuevoProveedor
        });
    /////////////////////////////////////////////////
    
       // BOTON MostrarPrivilegios
       $("#AnularCompra").click(function(){
        var rows =$('#tablaDetalleCompra tr').length;
        if (rows > 0)
        {
            action="anularCompra"; //le da un valor globar a la variable que se usara en el submit del formulario modal nuevoProveedor
            var nombreSucursal = $('#nombreSucursal').val();
            var nombreUsuario = $('#nombreUsuario').val();
            var tipoMovimiento = "COMPRA";

            $.ajax({ //AJAX aqui se indica que vamos a hacer con los datos obtenidos del formulario
                type: "POST",
                url: "ajax/ajax7Compras.php", //indica el Ajax donde se procesara los parametros enviados 
                async : true,
                data: { action:action,
                    nombreSucursal:nombreSucursal,
                    nombreUsuario:nombreUsuario,
                    tipoMovimiento:tipoMovimiento
                        },
        
                    dataType: 'json', //indica que el valor que devuelve el ajax es json para poder manipular en js
                    beforeSend: function(objeto){},
                    success: function(data2){
                            console.log("imprimir Resultado de Guardar el Producto"); 
                            console.log(data2);
                                        
                            if(data2 == 'error'){ // en caso de que el valor de data2 que viene del ajaxProveedore sea replica es porque la comparacion con BD ya existia el dato y no se pudo ejecutar la consulta 
                                    Swal.fire({
                                    title: "Error al Anular Compra en BD", //titulo del modal
                                    icon: 'error', //tipo de advertencia modal
                                    timer: 3000                     
                                    });
                                    console.log("rechazado Error");   // // imprime en consola para el desarrolador ver el valro que esta obteniendo 
                                }
                        
                            else if(data2 == 'successful') { // de lo contrario el msj sera usuario guardado 
                                Swal.fire({
                                        title: "Factura de Compra Anulada",
                                        icon: 'success',
                                        timer: 2000
                                        }).then(function() {
                                        //window.location = "2Sucursales.php";
                                        });
                                        //console.log(response); // imprimimos en consola para saber el array que nos devuelve
                                        //var dataProductoNuevo = JSON.parse(data2); //parsea a fotmato el array del ajax en json
                                         //$('#idProducto').val(data2.idProducto);
                                         console.log(data2.idProducto);
                                         $('#nombreProductoCompra').val(data2.nombreProducto); // carga el valor de data2.nombre en un input del modal nuevo_proveedor el cual tenga el id nombreComercial y los de abajo tambien
                                         $('#codigoProductoCompra').val(data2.skuProducto); // carga en el inpunt del modal con el id proveedorNIT lo que obtuvo de vuelta de la funcion obtener_datos del ajaxProveedore
                                         $('#idProductoCompra').val(data2.idProducto);
                                         $('#costoProductoCompra').val(precioCostoProducto);
                                         $('#nombreProductoCompra').attr('disabled','disabled');
                                         $('#codigoProductoCompra').attr('disabled','disabled');
                                         $('#subTotalProductoCompra').attr('disabled','disabled');
                                         $('#cantidadProductoCompra').removeAttr('disabled');
                                         $('#costoProductoCompra').removeAttr('disabled');
                                         $("#form_modalProducto").trigger("reset"); //vacia los campos
                                        // $("#modalNuevoProductoCompra").modal("hide"); //al cl
                                         const $botonAgregarDetalle = document.querySelector("#addDetalleFactura"); //selecciona el elemento del modal y lo pasa a una variable local
                                         $botonAgregarDetalle.style.display = "block"; //  muestra el boton
                                         var url = '7Compras.php';    
                                         $(location).attr('href',url); //redirecciona al formulario verProveedores
                                
                                    }
                        }
                });
        }
        
    });
////////////////////////////////////////////////


// BOTON ProcesarCompra+
$("#form_DetallesEncabezado").submit(function( event ){
    
    var rows =$('#tablaDetalleCompra tr').length;
    if (rows > 0)
    {
        action="finalizarCompra"; //le da un valor globar a la variable que se usara en el submit del formulario modal nuevoProveedor
        var nombreSucursal = $('#nombreSucursal').val();
        var nombreUsuario = $('#nombreUsuario').val();
        var id_Proveedor = $('#id_Proveedor').val();
        var tipoDocCompra = $('#tipoDocCompra').val();
        var fechaCompra = $('#fechaCompra').val();
        var formaPago = $('#formaPago').val();
        var noComprobanteCompra = $('#noComprobanteCompra').val();
        var tipoMovimiento = "COMPRA";

        $.ajax({ //AJAX aqui se indica que vamos a hacer con los datos obtenidos del formulario
            type: "POST",
            url: "ajax/ajax7Compras.php", //indica el Ajax donde se procesara los parametros enviados 
            async : true,
            data: { action:action,
                    nombreSucursal:nombreSucursal,
                    nombreUsuario:nombreUsuario,
                    id_Proveedor:id_Proveedor,
                    tipoDocCompra:tipoDocCompra,
                    fechaCompra:fechaCompra,
                    formaPago:formaPago,
                    noComprobanteCompra:noComprobanteCompra,
                    tipoMovimiento:tipoMovimiento
                    },
    
                dataType: 'json', //indica que el valor que devuelve el ajax es json para poder manipular en js
                beforeSend: function(objeto){},
                
                success: function(data2){
                        console.log("imprimir Resultado de Guardar el Producto"); 
                        console.log(data2);
                                    
                        if(data2 == 'error'){ // en caso de que el valor de data2 que viene del ajaxProveedore sea replica es porque la comparacion con BD ya existia el dato y no se pudo ejecutar la consulta 
                                Swal.fire({
                                title: "Error al Finalizar Compra en BD", //titulo del modal
                                icon: 'error', //tipo de advertencia modal
                                timer: 3000                     
                                });
                                console.log("rechazado Error");   // // imprime en consola para el desarrolador ver el valro que esta obteniendo 
                            }
                    
                        else if(data2 == 'successful') { // de lo contrario el msj sera usuario guardado 
                            Swal.fire({
                                    title: "Factura de Ingresada Correctamente",
                                    icon: 'success',
                                    timer: 2000
                                    }).then(function() {
                                    window.location = "7Compras.php";
                                    console.log("Finalizado Correctamente ");
                                    });
                                    
                                     console.log("Finalizado Correctamente ");
                                    
                                    
                                    //  $('#nombreProductoCompra').val(data2.nombreProducto); // carga el valor de data2.nombre en un input del modal nuevo_proveedor el cual tenga el id nombreComercial y los de abajo tambien
                                    //  $('#codigoProductoCompra').val(data2.skuProducto); // carga en el inpunt del modal con el id proveedorNIT lo que obtuvo de vuelta de la funcion obtener_datos del ajaxProveedore
                                    //  $('#idProductoCompra').val(data2.idProducto);
                                    //  $('#costoProductoCompra').val(precioCostoProducto);
                                    //  $('#nombreProductoCompra').attr('disabled','disabled');
                                    //  $('#codigoProductoCompra').attr('disabled','disabled');
                                    //  $('#subTotalProductoCompra').attr('disabled','disabled');
                                    //  $('#cantidadProductoCompra').removeAttr('disabled');
                                    //  $('#costoProductoCompra').removeAttr('disabled');
                                    //  $("#form_modalProducto").trigger("reset"); //vacia los campos
                                   
                                      const $botonFinalizarCompra = document.querySelector("#guardarCompra"); //selecciona el elemento del modal y lo pasa a una variable local
                                      $botonFinalizarCompra.style.display = "none"; //  muestra el boton
                                    //  var url = '7Compras.php';    
                                    //  //$(location).attr('href',url); //redirecciona al formulario verProveedores
                            
                               }else{
                                console.log("No Data");
                               }
                            
                    }
            });
    }
    event.preventDefault();
});
////////////////////////////////////////////////
    ////////// funcino de agregar detalle a la factura de compra
        $("#addDetalleFactura").click(function(){
            event.preventDefault();

            if ($('#cantidadProductoCompra').val()>0) {
                var skuProducto = $('#codigoProductoCompra').val();
                var idProductoCompra = $('#idProductoCompra').val();
                var cantidadProductoCompra = $('#cantidadProductoCompra').val();
                var costoProductoCompra = $('#costoProductoCompra').val();
                var nombreSucursal = $('#nombreSucursal').val();
                var nombreUsuario = $('#nombreUsuario').val();
                var tipoMovimiento = "COMPRA";
                var action = "addProductoDetalleCompra";

                $.ajax({ /////AJAX aqui se indica que vamos a hacer con los datos obtenidos del formulario
               
                    url: "ajax/ajax7Compras.php", //indica el Ajax donde se procesara los parametros enviados 
                    type: "POST",
                    async: true,
                    data: { action:action,
                            skuProducto:skuProducto,
                            idProductoCompra:idProductoCompra,
                            cantidadProductoCompra:cantidadProductoCompra,
                            costoProductoCompra:costoProductoCompra,
                            nombreSucursal:nombreSucursal,
                            nombreUsuario:nombreUsuario,
                            tipoMovimiento:tipoMovimiento
                           },
                    success: function(response){ //recibe una respuesta con una array json
                                                        console.log("Respuesta Datos Obtenidos AddDetalle");
                                                                if (response != 'error') {//condicional de respuesta
                                                                    console.log(response); 
                                                                    var Datos = JSON.parse(response); //parsea a fotmato el array del ajax en json
                                                                  
                                                                     $('#detalle_Compra').html(Datos.detalles); // carga el valor de data2.nombre en un input del modal nuevo_proveedor el cual tenga el id nombreComercial y los de abajo tambien
                                                                     $('#detalle_Totales').html(Datos.totales); // carga en el inpunt del modal con el id proveedorNIT lo que obtuvo de vuelta de la funcion obtener_datos del ajaxProveedore
                                                                     $('#big_total').html("TOTAL Q. " + Datos.totalFactura);
                                                                     //Seteamos los campos de agregar prod 
                                                                     $('#codigoProductoCompra').val('');
                                                                     $('#idProductoCompra').val('');
                                                                     $('#nombreProductoCompra').val('');
                                                                     $('#cantidadProductoCompra').val('1');
                                                                     $('#costoProductoCompra').val('0');
                                                                    // $('#nombreProductoBuscar').val('');
                                                                     $('#subTotalProductoCompra').val('');
                                                                     $('#subTotalProductoCompra').attr('disabled','disabled');
                                                                     $('#cantidadProductoCompra').attr('disabled','disabled');
                                                                     $('#costoProductoCompra').attr('disabled','disabled');
                                                                     const $botonAgregarDetalle = document.querySelector("#addDetalleFactura"); //selecciona el elemento del modal y lo pasa a una variable local
                                                                    $botonAgregarDetalle.style.display = "none"; //  muestra el boton
                                                                     const $botonGuardarCompra = document.querySelector("#guardarCompra"); //selecciona el elemento del modal y lo pasa a una variable local
                                                                     $botonGuardarCompra.style.display = "block"; //  muestra el boton guardar
                                                                }else{//de lo contraio
                                                                    console.log("No existen datos");
                                                                }//fin de la condicional y el else
                                                },//din de la funcion succes
                                                   error: function(error){//en caso que suces response tira un error
                                                                            console.log(error);
                                                                         }
                });///fin del ajax///
            }
            


        });

        

          // INPUT buscar producto por sku
        $("#nombreProductoBuscar").keyup(function(){

            event.preventDefault();
            var skuProducto =$(this).val();
            var action = 'infoSKUProductoCompra';
            if (skuProducto != '') {//condicional donde el keyup tiene que tener unvalor para llamar el ajax

            $.ajax({ /////AJAX aqui se indica que vamos a hacer con los datos obtenidos del formulario
               
                url: "ajax/ajax7Compras.php", //indica el Ajax donde se procesara los parametros enviados 
                type: "POST",
                async: true,
                data: { action:action,
                        skuProducto:skuProducto
                       },
                success: function(response){ //recibe una respuesta con una array json
                                                    console.log("Respuesta Datos Obtenidos ProductoSKU");
                                                            if (response != 'error') {//condicional de respuesta
                                                                console.log(response); 
                                                                var Datos = JSON.parse(response); //parsea a fotmato el array del ajax en json
                                                              //  $('#idProducto').val(Datos.idProducto);
                                                                $('#nombreProductoCompra').val(Datos.nombreProducto); // carga el valor de data2.nombre en un input del modal nuevo_proveedor el cual tenga el id nombreComercial y los de abajo tambien
                                                                $('#codigoProductoCompra').val(Datos.skuProducto); // carga en el inpunt del modal con el id proveedorNIT lo que obtuvo de vuelta de la funcion obtener_datos del ajaxProveedore
                                                                $('#idProductoCompra').val(Datos.idProducto);
                                                                $('#nombreProductoCompra').attr('disabled','disabled');
                                                                $('#codigoProductoCompra').attr('disabled','disabled');
                                                                $('#subTotalProductoCompra').attr('disabled','disabled');
                                                                $('#cantidadProductoCompra').removeAttr('disabled');
                                                                $('#costoProductoCompra').removeAttr('disabled');
                                                                const $botonAgregarDetalle = document.querySelector("#addDetalleFactura"); //selecciona el elemento del modal y lo pasa a una variable local
                                                                $botonAgregarDetalle.style.display = "block"; //  muestra el boton
                                                            }else{//de lo contraio
                                                                console.log("No existen datos");
                                                            }//fin de la condicional y el else
                                                },//din de la funcion succes
                                               error: function(error){//en caso que suces response tira un error
                                                                        console.log(error);
                                                                     }
                });///fin del ajax///
            }// fin de condicional si el keyup esta vacio
        });///////////FIN de la funcion keyup
        
        //$("#cantidadProductoCompra").keyup(function(){
        $(document).on("keyup", "#cantidadProductoCompra", function(){
            event.preventDefault();
            var cantidadProducto =$('#cantidadProductoCompra').val();
            var costo = $('#costoProductoCompra').val();
           
            var subTotal = cantidadProducto * costo;
            console.log(cantidadProducto);
            $('#subTotalProductoCompra').val(subTotal); 
            $('#big_total').html("TOTAL Q. " + subTotal);
            if ($(this).val() < 1 || isNaN($(this).val())) {//condicional donde el keyup tiene que tener unvalor para llamar el ajax
                              $('#big_total').html("Valor no Valido");
            }// fin de condicional si el keyup esta vacio
        });///////////FIN de la funcion keyup

        $(document).on("keyup", "#costoProductoCompra", function(){
            event.preventDefault();
            var cantidadProducto =$('#cantidadProductoCompra').val();
            var costo = $('#costoProductoCompra').val();
           
            var subTotal = cantidadProducto * costo;
            console.log(cantidadProducto);
            $('#subTotalProductoCompra').val(subTotal); 
            $('#big_total').html("TOTAL Q. " + subTotal);
            if ($(this).val() < 1 || isNaN($(this).val())) {//condicional donde el keyup tiene que tener unvalor para llamar el ajax

            $('#big_total').html("Valor no Valido " );
            }// fin de condicional si el keyup esta vacio
        });///////////FIN de la funcion keyup

         //Boton quitar detalle de factura
            $(document).on("click", ".btnQuitProductoDetalleCompra", function(){
                event.preventDefault();
                fila = $(this).closest("tr");
                IdDetalleCompra = parseInt(fila.find('td:eq(0)').text());
                usuarioSistema = $('#nombreUsuario').val();
                console.log(IdDetalleCompra);
                var action='deleteProductoDetalleCompra';
               
                $.ajax({ /////AJAX aqui se indica que vamos a hacer con los datos obtenidos del formulario
                            
                    url: "ajax/ajax7Compras.php", //indica el Ajax donde se procesara los parametros enviados 
                    type: "POST",
                    async: true,
                    data: { action:action,
                            IdDetalleCompra:IdDetalleCompra,
                            usuarioSistema:usuarioSistema
                        },
                    success: function(response){ //recibe una respuesta con una array json
                                                        console.log("Respuesta Datos Obtenidos Delete Detalle");
                                                        var Datos = JSON.parse(response); //parsea a fotmato el array del ajax en json
                                                       
                                                        
                                                       if (Datos != 'sinDatosTemp') {//condicional de respuesta
                                                                     
                                                                     console.log("Imprimir tabla despues de elminar");
                                                                     $('#detalle_Compra').html(Datos.detalles); // carga el valor de data2.nombre en un input del modal nuevo_proveedor el cual tenga el id nombreComercial y los de abajo tambien
                                                                     $('#detalle_Totales').html(Datos.totales); // carga en el inpunt del modal con el id proveedorNIT lo que obtuvo de vuelta de la funcion obtener_datos del ajaxProveedore
                                                                     $('#big_total').html("TOTAL Q. " + Datos.totalFactura);
                                                                     //Seteamos los campos de agregar prod 
                                                                     $('#nombreProductoBuscar').val('');
                                                                     $('#codigoProductoCompra').val('');
                                                                     $('#idProductoCompra').val('');
                                                                     $('#nombreProductoCompra').val('');
                                                                     $('#cantidadProductoCompra').val('1');
                                                                     $('#costoProductoCompra').val('0');
                                                                     // $('#nombreProductoBuscar').val('');
                                                                     $('#subTotalProductoCompra').val('');
                                                                     $('#subTotalProductoCompra').attr('disabled','disabled');
                                                                    
                                                                    }else if (Datos == 'sinDatosTemp'){//de lo contraio
                                                                    console.log("Sin articulos Agregados");
                                                                    const $botonGuardarCompra = document.querySelector("#guardarCompra"); //selecciona el elemento del modal y lo pasa a una variable local
                                                                    $botonGuardarCompra.style.display = "none"; //  muestra el boton guardar
                                                                     $('#detalle_Compra').html(''); // carga el valor de data2.nombre en un input del modal nuevo_proveedor el cual tenga el id nombreComercial y los de abajo tambien
                                                                     $('#detalle_Totales').html(''); 
                                                                    }//fin de la condicional y el else
                                                },//din de la funcion succes

                    error: function(error){//en caso que suces response tira un error
                                            console.log(error);
                                        }
                });///fin del ajax///
               
               
            });///////////FIN de la funcion keyup
        
        ////////// BOTON Guardar y Agregar nuevo Producto a Detalle Compras
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
                                
                                    else { //if(data2 == 'successful') { // de lo contrario el msj sera usuario guardado 
                                        Swal.fire({
                                                title: "Producto Guardado Exitosamente",
                                                icon: 'success',
                                                timer: 2000
                                                }).then(function() {
                                                //window.location = "2Sucursales.php";
                                                });
                                                //console.log(response); // imprimimos en consola para saber el array que nos devuelve
                                                //var dataProductoNuevo = JSON.parse(data2); //parsea a fotmato el array del ajax en json
                                                 //$('#idProducto').val(data2.idProducto);
                                                 console.log(data2.idProducto);
                                                 $('#nombreProductoCompra').val(data2.nombreProducto); // carga el valor de data2.nombre en un input del modal nuevo_proveedor el cual tenga el id nombreComercial y los de abajo tambien
                                                 $('#codigoProductoCompra').val(data2.skuProducto); // carga en el inpunt del modal con el id proveedorNIT lo que obtuvo de vuelta de la funcion obtener_datos del ajaxProveedore
                                                 $('#idProductoCompra').val(data2.idProducto);
                                                 $('#costoProductoCompra').val(precioCostoProducto);
                                                 $('#nombreProductoCompra').attr('disabled','disabled');
                                                 $('#codigoProductoCompra').attr('disabled','disabled');
                                                 $('#subTotalProductoCompra').attr('disabled','disabled');
                                                 $('#cantidadProductoCompra').removeAttr('disabled');
                                                 $('#costoProductoCompra').removeAttr('disabled');
                                                 $("#form_modalProducto").trigger("reset"); //vacia los campos
                                                // $("#modalNuevoProductoCompra").modal("hide"); //al cl
                                                 const $botonAgregarDetalle = document.querySelector("#addDetalleFactura"); //selecciona el elemento del modal y lo pasa a una variable local
                                                 $botonAgregarDetalle.style.display = "block"; //  muestra el boton
                                                // var url = '8Productos.php';    
                                                // $(location).attr('href',url); //redirecciona al formulario verProveedores
                                        
                                            }
                                }
                        });
                 }//fin de la condicional que selecciona si va guardar o editar cno el submit
                 else if(action == 'editarProducto') { // de lo contrario 
                    
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
                                    
                                  
                                   
                                    
                                    $('#precioVentaProducto').val(data2.precioVentaProducto);
                                   
                                    

                                    
                                    
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
        
   

        
        ////FIN FUNCIONES
    

}); // End Ready  //FIN DEL READY de la carga de la pagina 

///////////////////////////////////////FUNCIONESS////////////////////////////
///////////////////////////////////////FUNCIONESS////////////////////////////
///////////////////////////////////////FUNCIONESS////////////////////////////
///////////////////////////////////////FUNCIONESS////////////////////////////




function deleteProductoDetalle(varIdDetalleCompra){
var action='del_product_detalle';
var IdDetalleCompra=IdDetalleCompra;
$.ajax({ /////AJAX aqui se indica que vamos a hacer con los datos obtenidos del formulario
               
    url: "ajax/ajax7Compras.php", //indica el Ajax donde se procesara los parametros enviados 
    type: "POST",
    async: true,
    data: { action:action,
            IdDetalleCompra:IdDetalleCompra
           },
    success: function(response){ //recibe una respuesta con una array json
                                        console.log("Respuesta Datos Obtenidos Delete Detalle");
                                        console.log(response);
                                },//din de la funcion succes

    error: function(error){//en caso que suces response tira un error
                             console.log(error);
                          }
});///fin del ajax///
}
