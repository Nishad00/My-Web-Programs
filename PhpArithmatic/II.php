<?php
$hour = 0;
if (isset($_POST['h']))
{
    $hour = $_POST['ho'];
}
?>


<html>
    <head>
        
        <style>
            input[type=text],span{
                margin:20px;
                padding:20px;
                width: 400px;      
                background-color: lightcyan;
                color: blueviolet; 
                font-size: 20px;  

            }
        button{
            margin:20px;
            padding:20px;
            width: 200px;      
            color: blueviolet; 
            font-size: 20px;  

        }
     
</style>
    </head>
    <body style="background:<?php
    // $hour = date("H");
    if($hour == "1")
    { 
        echo '#800000';
    }
    if($hour == "2")
    { 
        echo '#FF0000';
    }
    if($hour == "3")
    { 
        echo '#FFA500';
    }
    if($hour == "4")
    { 
        echo '#FFFF00';
    }
    if($hour == "5")
    { 
        echo '#008000';
    }
    if($hour == "6")
    { 
        echo '#800080';
    }
    if($hour == "7")
    { 
        echo '#FF00FF';
    }
    if($hour == "8")
    { 
        echo '#00FF00';
    }
    if($hour == "9")
    { 
        echo '#00FFFF';
    }
    if($hour == "10")
    { 
        echo '#0000FF';
    }
    if($hour == "11")
    { 
        echo '#000000';
    }
    if($hour == "12")
    { 
        echo '#FFFFFF';
    }
    ?>">

    


    
<center>
    <br><br><br>
    <form action="II.php" method="POST">
        <h1 style="color:blueviolet;">Enter Hour</h1>
        <input type="text" name="ho" placeholder="Enter Hour"><br>
        <button type="submit" name="h" style=" background-color: ;"> Change Hour</button><br><br><br><br>
        <span> <?php echo $hour;?> </span>
<center></center>

    </body>
</html>