<?php    

 
  //   $message="";
  //   if(count($_POST)>0) {
  //     include('config/conexion.php'); // Estableciendo la conexion a la base de datos
  //     //  $con = mysqli_connect('75.102.22.187','oonigyuo_estuardo','Eddy5795.','oonigyuo_testoptica') or die('Unable To connect');
  //      // $result = mysqli_query($con,"SELECT * FROM usuario WHERE usuario='" . $_POST["username"] . "' and passUsuario = '". $_POST["password"]."'");
  //      session_start();
  //      $result = mysqli_query($conexionbd,"SELECT * FROM usuario WHERE usuario='" . $_POST["username"] . "' and passUsuario = '". $_POST["password"]."'");
  //       $row  = mysqli_fetch_array($result);
  //       if(is_array($row)) {
  //       $_SESSION["id"] = $row['idUsuario'];
  //       $_SESSION["name"] = $row['usuario'];
  //       $_SESSION["tipoEmpleado"] = $row['TipoEmpleado_idTipoEmpleado'];
  //       } else {
  //        $message = "Invalid Username or Password!";
  //       }
  //   }
  //   if(isset($_SESSION["id"])) {
   
  //  header("Location:principal3.php");
  //   }


  
  

?>
<!doctype html>
<html class="" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | MacroVision</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<div class="error-pagewrap" style="background-image: url(img/Fondo.jpg);">
		<div class="error-page-int" style="background-image: url(img/fondoLogin.jpg);">
			<div class="text-center m-b-md custom-login" >
				<h3>Optica MacroVision</h3>
				
			</div>
			<div class="content-error">
				<div class="hpanel" > 
                    <div class="panel-body">
                        <form method = "post" action=""  id="loginForm">
                            <div class="form-group">
                                <label class="control-label" for="username">Usuario</label>
                                <input type="text"  title="Please enter you username" placeholder="Usuario" required="" value="" name="username" id="username" class="form-control">
                                <span class="help-block small">Usuario unico del sistema</span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                                <span class="help-block small">Tu Contraseña</span>
                            </div>
                            <div class="checkbox login-checkbox">
                                <label>
										            <input type="checkbox" class="i-checks"> Recordarme </label>
                                
                            </div>
                           <input type="submit" name="submit" value="Submit">
                            <button name="login" id="login" type = "submit" class="btn btn-success btn-block loginbtn" style="color: #ffffff; background-color: #0cd5ac;border-color: #0cd5ac " >Login</button>
                            <button name="loginbtn" id="loginbtn" type = "button" class="btn btn-success btn-block loginbtn" style="color: #ffffff; background-color: #0cd5ac;border-color: #0cd5ac " >LoginAlert</button>
                        </form>
                    </div>
                </div>
			</div>
			<div class="text-center login-footer">
				<p>Copyright © 2021. <a href="#">SSolucionesgt.com</a></p>
			</div>
		</div>   
    </div>
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>

    <script type="text/javascript">
    
          $("#loginbtn").click(function(){
            nombreUsuario = $.trim($("#username").val()); 
            passUsuario = $.trim($("#password").val());
            action = "login";



            $.ajax({ //aqui se indica que vamos a hacer con los datos obtenidos del formulario
                    type: "POST",
                    url: "ajax/ajaxLogin.php", //indica el Ajax donde se procesara los parametros enviados 
                    //data: parametros,
                    data: {action:action,
                           nombreUsuario:nombreUsuario,
                           passUsuario:passUsuario
                         },
                    dataType: 'json', //indica que el valor que devuelve el ajax es json para poder manipular en js
                    beforeSend: function(objeto){},
                    success: function(data2){
                    
                    
                      if(data2 == 'error'){ // en caso de que el valor de data2 que viene del ajaxProveedore sea replica es porque la comparacion con BD ya existia el dato y no se pudo ejecutar la consulta 
                            Swal.fire({
                            title: "Error Usuario Incorrecto", //titulo del modal
                            icon: 'error', //tipo de advertencia modal
                            });
                            console.log("rechazado");   // // imprime en consola para el desarrolador ver el valro que esta obteniendo 
                          }
                  
                    else if(data2 == nombreUsuario) // en caso de ser actualizado la respuesta del ajaxProveedor entonces la opcion completada fue un UPDATE en la BD
                    {
                      Swal.fire({
                        title: "Usuario:"+data2+"  Bienvenido",
                        icon: 'success',
                        timer: 2000   
                        }).then(function() {
                          window.location = "principal3.php";
                        });
                    }
                      
                }
          });
         
        });
    </script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
   
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>

</html>

<?php
//}


?>