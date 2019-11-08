<?php

session_start();

if(isset($_SESSION['name']))
{
    
    session_destroy();
    header("location:task2.php");
   
}

?>