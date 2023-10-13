<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>registration form</title>
<script language="JavaScript">
function RePasswordValidataion(sPassword,sRePassword)
{
	if(sPassword.toString()!=sRePassword.toString())
	{
		alert("Re-Type Password Has to be same as the Password");
		return false;
	}
	else{return true;}
}
</script>
<style type="text/css">
<!--
.style1 {color:#FF3300
		font-size:16;
		font-weight:bold;
		 }
.style13 {
	color: #CC6600;
	font-weight: bold;
}
-->
</style>
<?php
include "Index.php";
?>
</head>
<body bgcolor="#66ffff" alink="#0000FF" vlink="#0000FF">
<p align="center">&nbsp;</p>
<TR></tr>
<div align="center" class="style1"><font color="#CCFF00" size="+2" style="font-weight:bold">Administrator Detail</font></div>
<br />
<form action="Administratordetailinsert.php" method="post" name="userinfo"><TR></tr>
  

<table  align="center" width="380" border="3" cellspacing="1" cellpadding="1" bordercolor="#0000CC" bgcolor="#66ffff">
<tr>
	<td><span class="style13">Enter user name:</span> </td>
    <td width="232"><input type="text" name="user_name"/></td>
  </tr>
  <tr>
    <td><span class="style13">Enter password:</span></td>
    <td><input type="password" name="pwd" maxlength="8" /></td>
  </tr>
  <tr>
    <td><span class="style13">Confirm password:</span></td>
    <td><input type="password" name="password" maxlength="10" onchange="return RePasswordValidataion(document.userinfo.pwd.value,document.userinfo.password.value)"/></td>
  </tr>
  
</table><br />
	<div align="center"><input class="button" type="submit" value="Submit" name="ok" align="right" />
	<input name="reset" type="reset" value="Cancel"/>
</div>
</form>
</body>
</html> 		  



