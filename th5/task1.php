<html>

<head>
    <link rel="stylesheet" href="style.css">

</head>
<style>
    body {
        background: white;
    }
    
    .cont {
        margin-left: 40px;
        margin-top: 50px;
        width: 400px;
        border-radius: 10px;
    }
    
    .cont form {
        margin-left: 20px;
    }
    
    input[type=text],
    input[type=password],
    select,
    textarea {
        width: 330px;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    
    input[type=submit] {
        width: 100px;
        background-color: #1da1f2;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    
    #n,
    #e,
    #o,
    #pn,
    #a,
    #check,
    #cond {
        color: hsl(204, 86%, 53%);
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-size: 20px;
    }
</style>

<body>

    <br><br>
    <center>
        <div class="cont">
            <font size=4>
                <h1 align="center" style="color: #3f51b5 !important ">Feedback Form</h1>
            </font>

            <form action="detail.php" method="POST" name="myform" id="myform" onsubmit="return validateForm()">
                <input type="text" name="name" id="name" placeholder="Name"><br>
                <span id="n"></span>
                <input type="text" name="email" id="email" value="" placeholder="Email"><br>
                <span id="e"></span>
                <input type="text" name="pnum" id="pnum" placeholder="Phone Number"><br>
                <span id="pn"></span><br>
                <textarea name="add" id="add" cols="25" rows="5" placeholder="Write your Address Here"></textarea><br>
                <span id="a"></span><br>
                <textarea name="com" id="com" cols="25" rows="2" placeholder="Write your Comment Here"></textarea><br>
                <span id="a"></span><br>
                <input type="submit" name="submit" value="feedback ">&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="submit" value="Reset" name="" onclick="resetForm();">
        
            </form>
            <a href="show.php">See All Details</a>
        </div>
        <script>
            function validateForm() {
                var x = document.getElementById("name").value;
                var email = document.getElementById("email").value;
                var e = document.myform.email.value;
                var pnum = document.getElementById("pnum").value;
                var add = document.getElementById("add").value;
                var agree = document.getElementById("ag").checked;


                if (x == "" || !isNaN(x) || x.length < 2 || x.length > 20) {
                    document.getElementById('n').innerHTML = "Please enter valid Name";
                    return false;
                }
                if (email == "" || e.indexOf("@") <= 0) {
                    document.getElementById('e').innerHTML = "Please enter valid Email";
                    return false;
                }
                if (org == "" || org.length < 5 || org.length > 20) {
                    document.getElementById('o').innerHTML = "Please enter valid College name";
                    return false;
                }
                if (pnum == "" || pnum.length < 10 || pnum.length > 10) {
                    document.getElementById('pn').innerHTML = "Please enter valid Number";
                    return false;
                }

                if (grd == "") {
                    document.getElementById('a').innerHTML = "Please enter valid Option";
                    return false;
                }
                if (grd2 == "") {
                    document.getElementById('a').innerHTML = "Please enter valid Option";
                    return false;
                }


                if (add == "" || add.length < 5 || add.length > 30) {
                    document.getElementById('a').innerHTML = "Please enter valid Address";
                    return false;
                }
                if (sec == "" || sec.length < 2 || sec.length > 10) {
                    document.getElementById('pass').innerHTML = "Please enter valid Key";
                    return false;
                }

                if (document.getElementById("male").checked = false) {
                    document.getElementById('check').innerHTML = "Please enter valid gender";
                    return false;
                }



            }

            function resetForm() {
                document.getElementById("myform").reset();
            }
        </script>

</body>

</html>