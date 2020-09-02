<html>
	<head>
		<title>Explore||Beaches</title>
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
						<img  src="../images/Beaches/Mar_del_Plata2.jpg">	
						<div class="text">Mar Del Plata</div>
					</div>
					<div class="myslides">
					<img  src="../images/Beaches/Pinamar.jpg">
					<div class="text">Pinamar,Buenos Aires</div>
					</div>
					<div class="myslides">					
					<img  src="../images/Beaches/beachresorts.jpg">
					<div class="text">Beach Resort</div>
					</div>
					
					<div class="myslides">
					<img  src="../images/Beaches/Las_Grutas.jpg">
					<div class="text">Las Grutas, Patagonia</div>	
					</div>
					<div class="myslides">					
					<img  src="../images/Beaches/pehuenco1.jpg">
					<div class="text">Pehuen Co,Bahia Blanca</div>
					</div>
										
					<div class="arrow_dots" style="width:100%">
						<div class="arrow arrow-left" onclick="plusDivs(-1)">&#10094;</div>
						<div class="arrow arrow-right" onclick="plusDivs(1)">&#10095;</div>
						<span class="dots demo" onclick="currentDiv(1)"></span>
						<span class="dots demo" onclick="currentDiv(2)"></span>
						<span class="dots demo" onclick="currentDiv(3)"></span>
						<span class="dots demo" onclick="currentDiv(4)"></span>
						<span class="dots demo" onclick="currentDiv(5)"></span>
						
					</div>
				</div>
			
			
				<div id="contents"> 
					<div id="content-heading"><b><u>A &nbspDay&nbsp At&nbsp The&nbsp Beach</u></b></div>
					<p class="explore">
						1.<b class="inner-heading">Mar del Plata</b> -- If you ask anyone about beaches in Argentina, there's no doubt Mar del Plata will come up. It's Argentina's largest and oldest beach resort (built in 1874) and is hugely popular with local and foreign tourists alike. Surrounded by rolling hills, its beaches stretch along 17km of coastline,Mar del Plata is a lively coastal town.<br><br>
						2.<b class="inner-heading">Pinamar</b> -- Pinamar offers a beautiful combination of beaches and stunning pine forests. It's a popular family vacation spot for portenos (residents) as it's only a three hour drive from the capital. It offers a great, less crowded alternative to the nearby Mar del Plata.<br><br>
						3.<b class="inner-heading">Las Grutas</b> -- Las Grutas is located further South along Argentina's Atlantic coast, in Patagonia. It is slightly lesser known, however no doubt becoming one of the best beach vacation spots in Argentina because of its unspoiled location. The beaches in Las Grutas have some of the purest white sand and warmest waters you’ll find along the coastline of Argentina. <br><br>
						4.<b class="inner-heading">Pehuen Co </b> --If you are more of an adventure traveler you surely can't go wrong with this beach. Pehuen Co is the best natural beach of Argentina and you're unlikely to come across tourists, buildings or anything other than sandy coastlines. <br><br>
						
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
					setTimeout(carousel, 8000);// Change image every 10 seconds
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