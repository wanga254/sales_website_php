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
    		//read from database
    		$query = "select * from clients where user_name = '$user_name' limit 1";

    		$result = mysqli_query($con, $query);

    		if ($result) {
    			# code...
    			if($result && mysqli_num_rows($result) > 0)
		            {
			           $user_data = mysqli_fetch_assoc($result);
			           
			           if ($user_data['password'] === $password) {
			           	# code...

			           	$_SESSION['user_id'] = $user_data['user_id'];

			           	header("location: project.php");
			           	die;
			           }

		            }
    		}

    		echo "you seem to have entered the wrong username or password. Please try again.";

    	} else {
    		echo "you seem to have entered the wrong username or password. Please try again.";
    	}
    }



?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>fuzuz login page</title>
</head>
<body>
   <!-- navigation bar -->
       <nav class="navbar">
        <div class="navbar__container">
            <a href="#home" id="navbar__logo">THE URBAN THRIFT</a>
           </div>
    </nav>
    <!-- body section -->
    <div>
        <form method = "post">
            <div style = "font-size: 20px; margin: 10px; color: #fff;">Login</div>
            <div class="box" style="background: #FFA17F;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #00223E, #FFA17F);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #00223E, #FFA17F); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
; padding-top: 50px;">
            Username<input id = "text" type = "text" name ="user_name"><br><br>
            Password<input id = "text" type = "password" name = "password"><br><br>
            <input class="main__btn" id = "button" type = "submit" value = "LOGIN"><br><br>
        </form>
        <p>Not a member yet? Don't miss out!</p>
        <a class="main__btn" id="button" href="signupz.php">Sign Up</a>
        </div>
    </div>

</body>
</html>