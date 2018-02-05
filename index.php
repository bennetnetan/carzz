
<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<?php require_once("./class.php");
require_once("./cookie.php");
?>
<title>CarSeller+||Home</title>
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
<script src="js/cookie.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--js-->
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--webfonts-->
</head>
<body>
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
						<p><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Nairobi Kenya.</p>
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
								<h1><a href="index.php">CarSeller<span>+</span></a></h1>
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
	
		
	<!--header-->
	<!-- banner -->
	
	<div class="banner">
		<div id="kb" class="carousel kb_elastic animate_text kb_wrapper" data-ride="carousel" data-interval="6000" data-pause="hover">

            <!-- Wrapper-for-Slides -->
            <div class="carousel-inner" role="listbox">

                <!-- First-Slide -->
                <div class="item active">
                    <img src="images/pexels.jpeg" alt="" class="img-responsive" />
                    <div class="carousel-caption kb_caption">
                        <h3 data-animation="animated flipInX">Buying and selling cars just made easy</h3>
                        <h4 data-animation="animated flipInX">The ultimate online Car Shop</h4>
                    </div>
                </div>

                <!-- Second-Slide -->
                <div class="item">
                    <img src="images/skoda.jpg" alt="" class="img-responsive" />
                    <div class="carousel-caption kb_caption kb_caption_right">
                        <h3 data-animation="animated flipInX"> Get your desired car instantly here</</h3>
                        <h4 data-animation="animated flipInX"></h4>
                    </div>
                </div>

                <!-- Third-Slide -->
                <div class="item">
                    <img src="images/rangerover.jpg" alt="" class="img-responsive" />
                    <div class="carousel-caption kb_caption kb_caption_center">
                        <h3 data-animation="animated flipInX">We Help Cardealers find their clients</</h3>
                        <h4 data-animation="animated flipInX">And you to find your dream car</h4>
                    </div>
                </div>

            </div>
			
            <!-- Left-Button -->
            <a class="left carousel-control kb_control_left" href="#kb" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <!-- Right-Button -->
            <a class="right carousel-control kb_control_right" href="#kb" role="button" data-slide="next">
                <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
			
        </div>
		<script src="js/custom.js"></script>
	</div>
<!--banner-->
	<!--content--> 
  <?php 
 include 'dbcode.php';                                                                                          

 ?> 
  <div class="search">
      <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12"> 
          <div class="col-xs-12 col-md-12 bg-success">
      <h5 style="font-size:29px;background:#ffffff;font-family:Roboto;color:#800000;padding-top:20px;transform:rotateY(360deg);"><center>Search for your desired Car</center> </h5> 
      <br><hr><br>
       <!--<form role="form" method="POST" action="list-properties.php"> -->
			<fieldset>
      <div class="col-xs-12 col-md-3 well search-icon form-group" style="margin-right:15px;">
      <label for="sel1">Cartype: <label/> 
      <select class="form-control" id="sel1" name="cartype" onchange="open_module();" style="min-width:200px;min-height:30px;">
                 
       <?php Carsproject::getCartype(); ?>
      </select>
    
      
	  </div> 
     <!----
      </div>--->
      <div class="col-xs-12 col-md-3 well search-icon form-group">
      <label for="sel3">Price limit: <label/>
      <select class="form-control" id="sel3" name="price" onchange="open_module();" style="min-width:200px;min-height:30px;">
      <option value="1000000">1000000</option>
      <option value="2000000">2000000</option>
      <option value="3000000">3000000</option>
      <option value="4000000">4000000</option>
       <option value="5000000">5000000</option>
      </select> 
      </div> 
      <br>
      <br>
      <br>
      <br>
      <br>
      <hr/>
      <div class="form-group">
                 <a class="btn btn-success" type="submit" onclick="open_module();" name="search_car" value="search"  value="Search">Search</a>
            </div>      </fieldset>
     <!-- </form>-->
      <div class="row" id="action_place"> 
      
      </div>
      <br>	  
      
</div>
</div>
</div>
<br>
<br>
      
      </div>
      </div>
		<div class="content">
			<!--banner-bottom-->
			<div class="banner-bottom">
				<div class="col-md-3 ban-grid">
					<div class="ban-left">
						<h4>Car Dealers</h4><br>
            <br>
            <img src="images/bmw2.jpg" alt="" width="250px" height="250px"/>
						<p  style="font-size:17px;font-family:Roboto;color:#800000;"><b>For Car Dealers thinking of going online...</b> </p>
					</div>
					<div class="ban-right">
						<i class="glyphicon glyphicon-user"> </i>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-3 ban-grid">
					<div class="ban-left">
						<h4>Car Adverts</h4> 
            <br>
            <br>
            <img src="images/fiat.jpg" alt="" width="250px"height="250px"/>
						<p  style="font-size:17px;font-family:Roboto;color:#800000;"><b>For those who want to advertise their Cars here by getting their car photos posted here.</b></p>
					</div>
					<div class="ban-right">
						<i class="glyphicon glyphicon-facetime-video"> </i>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-3 ban-grid">
					<div class="ban-left">
						<h4>Car Hires</h4>
            <br>
            <br>  
           <a href=car-hire.php style="hover:#000000"> <img src="images/rangerover.jpeg" alt="" width="250px" height="250px"/>
						<p  style="font-size:17px;font-family:Roboto;color:#800000;"><b>For those who want to get connected to Put up the cars for Car Hire</b> </p></a>
					</div>
					<div class="ban-right">
						<i class="glyphicon glyphicon-book"> </i>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-3 ban-grid">
					<div class="ban-left">
						<h4>Video Adverts</h4>
            <br>
            <br> 
           <img src="images/lexus.jpg" alt=""  width="250px" height="250px"/>
						<p style="font-size:17px;font-family:Roboto;color:#800000;"><b>For those who want to advertise their Cars using Videos</b> </p>
					</div>
					<div class="ban-right">
					<i class="glyphicon glyphicon-blackboard"> </i>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			
		</div>
		<!--content-->
		<!--footer-->
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

   <script type="text/javascript" src="js/smartjax.min.js"></script>     
<script type="text/javascript"> 
function open_module(){  

  var car_type = document.getElementById("sel1").value;
  var car_price = document.getElementById("sel3").value;   
  var path = 'search-results.php?cartype=' + car_type + '&price=' + car_price;
 // alert(home_location + ' ' + home_type + ' ' + home_price); 
  $("#action_place").html("Loading, please wait...");
				var promise=Smartjax.ajax({
					url: path,
					data:{ },
					type: 'POST',
					force:true,
					store: false,
				});
				promise.then(function (apiResult) {
					$("#action_place").html(apiResult)
				},function(){
					$("#action_place").html("failed!!");
				})  
  
}
</script>


      
				
</body>
</html>
