<?php
	session_start();
	
	$l=mysql_connect("localhost","root","");
	mysql_select_db('library');
	
	$username=$_POST['username'];
	$password=$_POST['password'];
    
	$res=mysql_query("select * from administrator_login where  `username`='".$username."' and  `password`='".$password."'",$l);
	
	if(mysql_num_rows($res)>0)
	{
	   	$_SESSION['username']=$username;
		header("location:HomePage.php");
		exit();		 
	}
	else
	{
	      header("location:login.php");
		  exit();
	}
	
?>