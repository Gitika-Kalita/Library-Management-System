<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>registration form</title>

<style type="text/css">
<!--
.style1 {color: #7c0000}
.style11 {color: #0000FF}
-->
</style>
<?php
include "IndexPages.php";
?>
</head>
<body bgcolor="#fff2e5" alink="#0000FF" vlink="#0000FF">
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
	 $member_id = " ";
     $member_name = " ";
     $member_type  = " ";
     $address= " ";
     $contact_no= " ";
    


 mysql_select_db("library",$con);

    $update = 0;

if(isset($_POST['submit_form']))
  {
    $member_id = $_POST ["member_id"]; 
     $member_name = $_POST ["member_name"]; 
     $member_type =$_POST ["member_type"]; 
     $address= $_POST ["address"]; 
	 $contact_no = $_POST ["contact_no"]; 
     
    
	 
  
    mysql_select_db("library",$con);
    
        $query = mysql_query("INSERT INTO members(member_id,member_name , member_type,address, contact_no)
                          VALUES( '$member_id', '$member_name ', ' $member_type', '$address', '$contact_no')");

        if($query)
        {
           echo "<script>alert('   All The Records Are Successfully Stored.......')</script>"; 
       
          print mysql_error(); 
        }
       else
       {  
           $query = mysql_query("UPDATE members SET member_id = '".$member_id."',member_name = '".$member_name."', member_type = '".$member_type."', address = '".$address."', contact_no='".$contact_no."'");
           
           echo "<script>alert('   Records Are Updated For The Previous User........')</script>";
 
           print mysql_error(); 

      }  
         
         
    }


if(isset($_POST['edit_record']))
  {
    
    $member_id = $_POST ["member_id"];
    $update = 1;


    mysql_select_db("library",$con);

    
 
    $result = mysql_query("SELECT * FROM members WHERE member_id = '".$member_id."'") or die(mysql_error());
    $row = mysql_fetch_array($result);
    if($row > 0)
    {

	 $member_id = $row ["member_id"]; 
     $member_name = $row ["member_name"]; 
     $member_type  = $row ["member_type"]; 
     $address = $row ["address"]; 
	$contact_no = $row ["contact_no"]; 
    
    

    }

    else
    {

       echo "<script>alert('Record Not Found.......')</script>";
       
              
       print mysql_error(); 
      
    }
    
   
  }




 if(isset($_POST['delete_record']))
  {
    
    $member_id= $_POST ["member_id"];

    $row=0;
    mysql_select_db("library",$con);
    $query1= mysql_query("SELECT * FROM members WHERE member_id = '".$member_id."'");
    $row = mysql_fetch_array($query1);
    if ($row > 0)
    {
       echo "<script>alert('Please Enter Member ID.......')</script>"; 
       $query = mysql_query("DELETE FROM members WHERE member_id = '".$member_id."'");
       echo "<script>alert('The Book Informations are Deleted for the Member.......')</script>";  
    }
    else
    {
       echo "<script>alert('Please Enter Member ID.......')</script>";       
    }
    
    $member_id = ' ';

  }



 if(isset($_POST['reset']))
  {
     $member_id = " ";
     $member_name = " ";
     $member_type  = " ";
     $address = " ";
	 $contact_no= " ";
     
	 



   }

 ?>



<TR></tr>
<div align="center" class="style1"><strong>Insert Member Information</strong></div><br /><br />
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="addbook"><TR></tr>
  

<table  align="center" width="550" height="300" border="3" cellspacing="1" cellpadding="1" bordercolor="#0000CC" bgcolor="#fff2e5">
<tr>
	<td width="250"><strong>Member ID:</strong> </td>
    <td width="250"><input type="text" name="member_id" /></td>
  </tr>
<tr>
	<td width="250"><strong>Member Name:</strong> </td>
    <td width="250"><input type="text" name="member_name"size=40 /></td>
  </tr>
  <tr>
    <td><strong>Member Type :</strong></td>
    <td ><input type="text" name="member_type"size=30  /></td>
  </tr>
  <tr>
    <td><strong>Address:</strong></td>
    <td><input type="text" name="address" size="50" /></td>
  </tr>
  <tr>
    <td><strong>Contact No :</strong></td>
    <td><input type="int" name="contact_no" size=10  /></td>
  </tr>
  


  
  
</table><br /><br />
	<div align="center"><input class="button" type="submit" value="Submit" name="submit_form" align="right" />
	&nbsp;&nbsp;<input type = "submit" name = "edit_record" value = "Edit Record"/>&nbsp;&nbsp;
    <input type = "Submit" name = "delete_record" value = "Delete Record"/>&nbsp;&nbsp;
	<input name="reset" type="reset" value="Refresh"/>&nbsp;&nbsp;
</div>
<br />
</form>
<div align="center" class="style1">
    <form action="MemberList.php" method="post">
	     <input type="Submit" name = "list" value = "      List      " />
	</form>
</div>	 
</body>
</html> 		  



