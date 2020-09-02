<html> 
<head> 
<title>Connection</title> 
</head> 
<body> 
<?php 
	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db("argentina tourism",$con);
 ?>
 </body> 
</html>