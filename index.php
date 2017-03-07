<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>JMA MARKETING Homepage</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jmamarketing.css">
    <script type="text/javascript" src="assets/js/lib/googlemap.js"></script>
   	
   	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">

   	<!-- Google Fonts -->
   	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

   	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script
	src="https://code.jquery.com/jquery-3.1.1.js"
	integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
	crossorigin="anonymous"></script>

   	<!-- responsive slideshow -->

   	<link rel="stylesheet" href="assets/css/responsiveslides.css">
   	<script src="assets/js/lib/responsiveslides.min.js"></script>

   	<script>
    // You can also use "$(window).load(function() {"
  jQuery(function ($) {
    $("#slider1").responsiveSlides({
        maxwidth: 2500,
        speed: 750
    });
});
  </script>

  	</style>

  </head>
 
 <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
            		<a class="navbar-brand page-scroll" href="#page-top">
	 				<i class="fa fa-cutlery fa-3x" aria-hidden="true"></i> 
	      			</a>
	      		</div>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="about.html">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="ourlines.html">Our Lines</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#gallery">Gallery</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#showroom">Showroom</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<!-- Jumbotron -->
    	<div class="container jumbocontainer">
    	<!-- <div class="jumbotron pink"> -->
    			<div class="jumbotron">
	    			<div class="container">
	    				<div class="row">
			    			<h1><a href="index.html"><img class="col-xs-10 col-sm-8 col-md-6 logo" src="assets/img/logo.png"></a></h1>
			    	</div>
		    	</div>
		    		<p class="slogan">Manufacturer Representatives for the Restaurant and Hospitality Industry</p>
		    		<a class="btn btn-lg btn-contact page-scroll" href="#contact" role="button">Make An Appointment</a>
    			</div>
    	<!-- </div> -->
    	</div>
 <!-- End Jumbotron -->   
    


<!-- Foodservice -->

    <div class="container foodservicecontainer">
			<div class="row">	
			<h2>Foodservice<i class="fa fa-glass" aria-hidden="true"></i>
			</h2>
		      <a class="foodservice col-xs-12 col-md-4"><img class="circleimage" src="assets/img/generic2.png">
		      <p>table-top</p>
		      </a>
		      <a class="foodservice col-xs-12 col-md-4"><img class="circleimage" src="assets/img/generic2.png">
		      <p>seating</p>
		      </a>
		      <a class="foodservice col-xs-12 col-md-4"><img class="circleimage" src="assets/img/generic2.png">
		      <p>cookware & accessories</p>
		      </a>
	    	</div>
    </div>

<hr class="style18">

<!-- End Foodservice -->   

<!-- Hospitality -->
	<div class="container hospitalitycontainer">
			<div class="row">	
			<h2>Hospitality and Design</h2>
		      <a class="hospitalityservice col-xs-12 col-md-4"><img class="circleimage" src="assets/img/generic.png">
		      <p>furniture</p>
		      </a>
		      <a class="one hospitalityservice col-xs-12 col-md-4"><img class="circleimage" src="assets/img/generic.png">
		      <p>Buffet</p>
		      </a>
		      <a class="one hospitalityservice col-xs-12 col-md-4"><img class="circleimage" src="assets/img/generic.png">
		      <p>Room</p>
		      </a>
	    	</div>
    </div>
<!-- End Hospitality -->

<hr class="style18">

<!-- Showroom -->
<section id="showroom" class="showroom-section">
	<div class="container">
	<h2>Our Showroom</h2>
		<div class="row">
		<div class="slideshowcontainer col-xs-12">
		<ul class="rslides" id="slider1">
	      <li><img src="images/1.jpg" alt=""></li>
	      <li><img src="images/2.jpg" alt=""></li>
	      <li><img src="images/3.jpg" alt=""></li>
    	</ul>
    	</div>
    </div>
    </div>
	</div>
</section>
<!-- End Showroom -->

<hr class="style18">

<!-- Contact Form  -->	
	
<section id="contact" class="contact-section">
	<div class="container">
		<div class="row">

