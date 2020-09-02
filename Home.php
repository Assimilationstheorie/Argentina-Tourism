<html>
	<head>
		<title>Argentina Tourism</title>
		<link href="css/style.css" type="text/css" rel="stylesheet">
		<link href="css/slider.css" type="text/css" rel="stylesheet">
		<link href="css/menu.css" type="text/css" rel="stylesheet">
				
		<style type="text/css">				
			#content-home
			{
				height:  450px;
				//width:   90%;				
				//background-color:coral;
			}
			#content-home1
			{
				height:  400px;
				width:    360px;				
				border: 2px solid dimgray;
				
				margin-top:30px;
				margin-left:25px;
				padding-top:10px;
				float: left;
				background-color: #c0c0c0;
			}
			#content-home2
			{
				height:  400px;
				width:   360px;				
				border: 2px solid dimgray;
				
				margin-top:30px;
				margin-left:25px;
				padding-top:10px;
				
				float: left;
				background-color: #c0c0c0;				
			}
			#content-home3
			{
				height:  400px;
				width:   360px;				
				border: 2px solid dimgray;
				
				margin-top:30px;
				margin-left:25px;
				padding-top:10px;
				float: left;
				background-color: #c0c0c0;
			}
			#content2
			{
				height:  1000px;
				width:   1200px;				
				border: 2px solid dimgray;				
				margin-top:30px;
				//margin-left:25px;
				padding-top:20px;
				//float: left;
				background-color: #c0c0c0;
			}
			.anchor{
			   display:block;
			   height:55px; /* this is the height of your header */
			   margin-top:-55px; /* this is again negative value of the height of your header */
			   visibility:hidden;
			}
			h{
			font-family: myFirstFont;
				font-size: 30px;
				color:#737373;
			}
			h2 { 
			   position: absolute; 
			   top: 300px; 
			   left: 300; 
			   width: 100%; 
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
			p.home{
				font-size:18px;
				margin:15px;
				text-align:left;
				font-family:myFirstFont;
				
			}
			div.video{
				float:left;
				margin:30px;
				border: 1px solid #737373;
				width:520px;
			}
			div.video:hover
			{
				border: 1px solid #FF735E;
			}
			div.details{
				padding:10px;
				text-align:center;
			}
			w{
				font-family: myFirstFont;
				font-size:20px;
				color:#FF735E
			}
			div.vr{
				font-size:18px;
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
						<li><a href="PlanYourTrip/Hotel.php">PLAN YOUR TRIP</a></li>					
						<li class="dropdown">
							<a href="#" class="dropbtn">EXPLORE</a>						
							<div class="dropdown-content">
								<a href="#c2">Virtual Argentina</a>
								<a href="#openModalRest">Restaurants</a>
								<div id="openModalRest" class="modalDialog">
									<div><a href="#close" title="Close" class="close">X</a>
										 <b class="inner-heading">Restaurants in Argentina</b>
										<form  name="rest" action ="Main.php" method="post">
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
								<a href="Explore/Attractions.php">Attractions</a>
								<a href="Explore/Beaches.php">Beaches</a>
								<a href="Explore/Hills.php">Hills</a>
								<a href="Explore/shopping.php">Shopping</a>
								<a href="#openModalSpa">Spa & Salons</a>
								<div id="openModalSpa" class="modalDialog">
									<div><a href="#close" title="Close" class="close">X</a>
										 <b class="inner-heading">Spa & Salons in Argentina</b>
										<form  name="spa" action ="Main.php"  method="post">
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
								<a href="Explore/Sports.php">Sports</a>
							</div>
						</li>					
						<li><a href="Events/January.php">EVENTS</a></li>
						<li><a href="Gallery.php">GALLERY</a></li>
						<li><a href="About.php">ABOUT</a></li>
						<li><a href="Contact.php">CONTACT</a></li>
					</ul>
				</div>
				<div id="user">
					<?php							
						if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
						{  								
							include("Connection.php");
							$uid=$_SESSION["uid"];
							$sql="select * from user_details where User_ID='$uid'";
							$result=mysql_query($sql);
							if($result == FALSE) { 
								die(mysql_error()); // TODO: better error handling
							}
							while($row=mysql_fetch_array($result))
							{ 	
								echo "Welcome, $row[First_Name] "." $row[Last_Name] <br>"; 
								  echo '<a href="Welcome.php">My Profile</a><a> | </a>
										<a href="Logout.php">Log out</a>';
							}
						} 						
						else{
							
					
					?>
							<a href="Login.php">LOGIN</a><a> | </a>
							<a href="SignUp.php">SIGN UP</a>	
					<?php
				
						}
					?>
					
				</div>				
			</div>	
			<div id="wrapper">										
				<div id="header">
					<div id="header-logo"></div>					
					<div id="header-title" align="left">
						<a class="title" href="Home.php"><h1>LA&nbsp ARGENTINE&nbsp TURISMO</h1></a>	
					</div>														
				</div>
				<div id="content-slider">
				<div class="myslides">	
					<a  href="Explore/Attractions.php"><img src="images/home4.jpg" alt="Busy Streets" ></a>
					<div class="text">Argentina	is bright and bustling metropolis that never sleeps.</div>
					</div>
					<div class="myslides">	
					<a  href="Explore/Attractions.php"><img src="images/argentinagreenery.jpg" alt="Greenery" ></a>
					<div class="text">Argentina	is wonder in nature.</div>
					</div>
					<div class="myslides">	
					<a  href="Explore/Hills.php"><img src="images/iconicpeaks.jpg" alt="iconicpeaks" ></a>
					<div class="text">Argentina	is an expanse of iconic peaks.</div>
					</div>
					
					<div class="myslides">	
					<a  href="PlanYourTrip/Pack_disc.php"><img src="images/Packages/PATAGONIA.jpg" alt="Packages" ></a>
					<div class="text">Discover Argentina on our award-winning tours</div>
					</div>
					
					<div class="myslides">
					<a  href="Explore/Attractions.php"><img  src="images/home3.jpg" alt="Explore"></a>
					<div class="text">Argentina boasts the cascading wonders of Iguazu Falls</div>
					</div>
					
					<div class="myslides">
					<a  href="Events/January.php"><img  src="images/eventshome.jpg" alt="Events"></a>
					<div class="text">Where Europe Meets Latin America.</div>
					</div>
					
					<div class="myslides">
					<a  href="Explore/shopping.php"><img  src="images/library.jpg" alt="library"></a>
					<div class="text">Argentina's largest library, El Ataneo </div>
					</div>
					<div class="myslides">
					<a  href=""><img  src="images/VR.jpg" alt="VR"></a>
					<div class="text">Experience Argentina through virtual reality.</div>
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
				<div id="content-home">										
					<div id="content-home1"><h>ABOUT ARGENTINA</h><br>
					<p class="home">
						1. Argentina is a country where passion meets artistry, where Europe meets Latin America, and where each region possesses a distinct personality.<br><br>
						2. Gaucho cowboys, the tango, and the romance of Evita are the characteristics of Argentina.<br><br>
						3. It  also presents visitors with a wide variety of cultural attractions including impressive mountain peaks, rare geological formations, tropical jungles and a diverse variety of fauna. <br><br>
						4. A country of personality, passion and panache is what Argentina is.
						</p>
					</div>
					<div id="content-home2"><h>DESTINATIONS</h><br>
					<p class="home">
						1. Iguassu Falls: The spectacular Iguazu Falls is made up of numerous cascades producing vast sprays of water.<br><br>
						2. Mendoza: Not only Argentina's wine capital but one of the great wine capitals of the world. <br><br>
						3. Buenos Aires: A.K.A the "Paris of the Americas", the birthplace of the tango, is a city of contrasts. <br><br>
						4. Barilcohe: Offers natural scenery of rugged beauty in the heart of Andean Patagonia.<br><br>
						5. Ushuaia: The southernmost tip of South America, nicknamed the "End of the World." 
					</p>					
					</div>
					<div id="content-home3"><h>BEST TIME TO VISIT</h><br>
					<p class="home">
						1. SUMMER:
						Argentina's summer offers the best chance of warm, clear weather in Patagonia and Iguazu Falls. <br><br>
						2. AUTUMN: 
						Autumn is a beautiful time of year to visit Patagonia and Mendoza's winelands.<br><br>
						3. WINTER: 
						The middle of June usually signifies the start of Argentina's ski season; focused around the Bariloche area where the best snow settles.<br><br>
						4. SPRING:
						Spring in the Lake District around Bariloche is a lovely time to visit and enjoy the carpets of wild flowers. <br><br>
						
						</p></div>						
				</div>
				<span class="anchor" id="c2"></span>
				<div id="content2"><h>EXPERIENCE&nbsp VIRTUAL&nbsp ARGENTINA</h><br>		
					<div class="video">
						<iframe width="100%" height="300" src="https://www.youtube.com/embed/xJSCDiaSaA8"  allowfullscreen="allowfullscreen" frameborder="0">
						</iframe>	
						<div class="details"><w>Buenos Aires 360</w>
						<div class="vr"><a href="Explore/Virtual.php?url=https://www.youtube.com/watch?v=xJSCDiaSaA8">Experience live in VR</a></div></div>
					</div>
					
					<div class="video">
						<iframe width="100%" height="300" src=" https://www.youtube.com/embed/uLbccZ5aEn8" allowfullscreen="allowfullscreen" frameborder="0">
						</iframe>	
						<div class="details"><w>Cristo Redentor - Rio de Janeiro - 360 Degree Spherical Video</w>
						<div class="vr"><a href="Explore/Virtual.php?url=https://www.youtube.com/watch?v=uLbccZ5aEn8 ">Experience live in VR</a></div></div>
					</div>
					
					<div class="video">
						<iframe width="100%" height="300" src="https://www.youtube.com/embed/UGOoEt2VKYQ" allowfullscreen="allowfullscreen" frameborder="0">
						</iframe>
						<div class="details"><w>Salta en 360°</w>
						<div class="vr"><a href="Explore/Virtual.php?url=https://www.youtube.com/watch?v=UGOoEt2VKYQ">Experience live in VR</a></div></div>
					</div>
					
					<div class="video">
						<iframe width="100%" height="300" src="https://www.youtube.com/embed/EwjjvD8aDxo" allowfullscreen="allowfullscreen" frameborder="0">
						</iframe>
						<div class="details"><w>Bahía López, Bariloche, en 360º #RealidadVirtual</w>
						<div class="vr"><a href="Explore/Virtual.php?url=https://www.youtube.com/watch?v=EwjjvD8aDxo ">Experience live in VR</a></div></div>
					</div>
				</div>
				<div id="footer">
					<div id="footer1">
						<a href="Home.php">Home</a><a> | </a>
						<a href="PlanYourTrip/Hotel.php">Plan Your Trip</a><a> | </a>
						<a href="Explore/Attractions.php">Explore</a><a> | </a>
						<a href="Events/January.php">Events</a><a> | </a>
						<a href="Gallery.php">Gallery</a><a> | </a>
						<a href="About.php">About Us</a><a> | </a>
						<a href="Contact.php">Contact Us</a><a> | </a>
						<a href="SignUp.php">SignUp</a>		
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
		</center>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script>
			$(document).ready(function(){
			  // Add smooth scrolling to all links
			  $("a").on('click', function(event) {

				// Make sure this.hash has a value before overriding default behavior
				if (this.hash !== "") {
				  // Prevent default anchor click behavior
				  event.preventDefault();

				  // Store hash
				  var hash = this.hash;

				  // Using jQuery's animate() method to add smooth page scroll
				  // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
				  $('html, body').animate({
					scrollTop: $(hash).offset().top
				  }, 800, function(){
			   
					// Add hash (#) to URL when done scrolling (default click behavior)
					window.location.hash = hash;
				  });
				} // End if
			  });
			});
		</script>
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
				setTimeout(carousel, 10000);// Change image every 15 seconds
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
	</body>
</html>