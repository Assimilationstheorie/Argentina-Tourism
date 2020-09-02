<?php
	// Authorisation details.
	session_start();
	echo $_SESSION["url"];
	$num= $_POST["PhnNumbr"];
	echo $num;
	?>