<html>
	<head>
		<title>Explore||Attractions</title>
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
						<img  src="../images/Attractions/Buenos_Aires_La_Boca_Caminito.jpg">	
						<div class="text">La Boca, Caminito</div>
					</div>
					<div class="myslides">
					<img  src="../images/Attractions/laboca_caminito_2.jpg">
					<div class="text">Caminito Tango</div>
					</div>
					<div class="myslides">					
					<img  src="../images/Attractions/valdespeninsula.jpg">
					<div class="text">Valdes Peninsula</div>
					</div>
					
					<div class="myslides">
					<img  src="../images/Attractions/valdespeninsula1.jpg">
					<div class="text">Discovering A Whale</div>	
					</div>
					<div class="myslides">					
					<img  src="../images/Attractions/beaglechannelmaritim.jpg">
					<div class="text">Beagel Channel</div>
					</div>
					<div class="myslides">					
					<img  src="../images/Attractions/beaglechannel1.jpg">
					<div class="text">Beagel Channel</div>
					</div>
					<div class="myslides">					
					<img  src="../images/Attractions/mendoza.jpg">
					<div class="text">Mendoza</div>
					</div>
					<div class="myslides">					
					<img  src="../images/Attractions/mendoza1.jpg">
					<div class="text">Mendoza</div>
					</div>
					<div class="myslides">					
					<img  src="../images/Attractions/Flying_Over_IberaWetlands.jpg">
					<div class="text">Flying Over The Ibera Wetlands</div>
					</div>
					<div class="myslides">					
					<img  src="../images/Attractions/ibera-wetlands-patagonia.jpg">
					<div class="text">Wildlife in The Ibera Wetlands</div>
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
						<span class="dots demo" onclick="currentDiv(8)"></span>
						<span class="dots demo" onclick="currentDiv(9)"></span>
						<span class="dots demo" onclick="currentDiv(10)"></span>
						
						
					</div>
				</div>
			
			
				<div id="contents"> 
					<div id="content-heading"><b><u>Alluring&nbsp Argentina</u></b></div>
					<p class="explore">
						1.<b class="inner-heading">Caminito, La Boca, Buenos Aires </b> -- The working class district of Buenos Aires is called La Boca. It is popular between the tourists because of the colorful houses and the most entertaining street, Caminito, where street artists performs tango and tango-related memorabilia is sold.<br><br>
						2.<b class="inner-heading">Valdes Peninsula</b> -- This is a nature reserve where you can find unique flora and fauna. The most common inhabitants of the coastline are the sea lions, elephant seals and penguins.<br><br>
						3.<b class="inner-heading">Beagle Channel, Argentina</b> -- Beagle Channel is a strait between the most southern part of Argentina and south islands of Chile. This strait is long 240 km and wide about 5 km. <br><br>
						4.<b class="inner-heading">Mendoza, Argentina </b> -- Mendoza is a region that is the leading in the winemaking of Argentina. The beautiful and wide wine fields are a great attraction for visitors beside the wine testing and the unique tastes. <br><br>
						4.<b class="inner-heading">The Ibera Wetlands </b> -- The Ibera Wetlands are the second largest wetlands in the world after Pantanal in Brazil. This is a spot where the nature lovers can find the richest fauna of Argentina. <br><br>
						
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