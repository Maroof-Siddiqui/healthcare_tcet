<?php
    
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "Healthcare";
    
    // Create a database connection
    $con = new mysqli($server, $username, $password,database);
    
    // Check for connection success
    if($con->mysqli_connect_error){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
        $mail = $_POST['mail'];
        $pass = $_POST['pass'];
        $name = $_POST['name'];
        $number = $_POST['number'];
    
        // $sql = "INSERT INTO `projdb`.`login_info` (`name`,`mail`,`password`,`number`) VALUES ('$name','$mail','$pass','$number');";

        $stmt = $con->prepare("insert into userinfo(name,mail,password,number) values(?,?,?,?)");
        $stmt->bind_param("sssi",$name,$mail,$password,$number);
        $stmt->execute();
        echo "registration successsfully..";

//     if($con->query($sql) == true){
//             // echo "Successfully inserted";
//             // Flag for successful insertion
//             $insert = true;
//         }
//     else{
//             echo "ERROR: $sql <br> $con->error";
//         }
    
//         // Close the database connection
//         $con->close();
    
    // ?>
    

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="register.php" method = "post">
<h3>user Registration</h3>
<input type="text" placeholder="Enter Full Name" class="box">
<input type="email" placeholder="Enter Email" class="box">
<input type="password" placeholder="Create Password" class="box">
<input type="number" placeholder="Enter Phone Number" class="box">
<input type="submit" value="Register now" class="btn">
</form>
<p>Alread have an account <a href="login.php" id="r-btn">Sign in</a></p>
</body>
</html> -->
