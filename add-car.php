<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
<?php require_once("./class.php");?>
<title>Add Car</title>
<!--css-->

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/ken-burns.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/styleaddcar.css" type="text/css" media="all" />
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
<body style="background:#ffffaa;">
	<!--header-->  
	
 
		<div class="header">
			<div class="header-top">
				<div class="container">
					<div class="detail">
						<ul>
							<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"><a href="tel:+254 798 878 646"></i> +254 798 878 646</a> || admin</li>
							<!--<li><i class="glyphicon glyphicon-time" aria-hidden="true"></i> Mon-Sat 9:00 Am to 16:00 Pm </li>--->
						</ul>
					</div>
					<div class="indicate">
						<p><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i> | Nairobi Kenya.</p>
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
								<h1><a href="index.php">Add Your Car  <span></span></a></h1>
							</div>
						</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<nav class="link-effect-2" id="link-effect-2">
								<ul class="nav navbar-nav">
									<li><a href="index.php"><span data-hover="Home">Home</span></a></li>
									<li class="active"><a href="owner.php"><span data-hover="Owners Portal">Owners Portal</span></a></li>
									<li><a href="contact.php"><span data-hover="Contact us">Contact us</span></a></li>
                     <li><a href="car-hire.php"><span data-hover="CarHire ">CarHire</span></a></li>	
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
     <div class="container">
     <div class="rowww" style="margin-top:20px;" >
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
        <form role="form" method="POST" action="addcar-exec.php"style="background:#c50;">
			<fieldset>
				<h2 style="text-align:center; font-size:26px;font-family:Roboto">Please enter Car Info</h2>
				<hr class="colorgraph">
				<div class="formmm-group" style="margin-bottom:7px;color:#000000">
                    <input type="text" name="car_model" class="form-control input-lg" placeholder="Car name" required >
				</div>
			<!--	<div class="form-group">
                    <input type="text" name="location" class="formm-control input-lg" placeholder="Location" required>
				</div>-->
				<div class="formmm-group"style="margin-bottom:7px;color:#000000">
                    <input type="text" name="car_price" class="form-control input-lg" onKeyUp="numericFilter(this);" placeholder="Price in Ksh" required>
                    <span style="color:#ff0000"></span><p style="color:#ffffff">Use only digits</p>
					
				</div>
        <div class="formmm-group" style="margin-bottom:7px;color:#000000">
                    <input type="text" name="contacts" class="form-control input-lg" onKeyUp="numericFilter(this);" placeholder="Phone number" required>
                    <span style="color:#ff0000"></span><p style="color:#ffffff">Use only digits</p>
					
				</div>
        <div class="formm-group" style="margin-bottom:7px;color:#000000">
          <label for="exampleSelect1">Type of Car</label>
          <select class="form-control" id="exampleSelect1" name="car_id">
            <!--<option value=" Mitsubishi">Mitsubishi</option>
            <option value=" Lexus"> Lexus</option>
            <option value=" Cayen"> Cayen</option>
            <option value=" Wish"> Wish</option>
            <option value=" Mercedez Benz">Mercedez Benz</option>--> 
            <?php  Carsproject::getCarId();?>
          </select>
        </div>
        <div class="formmm-group">
          <label for="exampleTextarea" style="color:#ffffff">Please add a short description of the car specs.(Limit 255 characters)</label>
          <textarea class="form-control" id="exampleTextarea" rows="5" name="car_specs"></textarea>
        </div>  
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
						 <div class="form-group">
                 <input class="btn btn-success" type="submit" name="add_car" style="min-width:50px;"
                  value="Add">
				             </div>
					</div>                                         
				</div>
			</fieldset>
		</form>
    </div>
	</div>   
  </div>  
  <br>
  <br>
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
								<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Nairobi Kenya</li>
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
