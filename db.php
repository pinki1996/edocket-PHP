<?php
 $host='localhost'; 
	$username='root';  
	$password='root'; 
	$db_name='edocket';
	if(!@$connection=mysqli_connect($host, $username, $password,$db_name))
	 die("Cannot connect"); 
?>
