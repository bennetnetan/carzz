<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<?php require_once("./class.php");?>
<title>Signup</title>
<!--css-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/validate.js"></script>
<link href="css/stylesignup.css" rel="stylesheet" type="text/css" media="all" />
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
<body style="background:url(images/004.jpg)">
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
								<h1><a href="index.php">SignUp  <span></span></a></h1>
							</div>
						</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<nav class="link-effect-2" id="link-effect-2">
								<ul class="nav navbar-nav">
									<li><a href="index.php"><span data-hover="Home">Home</span></a></li>
									<li  class="active"><a href="owner.php"><span data-hover="Owners Portal">Owners Portal</span></a></li>
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
    
    <div class="containers" style="border:thin groove #000000; margin:30px;background:#ffffff;opacity:0.9">
      <div class="row"> 
       <div class="col-md-6">
       <form action="reg-submit-reg.php" method="post" id="fileform" role="form" enctype="multipart/form-data">
       <fieldset><legend class="text-center" style="font-family:Roboto;font-size:25px;color:#8b0000">Welcome Signup Below. <span class="req"><small></small></span></legend>  
     <!-- <div class="form-group">
      <label for="phonenumber"><span class="req">* </span> Phone Number: </label>
      <input required type="text" name="phonenumber" id="phone" class="form-control phone" maxlength="28" onkeyup="validatephone(this);" placeholder="not used for marketing"/>
      
      </div>  -->
     <div class="form-group" style="padding-left:20px;"> 
      <label for="firstname"><span class="req"> </span> First Name: </label>
       <input class="form-control" type="text" name="firstname" id="txt" placeholder="first name" onkeyup="Validate(this)" required />
     <div id="errFirst">
      </div> 
      </div> 
      
      <div style="padding-left:20px;">
        <label for="lastname" ><span class="req"> </span> Last Name: </label>
       <input class="form-control" type="text" name="lastname" id="txt" onkeyup="Validate(this)" placeholder="last name" required />
     <div id="errLast"> </div>
      
      </div> 
	  
	   <div class="form-group" style="padding-left:20px;>
   <label for="password"><span class="req">
    </span> Enter your profile photo: </label>
    <input type="file" name="profile" class="form-control"/>
         <span id="profile" placeholder="used for your profile" ></span>
            </div>
      
       <div class="form-group" style="padding-left:20px;">
   <label for="email"><span class="req"> </span> 
   Email Address: </label> 
   <input class="form-control" required type="text" name="email" placeholder="email address" 
    id = "email"  onchange="email_validate(this.value);" />   
                        <div class="status" id="status"></div>
            </div>
<div class="form-group" style="padding-left:20px;">
            <label for="phonenumber"><span class="req"> </span>
			 Phone Number: </label>
    <input required type="text" name="phonenumber"
	 id="phone" class="form-control phone" maxlength="28"
onKeyUp="validatephone(this);" placeholder="phone number"/> 
            </div>
        
        </div><!-- ends col-6 -->  
         <div class="col-md-6">
        
            <div class="form-group">
      <label for="username"><span class="req">
	   </span> Id Number:  <small>
	  </small> </label> 
     <input class="form-control" type="text" name="idnumber" 
	 id = "tt" onkeyup = "" 
	 placeholder="identification number for credibility" required />  
                        <div id="errLast"></div>
            </div>

            <div class="form-group">
  <label for="password"><span class="req">
  </span> Password: </label>
  <input required name="password" type="password" 
  class="form-control inputpass" minlength="4" maxlength="16"
    id="pass1" /> </p>

   <label for="password"><span class="req">
    </span> Password Confirm: </label>
    <input required name="password" type="password" 
	class="form-control inputpass" minlength="4" maxlength="16"
	 placeholder="Enter again to validate"  id="pass2" 
	 onKeyUp="checkPass(); return false;" />
         <span id="confirmMessage" class="confirmMessage"></span>
            </div>

            <div class="form-group">
            <?php //$date_entered = date('m/d/Y H:i:s'); ?>
      <input type="hidden" value="<?php //echo $date_entered; ?>" 
	  name="dateregistered">
                <input type="hidden" value="0" name="activate" />
                <hr>
            <div class="form-group"> 
           <button class="btn btn-success"  name="submit" type="submit" value="Upload" style="min-width:200px; color:#ffffff;background:#6BBD6B;"> Register </button><!--style ="padding:8px;border:thin solid #ffffff;border-radius:5px; background-color:#6BBD6B;min-width:190px;max-height:40px;"> <a href="reg-submit-reg.php"  style="font-size:17px;color:#ffffff;">Register</a></button>-->
 <!-- <input class="btn btn-success" type="submit_reg" name="submit" 
  value="Register">-->
            </div>
      
      
       </fieldset>
       </form> 
       <script type="text/javascript">
       document.getElementById("field_terms").setCustomValidity("Please indicate that you accept the Terms and Conditions"); 
       
       </script>
       </div> 
       
      </div>
    </div>
	</div>
            <br>  <br> <br> <br> <br> <br> <br> <br> <br>
    
     
    
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
