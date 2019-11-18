<?php  

$connect = mysqli_connect("localhost", "root", "", "as6");  
 $output = array();  
 $query = "SELECT * FROM country ORDER BY country_name ASC";  
 $result = mysqli_query($connect, $query);  
 while($row = mysqli_fetch_array($result))  
 {  
      $output[] = $row;  
 }  
 echo json_encode($output);  
 ?>  