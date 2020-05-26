<?php include "includes/header.php" ?>

<body data-spy="scroll" data-target="#navbarResponsive">

	<!-- Start Home Section -->
	<div id="home">

		<!-- Navigation -->
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
			<a href="index.php" class="navbar-brand"><img src="./images/logo.png" alt="logo"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Hosting</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Services</a></li>
					<li class="nav-item"><a href="#" class="nav-link">About</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Sign In</a></li>
				</ul>
			</div>
		</nav>
		<!-- End Navigation -->

		<!-- Start Background Page Image-->
		<div class="landing">
			<div class="home">
				<div class="home-inner">
				</div>
			</div>
		</div>
		<!-- End Background Page Image -->

		<!-- Start Landing Page Content -->
		<div class="col-12 caption">
			<h1 class="text-light text-uppercase pb-3 pb-md-4">
				Dedicated Gaming Servers
			</h1>
			<a href="#about" class="btn btn-outline-light">Get Started</a>
		</div>
		<!-- End Landing Page Content-->

		<!-- Start First Jumbotron -->
		<div class="jumbotron text-center pt-5 mb-0">

			<h2 class="heading">About</h2>
			<!-- Start Row -->
			<div class="row justify-content-center mt-5">
				<div class="col-md-6 col-lg-4 about pb-4 pb-lg-2">
					<i class="fas fa-server fa-3x"></i>
					<h4 class="text-uppercase pt-3 pb-2">Dedicated Server</h4>
					<p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
				</div>

				<div class="col-md-6 col-lg-4 about pb-4 pb-lg-2">
					<i class="fas fa-gamepad fa-3x"></i>
					<h4 class="text-uppercase pt-3 pb-2">Multiple Games</h4>
					<p class="lead">Laudantium dolor explicabo aspernatur impedit inventore itaque sapiente eaque, distinctio culpa reiciendis corrupti accusantium iusto in. </p>
				</div>

				<div class="col-md-6 col-lg-4 about pb-4 pb-lg-2">
					<i class="fas fa-dollar-sign fa-3x"></i>
					<h4 class="text-uppercase pt-3 pb-2">Price</h4>
					<p class="lead">Minus porro at sunt optio iure?</p>
				</div>
			</div>

		</div>
		<!-- End First Jumbotron -->

		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="./images/half-life.jpg" alt="First slide" />
					<div class="carousel-caption d-none d-md-block">
						<h5 class="animated fadeInUp" style="animation-delay: 0.5s;">
							Half-Life
						</h5>
						<p class="animated fadeInUp" style="animation-delay: 0.5s;">
							Half-Life is a first-person shooter game developed by Valve and
							published by Sierra Studios for Windows in 1998. It was Valve's
							debut product and the first game in the Half-Life series
						</p>
						<p><a href="#">More Info</a></p>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="./images/half-life-2.jpg" alt="Second slide" />
					<div class="carousel-caption d-none d-md-block">
						<h5 class="animated fadeInUp" style="animation-delay: 0.5s;">
							Half-Life 2
						</h5>
						<p class="animated fadeInUp" style="animation-delay: 0.5s;">
							Half-Life 2 is a 2004 first-person shooter game developed and
							published by Valve. Like the original Half-Life, it combines
							shooting, puzzles, and storytelling, and adds features such as
							vehicles and physics-based gameplay. Players control Gordon
							Freeman, who fights the alien Combine with allies including
							resistance fighter Alyx Vance, using weapons such as the
							object-manipulating gravity gun.
						</p>
						<p><a href="#">More Info</a></p>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100 auto" src="./images/half-life-alyx.jpg" alt="Third slide" />
					<div class="carousel-caption d-none d-md-block">
						<h5 class="animated fadeInUp" style="animation-delay: 0.5s;">
							Half-Life Alyx
						</h5>
						<p class="animated fadeInUp" style="animation-delay: 0.5s;">
							Half-Life: Alyx is a 2020 virtual reality (VR) first-person
							shooter developed and published by Valve. Set between the events
							of Half-Life (1998) and Half-Life 2 (2004), players control Alyx
							Vance on a mission to seize a superweapon belonging to the alien
							Combine.
						</p>
						<p><a href="#">More Info</a></p>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>

	</div>

	<?php include "includes/footer.php" ?>
</body>

</html>