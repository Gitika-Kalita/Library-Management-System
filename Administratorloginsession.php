<?php
	session_start();
	
	$l=mysql_connect("localhost","root","");
	mysql_select_db('library');
	
	$user_name=$_POST['user_name'];
	$password=$_POST['password'];
    
	$res=mysql_query("select * from administrator_login where  `user_name`='".$user_name."' and  `password`='".$password."'",$l);
	
	if(mysql_num_rows($res)>0)
	{
	   	$_SESSION['user_name']=$user_name;
		header("location:HomePage.php");
		exit();		 
	}
	else
	{
	      header("location:login.php");
		  exit();
	}
	
?>