<!-- Map -->
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-12">
							<div id="map"></div>
						</div>
						<div class="col-md-12">
							<h3>JMA Marketing</h3>
							<h4>1545 N Western Ave, Chicago, IL 60622</h4>
							<div>
						    	<ul class="contactButton">
						    		<li><a href="#" class="icoPhone" title="Phone"><i class="fa fa-phone"></i></a></li>
					                <li><a href="#" class="icoEnvelope" title="Email"><i class="fa fa-envelope-o"></i></a>Email Us</li>
						    	</ul>
	    					</div>
						</div>
					</div>
				</div>

				<!-- End Map -->

			<div class="col-md-4">
				<div>
					<h2>Contact Us</h2>
				</div>
						<?php include("assets/js/lib/mail.php"); ?>
						<form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
							
							<!-- Name input-->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="name">Name</label>  
							  	<div class="col-sm-12">
							  	<input id="name" name="name" type="text" placeholder="" class="form-control input-md">
							  	<span class="error"><?= $name_error ?></span>  
							  </div>
							</div>

							<!-- Phone Number input-->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="phone">   Phone Number</label>  
							  <div class="col-sm-12">
							  <input id="phone" name="phone" type="text" placeholder="" class="form-control input-md">
							  <span class="error"><?= $phone_error ?></span>   
							  </div>
							</div>	

							<!-- Email input-->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="email">Email Address</label>  
							  <div class="col-sm-12">
							  <input id="email" name="email" type="text" placeholder="" class="form-control input-md" data-validation-required-message="Please enter your email address.">
							  <span class="error"><?= $email_error ?></span>
							  </div>
							</div>

							<!-- Business input-->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="business">Business Name</label>  
							  <div class="col-sm-12">
							  <input id="business" name="business" type="text" placeholder="" class="form-control input-md">
							  <span class="error"><?= $business_error ?></span> 
							  </div>
							</div>

							<!-- Industry Select -->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="industry">Industry </label>
							  <div class="col-sm-12">
							    <select id="industry" name="industry" class="form-control">
							      <option value="Restaurant">Restaurant</option>
							      <option value="Hotel">Hotel</option>
							      <option value="Manufacturer">Manufacturer</option>
							      <option value="Distributor">Distributor</option>
							      <option value="Other">Other</option>
							    </select>
							  </div>
							</div>

							<!-- Message Entry -->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="message">Message</label>
							  <div class="col-sm-12">                     
							    <textarea class="form-control" id="message" placeholder = "Please leave a message and we will get back to you within one business day. "name="message" type="text"></textarea>
							    <button type="submit" class="btn btn-success btn-sm">Send</button>
							  </div>
							</div>
						</form>
				</div>



		</div>	
	</div>
</section>	 


<!-- End Contact Form  -->	

<!-- Footer -->

<footer class="footer">
    <div class="row">
	    <div class="col-sm-4"><img src="assets/img/logo.png" class="footerlogo img-responsive"></div>
	    <div class="col-sm-3 statement">Here you would write a brief statement, a blurb or something about your business, like some kind of mission statement or a statement of purpose of maybe a brief history.
	    </div>
	    <div class="col-sm-2">
			<ul class="social-network social-circle">
                <li><a href="https://www.facebook.com/JohnMansonandAssociates/" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            </ul>
        </div>
	    <div class="col-sm-3 ">
		    <ul class="footerlinks">
		    	<li><a class="page-scroll" href="#page-top">Home</a></li>
		    	<li><a class="page-scroll" href="#about">About</a></li>
		    	<li>Our Lines</li>
		    	<li>Gallery</li>
		    	<li>Showroom</li>
		    </ul>
	    </div>  
	</div>
	<p class="pearly">Website Design by Pearly Squirrel Development</p>	
</footer>

	 	<!--Script Running-->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script
	src="https://code.jquery.com/jquery-3.1.1.js"
	integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
	crossorigin="anonymous"></script>

	<!--Google Map -->
	<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDTvBPdQKLExJ7zQhqrS-Ij5V3yHTgfWY&callback=initMap">
    </script>


    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 
 	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
 	<script type="text/javascript" src="assets/js/lib/scrolling-nav.js"></script>


 
  </body>

</html>