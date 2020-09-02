<html>
	<head>
		<title>Virtual</title>
		<link href="../css/style.css" type="text/css" rel="stylesheet">
		<link href="../css/menu.css" type="text/css" rel="stylesheet">	
		<style>
		#content-virtual
		{
			height:  576px;
			width:    600px;
			//background-color: yellow ;	
			float:left;
		}
		.inst{
			text-align:left;
			font-size:22px;
			margin: 10px;
			//margin-top:50px;
			margin-left: 300px;
			font-family: myFirstFont;
		}
		.inst-head{
			text-align:center;
			font-size:30px;
			font-family: myFirstFont;
			//margin-left: 200px;
			color:dimgray;
			//margin-top:100px;
		}
		</style>
		<script type="text/Javascript">
		function validation()
		{
			var RE_CONTACTNO= /^\d{10,13}$/;
			var v1=document.getElementById("Phnm").value;
			if(v1=="")
			{
				alert("Please enter a phone no.");
				return false;
			}
			if(!RE_CONTACTNO.test(v1))
				{
					alert("Please enter a valid mobile no.");
					return(false);
				}
		}
		</script>
		
		
	</head>
	<body>
	<?php
		session_start();
		$username = "nitin.poddar24@gmail.com";
		$hash = "2d1e4adb26aa997e1694401082141c5069cfccf6";

		$url = $_GET['url'];
		//echo $url;
		// Config variables. Consult http://api.textlocal.in/docs for more info.
		if(isset($_POST['submit'] )== true){	
			// Retrieve the URL variables (using PHP).
					
			$num= $_POST['PhnNumbr'];
			//echo $num;
			// Authorisation details.
			$test = "0";
			// Data for text message. This is the text message data.
			$sender = "Virtual Turismo"; // This is who the message appears to be from.
			$numbers = $num; // A single number or a comma-seperated list of numbers
			$message = "Here is the link of the video to view in VR :-%0a ".$url."%0aEnjoy the Live Experience!! :)"."%0aRegards,"."%0aVirtual Turismo Team.";
			//echo $message;
			// 612 chars or less		
			$message = urlencode($message);
			$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
			$ch = curl_init('http://api.textlocal.in/send/?');
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$result = curl_exec($ch);
			// This is the result from the API
			echo $result;
			curl_close($ch);
			$data = json_decode($result ,true);
			//echo $data;
			
		}
	//header('location:Explore/Virtual.php');
	
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
				
				<div id="contents">
					<div id="content-heading"><b><u>Receive&nbsp A&nbsp Video&nbsp Link</u></b></div>
						<form method="post"   name="virtual"  onSubmit="return validation()">
							<table>
								<tr>								
									<td><input type="number" style="padding:10; margin-top: 20" name="PhnNumbr" id="Phnm" placeholder="Enter your Phone Number"></td>
								
									<td><input type="submit" name="submit" class="btn"  style=" width:100; margin-top: 20"  value="Send"></td>
								</tr>									
							</table>	
						</form>
						<p class = "inst">
							<font color="dimgray" size="4.5" style="margin-left:60">
								<?php 
								if(isset($_POST['submit'] )== true){
									if($data['status'] == "success"){ 
										echo "Your message has been sent.";
									}
									else{
										echo "Your message could not be sent. Please try again.";
									}
								}
								?>
							</font>
						</p> 
						<p class = "inst-head" style="margin-top:60">INSTRUCTIONS:-</p>
						<p class = "inst">1.&nbsp&nbsp Enter your number along with the country code. You will receive an url link of the video.<br><br>
						2.&nbsp&nbsp Open the url you received in your text message. The video will open in youtube.<br><br>
						3.&nbsp&nbsp View the video in cardboard view. Enjoy the live experience in VR.</p>
						<p class = "inst-head">HURRAY!!</p>
						<p class = "inst" style="margin-top:50"><font color="dimgray" size="4"><u>Recommended:</u>&nbsp&nbsp 1. Please play the videos in high resolution for better experience.<br>
						    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp2. A phone supported with gyroscope is highly recommended.<br>
						    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp3. A phone with a strong internet connectivity is recommended.</font></p>              
						
						
						
				</div>
				<div id="footer">
					<div id="footer1">
						<a href="../Home.php">Home</a><a> | </a>
						<a href="../PlanYourTrip/Hotel.php">Plan Your Trip</a><a> | </a>
						<a href="Attractions.php">Explore</a><a> | </a>
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