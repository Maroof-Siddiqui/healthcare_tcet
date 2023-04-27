<?php  
$server = "localhost";
$username = "root";
$password = "";

// Create a database connection
$con = mysqli_connect($server, $username, $password);

// Check for connection success
if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}
session_start(); 
$mail = $_POST['mail'];
$pass = $_POST['pass'];

if (isset($_POST['mail']) && isset($_POST['pass'])) 
    {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }
    $mail = validate($_POST['mail']);

    $pass = validate($_POST['pass']);
    }
    // if (empty($mail)) {

    //     header("Location: index.php?error=User Name is required");

    //     exit();

    // }else if(empty($pass)){

    //     header("Location: index.php?error=pass is required");

    //     exit();

    // }else{

        $sql = "SELECT password FROM login_info WHERE email = \"$mail\";";
        echo($sql);

        $result = mysqli_query($con, $sql);
        echo($result);

        if($con->query($sql) == $pass)
        {
            echo("logged in");
        }
        else{
            echo("invalid credentials");
        }     
?>

