<?php
    session_start();
    $message="";
    if(count($_POST)>0) {
        $con = mysqli_connect('75.102.22.187','oonigyuo_estuardo','Eddy5795.','oonigyuo_testoptica') or die('Unable To connect');
        $result = mysqli_query($con,"SELECT * FROM usuario WHERE usuario='" . $_POST["user_name"] . "' and passUsuario = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["id"] = $row['idUsuario'];
        $_SESSION["name"] = $row['usuario'];
        } else {
         $message = "Invalid Username or Password!";
        }
    }
    if(isset($_SESSION["id"])) {
   // header("Location:indexbeta.php");
   header("Location:principal3.php");
    }
?>
<html>
<head>
<title>User Login</title>
</head>
<body>
<form name="frmUser" method="post" action="" align="center">
<div class="message"><?php if($message!="") { echo $message; } ?></div>
<h3 align="center">Enter Login Details</h3>
 Username:<br>
 <input type="text" name="user_name">
 <br>
 Password:<br>
<input type="password" name="password">
<br><br>
<input type="submit" name="submit" value="Submit">
<input type="reset">
</form>
</body>
</html>