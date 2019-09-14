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
    <form action="I.php" method="POST">
        <h1 style="color:blueviolet;">Validating given email address</h1>
        <input type="text" name="email" placeholder="Enter Your Email Here"><br>
        <button type="submit" name="check" style=" background-color: ;">Check Email</button><br><br><br><br>
        <span><?php 
if (isset($_POST['email']) == true && empty($_POST['email']) == false)
{
    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL) == true){
        echo "Its a Valid E-mail Address";
    }
    else{
        echo "Please Enter a Valid E-mail Address";
    }
}
?></span>    
    </form>
</center>