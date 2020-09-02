<html>
	<head>
		<title>Logout</title>
	</head>
	<body>
		<?php
			session_start();
			session_unset();
			//echo "Logged out!";
			session_destroy();
			if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false)
				header("location:Home.php")	;
			exit();
		?>
	</body>
</html>