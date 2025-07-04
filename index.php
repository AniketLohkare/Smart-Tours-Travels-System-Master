<?php session_start(); ?>

<!DOCTYPE html>

<html>

	<head>
	
	<meta charset="UTF-8">
	<meta name="author" content="Joydeep Dev Nath">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="shortcut icon" href="images/favicon.ico">
	
	<title>Online Tours And Travel | Tanuja And Group</title>
	
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
	<link href="css/hover-min.css" rel="stylesheet"/>
	<link href="css/main.css" rel="stylesheet"/>
   	<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400|Raleway:100,300,400,500|Roboto:100,400,500,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	
	<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>
	
	</head>
	
	<body>
	
		<div class="col-xs-12 home">
		
			<!-- HEADER SECTION STARTS -->
				
			<div class="col-sm-12">
				
				<div class="header">
					
					<?php
					
					if(!isset($_SESSION["username"])) {
						include("common/headerTransparentLoggedOut.php");
					}
					else {
						include("common/headerTransparentLoggedIn.php");
					}
					
					?>
				
				</div> <!-- header -->
			
			</div> <!-- col-sm-12 -->
				
			<!-- HEADER SECTION ENDS -->
	
			<!-- carousel -->
		
			<div class="col-xs-12 banner">
		
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
		  	
			  	<ol class="carousel-indicators">
			   		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			   		<li data-target="#myCarousel" data-slide-to="1"></li>
			   		<li data-target="#myCarousel" data-slide-to="2"></li>
			  	</ol>
			
			   	<div class="carousel-inner">
			   	
			    	<div class="item active">
			    	  <img src="images/carousel/image1.jpg" alt="Image1">
			    	</div>
			    	
			    	<div class="item">
			    	  <img src="images/carousel/image2.jpg" alt="Image2">
			    	</div>
				
			    	<div class="item">
			    	  <img src="images/carousel/image3.jpg" alt="Image3">
			    	</div>
			    
			  	</div>
				
			   	<a href="#myCarousel" class="left carousel-control" data-slide="prev">
			    	<span class="glyphicon glyphicon-chevron-left"></span>
			    </a>
			    <a href="#myCarousel" class="right carousel-control" data-slide="next">
			        <span class="glyphicon glyphicon-chevron-right"></span>
			    </a>
			    
			</div>
			
		</div> <!-- banner -->
		
			<!-- icons -->
			
			<div class="col-xs-12 iconContainer">
				
				<div class="col-xs-12 iconHolder">
				
					<div class="col-xs-12 bookQuote">
					
						What would you like to book today?
						
					</div>
					
					<div class="col-xs-12 iconGrids hvr-grow">
					
						<a href="hotels.php" style="color: black;">
						
						<div class="col-xs-12 icons text-center">
							<img src="images/icons/hotel.png" alt="hotels" class="iconsDim text-center"/>
						</div>
						
						<div class="col-xs-12 heading">
							Hotels
						</div>
						
						</a>
						
					</div>
					
					<div class="col-xs-12 iconGrids hvr-grow">
					
						<a href="flights.php" style="color: black;">
							
							<div class="col-xs-12 icons text-center">
								<img src="images/icons/flight.png" alt="flights" class="iconsDim text-center"/>
							</div>
							
							<div class="col-xs-12 heading">
								Flights
							</div>
							
						</a>
						
					</div>
					
					<div class="col-xs-12 iconGrids hvr-grow">
						
						<a href="trains.php" style="color: black;">
							
							<div class="col-xs-12 icons text-center">
								<img src="images/icons/train.png" alt="trains" class="iconsDim text-center"/>
							</div>
							
							<div class="col-xs-12 heading">
								Trains
							</div>
							
						</a>
							
					</div>
					
					<div class="col-xs-12 iconGrids hvr-grow">
						
						<a href="bus.php" style="color: black;">
							
							<div class="col-xs-12 icons text-center">
								<img src="images/icons/bus.png" alt="buses" class="iconsDim text-center"/>
							</div>
							
							<div class="col-xs-12 heading">
								Buses
							</div>
							
						</a>
							
					</div>
					
					<div class="col-xs-12 iconGrids hvr-grow">
						
						<a href="cabs.php" style="color: black;">
							
							<div class="col-xs-12 icons text-center">
								<img src="images/icons/taxi.png" alt="cabs" class="iconsDim text-center"/>
							</div>
							
							<div class="col-xs-12 heading">
								Cabs
							</div>
							
						</a>
							
					</div>
					
				</div>
				
			</div>
			
			<!-- popularDestinations -->
			
			<div class="col-xs-12 popularDestinationsContainer">
				
				<div class="col-xs-12 destinationHolder">
				
					<div class="col-xs-12 destinationQuote">
					
						Popular Destinations
						
					</div>
					
					<div class="col-xs-12 containerGrids hvr-buzz-out">
						
						<div class="col-xs-12 pics text-center">
							<img src="images/popularDestinations/imageAndaman.jpg" alt="popularDestination1" class="picDim text-center"/>
						</div>
						
						<div class="col-xs-12 heading">
							Andaman and Nicobar
						</div>
						
					</div>
					
					<div class="col-xs-12 containerGrids hvr-buzz-out">
						
						<div class="col-xs-12 pics text-center">
							<img src="images/popularDestinations/imageJaisalmer.jpg" alt="popularDestination1" class="picDim text-center"/>
						</div>
						
						<div class="col-xs-12 heading">
							Rajasthan
						</div>
						
					</div>
					
					<div class="col-xs-12 containerGrids hvr-buzz-out">
						
						<div class="col-xs-12 pics text-center">
							<img src="images/popularDestinations/imageKashmir.jpg" alt="popularDestination1" class="picDim text-center"/>
						</div>
						
						<div class="col-xs-12 heading">
							Jammu and Kashmir
						</div>
						
					</div>
					
					
					
				</div>
				
			</div>
			
		</div> <!-- home -->
		
		<!-- FOOTER SECTION STARTS -->
					
				<div class="footerMod col-sm-12">
					
					<div class="col-sm-4">
						
						<div class="footerHeading">
							Contact Us
						</div>
							
						<div class="footerText">
							Tanuja Agencies <br> Kankavli-416602, Sindhudurga, India
						</div>
				
						<div class="footerText">
							E-mail: queries@travelwale.com
						</div>
						
					</div>
					
					<div class="col-sm-4">
					
						<div class="footerHeading">
							Made with
						</div>
						
						<div class="fa fa-heart"></div>
						
						<div class="footerHeading">
							in India
						</div>
						
						<div class="flagContainer text-center">
							<img src="images/flag.png">
						</div>
						
					</div>
					
					<div class="col-sm-4">
					
						<div class="footerHeading">
							Social Links
						</div>
						
						<div class="socialLinks">
						
							<div class="fb">
								facebook.com/travelwale
							</div>
						
							<div class="gp">
								plus.google.com/travelwale
							</div>
						
							<div class="tw">
								twitter.com/travelwale
							</div>
						
							<div class="in">
								linkedin.com/travelwale
							</div>
						
						</div> <!-- social links -->
						
					</div>
						
					<div class="col-sm-12">
					<div class="copyrightContainer">
						<div class="copyright">
						Online Tours And Travels &copy; Tanuja And Group.
						</div>
					</div>
					</div>
							
				</div> <!-- footer -->
				
			<!-- FOOTER SECTION ENDS -->
		
	</body>
	
</html>