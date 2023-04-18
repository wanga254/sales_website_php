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
<!Doctype html>
 <html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>WANGO: For where you wan'go!</title>
	<link rel="stylesheet" href="style.css" />
	<i class="fa-solid fa-acorn"></i>
</head>
<body>
	<!-- navigation bar -->
	<nav class="navbar">
		<div class="navbar__container">
			<a href="#home" id="navbar__logo">WANGO</a>
			<div class="navbar__toggle" id="mobile-menu">
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
			</div>
			<ul class="navbar__menu">
				<li class="navbar__item">
					<a href="#home" class="navbar__links" id="home-page">Home</a>
				</li>
				<li class="navbar__item">
					<a href="#about" class="navbar__links" id="about-page">About</a>
				</li><li class="navbar__item">
					<a href="#services" class="navbar__links" id="services-page">Services</a>
				</li><li class="navbar__btn">
					<a href="signupz.php>" class="button" id="signup">Sign Up</a>
				</li>
			</ul>
		</div>
	</nav>
	<!--Hero section-->
	<div class="hero" id="home">
		<div class="hero__container">
			<h1 class="hero__heading">Choose Your <span>RIDE!</span></h1>
			<p class="hero__description">hire for a group of people</p>
			<button class="main__btn"><a href="#about">hire for a private session</a></button>
		</div>
	</div>
	<!--about section-->
	<div class="main" id="about">
		<div class="main__container">
			<div class="main__img--container">
				<div class="main__img--card"><i class="fas fa-comment-dollar"></div>
			</div>
			<div class="main__content">
				<h1>What do we do?</h1>
				<h2>We are your one stop shop for everything driving!</h2>
				<p> Do schedule a call today to learn more about our services.</p>
				<button class="main__btn"><a href="#">Schedule Call</a></button>
			</div>
		</div>
	</div>
		

		<!-- services section here-->
		<div class="main" id="services">
			<h1 style="color: #fff;">Our Services</h1>
			<div class="services__wrapper">
				<div class="services__card">
					<h2>Dear you</h2>
					<p>welcome home. Dive in and experience the power of convenient shopping!</p>
					<div class="services__btn"><button>Get Started?</button></div>
				</div>
				
				<div class="services__card">
				    <h2>Are you ready?</h2>
					<p>Explore our products. Get a true taste of variety of choices.</p>
					<div class="services__btn"><button>Take me there!</button></div>
				</div>
				<div class="services__card">
				    <h2>Elegant women wear</h2>
					<p>discover your style</p>
					<div class="services__btn"><button>Let's shop</button></div>
				</div>
				<div class="services__card">
				    <h2>The men's closet</h2>
					<p>The real you!</p>
					<div class="services__btn"><button>Let's Shop</button></div>
				</div>
			</div>
		</div>
		<!--feature section -->
		<div class="main" id="sign-up">
		<div class="main__container">
			<div class="main__content">
				<h1>Join over 70,000 happy users</h1>
				<h2>Sign up today</h2>
				<p>See what makes us different.</p>
				<button class="main__btn"><a href="signupz.php">Sign Up</a></button>
			</div>
			<div class="main__img--container">
				<div class="main__img--card" id="card-2"><i class="fas fa-users"></i></div>
			</div>
			
			<!--footer section-->
			<div class="footer__container">
				<div class="footer__links">
					<div class="footer__link--wrapper">
						<div class="footer__link--items">
							<h2>About us</h2><br>
							<a href="/sign-up">-We are</a>
							<a href="/sign-up">-Testimonials</a>
							<a href="/sign-up">-Careers</a>
							<a href="/sign-up">-Terms of service</a>
						</div>
					</div>
					<div class="footer__link--wrapper">
						<div class="footer__link--items">
							<h2>Videos</h2><br>
							<a href="/">-Submit Video</a>
							<a href="/">-Ambassadeurs</a>
							<a href="/">-agency</a>
							<a href="/sign-up">-Community projects</a>
						</div>
						<div class="footer__link--items">
							<h2>Socials</h2><br>
							<a href="www.instagram.com/_wanga.fy/">-instagram</a>
							<a href="www.facebook.com/Allan Wanga/">-facebook</a>
							<a href="www.whatsapp.com/0715640399/">-whatsapp</a>
							<a href="www.youtube.com/life in christ/">-twitter</a>
						</div>
					</div>
				</div>
				<section class="social__media">
					<div class="social__media--wrap">
						<div class="footer__logo">
							<a href='/' id="footer__logo">Ubarn Thrift</a>
						</div>
						<p class="website__rights"> inc.UrbanThrift 2021. All rights reserved</p>
					<div class="social__icons">
						<a class="social__icon--link" target="_blank"><i class="fab fa-facebook"></i></a>
						<a class="social__icon--link" target="_blank"><i class="fab fa-instagram"></i></a>
						<a class="social__icon--link" target="_blank"><i class="fab fa-youtube"></i></a>
						<a class="social__icon--link" target="_blank"><i class="fab fa-twitter"></i></a>
					</div>
					</div>
				</section>
		
	<script src="app.js"></script>
</body>
</html>
