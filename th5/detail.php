<?php

$conn = mysqli_connect("localhost","root","","thfive");

if(!$conn){
    echo "Not connected";
}
if(isset($_POST['submit'])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $number=$_POST["pnum"];
    $address=$_POST["add"];
    $comment=$_POST["com"];

    $sql = "INSERT INTO details VALUES ('$name','$email','$number','$address','$comment')";
if($sql == true){
    echo "<script>alert('Registration Sucessful')</script>";
    header('location:show.php');
}

if(!mysqli_query($conn,$sql)){
    echo "Not inserted";
}        

}
?>