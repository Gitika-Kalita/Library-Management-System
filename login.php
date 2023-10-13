<html>
<head>
<?php
    include "IndexPages.php";
	?>
<script language="javascript" type="text/javascript">
function fun_val()
	{
		var l=document.loginsell.user_name.value;
		if(l=="")
		{
			alert("Please Enter User name");
			document.loginsell.user_name.focus;
			return false;
		}
		
		var p=document.loginsell.password.value;
		if(p=="")
		{
			alert("Please Enter Password");
			document.loginsell.password.focus;
			return false;
		}
	}
</script>

</head>

<body bgcolor="lightpink" alink="#0000FF" vlink="#0000FF">


<p align="center"><TR></tr>
<form name="loginform" action="Administratorloginsession.php" method="post"><TR></tr>
  <table width="600" height="250" align="center" cellpadding="1"cellspacing="1" border="3"  bordercolor="#FF0066" bgcolor="#fff2e5">
    <tr bgcolor="lightpink"> 
      <td height="41" colspan="3" align="center"><h2><font color="#FF0000"><em><font face="Georgia, Times New Roman, Times, serif">Administrator Login </font></em></font></h2></td>
    </tr>
    <tr> 
      <td width="170" height="40"  align="center" bgcolor="grey"><h3><font color="#7c0000"><em><font face="Georgia, Times New Roman, Times, serif">User Name</font></em></font></h3></td>
      <td width="213" bgcolor="lightpink"><font color="#7c0000">
         <input type="text" name="user_name" style="background" />
      </font></td>
    </tr>
    <tr> 
      <td height="38" align="center" bgcolor="grey"><h3><font color="#7c0000"><em><font face="Georgia, Times New Roman, Times, serif">password</font></em></font></h3></td>
      <td bgcolor="lightpink"><font color="#7c0000">
        <input type="password" name="password" maxlength="10">
      </font></td>
    </tr>
    <tr bgcolor="#003366"> 
      <td height="40" colspan="3" align="center"><font color="#7c0000">
      <input type="submit"  value="Submit" name="ok" onClick="return fun_val();"/>      </td>
    </tr>
  </table>

</form>




 <?php
 
					// if($_POST['flag']==1)
					//{
					?>
  <script language="JavaScript">
					//		alert("Please Do Login Properly");
						</script>
     <?
					//}
?>
</body>
</html>