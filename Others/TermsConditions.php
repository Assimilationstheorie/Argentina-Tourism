<html>
	<head>
		<title>Terms & Conditions</title>
		<link href="../css/style.css" type="text/css" rel="stylesheet">
		<link href="../css/menu.css" type="text/css" rel="stylesheet">	
		<style>
			#contents{
			    height:1000px;
			}
			x{
				font-weight:bold;
				font-size:40px;	
			 }
			p{
				margin:30px;			
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
					<div id="content-heading"><b><u>Terms & Conditions</u></b></div>
					<p align="left">Argentina travel is an informational website designed and maintained by the Argentina Tourism Board (hereafter ATB), which is responsible for most aspects surrounding the tourism industry of Argentina, including the promotion of the country as a holiday destination.
					  These terms and conditions are governed by Argentina law.<br>
					   For the context of these terms and conditions the terms ‘we’ or ‘us’ means ATB. We reserve the right to modify these at any time, and such modifications shall take immediate effect. We therefore recommend that you review the terms and conditions periodically to be aware of such modifications. Your continued use of the Argentina.travel shall deem your acceptance of the terms and conditions as modified from time to time.<br>
					   <x>Product Listings</x><br>
					   Argentina.travel is a free, not-for-profit informational website designed to promote the destination of Argentina and its various tourism-related products and services.
					   Argentina.travel lists hotels, ground operators, dive centres, charter companies and other products and services related to the tourism sector as a free informational service to website users and prospective visitors to Argentina. Individual listings are derived from information supplied by the individual proprietors themselves. ATB is not responsible for the policies, terms and conditions, cancellation policies or other policies, warranties, guarantees or actions of the proprietors of products and services that are linked to or listed on this website.<br>
					   
						  <x>Packages</x><br>
					  Argentina.travel may occasionally display joint packages offered by various third parties, but all packages displayed have been organized by the third parties stated therein and are not the responsibility of Argentina.travel nor the ATB.
					 ATB will not be held responsible for the policies, terms and conditions, cancellation policies or other policies, warranties or guarantees of these third party.
					 By continuing to use Argentina.travel you agree not to:<br>
				i)        disrupt or interfere with the website or servers or other software, hardware or equipment connected to or via the website;
				ii)       reproduce any content from Argentina.travel without prior written consent parties.<br>
				
							<x>Viruses</x><br>
					ATB accepts no responsibility or liability for any damages to, or viruses that may infect, your computer equipment or other property in connection with your access to or use of this website or your downloading of any data, text, images, files or other materials from the website.

			1.International Victoria<br>

			2.Inside Argentina Banner<br>

			3.Tourism-label<br>

			 4.Argentina-this-week-icon<br><br><br>
			 
			 It is your responsibility to verify any information contained within linked websites. Information contained in links may be changed or updated at any time without prior notice. Linked websites may have their own terms and conditions and we strongly recommend that you locate and review them regularly. Third party links that may be contained within the Argentina.travel do not necessarily constitute sponsorship, endorsement or approval of these websites or working practices.<br>
			 Website ContentATB attempts to keep the content of Argentina.travel up to date at all times but cannot guarantee its accuracy and completeness and will not be held responsible for any inaccuracies should they occur.
           Links, Downloads, Plug-ins, Features and Advertisements.Argentina travel may provide links from its website to other third party websites for your convenience. Such websites are independent from Argentina.travel and ATB does not necessarily endorse, control or make any representations, warranties or conditions concerning their content or links.
 			    
			</p>
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
						<a href="TermsConditions.php">Terms & Conditions</a><a> | </a>						
						<a href="Feedback.php">Feedback</a><a> | </a>
						<a href="Faq.php">FAQ</a><a> | </a>					
						<a href="Links.php">Useful Links</a><a> | </a>
						<a href="Site.php">Site Map</a>
					</div>
					<p>© 2016 Argentina Tourism Board. All rights reserved. | Developed by Webtek Students.</p>				
				</div>
			</div>
		</center>			
	</body>
</html>