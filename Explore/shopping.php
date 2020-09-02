<html>
	<head>
		<title>Explore||Shopping</title>
		<link href="../css/style.css" type="text/css" rel="stylesheet">
		<link href="../css/slider.css" type="text/css" rel="stylesheet">
		<link href="../css/menu.css" type="text/css" rel="stylesheet">
		<style>
		p.explore{
			font-size:25px;
			margin:15px;
			text-align:left;
		}
		.text 
		{
		  color: #FF735E;
		  font-size: 25px;
		  text-weight:bold;
		  padding: 8px 12px;
		  position: absolute;
		  top: 8px;
		 width: 100%;
		  text-align: center;
		  horizontal-align: middle;
		}
		img{
			width: 1200px;
			height: 410px;
		}

		</style>	
	</head>	
	<body>
		<?php
		session_start();						
	?>
		<center>
			<div id="top-fixed">
					<div id="nav">
						<ul>
							<li><a href="../PlanYourTrip/Hotel.php">PLAN YOUR TRIP</a></li>					
							<li class="dropdown">
								<a href="#" class="dropbtn"><c>EXPLORE</c></a>						
								<div class="dropdown-content">	
									<a href="../Home.php#c2">Virtual Argentina</a>
									<a href="#openModalRest">Restaurants</a>
									<div id="openModalRest" class="modalDialog">
										<div><a href="#close" title="Close" class="close">X</a>
											 <b class="inner-heading">Restaurants in Argentina</b>
											<form  name="rest" action ="../Main.php" onSubmit="return validation()" method="post">
												<table>											
													<tr>
														<td class="modalselect">
															<Select name="location" class="select">
																<Option value="0">----Choose a Location----</Option>
																<Option value="Restaurants in Buenos Aires">BUENOS AIRES</Option>
																<Option value="Restaurants in Bariloche">BARILOCHE</Option>
																<Option value="Restaurants in Mendoza">MENDOZA</Option>
																<Option value="Restaurants in Mar Del Plata">Mar Del Plata</Option>
																<Option value="Restaurants in Ushuaia">Ushuaia</Option>
																<Option value="Restaurants in Puerto Iguazu">Puerto Iguazu</Option>
																<Option value="Restaurants in Cordoba">Cordoba</Option>
																<Option value="Restaurants in El Chalten">El Chalten</Option>
														</td>
													</tr>
													<tr>
														<td class="modalbutton"><input type="Submit" value="Search" class="button">		 
													</tr>
												</table>
											</form>
										</div>
									</div>
									<a href="Attractions.php">Attractions</a>
									<a href="Beaches.php">Beaches</a>
									<a href="Hills.php">Hills</a>
									<a href="shopping.php">Shopping</a>	
									<a href="#openModalSpa">Spa & Salons</a>
									<div id="openModalSpa" class="modalDialog">
										<div><a href="#close" title="Close" class="close">X</a>
											 <b class="inner-heading">Spa & Salons in Argentina</b>
											<form  name="spa" action ="../Main.php" onSubmit="return validation()" method="post">
												<table>											
													<tr>
														<td class="modalselect">
															<Select name="location" class="select">
																<Option value="0">----Choose a Location----</Option>
																<Option value="Spa & Salons in Buenos Aires">BUENOS AIRES</Option>
																<Option value="Spa & Salons in Bariloche">BARILOCHE</Option>
																<Option value="Spa & Salons in Mendoza">MENDOZA</Option>
																<Option value="Spa & Salons in Mar Del Plata">Mar Del Plata</Option>
																<Option value="Spa & Salons in Ushuaia">Ushuaia</Option>
																<Option value="Spa & Salons in Puerto Iguazu">Puerto Iguazu</Option>
																<Option value="Spa & Salons in Cordoba">Cordoba</Option>
																<Option value="Spa & Salons in El Chalten">El Chalten</Option>
														</td>
													</tr>
													<tr>
														<td class="modalbutton"><input type="Submit" value="Search" class="button">		 
													</tr>
												</table>
											</form>
										</div>
									</div>
									<a href="Sports.php">Sports</a>
								</div>
							</li>					
							<li><a href="../Events/January.php">EVENTS</a></li>
							<li><a href="../Gallery.php">GALLERY</a></li>
							<li><a href="../About.php">ABOUT</a></li>
							<li><a href="../Contact.php">CONTACT</a></li>
						</ul>
					</div>
					<div id="user">
						<?php							
							if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
							{  								
								include("../Connection.php");
								$uid=$_SESSION["uid"];
								$sql="select * from user_details where User_ID='$uid'";
								$result=mysql_query($sql);
								if($result == FALSE) { 
									die(mysql_error()); // TODO: better error handling
								}
								while($row=mysql_fetch_array($result))
								{ 	
									echo "Welcome, $row[First_Name] "." $row[Last_Name] <br>"; 
									  echo '<a href="../Welcome.php">My Profile</a><a> | </a>
											<a href="../Logout.php">Log out</a>';
								}
							} 						
							else{
								
						
						?>
								<a href="../Login.php">LOGIN</a><a> | </a>
								<a href="../SignUp.php">SIGN UP</a>	
						<?php
					
							}
						?>			
					</div>				
			</div>	
			<div id="wrapper">										
				<div id="header">
					<div id="header-logo"></div>					
					<div id="header-title" align="left">
						<a class="title" href="../Home.php"><h1>LA&nbsp ARGENTINE&nbsp TURISMO</h1></a>	
					</div>														
				</div>			
				<div id="content-slider1">
					<div class="myslides">				
						<img  src="../images/Shopping/feriadesantelmo.jpg">	
						<div class="text">Feria De San Telmo</div>
					</div>
					<div class="myslides">
					<img  src="../images/Shopping/antiques-photo.jpg">
					<div class="text">The Antique Shop</div>
					</div>
					<div class="myslides">					
					<img  src="../images/Shopping/abasto.jpg">
					<div class="text">Abasto Shopping Mall</div>
					</div>
					
					<div class="myslides">
					<img  src="../images/Shopping/abastointerior.jpg">
					<div class="text">Abasto Mall' Interior</div>	
					</div>
					<div class="myslides">					
					<img  src="../images/Shopping/elataneo2.jpg">
					<div class="text">El Ateneo, BooksStore</div>
					</div>
					<div class="myslides">					
					<img  src="../images/Shopping/elataneo.jpg">
					<div class="text">The Beautiful Ateneo<3</div>
					</div>
					<div class="myslides">					
					<img  src="../images/Shopping/elataneo1.jpg">
					<div class="text">El Ateneo</div>
					</div>
					
										
					<div class="arrow_dots" style="width:100%">
						<div class="arrow arrow-left" onclick="plusDivs(-1)">&#10094;</div>
						<div class="arrow arrow-right" onclick="plusDivs(1)">&#10095;</div>
						<span class="dots demo" onclick="currentDiv(1)"></span>
						<span class="dots demo" onclick="currentDiv(2)"></span>
						<span class="dots demo" onclick="currentDiv(3)"></span>
						<span class="dots demo" onclick="currentDiv(4)"></span>
						<span class="dots demo" onclick="currentDiv(5)"></span>
						<span class="dots demo" onclick="currentDiv(6)"></span>
						<span class="dots demo" onclick="currentDiv(7)"></span>
						
						
					</div>
				</div>
			
			
				<div id="contents"> 
					<div id="content-heading"><b><u>Shop &nbspTill &nbspYou &nbspDrop</u></b></div>
					<p class="explore">
						1.<b class="inner-heading">Feria de San Telmo </b> -- On Sundays, San Telmo's main drag is closed to traffic and the street is a sea of both locals and tourists browsing craft stalls, waiting at vendors' carts for freshly squeezed orange juice, poking through the antique glass ornaments on display on Plaza Dorrego, and listening to street performances by myriad music groups. Runs from Av San Juan to Plaza de Mayo.<br><br>
						2.<b class="inner-heading">Antiques, Buenos Aires</b> -- An afternoon stroll through the heart of San Telmo will reveal cobblestone streets, rich with history, museums, antique stores, quirky boutiques and charming bars and cafes. Walk eastward on Avenida Independencia and take a right on Calle Defensa, one of San Telmo's main drags.<br><br>
						3.<b class="inner-heading">Abasto Shopping Mall</b> -- The Shopping Center is one of the largest in Buenos Aires. The Art Deco    building was converted into a mall in 1998 with several levels of shopping, aimed at the middle and upper-middle class. It's a great place to bring kids, with its extensive food court, enormous arcades with video games, and especially the very fun Museo de Los Ninos, located in the food court . <br><br>
						4.<b class="inner-heading">El Ateneo, Buenos Aires </b> -- Intellectual Buenos Aires is a bookshop paradise. In fact, the Argentinians have one of the highest literacy rate - 96% - in the world. <br><br>
						
					</p>
				</div>
				<div id="footer">
					<div id="footer1">
						<a href="Home.php">Home</a><a> | </a>
						<a href="PlanYourTrip/Hotel.php">Plan Your Trip</a><a> | </a>
						<a href="Attractions.php">Explore</a><a> | </a>
						<a href="Events/January.php">Events</a><a> | </a>
						<a href="Gallery.php">Gallery</a><a> | </a>
						<a href="About.php">About Us</a><a> | </a>
						<a href="Contact.php">Contact Us</a>						
					</div>
					<div id="footer2">
						<a href="Others/TermsConditions.php">Terms & Conditions</a><a> | </a>						
						<a href="Others/Feedback.php">Feedback</a><a> | </a>
						<a href="Others/Faq.php">FAQ</a><a> | </a>					
						<a href="Others/Links.php">Useful Links</a><a> | </a>
						<a href="Others/Site.php">Site Map</a>
					</div>
					<p>© 2016 Argentina Tourism Board. All rights reserved. | Developed by Webtek Students.</p>				
				</div>
			</div>
			<script>
				var myIndex = 0;
				carousel();
				function carousel() {
					var i;
					var x = document.getElementsByClassName("mySlides");
					var dots = document.getElementsByClassName("demo");
					for (i = 0; i < x.length; i++) {
						x[i].style.display = "none";
					}
					myIndex++;
					if (myIndex > x.length) {myIndex = 1}					 
					for (i = 0; i < dots.length; i++){
						dots[i].className = dots[i].className.replace(" dot", "");
					}
					x[myIndex-1].style.display = "block";
					setTimeout(carousel, 6000);// Change image every 10 seconds
					dots[myIndex-1].className += " dot";

				}
				var slideIndex = 1;
				showDivs(slideIndex);
				function plusDivs(n) {
				  showDivs(slideIndex += n);
				}
				function currentDiv(n) {
				  showDivs(slideIndex = n);
				}
				function showDivs(n) {
				  var i;
				  var x = document.getElementsByClassName("mySlides");
				  var dots = document.getElementsByClassName("demo");
				  if (n > x.length) {slideIndex = 1}
				  if (n < 1) {slideIndex = x.length}
				  for (i = 0; i < x.length; i++) {
				  x[i].style.display = "none";
				  }
				  for (i = 0; i < dots.length; i++){
				 dots[i].className = dots[i].className.replace(" dot", "");
				  }
				  x[slideIndex-1].style.display = "block";
				  dots[slideIndex-1].className += " dot";
				}
			</script>
			</center>	
		
	</body>
</html>