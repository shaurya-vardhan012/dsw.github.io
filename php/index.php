<?php
    $con=mysqli_connect("localhost","root","","ecommerce");
    if(mysqli_connect_errno())
    {
        echo "Connection Failed".mysqli_connect_error();
    }
    
    
    if(isset($_POST['Login']))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        mysqli_query($con,"INSERT INTO  `ecommerce`.`login`(`username`,`password`) values ('$username','$password');");
        echo "<h3>Login successfull!</h3>";
    }
    if(isset($_POST['Register']))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $email=$_POST['email'];
        mysqli_query($con,"INSERT INTO  `ecommerce`.`register`(`username`,`password`,`email`) values ('$username','$password','$email');");
        echo "<h3>Register Successfull</h3>";
    }
    
    mysqli_close($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Go back to home page</title>
</head>
<style>
    h2
    {
        font-family: serif;
        
    }
    a
    {
        text-decoration: none;
    }
</style>
<body>
    <h2>Please click here to go homepage : </h2>
    <button><a href="../index.html">Home</a></button>
</body>
</html>

