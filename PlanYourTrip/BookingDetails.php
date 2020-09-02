<html>
	<head>
		<title>Booking Details</title>
		<link href="../css/style.css" type="text/css" rel="stylesheet">
		<link href="../css/menu.css" type="text/css" rel="stylesheet">	
		<style>
			#contents{
			    height:1000px;
			}
			x{
				font-weight:bold;
				font-size:45px;	
				font-family: myFirstFont;
			 }
			o{
				
				font-size:30px;	
				text-align: center;
			}
			table, th, td
			{
				border: 1px solid black; 
				border-collapse: collapse;
				padding:20px;
				
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
						<li><a href="Hotel.php">PLAN YOUR TRIP</a></li>					
						<li class="dropdown">
							<a href="#" class="dropbtn">EXPLORE</a>						
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
									<a href="../Explore/Attractions.php">Attractions</a>
									<a href="../Explore/Beaches.php">Beaches</a>
									<a href="../Explore/Hills.php">Hills</a>
									<a href="../Explore/shopping.php">Shopping</a>
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
				
				<div id="contents">
					<div id="content-heading"><b><u>Booking Details</u></b></div>
					<?php							
							if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
							{
								include("../Connection.php");
								$uid=$_SESSION["uid"];
								$sql="select * from booking_details where User_ID='$uid'";
								$result=mysql_query($sql);
								?>
								<table style="font-size:12px" class="gridtable">
									<tr>
										
										<th><x>Package Name</x></th>
										<th><x>Date Of Booking</x></th>
										<th><x>No Of People</x></th>
										<th><x>Total Price</x></th>
									</tr>
									<?php
										while($row=mysql_fetch_array($result))
										{
											echo "<tr>
											
											<td><o>$row[Package_Name]</o></td>
											<td><o>$row[Date_Of_Booking]</o></td>
											<td><o>$row[People]</o></td>
											<td><o>$$row[Total_Price]</o></td>
											</tr>";
										}
									?>
								</table>
					<?php 	} 
						else{
							?>
							<p><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><b class="inner-heading">Please &nbsp <a href="../Login.php"> Login </a> &nbspto continue</b></p>
						<?php }
						?>
		
					
				</div>
				<div id="footer">
					<div id="footer1">
						<a href="../Home.php">Home</a><a> | </a>
						<a href="../PlanYourTrip/Hotel.php">Plan Your Trip</a><a> | </a>
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