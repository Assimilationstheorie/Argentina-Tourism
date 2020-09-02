<html>
	<head>
		<title>Packages and Discount</title>
		<link href="../css/style.css" type="text/css" rel="stylesheet">	
		<link href="../css/menu.css" type="text/css" rel="stylesheet">
		<link href="../css/plan.css" type="text/css" rel="stylesheet">
		
		<style>
			div.img
			{
				margin-top:20px;
				border: 1px solid #737373;
				float:left;
				width:470px;
				//height:200px;
				margin-left:70px;
			}
			div.img:hover
			{
				border: 1px solid #FF735E;
			}
			div.img img
			{
				width:100%;
				height:200px;
			}
			div.desc{
				padding:10px;
				text-align:center;
			}
			w{
				font-family: myFirstFont;
				font-size:28px;
				color:#FF735E
			}
			w1{
				font-size:15px;
			}
			w2{
				color:#737373;
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
							<li><a href="Hotel.php"><c>PLAN YOUR TRIP</c></a></li>					
							<li class="dropdown">
								<a href="#" class="dropbtn">EXPLORE</a>						
								<div class="dropdown-content">
									<a href="../Home.php#c2">Virtual Argentina</a>
									<a href="../Explore/Attractions.php">Attractions</a>
									<a href="../Explore/Beaches.php">Beaches</a>
									<a href="../Explore/Hills.php">Hills</a>
									<a href="../Explore/shopping.php">Shopping</a>
									
									<a href="../Explore/Sports.php">Sports</a>
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
				<div id="content">
					<ulp>
						<lip><a href="Hotel.php">HOTELS</a></lip>
						<lip><a href="Car.php">RENTAL CARS</a></lip>
						<lip><a href="Bus.php">BUSES</a></lip>
						<lip><a href="Flight.php">FLIGHTS</a></lip>
						<lip><a class="active" href="Pack_Disc.php">PACKAGES & DISCOUNT</a></lip>
					</ulp>
				</div>
				<div id="contents">
					<div class="img">
						<a  href="Patagonia.php">
							<img src="../images/Packages/patagonia.jpg" alt="Patagonia Dreaming">
						</a>
						<div class="desc"><b><w>Patagonia Dreaming</w></b><br><w1>9 days/8 nights, Buenos Aires to Buenos Aires<br><strike>$5999 </strike>&nbsp&nbsp$4674</w1><br><w2>Click to know more...</w2></p></div>
					</div>
					<div class="img">
						<a  href="IguassuFalls.php">
							<img src="../images/Packages/if2.jpg" alt="In Search of Iguassu Falls">
						</a>
						<div class="desc"><b><w>In Search of Iguassu Falls</w></b><br><w1>10 days/9 nights, Buenos Aires to Rio de Janeiro<br><strike>$4376 </strike>&nbsp $2649</w1><br><w2>Click to know more...</w2></p></div>
					</div>
					<div class="img">
						<a  href="Antartica.php">
							<img src="../images/Packages/penguin.jpg" alt="Discover Antarctica">
						</a>
						<div class="desc"><b><w>Discover Antarctica</w></b><br><w1>12 days/11 nights, Montevideo to Ushuaia<br><strike>$10112 </strike>&nbsp $8000</w1><br><w2>Click to know more...</w2></p></div>
					</div>
					<div class="img">
						<a  href="EndOfTheEarth.php">
							<img src="../images/Packages/el calafate.jpg" alt="End OF The Earth" >
						</a>
						<div class="desc"><b><w>End OF The Earth</w></b><br><w1>9 days/8 nights, Buenos Aires to Buenos Aires<br><strike>$4499 </strike>&nbsp $3999</w1><br><w2>Click to know more...</w2></p></div>
					</div>
				</div>
				<div id="footer">
					<div id="footer1">
						<a href="../Home.php">Home</a><a> | </a>
						<a href="Hotel.php">Plan Your Trip</a><a> | </a>
						<a href="../Explore/Attractions.php">Explore</a><a> | </a>
						<a href="../Events/January.php">Events</a><a> | </a>
						<a href="../Gallery.php">Gallery</a><a> | </a>
						<a href="../About.php">About Us</a><a> | </a>
						<a href="../Contact.php">Contact Us</a>
							
					</div>
					<div id="footer2">
						<a href="../Others/TermsConditions.php">Terms & Conditions</a><a> | </a>						
						<a href="../Others/Feedback.php">Feedback</a><a> | </a>
						<a href="../Others/Faq.php">FAQ</a><a> | </a>					
						<a href="../Others/Links.php">Useful Links</a><a> | </a>
						<a href="../Others/Site.php">Site Map</a>
					</div>
					<p>© 2016 Argentina Tourism Board. All rights reserved. | Developed by Webtek Students.</p>				
				</div>
			</div>
		</center>			
	</body>
</html>