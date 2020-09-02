<html>
	<head>
		<title>mains</title>
		<link href="css/style.css" type="text/css" rel="stylesheet">	
		<link href="css/menu.css" type="text/css" rel="stylesheet">
		
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
				height:300px;
			}
			div.desc{
				padding:10px;
				text-align:center;
			}
			w{
				font-family: myFirstFont;
				font-size:35px;
				color:#FF735E;
				//padding-bottom:0px;
			}
			w1{
				font-size:17px;
				text-align:left;
				
			}
			w2{
				color:#737373;
			}
			i{
				font-size:20px;
				font-weight:bold;
			}
			#contents{
				height:1200px;
			}
		</style>
	</head>
	<body>
		<?php
		    session_start();
			
			//echo "$location";
		?>
		<center>
				<div id="top-fixed">
					<div id="nav">
						<ul>
							<li><a href="PlanYourTrip/Hotel.php"><c>PLAN YOUR TRIP</c></a></li>					
							<li class="dropdown">
								<a href="#" class="dropbtn">EXPLORE</a>						
								<div class="dropdown-content">
									<a href="Home.php#c2">Virtual Argentina</a>
									<a href="#openModalRest">Restaurants</a>
									<div id="openModalRest" class="modalDialog">
										<div><a href="#close" title="Close" class="close">X</a>
											 <b class="inner-heading">Restaurants in Argentina</b>
											<form  name="rest" action ="Main.php" onSubmit="return validation()" method="post">
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
											<form  name="spa" action ="Main.php" onSubmit="return validation()" method="post">
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
								$sql1="select * from user_details where User_ID='$uid'";
								$result1=mysql_query($sql1);
								if($result1 == FALSE) { 
									die(mysql_error()); // TODO: better error handling
								}
								while($row=mysql_fetch_array($result1))
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
				<?php
					include("Connection.php");
					$location= $_POST["location"];
					
					//$_SESSION["location"]=$location;
					$sql="select * from PlanYourTrip where Location='$location'";
					$result=mysql_query($sql);
					if($result == FALSE) { 
						die(mysql_error()); // TODO: better error handling
					}
					if($location<='0'){ ?>
				<div id="contents"><b class="inner-heading"><br><br><br><br>NO RESULTS FOUND.</b></div>
				<?php
				}
				else
				{ ?>
				<div id="content-heading"><b><u><?php echo "$location"; ?></u></b></div>
				<?php
					}				
				?>
		<?php
			while($row=mysql_fetch_array($result))
			{ 
		?>
				<div id="contents">
					<div class="img">
						<a  href="<?php echo "$row[Website]"; ?>">
							<?php  echo  "<img src='" . $row['Image'] ."'  alt='$row[Name]'>"; ?>
						</a>
						<div class="desc"><b><w><?php echo "$row[Name]"; ?></w></b><br>
											 <w1><p><i>Address: </i><?php echo "$row[Address]"; ?><br>
													 <i>Phone: </i><?php echo "$row[Phone]"; ?><br>
													 <i>Website: </i><a  href="<?php echo "$row[Website]"; ?>">
																	<?php echo "$row[Website]"; ?></p>
																 </a>
											 </w1><br>					 
						</div>
					</div>
		<?php			
			}
		?>
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
	</body>
</html>