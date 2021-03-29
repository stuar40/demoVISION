$(document).ready(function(){
    //===================VARIABLES ========================
    console.log("esta funcionando correctamente");
    var fila; //captura valores de la fila para editar, ver, ver asesores asociado
    var idProveedor=0; // incializa la variable del id del Proveedor como variable global para ser utilizada en mas opciones
    var idAsesor=0;// incializa la variable del id del Asesor como variable global para ser utilizada en la opcion obtener datos y actualizar
    // boton editar  Proveedor
    //================FIN VARIABLES
// BOTON PARA ACTUALIZAR EL LOGO 
/*
$("#cargarLogo").click(function(){
    console.log("entrando a boton");
    //console.log(id);
    action = 'cargarLogo';// la accion que va a buscar  en el ajaxProveedores.php en el cual va acompara la funcion para inciar al presionar el boton
    //al presionar el boton nuevo la variable global action cambia a agregar producto 
    idEmpresa = $.trim($("#idEmpresa").val()); // toma el valor que contenga los inputs del formulario 
    logoEmpresa = $.trim($("#foto").val());
  
            $.ajax({ //ajax que va obtener valores de tabla de proveedor con id
                
                        url: 'ajax/ajaxEmpresa.php', //al documento php ajax al cual iran los datos y de donde retornara valores de la consulta
                        type: "POST",
                        data: {action:action,idEmpresa:idEmpresa,logoEmpresa:logoEmpresa}, //envia valores al ajax action y el id
                        beforeSend: function(objeto){},
                        success: function(response){ //recibe una respuesta con una array json
                                                        console.log("respuesta de ajax");
                                                        console.log(action);
                                                        if(response == 'successful'){
                                                            Swal.fire({
                                                                        title: "Foto Cargada Correctamente",
                                                                        icon: 'success',                  
                                                                    });
                                                        }
                                                            else{
                                                                    console.log("Error al cargar datos")
                                                                }
                                                        },
                        error: function(error){
                                                console.log(error);
                                                }
                    });
    

   
  }); */


// ACTAULIZACION de datos deel formulario Empresa.php
$("#infoEmpresa").submit(function( event ) { //
  
  
  console.log("ingresando a la actalizacion"); // imprime en consola para el desarrolador ver el valro que esta obteniendo 
 
  idEmpresa = $.trim($("#idEmpresa").val()); 
  nomEmpresa = $.trim($("#nomEmpresa").val()); // toma el valor que contenga los inputs del formulario con el idnombreComercial y lo ingresa a una variable 
  nitEmpresa = $.trim($("#nitEmpresa").val());// toma el valor que contenga los inputs del formulario con el id proveedorNIT y lo ingresa a una variable 
  registroEmpresa = $.trim($("#registroEmpresa").val());
  moneda = $.trim($("#moneda").val());
  web = $.trim($("#web").val());
  descripcion = $.trim($("#descripcion").val());
  pais = $.trim($("#pais").val());
  departamento = $.trim($("#departamento").val());
  action = "actualizarInfoEmpresa";

    $.ajax({ //aqui se indica que vamos a hacer con los datos obtenidos del formulario
              type: "POST",
              url: "ajax/ajaxEmpresa.php", //indica el Ajax donde se procesara los parametros enviados 
              //data: parametros,
              data: {action:action,
                    idEmpresa:idEmpresa,
                    nomEmpresa:nomEmpresa,
                    nitEmpresa:nitEmpresa,
                    registroEmpresa:registroEmpresa,
                    moneda:moneda,
                    web:web,
                    descripcion:descripcion,
                    pais:pais,
                    departamento:departamento
                },
              dataType: 'json', //indica que el valor que devuelve el ajax es json para poder manipular en js
              beforeSend: function(objeto){},
              success: function(data2){
               
              
                if(data2 == 'error'){ // en caso de que el valor de data2 que viene del ajaxProveedore sea replica es porque la comparacion con BD ya existia el dato y no se pudo ejecutar la consulta 
                      Swal.fire({
                      title: "Error en la Actualizacion de Info De empresa", //titulo del modal
                      icon: 'error', //tipo de advertencia modal
                      });
                      console.log("rechazado");   // // imprime en consola para el desarrolador ver el valro que esta obteniendo 
                    }
             
               else if(data2 == 'successful') // en caso de ser actualizado la respuesta del ajaxProveedor entonces la opcion completada fue un UPDATE en la BD
               {
                Swal.fire({
                  title: "Info Empresa Actualizado Correctamente",
                  icon: 'success',
                  timer: 2000   
                  }).then(function() {
                    window.location = "empresa.php";
                  });
               }
                
          }
    });
  event.preventDefault();
}) 
//************************************* */
  ///////////////////////////////////////////
    

}); // End Ready  //FIN DEL READY de la carga de la pagina 

