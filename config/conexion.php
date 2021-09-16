<?php

//USAR ESTA CON SESSIONES
    define('DB_HOST', '75.102.22.187');//DB_HOST:  generalmente suele ser "127.0.0.1"
    define('DB_USER', 'oonigyuo_estuardo');//Usuario de tu base de datos
    define('DB_PASS', 'Eddy5795.');//Contraseña del usuario de la base de datos
    define('DB_NAME', 'oonigyuo_testoptica');//Nombre de la base de datos

    $conexionbd=mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if(!$conexionbd){
        die("imposible conectarse: ".mysqli_error($conexionbd));
    }
    if (mysqli_connect_errno()) {
        die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
?>
