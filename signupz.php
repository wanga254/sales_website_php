<?php

session_start();
    include("connection.php");
    include("functions.php");


    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
            //save to database
            $user_id = random_num(20);
            $query = "insert into clients (user_id,user_name,password) values('$user_id','$user_name','$password')";

            mysqli_query($con, $query);

            header("location: loginz.php");
            die;

        } else {
            echo "you seem to have entered the wrong username or password. Please try again.";
        }
    }


?>
<!DOCTYPE html>
<html>
<head>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Urban Thrift sign up</title>
</head>
<body>
    <!-- navigation bar -->
    <nav class="navbar">
        <div class="navbar__container">
            <a href="#home" id="navbar__logo">THE URBAN THRIFT</a>
        </div>
    </nav>
    <!-- body section -->
<div id = "box">
        <form method = "post">
            <div style = "font-size: 20px; margin: 10px; color: #131313;">Signup</div>
             <div style="background: #FFA17F;background: -webkit-linear-gradient(to right, #00223E, #FFA17F);background: linear-gradient(to right, #00223E, #FFA17F); padding-top: 50px; color: #fff;">
            Username<input  type = "text" name = "user_name"><br><br>
            Password<input  type = "password" name = "password" maxlength="10" minlength="8"><br><br>
            <input class = "button" type = "submit" value = "signup"><br><br>
        </form>
        <p>Already have an account?
        <div class="button"><a href="loginz.php">LogIn</a></div></p>
    </div>
    </div>

</body>
</html>