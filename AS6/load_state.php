<?php  

$connect = mysqli_connect("localhost", "root", "", "as6");  
 $output = array();  
 $data = json_decode(file_get_contents("php://input"));  
 $query = "SELECT * FROM state WHERE country_id='".$data->country_id."' ORDER BY state_name ASC";  
 $result = mysqli_query($connect, $query);  
 while($row = mysqli_fetch_array($result))  
 {  
      $output[] = $row;  
 }  
 echo json_encode($output);  
 ?>  