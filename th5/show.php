<?php

$conn = mysqli_connect("localhost","root","","thfive");

if(!$conn){
    echo "Not connected";
}


$sql = "SELECT * FROM details";
    if ($res = mysqli_query($conn, $sql)) { 
    if (mysqli_num_rows($res) > 0) { 
        echo "<table border='1px'>"; 
        echo "<tr>"; 
        echo "<th>Name</th>"; 
        echo "<th>Email</th>"; 
        echo "<th>number</th>"; 
        echo "<th>address</th>"; 
        echo "<th>comment</th>"; 
        echo "</tr>"; 
        while ($row = mysqli_fetch_array($res)) { 
            echo "<tr>"; 
            echo "<td>".$row['name']."</td>"; 
            echo "<td>".$row['email']."</td>"; 
            echo "<td>".$row['number']."</td>";   
            echo "<td>".$row['address']."</td>";   
            echo "<td>".$row['comment']."</td>";   
            echo "</tr>"; 
        } 
        echo "</table>"; 
    } 
    else { 
        echo "No matching records are found."; 
    } 
} 
else { 
    echo "ERROR: Could not able to execute $sql. "
                                .mysqli_error($conn); 
} 
mysqli_close($conn); 
?>
