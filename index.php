<?php    

// PARTE 2
//   include("config/testconexion.php");
//   include("login/login.php"); ///////s
//   if(isset($_SESSION['login_user_sys'])){
//     //echo '<script type="text/javascript">window.location.href="principal.php";</script>';
//     //header("location: ./principal.php");
//     echo $_SESSION['login_user_sys'];
//     echo "si entro";
//     }
// PARTE 1
  
  //  session_start();
   
  //  if($_SERVER["REQUEST_METHOD"] == "POST") {
     
  //     $myusername = $_POST['username'];
  //     $mypassword = $_POST['password']; 
      
  //     $sql = "SELECT idUsuario FROM usuario WHERE usuario = '$myusername' and passUsuario = '$mypassword'";
  //     $result = mysqli_query($conexionbd,$sql);
  //     $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     
      
  //     echo "prueba2";
  //     $count = mysqli_num_rows($result);
      
  //     // If result matched $myusername and $mypassword, table row must be 1 row
		
  //     if($count == 1) {
     
  //        $_SESSION['login_user'] = $myusername;
  //        echo "prueba4";
  //        header("location: principal.php");
  //     }else {
  //        $error = "Your Login Name or Password is invalid";
  //        echo $error ;
  //     }
  //  }
 
  // PARTE 3 SIKE

  require_once("config/db.php");
    // include the configs / constants for the database connection
    require_once("config/testconexion.php");

    // load the login class
    require_once("login/login.php");

    // create a login object. when this object is created, it will do all login/logout stuff automatically
    // so this single line handles the entire login process. in consequence, you can simply ...
    $login = new Login();

    // ... ask if we are logged in here:
    if ($login->isUserLoggedIn() == true) {
        // the user is logged in. you can do whatever you want here.
        // for demonstration purposes, we simply show the "you are logged in" view.
    include("login/session.php");

    } else {
  

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
		<div class="error-page-int" style="background-image: url(img/FondoLogin.jpg);">
			<div class="text-center m-b-md custom-login" >
				<h3>Optica MacroVision</h3>
				
			</div>
			<div class="content-error">
				<div class="hpanel" > 
                    <div class="panel-body">
                        <form action="" method = "post" id="loginForm">
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
                            <input type="text" name="action" id="action" value="login" style="visibility:hidden;"> 
                            <button name="login" id="login" type = "submit" class="btn btn-success btn-block loginbtn" style="color: #ffffff; background-color: #0cd5ac;border-color: #0cd5ac " >Login</button>
                            
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
    <!-- tawk chat JS
		============================================ -->
    <script src="js/tawk-chat.js"></script>
</body>

</html>

<?php
}


?>