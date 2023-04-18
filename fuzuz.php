<?php
session_start();
    include("connection.php");
    include("functions.php");

      if($_SERVER['REQUEST_METHOD'] == "POST") {

    	//something was posted
    	$company_name = $_POST['company_name'];
    	$job_title = $_POST['job_title'];
    	$brief_description = $_POST['brief_description'];
    	$contact = $_POST['contact'];

    	if(!empty($company_name) && !empty($job_title) && !empty($brief_description)&& !empty($contact) && is_numeric($contact))
    	{
    		//save to database
    		$query = "insert into jobs (company_name,job_title,brief_description,contact) values('$company_name','$job_title','$brief_description','$contact')";

    		mysqli_query($con, $query);

    		echo "Submission successful. You will be notified of any matches immediately.";

    		header("location: fuzuz.php");
    	 die;

    	} else {
    		echo "you seem to have left a blank area. Kindly fill up all boxes.";
    	}
    }


    $user_data = check_login($con);

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<title>fuzuz.com</title>
</head>
<body>
	<!-- navbar section -->
	<div id="navbar">
		 <div class="row">
		 	<div class="column"><i class="fas fa-camera-retro icon-5x"></i>logo</div>
		<div class="column" style="font-family: 'jokerman'; font-size: 3rem; padding: 5%;">FUZUZ.COM<br>
			<div style="font-family: 'lucida calligraphy'; font-size: 1rem">WELCOME HOME!</div>
		</div></div></div>
	<br><br>

	<!-- body section -->
	<p><img src="furaha.jpg" style="float:left;width:25%;height:25%;">
	 Hello <?php echo $user_data['user_name']; ?>, welcome to the Fuzuz community, we are quite excited to have yuou visit.
		Fuzuz is here for YOU, from spreading the word about your search, to receiving CVs for you,
	to selecting and shortlisting the best candidates. We go ahead and bring the best trainers and tutors who
	have years of experience to guide and advice you on all your career based questions. The list of possibilities is endless!
Whats more is that you can access all this and more, at the click of a button!</p>
	<!-- services section -->
		We are your No1 Career Guide across Africa;
			<div id="dropdown">
				<form action="post">
				<label for="country">Choose Country</label>
				<select name="nations" id="nat">
				<option value="kenya">Kenya</option>
				<option value="tz">Tanzania</option>
				<option value="ug">Uganda</option>
				<option value="nig">Nigeria</option>
			</select>
			<input class="button" type="submit" value="next"/>
		</form>
			</div>
			<br><br><br>
		<p>Bored with jobboards? Speed up your growth with millions of professionals
		from entry level to executives</p>
		<a class="button" href="seek.php">Find a job</a><br>
		<a class="button" href="learn.php">Learn new skills</a><br>
		<a class="button" href="join.php">Join a community</a><br>
		<!-- search section -->
		<div #="search">
		Search jobs in Kenya;
			<div id="dropdown">
			<form action="post">
				<label for="county">Select County</label>
				<select name="counties" id="county">
				<option value="Nai">Nairobi</option>
				<option value="msa">Mombasa</option>
				<option value="kis">Kisumu</option>
				<option value="naks">Nakuru</option>
			    </select>
			    <input class="button" type="submit" value="next"/>
		    </form>
			</div>
		</div>
		<div id="box">
			<div id="dropdown">
			<form action="post">
			   <select name="profession">
			    <option>job by profession</option>
			    <option value="Nail">Nail Expert</option>
			    <option value="massage">Masseuse</option>
				<option value="eng">Engineering</option>
				<option value="hos">Hospitality</option>
			   </select><br></form>
			<form action="post">
			   <select name="industry">
			   	<option>Job by industry</option>
			   	<option value="tach">teachin</option>
				<option value="massage">aeronautics</option>
				<option value="auto">automotive</option>
				<option value="ban">banking</option>
			   </select><br>
			</form>
			<form action="post">
			   <select name="city">
			   	<option>Job by city</option>
			   	<option value="Nai">nairobi</option>
				<option value="msa">Mombasa</option>
				<option value="naks">Nakuru</option>
				<option value="ksm">kisumu</option>
			   </select><br>
		   </form>
	       </div>
	       	<input class="button" type="submit" value="Search Jobs">
	       </div>

	<div #="jobs">
		<h1 style="text-align: center;">Popular searches</h1>
		<div id="box"><i class="fas fa-search"></i>accounting,banking,insurance</div>
		<div id="box"><i class="fas fa-search"></i>sales,marketing,promotion</div>
		<div id="box"><i class="fas fa-search"></i>administrative, clerical</div>
		<div id="box"><i class="fas fa-search"></i>IT,software development</div>
		<div id="box"><i class="fas fa-search"></i>project,program management</div>
		<div id="box"><i class="fas fa-search"></i>customer support, client care</div>
		<div id="box"><i class="fas fa-search"></i>transportation,logistics,driving</div>
		<div id="box"><i class="fas fa-search"></i>human resource</div>
	</div>
			<div id="box"1>
		<p>What are you waiting for? Start your effortless search for the perfect employee here!!</p>
		<br>
		    	<form method="post">
			    <select name="job">
				   <option value="employer">
					Name of company/organization:<input type="text" name="company_name"><br>
					What position is available?<input type="text" name="job_title"><br>
					Give a brief description or any important information:<br>
					<input type="text" name="brief_description"><br>
					Contact details(phone):<input type="text" name="contact">
				</option>
			</select>
			<input class="button" type="submit" value="post job">
		</form>
		</div>

		<!-- sponsors and employer logos -->
		<div style="background-color: #131313;color: #fff;height: 80px;">
			More than 1,000+ employers trust Fuzuz<br>
			(the logos go here)
			<button>Find work</button>
			<button>hire talent</button>
		</div>
		<!-- outro section -->
		<div>
			<button><a href="fuzuz.php">home</a></button>
			<button><a href="jobs.php">jobs</a></button>
			<button><a href="learn.php">Learn</a></button>
			<button><a href="join.php">forum</a></button>
		</div>

		<!-- about section -->
	<div id="terminus">
	<div class="row">
	<div class = "column">
		<h2>Contact Information</h2>
		<i class="fas fa-address-book"></i>contact us;<br>
		<i class="fas fa-phone-square"></i> 0715 640 399 <br>
		<i class="fab fa-facebook"></i>fuzuz official<br>
		<i class="fab fa-twitter-square"></i>fuzuz_official<br>
		<i class="fab fa-instagram-square"></i>fuzuz_official<br>
		<i class="fab fa-snapchat-square"></i>fuzuz<br>
	</div>
	<div class="column">
		<h2>Customer Feedback</h2>
		Rate our services?<br>
		<i class="far fa-smile-beam"></i>happy <br>
		<i class="far fa-meh"></i>meh <br>
		<i class="far fa-sad-tear"></i>sad
	</div>
    </div>
    </div>
<a class="button" style="align-self: right;" href="logoutz.php">Log Out</a>

</body>
</html>