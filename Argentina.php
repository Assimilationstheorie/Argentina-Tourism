<html>
	<head>
		<title>mains</title>
		<link href="../css/style.css" type="text/css" rel="stylesheet">	
		<link href="../css/menu.css" type="text/css" rel="stylesheet">
		<style>
			div.img
			{
				margin-top:20px;
				//border: 1px solid #737373;
				float:left;
				width:470px;
				//height:200px;
				margin-left:70px;
			}
			div.img:hover
			{
				//border: 1px solid #FF735E;
			}
			div.img img
			{
				width:100%;
				height:300px;
			}
			div.desc{
				padding:10px;
				text-align:center;
			}
			w{
				font-family: myFirstFont;
				font-size:30px;
				color:#FF735E
			}
			w1{
				font-size:17px;
				text-align: left;
				
			}
			w2{
				color:#737373;
			}
			i{
				font-size:20px;
				font-weight:bold;
			}
		</style>
	</head>
	<body>
		<?php
			//session_start();
			include("../Connection.php");
			$location= $_POST["location"];
			//$_SESSION["location"]=$location;
			$sql="select * from PlanYourTrip where Location='$location'";
			$result=mysql_query($sql);
			if($result == FALSE) { 
				die(mysql_error()); // TODO: better error handling
			}
			//echo "$location";
		?>
		<center>
				<div id="top-fixed">
					<div id="nav">
						<ul>
							<li><a href="../PlanYourTrip/Hotel.php"><c>PLAN YOUR TRIP</c></a></li>					
							<li class="dropdown">
								<a href="#" class="dropbtn">EXPLORE</a>						
								<div class="dropdown-content">
									<a href="Home.php#c2">Virtual Argentina</a>
									<a href="../Explore/Restaurant.php">Restaurants</a>
									<a href="../Explore/Attractions.php">Attractions</a>
									<a href="../Explore/Beaches.php">Beaches</a>
									<a href="../Explore/Hills.php">Hills</a>
									<a href="../Explore/shopping.php">Shopping</a>
									<a href="../Explore/Spa.php">Spa & Salons</a>
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
						<a href="../Login.php">LOGIN</a><a> | </a>
						<a href="../SignUp.php">SIGN UP</a>					
					</div>				
			</div>	
			<div id="wrapper">										
				<div id="header">
					<div id="header-logo"></div>					
					<div id="header-title" align="left">
						<a class="title" href="../Home.php"><h1>LA&nbsp ARGENTINE&nbsp TURISMO</h1></a>	
					</div>														
				</div>		
				<div id="content-heading"><b><u><?php echo "$location"; ?></u></b></div>
		<?php
			while($row=mysql_fetch_array($result))
			{ 
		?>
				<div id="contents">
					<div id="main1"></div>
					<div id="main2"></div>
				</div>
		<?php			
			}
		?>
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
						<a href="../Login.php">Login</a><a> | </a>
						<a href="../SignUp.php">SignUp</a>		
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