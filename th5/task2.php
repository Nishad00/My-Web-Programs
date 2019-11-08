<?php

session_start();

$conn = mysqli_connect("localhost","root","","thfive");

if(!$conn){
    echo "Not connected";
}

if(isset($_POST['submit'])){

    $name =  $_POST['name'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM  login WHERE name='$name' AND password = '$password'";

    $result = mysqli_query($conn,$sql);
    $row = mysqli_num_rows($result);

    if($row<1){
        echo "Email or password wrong";
    }
    else{
        $info  = mysqli_fetch_assoc($result);
        $username = $info['username'];
        $_SESSION['name'] = $name;
        header("location:data.php");
    }
}


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Login Form</h1>
<form action="task2.php" method="POST">
<label>Username :- </label>&nbsp;&nbsp;
<input type="text" name="name" placeholder="Enter username"><br><br>
<label>password :- </label>&nbsp;&nbsp;
<input type="password" name="password" placeholder="Enter password"><br><br>
<input type="submit" name="submit" value="login">

</form>

</body>
</html>