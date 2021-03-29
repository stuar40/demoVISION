$(document).ready(function(){
    //===================VARIABLES ========================
    console.log("JS Sucursales esta funcionando correctamente");
   

    //incializa la tabla con la libreria DataTable que lista todos 
  tablaverSucursales = $('#tablaverSucursales').DataTable({  // incializa la
    "columnDefs":[{
      "targets": -1,
      "data":null,
      // incia 3 botones del dataTable 
      "defaultContent": "<div class='text-center'><div class='button-style-three'> <button type='button' class='btn btn-custon-rounded-three btn-success btnVerSucursal'>Ver</button> <button  type='button' class='btn btn-custon-rounded-three btn-warning btnEditarSucursal'>Editar</button>  <button  type='button' class='btn btn-custon-rounded-three btn-danger btnEliminarSucursal'>Eliminar</button></div></div>"  
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
  //------------fin inicializacion de la estructura de DataTable que lista los proveedores


    // BOTON Cargar modal para ingresar nueva Sucursal
    $("#nuevaSucursal").click(function(){
        
        $('#nombreSucursal').val(''); // carga el valor de data2.nombre en un input del modal nuevo_proveedor el cual tenga el id nombreComercial y los de abajo tambien
        $('#departamentoSucursal').val(''); // carga en el inpunt del modal con el id proveedorNIT lo que obtuvo de vuelta de la funcion obtener_datos del ajaxProveedore
        $('#direccionSucursal').val('');
        $('#telefonoSucursal').val('');
        $('#correoSucursal').val('');
        $('#horarioSucursal').val('');
        $('#descripcionSucursal').val('');
        $('#idSucursal').val('');

        const $estadoBTNGuardar = document.querySelector("#guardarSucursal"); //selecciona el elemento del modal y lo pasa a una variable local
        $estadoBTNGuardar.style.display = "block"; // muestra el boton guardar
        const $estadoBTNeditar = document.querySelector("#editarSucursal"); //selecciona el elemento del modal y lo pasa a una variable local
        $estadoBTNeditar.style.display = "none"; // muestra el boton guardar
        
    $("#modalNuevaSucursal").modal("show"); //al clickear el boton nuevo proveedor lanza el modal que tiene el id Modal_Nuevo_Proveedor el cual es una clase alojada en /modal/editarProveedor llamada desde el archivo verProveedor

    });

    // BOTON modal Guardar nueva Sucursal
    $("#guardarSucursal").click(function(){
    action = 'guardarNuevaSucursal';
    nombreSucursal = $.trim($("#nombreSucursal").val()); // toma el valor que contenga los inputs del formulario con el idnombreComercial y lo ingresa a una variable 
    departamentoSucursal = $.trim($("#departamentoSucursal").val());// toma el valor que contenga los inputs del formulario con el id proveedorNIT y lo ingresa a una variable 
    direccionSucursal = $.trim($("#direccionSucursal").val());
    telefonoSucursal = $.trim($("#telefonoSucursal").val());
    correoSucursal = $.trim($("#correoSucursal").val());
    horarioSucursal = $.trim($("#horarioSucursal").val());
    descripcionSucursal = $.trim($("#descripcionSucursal").val());
    EmpresaID= $.trim($("#EmpresaID").val());
        

    $.ajax({ //aqui se indica que vamos a hacer con los datos obtenidos del formulario
        type: "POST",
        url: "ajax/ajaxSucursales.php", //indica el Ajax donde se procesara los parametros enviados 
        //data: parametros,
        data: {action:action,
                nombreSucursal:nombreSucursal,
                departamentoSucursal:departamentoSucursal,
                direccionSucursal:direccionSucursal,
                telefonoSucursal:telefonoSucursal,
                correoSucursal:correoSucursal,
                horarioSucursal:horarioSucursal,
                EmpresaID:EmpresaID,
                descripcionSucursal:descripcionSucursal},

            dataType: 'json', //indica que el valor que devuelve el ajax es json para poder manipular en js
            beforeSend: function(objeto){},
            success: function(data2){
            console.log("imprimir Resultado de Guardar Sucursal"); 
            
                        
            if(data2 == 'error'){ // en caso de que el valor de data2 que viene del ajaxProveedore sea replica es porque la comparacion con BD ya existia el dato y no se pudo ejecutar la consulta 
                    Swal.fire({
                    title: "Error al ingresar a BD", //titulo del modal
                    icon: 'error', //tipo de advertencia modal
                    timer: 3000                     
                    });
                    console.log("rechazado Erro");   // // imprime en consola para el desarrolador ver el valro que esta obteniendo 
                }
        
            else if(data2 == 'successful') { // de lo contrario el msj sera usuario guardado 
                Swal.fire({
                        title: "Sucursal Guardada Exitosamente",
                        icon: 'success',
                        timer: 2000
                        }).then(function() {
                        //window.location = "2Sucursales.php";
                        });

                        console.log("Sucursal ingresadoCorrectamente"); 
                        var url = '2sucursales.php';    
                        $(location).attr('href',url); //redirecciona al formulario verProveedores
                    //location.reload(); // actualizar la pagina despues de guardar el archivo 
                    }
                }
        });
    //event.preventDefault();

    });

     // BOTON modal Guardar nueva Sucursal
    $("#editarSucursal").click(function(){
        action = 'editarSucursal';
        nombreSucursal = $.trim($("#nombreSucursal").val()); // toma el valor que contenga los inputs del formulario con el idnombreComercial y lo ingresa a una variable 
        departamentoSucursal = $.trim($("#departamentoSucursal").val());// toma el valor que contenga los inputs del formulario con el id proveedorNIT y lo ingresa a una variable 
        direccionSucursal = $.trim($("#direccionSucursal").val());
        telefonoSucursal = $.trim($("#telefonoSucursal").val());
        correoSucursal = $.trim($("#correoSucursal").val());
        horarioSucursal = $.trim($("#horarioSucursal").val());
        descripcionSucursal = $.trim($("#descripcionSucursal").val());
        idSucursal= $.trim($("#idSucursal").val());
        $.ajax({ //aqui se indica que vamos a hacer con los datos obtenidos del formulario
            type: "POST",
            url: "ajax/ajaxSucursales.php", //indica el Ajax donde se procesara los parametros enviados 
            //data: parametros,
            data: {action:action,
                    nombreSucursal:nombreSucursal,
                    departamentoSucursal:departamentoSucursal,
                    direccionSucursal:direccionSucursal,
                    telefonoSucursal:telefonoSucursal,
                    correoSucursal:correoSucursal,
                    horarioSucursal:horarioSucursal,
                    idSucursal:idSucursal,
                    descripcionSucursal:descripcionSucursal},
    
                dataType: 'json', //indica que el valor que devuelve el ajax es json para poder manipular en js
                beforeSend: function(objeto){},
                success: function(data2){
                console.log("imprimir Resultado de Editar Sucursal"); 
                
                            
                if(data2 == 'error'){ // en caso de que el valor de data2 que viene del ajaxProveedore sea replica es porque la comparacion con BD ya existia el dato y no se pudo ejecutar la consulta 
                        Swal.fire({
                        title: "Error al El Editar a BD", //titulo del modal
                        icon: 'error', //tipo de advertencia modal
                        timer: 3000                     
                        });
                        console.log("rechazado Error");   // // imprime en consola para el desarrolador ver el valro que esta obteniendo 
                    }
            
                else if(data2 == 'successful') { // de lo contrario el msj sera usuario guardado 
                    Swal.fire({
                            title: "Sucursal Editada Exitosamente",
                            icon: 'success',
                            timer: 2000
                            }).then(function() {
                            window.location = "2Sucursales.php";
                            });
    
                            console.log("Sucursal editada Correctamente"); 
                            var url = '2sucursales.php';    
                            $(location).attr('href',url); //redirecciona al formulario verProveedores
                        }
                    }
            });
        //event.preventDefault();
    
        });
    // BOTON modal ver  Sucursal del Datatable
    $(document).on("click", ".btnVerSucursal", function(){
        fila = $(this).closest("tr");
        idSucursal = parseInt(fila.find('td:eq(0)').text());
        sucursal = fila.find('td:eq(1)').text();
        telefono = fila.find('td:eq(2)').text();
        direccion = fila.find('td:eq(3)').text();
        console.log(idSucursal,sucursal,direccion);
        action = "obtener_datosSucursal";// la accion que va a buscar  en el ajax
        
        
        const $estadoBTNGuardar = document.querySelector("#guardarSucursal"); //selecciona el elemento del modal y lo pasa a una variable local
        $estadoBTNGuardar.style.display = "none"; // muestra el boton guardar
        const $estadoBTNeditar = document.querySelector("#editarSucursal"); //selecciona el elemento del modal y lo pasa a una variable local
        $estadoBTNeditar.style.display = "block"; // muestra el boton guardar
        

        $("#modalNuevaSucursal").trigger("reset"); //vacia los campos de texto cuando

            $.ajax({ //ajax que va obtener valores de tabla de proveedor con id
                url: './ajax/ajaxSucursales.php', //al documento php ajax al cual iran los datos y de donde retornara valores de la consulta
                type: "POST",
                async: true,
                data: {action:action, idSucursal:idSucursal }, //envia valores al ajax action y el id
                
                success: function(response){ //recibe una respuesta con una array json
                console.log("Respuesta Datos Obtenidos Sucursal");
                console.log(action);
                
                    if (response != 'error') {
                            console.log(response); // imprimimos en consola para saber el array que nos devuelve
                            var data2 = JSON.parse(response); //parsea a fotmato el array del ajax en json
                    
                            $('#nombreSucursal').val(data2.nombreSucursal); // carga el valor de data2.nombre en un input del modal nuevo_proveedor el cual tenga el id nombreComercial y los de abajo tambien
                            $('#departamentoSucursal').val(data2.ciudadSucursal); // carga en el inpunt del modal con el id proveedorNIT lo que obtuvo de vuelta de la funcion obtener_datos del ajaxProveedore
                            $('#direccionSucursal').val(data2.direccionSucursal);
                            $('#telefonoSucursal').val(data2.telefonoSucursal);
                            $('#correoSucursal').val(data2.correoSucursal);
                            $('#horarioSucursal').val(data2.horarioSucursal);
                            $('#descripcionSucursal').val(data2.descripcionSucursal);
                            $('#EmpresaID').val(data2.Empresa_idEmpresa);
                            
                            
                            $(".modal-header").css("background-color","#21c87a");//cambia de colo el header del modal
                            $(".modal-header").css("color","white"); //cambia el color de texto del header a blanco 
                            $(".modal-title").text("Ver Sucursal");//titulo del header
                            
                            $("#modalNuevaSucursal").modal("show"); //al clickear el boton nuevo proveedor lanza el modal que tiene el id Modal_Nuevo_Proveedor el cual es una clase alojada en /modal/editarProveedor llamada desde el archivo verProveedor
                            
                            opcion = 'verSucursal'; 
                            
                            action = 'verSucursal'; // la accion que va a buscar  en el ajaxProveedores.php en el cual va acompara la funcion para inciar al presionar el boton
                            //al finalizar la carga de datos la variable global action cambia a editar  producto  para cuando le de en submit busque action= editar proveedor
                            console.log("Muestra Datos Sucursal");
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
  ///////////////////////////////////////////

  // BOTON modal ver  Sucursal del Datatable
  $(document).on("click", ".btnEditarSucursal", function(){
    
    fila = $(this).closest("tr");
        idSucursal = parseInt(fila.find('td:eq(0)').text());
        sucursal = fila.find('td:eq(1)').text();
        telefono = fila.find('td:eq(2)').text();
        direccion = fila.find('td:eq(3)').text();
        console.log(idSucursal,sucursal,direccion);
        action = "obtener_datosSucursal";// la accion que va a buscar  en el ajax
        
    
        
    
        const $estadoBTNGuardar = document.querySelector("#guardarSucursal"); //selecciona el elemento del modal y lo pasa a una variable local
        $estadoBTNGuardar.style.display = "none"; // muestra el boton guardar

        $("#modalNuevaSucursal").trigger("reset"); //vacia los campos de texto cuando

            $.ajax({ //ajax que va obtener valores de tabla de proveedor con id
                url: './ajax/ajaxSucursales.php', //al documento php ajax al cual iran los datos y de donde retornara valores de la consulta
                type: "POST",
                async: true,
                data: {action:action, idSucursal:idSucursal }, //envia valores al ajax action y el id
                
                success: function(response){ //recibe una respuesta con una array json
                console.log("Respuesta Datos Obtenidos Sucursal");
                console.log(action);
                
                    if (response != 'error') {
                            console.log(response); // imprimimos en consola para saber el array que nos devuelve
                            var data2 = JSON.parse(response); //parsea a fotmato el array del ajax en json
                    
                            $('#nombreSucursal').val(data2.nombreSucursal); // carga el valor de data2.nombre en un input del modal nuevo_proveedor el cual tenga el id nombreComercial y los de abajo tambien
                            $('#departamentoSucursal').val(data2.ciudadSucursal); // carga en el inpunt del modal con el id proveedorNIT lo que obtuvo de vuelta de la funcion obtener_datos del ajaxProveedore
                            $('#direccionSucursal').val(data2.direccionSucursal);
                            $('#telefonoSucursal').val(data2.telefonoSucursal);
                            $('#correoSucursal').val(data2.correoSucursal);
                            $('#horarioSucursal').val(data2.horarioSucursal);
                            $('#descripcionSucursal').val(data2.descripcionSucursal);
                            $('#idSucursal').val(data2.idSucursal);
                            
                            
                            $(".modal-header").css("background-color","#21c87a");//cambia de colo el header del modal
                            $(".modal-header").css("color","white"); //cambia el color de texto del header a blanco 
                            $(".modal-title").text("Ver Sucursal");//titulo del header
                            $("#guardarSucursal").hide();
                            $("#modalNuevaSucursal").modal("show"); //al clickear el boton nuevo proveedor lanza el modal que tiene el id Modal_Nuevo_Proveedor el cual es una clase alojada en /modal/editarProveedor llamada desde el archivo verProveedor
                            $("#guardarSucursal").hide();
                            opcion = 'verSucursal'; 
                            
                            action = 'verSucursal'; // la accion que va a buscar  en el ajaxProveedores.php en el cual va acompara la funcion para inciar al presionar el boton
                            //al finalizar la carga de datos la variable global action cambia a editar  producto  para cuando le de en submit busque action= editar proveedor
                            console.log("Muestra Datos Sucursal");
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
///////////////////////////////////////////

// BOTON modal ver  Sucursal del Datatable
$(document).on("click", ".btnEliminarSucursal", function(){
    
     
    fila = $(this).closest("tr"); //variabel que toma la fila donde se hace click
    
    idSucursal = parseInt(fila.find('td:eq(0)').text());
    sucursal = fila.find('td:eq(1)').text();
    action = 'eliminar_Sucursal';// la accion que va a buscar  en el ajaxProveedores.php en el cual va acompara la funcion para inciar al presionar el boton
    
    var preguntaEliminar = confirm("!Esta seguro de ELIMINAR la Sucursal: "+sucursal+"!");
    if (preguntaEliminar){
        $.ajax({ //ajax que va obtener valores de tabla de proveedor con id
          url: 'ajax/ajaxSucursales.php', //al documento php ajax al cual iran los datos y de donde retornara valores de la consulta
          type: "POST",
          async: true,
          data: {action:action, idSucursal:idSucursal }, //envia valores al ajax action y el id
          dataType: 'json', //indica que el valor que devuelve el ajax es json para poder manipular en js
          beforeSend: function(objeto){},
          success: function(data2){ //recibe una respuesta con una array json
            console.log("ELiminando Sucursal");
            console.log(action);
           
              if (data2 == 'eliminado') {
                 console.log(data2); // imprimimos en consola para saber el array que nos devuelve
                 Swal.fire({
                  title: "Sucursal Eliminada",
                  icon: 'success',
                  timer: 2000
                  }).then(function() {
                    window.location = "2Sucursales.php";
                  });

                  //tablaverAsesores.row(fila.parents("tr")).remove().draw();
                  console.log("Datos Eliminados correctamente");
                  //console.log(action);
                  // Recargo la página
                  //location.reload();
                }else{
              
              console.log("Error al eliminar datos")
              
                  }
          

          },
          error: function(error){
          console.log(error);
          }
          
          });//fin del ajax
        }//fin de la condicional en caso de que de click en aceptar a la preunta eliminar

    });
///////////////////////////////////////////
    

}); // End Ready  //FIN DEL READY de la carga de la pagina 

