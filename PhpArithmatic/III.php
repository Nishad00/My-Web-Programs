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


<center>
    <br><br><br>
    <form action="III.php" method="POST">
        <h1 style="color:blueviolet;">Fibonacci Series Program</h1>
        <input type="text" name="no" placeholder="Enter No Here"><br>
        <button type="submit" name="getfibo" style=" background-color:;"> Find </button><br><br><br><br>
        <span>
        <?php   
if (isset($_POST['getfibo']))
{
    $no = $_POST['no'];
    $num = 0;  
    $n1 = 0;  
    $n2 = 1;  
    echo "\n";  
    $c = 1;
    while ($num < $no )  
    {  
        if($c == 1)
        {
            echo $n1.' '.$n2.' ';  
            $c = 0;
        }
        else{

            $n3 = $n2 + $n1;  
            echo $n3.' ';  
            $n1 = $n2;  
            $n2 = $n3;  
            $num = $num + 1;  
        }
    }    
}
?>
        </span>    
</form>
</center>















