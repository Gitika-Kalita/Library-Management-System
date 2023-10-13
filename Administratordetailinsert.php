<?php
	$l=mysql_connect("localhost","root","");
	mysql_select_db('library',$l);

    $username=$_POST['username'];
	$password=$_POST['password'];
	
	
	mysql_query ("INSERT INTO administrator_login
	(`username`,`password`)VALUES
	('$username',
	'$password');",$l);
	header("location:login.php?flag=1");
	
?>
