<html>
	<head>
		<title>Explore||Sports</title>
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
						<img  src="../images/Sports/sports1.jpg">	
						<div class="text">Sports In Argentina</div>
					</div>
					<div class="myslides">
					<img  src="../images/Sports/Argentine_-_Portugal_-_Argentine.jpg">
					<div class="text">Team Argentina</div>
					</div>
					<div class="myslides">					
					<img  src="../images/Sports/Germany_and_Argentina_face_off_in_the_final_of_the_World_Cup_2014.jpg">
					<div class="text">Germany VS Argentina, World Cup 2014</div>
					</div>
					
					<div class="myslides">
					<img  src="../images/Sports/Fireworks-after-the-2014--011.jpg">
					<div class="text">Fireworks after 2014</div>	
					</div>
					<div class="myslides">					
					<img  src="../images/Sports/messi.jpg">
					<div class="text">Lionel Messi</div>
					</div>
					<div class="myslides">					
					<img  src="../images/Sports/Polo_At_the_Kentucky_HOrse_Park.jpg">
					<div class="text">Polo At The Kentucky Horse Park</div>
					</div>
					<div class="myslides">					
					<img  src="../images/Sports/pato.jpg">
					<div class="text">Pato</div>
					</div>
					<div class="myslides">					
					<img  src="../images/Sports/manu-ginobili-argentina-usa.jpg">
					<div class="text">Argentina VS USA, Basketball</div>
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
						
					</div>
				</div>
			
			
				<div id="contents"> 
					<div id="content-heading"><b><u>Sports &nbsp&nbsp Fever</u></b></div>
					<p class="explore">
						1.<b class="inner-heading">Soccer</b> -- Argentina's national game is futbol (soccer), which was introduced in the 1860s by British soldiers. The Argentinian national team has become one of the best in the world and won World Cup titles in 1978 and 1986. In the streets, you may hear "Boca or River?" on the day of a futbol game between the Boca Juniors and the River Plate team.<br><br>
						2.<b class="inner-heading">Polo</b> -- Since an Argentinian team won the first Olympic gold medal in polo in 1924, Argentinians have dominated the sport. Both Argentinian ponies and Argentinian polo players are sought by polo teams in other countries. The polo player Gonzalo Pieres is one of the best in the world.<br><br>
						3.<b class="inner-heading">Pato</b> -- Pato is a special Argentinian sport, first played by the Gauchos. Pato means "duck". Two teams of four men on horseback attempt to throw the modern pato, a leather ball with six handles, into one of two baskets at either end of a large field. <br><br>
						4.<b class="inner-heading">Basketball </b> -- Basketball is a very important sports as well. The country got the 2ND place in the last basketball world cup and the 1st place in the last Olympic Games in Athens, often beating the Dream Team in semifinals and Italy in the final. While the national team reached the final again in Basketball World Cup 2006. <br><br>
						
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