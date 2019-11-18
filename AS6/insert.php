
<?php


$conn = mysqli_connect("localhost","root","","as6");

if(!$conn){
    echo "Not connected";
}

if(isset($_POST['submit'])){

    $name =  $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $country = $_POST['country'];
    $state = $_POST['state'];

    $sql = "INSERT INTO data(email, password, name, country, state) VALUES ('$email','$password','$name','$country','$state')";
    $result = mysqli_query($conn,$sql);
    header("location:index.php");
}
?>

