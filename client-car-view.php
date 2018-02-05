<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
<?php require_once("./class.php");

      $carid = $_REQUEST['car_id'];?>
<title>Client Car View</title>
<!--css-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/ken-burns.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/animate.min.css" type="text/css" media="all" />
<!--css-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="sell car Online, Buy car Online, Need to sell a car, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--js-->
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--webfonts-->
</head>
<body style="background:#d2691e">
	<!--header-->
		<div class="header">
			<div class="header-top">
				<div class="container">
					<div class="detail">
						<ul>
							<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> +254 798 878 646 || admin</li>
							<!--<li><i class="glyphicon glyphicon-time" aria-hidden="true"></i> Mon-Sat 9:00 Am to 16:00 Pm </li>--->
						</ul>
					</div>
					<div class="indicate">
						<p><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>| Nairobi Kenya.</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
				<!---Brand and toggle get grouped for better mobile display--->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>				  
							<div class="navbar-brand">
								<h1><a href="index.php">Buyer Car View  <span></span></a></h1>
							</div>
						</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<nav class="link-effect-2" id="link-effect-2">
								<ul class="nav navbar-nav">
									<li class="active"><a href="index.php"><span data-hover="Home">Home</span></a></li>
									<li><a href="owner.php"><span data-hover="Owners Portal">Owners Portal</span></a></li>
									<li><a href="contact.php"><span data-hover="Contact us">Contact us</span></a></li> 
                     <li><a href="car-hire.php"><span data-hover="CarHire">CarHire</span></a></li>	
									<!--<li><a href="projects.html"><span data-hover="Projects">Projects</span></a></li>	
									<li><a href="courses.html"><span data-hover="Courses">Courses</span></a></li>
									<li><a href="codes.html"><span data-hover="Codes">Codes</span></a></li>
									<li><a href="contact.html"><span data-hover="Contact">Contact</span></a></li>-->
								</ul>
							</nav>
						</div>
					</div>
				</nav>
			</div>
		</div>
          <br>
      </nav><h3 style="font-family:Roboto;font-size:30px;color:#000000;"><center><b><i>Below are the details of this car.</i></b></center></h3>
      <br><br>
	  
				<div class="col-md-8 contact-left">
			   <?php  Carsproject::getDetailsForClient($carid);  ?>
			   </div>
																							
							   <?php  Carsproject::getImagesForClient($carid);  ?>
							  
							  
							   <div class="container">
							   </div>
		   
          <br>
          

		  <div class="footer-w3">
				<div class="container">
					<div class="footer-grids">
						<div class="col-md-4 footer-grid">
							<h4>About Us</h4>
							<p>So you might be wondering what we do here at CarsSale+. Well, quite simply, we make your
              car hunting much easier and faster and still help car dealers to market their cars in a wider market. 
              <span>Getting your dream Car just got easy.</span></p>
						</div>
						<div class="col-md-4 footer-grid">
						<h4>Instagram Posts</h4>
							<div class="footer-grid1">
								<img src="images/mecedez.jpg" alt=" " class="img-responsive">
							</div>
							<div class="footer-grid1">
								<img src="images/skoda.jpg" alt=" " class="img-responsive">
							</div>
							<div class="footer-grid1">
								<img src="images/bmw2.jpg" alt=" " class="img-responsive">
							</div>
							<div class="footer-grid1">
								<img src="images/lexus.jpg" alt=" " class="img-responsive">
							</div>
							<div class="footer-grid1">
								<img src="images/pexels.jpeg" alt=" " class="img-responsive">
							</div>
							<div class="footer-grid1">
								<img src="images/rangerover.jpg" alt=" " class="img-responsive">
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="col-md-4 footer-grid">
						<h4>Information</h4>
							<ul>
								<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Zalego Institute, Nairobi Kenya</li>
								<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+254 -798-378-646</li>
								<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:brianmurithi65e@mail.com"> brianmurithi65@gmail.com</a></li>
								<!--<li><i class="glyphicon glyphicon-time" aria-hidden="true"></i>Mon-Sat 09:00 am to 16:00 pm</li> --->
							</ul>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		<!--footer-->
		<!---copy--->
			<div class="copy-section">
				<div class="container">
					<div class="social-icons">
						<a href="#"><i class="icon1"></i></a>
						<a href="#"><i class="icon2"></i></a>
						<a href="#"><i class="icon3"></i></a>
						<a href="#"><i class="icon4"></i></a>
					</div>
					<div class="copy">
						<p>&copy; 2017  This website has been designed by Brian Mureithi </p>
					</div>
				</div>
			</div>
			<!---copy--->
</body>
</html>
