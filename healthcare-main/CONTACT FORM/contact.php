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
echo("Connected successfully");

        $name = $_POST['name'];
        $visitor_email = $_POST['email'];
        $phone = $_POST['phoneno'];
        $message = $_POST['msg'];
        $date = $_POST['date'];
        $sql = "INSERT INTO `projdb`.`coninfo` (`name`, `email`,`mob_num`,`disease`,`date`) VALUES ('$name','$visitor_email','$phone','$message','$date');";
        // echo $sql;
        if($con->query($sql) == true){
            // echo "Successfully inserted";
            // Flag for successful insertion
            $insert = true;
        }
        else{
            echo "ERROR: $sql <br> $con->error";
        }
    
        // Close the database connection
        $con->close();
        
?>


