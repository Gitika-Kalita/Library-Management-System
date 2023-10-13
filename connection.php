<?php

		$server="localhost";
		$unm="root";
		$pwd="";
		$db="library";

		$con=mysql_connect($server,$unm);
		mysql_select_db($db,$con);
$con = mysql_connect('localhost', 'root', '');

  if ($con)
  {
     echo "Connected";
  }
  else
  {
      die('Could not connect'.mysql_error());
      echo "rrrrrrrrrrrrrrrrrrrrrrrrrrrrr"; 

  }
?>