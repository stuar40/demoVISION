<?php
///////////////////////////////////////////////////////////////////////////////////////////////////
   // session_start();
   // include("config/testconexion.php"); // Estableciendo la conexion a la base de datos
   
   // $error=''; // Variable para almacenar el mensaje de error
   // if (isset($_POST['submit'])) {
   //                                  if (empty($_POST['username']) || empty($_POST['password'])) {
   //                                              $error = "Username or Password is invalid";
   //                                  }

   //                                  else
   //                                  {
   //                                     // Define $username y $password
   //                                     $username=$_POST['username'];
   //                                     $password=$_POST['password'];
                                       
   //                                     // Para proteger de Inyecciones SQL 
   //                                     // $username    = mysqli_real_escape_string($con,(strip_tags($username,ENT_QUOTES)));
   //                                     // $password =  sha1($password);//Algoritmo de encriptacion de la contraseña http://php.net/manual/es/function.sha1.php
                                       
   //                                     $sql = "SELECT usuario, passUsuario FROM usuario WHERE usuario = '$username' and passUsuario='$password';";
   //                                     $query=mysqli_query($conexionbd,$sql);
   //                                     $counter=mysqli_num_rows($query);
   //                                        if ($counter==1){
   //                                           $_SESSION['login_user_sys']=$username; // Iniciando la sesion
                                             
   //                                                 // echo '<script type="text/javascript">window.location.href="principal.php";</script>';
   //                                                 echo $_SESSION['login_user_sys'];
   //                                                       //header("location: ./principal.php"); // Redireccionando a la pagina profile.php
                                                                  
                                                                  
   //                                                                echo "Valido conter 1 en login";
   //                                                             } 
   //                                        else   {
   //                                                    $error = "El correo electrónico o la contraseña es inválida.";	
   //                                                    echo $error;
   //                                                    echo $username;
   //                                                    echo $password;
   //                                                    //echo '<script type="text/javascript">window.location.href="index.php";</script>';
   //                                                   // header("location:index.php");
   //                                                    echo "No entro en login";
   //                                                    die();
   //                                                 }
   //                                  }
   //                               }
   ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

   /**
 * Class login
 * handles the user's login and logout process
 */
class Login
{
    /**
     * @var object The database connection
     */
    private $db_connection = null;
    /**
     * @var array Collection of error messages
     */
    public $errors = array();
    /**
     * @var array Collection of success / neutral messages
     */
    public $messages = array();

    /**
     * the function "__construct()" automatically starts whenever an object of this class is created,
     * you know, when you do "$login = new Login();"
     */
    public function __construct()
    {
        // create/read session, absolutely necessary
        session_start();

        // check the possible login actions:
        // if user tried to log out (happen when user clicks logout button)
        if (isset($_GET["logout"])) {
            $this->doLogout();
        }
        // login via post data (if user just submitted a login form)
        elseif (isset($_POST["login"])) {
            $this->dologinWithPostData();
        }
    }

    /**
     * log in with post data
     */
    private function dologinWithPostData()
    {
        // check login form contents
        if (empty($_POST['username'])) {
            $this->errors[] = "Username field was empty.";
        } elseif (empty($_POST['password'])) {
            $this->errors[] = "Password field was empty.";
        } elseif (!empty($_POST['username']) && !empty($_POST['password'])) {

            // create a database connection, using the constants from config/db.php (which we loaded in index.php)
            $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            // change character set to utf8 and check it
            if (!$this->db_connection->set_charset("utf8")) {
                $this->errors[] = $this->db_connection->error;
            }

            // if no connection errors (= working database connection)
            if (!$this->db_connection->connect_errno) {

                // escape the POST stuff
                $user_name = $this->db_connection->real_escape_string($_POST['username']);

                // database query, getting all the info of the selected user (allows login via nit address in the
                // username field)
                $sql = "SELECT * FROM usuario  WHERE usuario =   '" . $user_name . "' ";



                $result_of_login_check = $this->db_connection->query($sql);

                // if this user exists
                if ($result_of_login_check->num_rows == 1) {



                    // get result row (as an object)
                    $result_row = $result_of_login_check->fetch_object();


                    $pass= $result_row->passUsuario;
        
                    // using PHP 5.5's password_verify() function to check if the provided password fits
                    // the hash of that user's password
                    if (($_POST['password'] == $pass)) {

                        // write user data into PHP SESSION (a file on your server)
                        $_SESSION['user_id'] = $result_row->idUsuario;
                        $_SESSION['roles_id'] = $result_row->TipoEmpleado_idTipoEmpleado;
                        $_SESSION['sucursal_id'] = $result_row->Sucursal_idSucursal;
                        $_SESSION['username'] = $result_row->usuario;
                        $_SESSION['user_login_status'] = 1;

                    } else {
                        $this->errors[] = "Usuario y/o contraseña no coinciden.";
                    }
                } else {
                    $this->errors[] = "Usuario y/o contraseña no coinciden.";
                }
            } else {
                $this->errors[] = "Problema de conexión de base de datos.";
            }
        }
    }

    /**
     * perform the logout
     */
    public function doLogout()
    {
        // delete the session of the user
        $_SESSION = array();
        session_destroy();
        // return a little feeedback message
        $this->messages[] = "Has sido desconectado.";

    }

    /**
     * simply return the current state of the user's login
     * @return boolean user's login status
     */
    public function isUserLoggedIn()
    {
        if (isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] == 1) {
            return true;
        }
        // default return
        return false;
    }
}

?>