<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Memberlist form</title>

<style type="text/css">
<!--
.style1 {color: #7c0000}
.style2 {
	color: #990000;
	font-weight: bold;
}
.style8 {
	color: #6633CC;
	font-weight: bold;
}
.head1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 24px;
	color: #FF0000;
	text-align: center;
	font-weight: bold;
}
.style11 {color: #0000FF}
-->
</style>
<?php
include "IndexPages.php";
?>
</head>
<body bgcolor="#fff2e5" alink="#0000FF" vlink="#0000FF">
<a href="Member.php">BACK</a>
<?php
 
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

   
 mysql_select_db("library",$con);

$rs=mysql_query("select * from members",$con) or die(mysql_error());

echo "<h1 class=head1 > Member List </h1>";
if(mysql_num_rows($rs)<1)
{
	echo "<br><br><h1 class=head1 > You have not given any quiz</h1>";
	exit;
}
echo "<table border=1 align=center><tr class=style2><td width=100>Member ID <td> Member Name <td> Member Type <td> Address <td> Contact No";
while($row=mysql_fetch_row($rs))
{
echo "<tr class=style8><td>$row[0] <td align=center> $row[1] <td align=center> $row[2] <td align=center> $row[3] <td align=center> $row[4]";
}
echo "</table>";
?>

</body>
</html> 		  



