<html>
	<head>
		<title>Explore||Hills</title>
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
			height:410px;
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
						<img  src="../images/hills/monte_fitz_roy.jpg">	
						<div class="text">Monte Fitz Roy, Patagonia</div>
					</div>
					<div class="myslides">
					<img  src="../images/hills/HILLoFsEVENcOLORS.jpg">
					<div class="text">Hills Of Seven Colours, Purmamarca</div>
					</div>
					<div class="myslides">
					<img src="../images/hills/bariloche.jpg">
					<div class="text">Bariloche</div>
					</div>
					<div class="myslides">
					<img  src="../images/hills/LOS GLACIERS.jpg">
					<div class="text">Los Glaciers, Santa Cruz</div>	
					</div>
					<div class="myslides">					
					<img  src="../images/hills/HORNOCAL.jpg">
					<div class="text">Hornocol Mountain Range</div>
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
					<div id="content-heading"><b><u>Colourful&nbsp Argentina&nbsp Mountains </u></b></div>
					<p class="explore">
						1.<b class="inner-heading">Monte Fitz Roy</b> -- Located in southern Patagonia near the Chilean border, Monte Fitz Roy is one of the most iconic points in the Andes. This granite mountain is surrounded by glacial lakes and dramatic ice fields.<br><br>
						2.<b class="inner-heading">The Hill of the Seven Colors</b> -- (Cerro de los Siete Colores), in the tiny and alluring dusty town of Purmamarca, is the most popular and easy to access.<br><br>
						3.<b class="inner-heading">Bariloche</b> -- San Carlos de Bariloche is a city on the foothills of the Andes known for its Swiss-like atmosphere and its chocolate shops. The city with its surrounding mountains and lakes is famous for many adventurous sports. <br><br>
						4.<b class="inner-heading">Los Glaciares</b> -- A.K.A Glaciers National Park is home to some of the world's most awe-inspiring natural wonders. Located in the Santa Cruz, Patagonia, the national park features the largest ice cap outside of Greenland and Antarctica.<br><br>
						5.<b class="inner-heading">Hornocal mountain range</b> -- But the most impressive of all of them is the Hornocal mountain range, 20 miles by dirt road from the picturesque colonial town of Humahuaca. 
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