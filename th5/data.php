<?php

session_start();
if(!isset($_SESSION['name'])){
    header("location:task2.php");
}

$conn = mysqli_connect("localhost","root","","thfive");

if($_SESSION['name']){
    $n = $_SESSION['name'];
    $sql = "SELECT * FROM login WHERE name='$n' ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_num_rows($result);
    $info  = mysqli_fetch_assoc($result);
    echo "<center>";
    echo "<table border='2'>";
    echo "<tr>
    <th>name</th>
    <th>Emailid</th>
    <th>Password</th>
    <th>address</th>
    </tr>";

    echo "<tr>";

    echo "<td>".$info['name']."</td>"; 
    echo "<td>".$info['email']."</td>"; 
    echo "<td>".$info['password']."</td>"; 
    echo "<td>".$info['address']."</td>"; 
    echo "</tr>";
    echo "</center>";
   
    
}
else{
    header("location:login.php");
}

?>


<center><h1>Welcome <?php echo $_SESSION['name']  ?></h1></center>




<a href="logout.php">Logout</a>
<br><br>