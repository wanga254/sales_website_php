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
			<h1 class="hero__heading">Get a self-driving vehicle in minutes</h1>
			<p class="hero__description">Browse through to have a look at the variety of available choices</p>
			<button class="main__btn"><a href="#about">Get started</a></button>
		</div>
	</div>
	<!--sidebar section-->
	<div class="sidebar">
		<div class="sidebar-brand">
			<h1><span class="las la-accusoft"></span> Accusoft</span></h1>
		</div>
		<div class="sidebar-menu">
			<ul>
				<li>
					<a href=""><span class="las la-igloo"></span><span>Dashboard</span></a>
				</li>
				<li>
					<a href=""><span class="las la-users"></span><span>Customers</span></a>
				</li>
				<li>
					<a href=""><span class="las la-clipboard-list"></span><span>projects</span></a>
				</li>
				<li>
					<a href=""><span class="las la-shipping-bag"></span><span>Orders</span></a>
				</li>
				<li>
					<a href=""><span class="las la-receipt"></span><span>History</span></a>
				</li>
				<li>
					<a href=""><span class="las la-user-circle"></span><span>Accounts</span></a>
				</li>
				<li>
					<a href=""><span class="las la-clipboard-list"></span><span>Tasks</span></a>
				</li>
			</ul>
		</div>
	</div>
	<div class="main-content">
		<header>
			<h1>
				<label for="">
					<span class="las la-bars"></span>
				</label>

				<!-- Dashboard -->
			</h1>

			<div class="search-wrapper">
				<span class="las la-search"></span>
				<input type="search" name="search here" />
			</div>
			<div class="user-wrapper">
				<img src="img/2.jpg" width="40px" height="40px" alt="image">
				<div>
					<h4>John Doe</h4>
					<small>Super admin</small>
				</div>
			</div>
		</header>

		<main>
			<div class="cards">
				<div class="card-single">
					<div>
						<h1>54</h1>
						<span>Customers</span>
					</div>
					<div><span class="las la-users"></span></div>

					<div class="card-single">
					<div>
						<h1>79</h1>
						<span>Projects</span>
					</div>
					<div><span class="las la-clipboard-list"></span></div>

					<div class="card-single">
					<div>
						<h1>124</h1>
						<span>Orders</span>
					</div>
					<div><span class="las la-ahopping-bag"></span></div>

					<div class="card-single">
					<div>
						<h1>$6k</h1>
						<span>Income</span>
					</div>
					<div><span class="las la-google-wallet"></span></div>
				</div>
			</div>
		</main>
	</div>


</div>
</div>
</main>
</div>
</body>
</html>