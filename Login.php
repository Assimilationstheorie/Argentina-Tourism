<html>
	<head>
		<title>Login</title>
		<link href="css/style.css" type="text/css" rel="stylesheet">	
		<link href="css/menu.css" type="text/css" rel="stylesheet">
		<style type="text/css">
			td.margin{
				margin-right:100px;
			}
		</style>
		<Script type="text/Javascript">
				function validation()
				{
					var u1=document.getElementById("ud").value;
					if( u1=="" )
					{
						alert(" User ID can not be Blank");
						return false;
					}
					var p1=document.getElementById("pd").value;
					if( p1=="" )
					{
						alert(" Password can not be Blank");
						return false;
					}
					
				}
			</Script>
	</head>
	<body>
	
		<center>
				<div id="top-fixed">
					<div id="nav">
						<ul>
							<li><a href="PlanYourTrip/Hotel.php">PLAN YOUR TRIP</a></li>					
							<li class="dropdown">
								<a href="#" class="dropbtn">EXPLORE</a>						
								<div class="dropdown-content">	
									<a href="Home.php#c2">Virtual Argentina</a>
									<a href="Explore/Attractions.php">Attractions</a>
									<a href="Explore/Beaches.php">Beaches</a>
									<a href="Explore/Hills.php">Hills</a>
									<a href="Explore/shopping.php">Shopping</a>
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
						<a href="Login.php">LOGIN</a><a> | </a>
						<a href="SignUp.php">SIGN UP</a>					
					</div>				
			</div>	
			<div id="wrapper">										
				<div id="header">
					<div id="header-logo"></div>					
					<div id="header-title" align="left">
						<a class="title" href="Home.php"><h1>LA&nbsp ARGENTINE&nbsp TURISMO</h1></a>	
					</div>														
				</div>
				<div id="content-heading"><b><u>Login</u></b></div>
				<div id="contents">
					<form  name="login" action ="CheckUserLogin.php" onSubmit="return validation()" method="post" enctype="multipart/form-data">
					
						<table>
								<tr>									
									<td class="margin"><n>USER ID: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</n><input type="text" name="uid" id="ud">
								</td>
								</tr>
								<tr>									
									<td class="margin"><n>PASSWORD: &nbsp</n><input type="password" name="pwd" id="pd"></td>
								</tr>
								<tr>
									<td><input class="btn" type="submit" value="Login"><input class="btn" type="reset" value="Cancel"></td>
								</tr>
								<tr>
									<td class="link" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNew user?<a href="SignUp.php">Register Yourself!</a></td>
									
								</tr>
								<tr>
									
								</tr>
						</table>
						</form>
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
						<a href="Login.php">Login</a><a> | </a>
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