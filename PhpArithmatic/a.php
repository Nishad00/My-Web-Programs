<?php

if(isset($_POST["operations"]))
{
    $no1 = $_POST['no1'];
    $no2 = $_POST['no2'];
    $add = $no1 + $no2;
    $sub = $no1 - $no2;
    $mul = $no1 * $no2;
    $div = $no1 / $no2;
    $mod = $no1 % $no2;
    $avg = ($no1 + $no2)/2;
    if($no1 >= $no2)
    {
        $greater = $no1;
    }
    else
    {
        $greater = $no2;
    }
    $sq1 = $no1 * $no1;
    $sq2 = $no2 * $no2;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        input[type=text],button{
            margin:20px;
            padding:20px;
            width: 400px;      
            background-color: black;
            color: cyan;    
            font-size: 16px;  
            text-align: right; 
        }
        h2{
            display: inline-block;
            width: 300px; 
            border: 1px solid black;
            margin:10px;
            padding:10px;
            box-shadow: 5px 10px lightgrey;
            background-color: black;
            color: cyan;
            overflow: hidden;
        }
    </style>
</head>
<body>
    <center>
    <form action="a.php" method="POST" style="margin-top: 5%;">
        <input type="text" name="no1" placeholder=<?php if(isset($_POST["operations"])){ echo $no1;}else{echo "0";} ?>><br>
        <input type="text" name="no2" placeholder=<?php if(isset($_POST["operations"])){ echo $no2;}else{echo "0";} ?>><br>
        <button type="submit" name="operations" style="text-align: center; ">operations</button><br><br>
        <h2><?php if(isset($_POST["operations"])){ echo "Addition : &nbsp;&nbsp;  ".$add;}else{echo "Addition : 0";} ?></h2>
        <h2><?php if(isset($_POST["operations"])){ echo "Substraction : &nbsp;&nbsp; ".$sub;}else{echo "Substraction : 0";} ?></h2>
        <h2><?php if(isset($_POST["operations"])){ echo "Multiplication : &nbsp;&nbsp; ".$mul;}else{echo "Multiplication : 0";} ?></h2>
        <h2><?php if(isset($_POST["operations"])){ echo "Division : &nbsp;&nbsp; ".$div;}else{echo "Division : 0";} ?></h2>
        <h2><?php if(isset($_POST["operations"])){ echo "Modulation : &nbsp;&nbsp; ".$mod;}else{echo "Modulation : 0";} ?></h2>
        <h2><?php if(isset($_POST["operations"])){ echo "Average : &nbsp;&nbsp; ".$avg;}else{echo "Average : 0";} ?></h2>
        <h2><?php if(isset($_POST["operations"])){ echo "Greater : &nbsp;&nbsp; ".$greater;}else{echo "Greater : 0";} ?></h2>
        <h2><?php if(isset($_POST["operations"])){ echo "Square of No1 : &nbsp;&nbsp; ".$sq1;}else{echo "Square of no 1 : 0";} ?></h2>
        <h2><?php if(isset($_POST["operations"])){ echo "Square of  No2 : &nbsp;&nbsp; ".$sq2;}else{echo "Square of no 2 : 0";} ?></h2>
    </form>
    </center>
</body>
</html>