<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
<?php require_once("./class.php");?>
<title>CarSale+|| Car Hire</title>
<!--css-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/hire.css" rel="stylesheet" type="text/css" media="all" />
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
<body style="background:#e2e263;">
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
								<h1><a href="index.php">Car Hire  <span></span></a></h1>
							</div>
						</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<nav class="link-effect-2" id="link-effect-2">
								<ul class="nav navbar-nav">
									<li ><a href="index.php"><span data-hover="Home">Home</span></a></li>
									<li><a href="owner.php"><span data-hover="Owners Portal">Owners Portal</span></a></li>
									<li><a href="contact.php"><span data-hover="Contact us">Contact us</span></a></li>
									<li  class="active"><a href="car-hire.php"><span data-hover="CarHire">CarHire</span></a></li>	
									<!--<li><a href="courses.html"><span data-hover="Courses">Courses</span></a></li>
									<li><a href="codes.html"><span data-hover="Codes">Codes</span></a></li>
									<li><a href="contact.html"><span data-hover="Contact">Contact</span></a></li>-->
								</ul>
							</nav>
						</div>
					</div>
				</nav>
			</div> 
      </div> 
           <!--car hire form-->
          
          	     <div class="container">   
           <div class="containers" style="opacity:1.0;">
      <div class="row"> 
       <div class="col-md-6">
       <form action="carhire-exec.php" method="post" id="fileform" role="form"  enctype="multipart/form-data">
       <div class="col-md-12">
       <fieldset><legend class="text-center" style="font-family:Roboto;color:#0f0f0f;font-size:25px;">Welcome Add the Car Details you intend to put for hire here. <span class="req"><small></small></span></legend>  
         </div>
       <hr/>
     <!-- <div class="form-group">
     <!-- <label for="phonenumber"><span class="req">* </span> Phone Number: </label>
      <input required type="text" name="phonenumber" id="phone" class="form-control phone" maxlength="28" onkeyup="validatephone(this);" placeholder="not used for marketing"/>
      
      </div>  -->
     <div class="form-group"> 
      <label for="firstname"><span class="req"></span> Full Name: </label>
       <input class="form-control" type="text" name="fullname" placeholder="enter full name" id="txt" onkeyup="Validate(this)" required />
     <div id="errFirst">
      </div> 
      </div>
      <div class="form-group">
   <label for="email"><span class="req"></span> 
   Email Address: </label> 
   <input class="form-control" required type="text" placeholder="email" name="email"
    id = "email"  onchange="email_validate(this.value);" />   
                        <div class="status" id="status"></div>
            </div> 
            
            <div class="form-group">
            <label for="phonenumber"><span class="req"> </span>
			 Phone Number: </label>
    <input required type="text" name="phonenumber"
	 id="phone" class="form-control phone" maxlength="28"
onKeyUp="validatephone(this);" placeholder="not used for marketing"/> 
            </div>
      
      <div class="form-group">
        <label for="cartype"><span class="req"></span> Car Type & Model: </label>
       <input class="form-control" type="text" name="cartype" id="txt" onkeyup="Validate(this)" placeholder="car type or model" required />
     <div id="errLast"> </div>
      
      </div> 
      
       

        
        </div>
		<!-- ends col-6 -->  
         <div class="col-md-6">
                  <br><br><br><hr/>
            <div class="form-group">
      <label for="username"><span class="req">
	   </span> Car Charges:  <small>
	  </small> </label> 
     <input class="form-control" type="text" name="price" 
	 id = "txt" onkeyup = "Validate(this)" 
	 placeholder="charges per day" required />  
                        <div id="errLast">
						</div>
            </div>

            <div class="form-group">
  <label for="password"><span class="req">
  </span> Car Description: </label>
  	<textarea placeholder="Message" class="form-control" name="description" rows="5" style="width:" ></textarea> </p>
		</div>
		 <div class="form-group">
   <label for="password"><span class="req">
    </span> Car Image: </label>
    <input type="file" name="car_image"/>
         <span id="confirmMessage" ></span>
            </div>

                <hr>
            <div class="form-group">
  <button class="btn btn-success" type="submit" name="submit" 
  value="Upload" style="min-width:200px; color:#ffffff;background:#6BBD6B;"> Upload </button>
            </div>
      
          </div>
       </fieldset>
       </form> 
       
                                                                                                         
       </div> 
       
      </div>  
       </div> 
            </div>
       
     
     <br><br>
     <?php
       Carsproject::listcarhires();
       ?>   
	   <div class="container">
	     </div>
		 
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



</body>
</html>
