<?php
    $servername = "173.255.247.91";
    $database = "ssolucionesgt_testopticas";
    $username = "ssolucionesgt_estuardo";
    $password = "Eddy5795.";
    // Create connection
    $conexionbd = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conexionbd) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
?>


<?php
/*
    $servername = "localhost";
    $database = "bdopticass";
    $username = "estuardo";
    $password = "Eddy5795.";
    // Create connection
    $conexionbd = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conexionbd) {
        die("Connection failed: " . mysqli_connect_error());
    }
    //echo "Connected successfully";

      */  
    //mysqli_close($conexionbd);
    ?>