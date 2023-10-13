<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Consumer form</title>

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

     $book_id = " ";
     $book_name  = " ";
     $author = " ";
     $publisher= " ";
     $ISBNno= " ";
     $price= " ";
	 



 mysql_select_db("library",$con);

    $update = 0;

if(isset($_POST['submit_form']))
  {
    
    
	 $book_id = $_POST ["book_id"]; 
     $book_name  =$_POST ["book_name"];
     $author =$_POST ["author"];
     $publisher=$_POST ["publisher"];
	 $ISBNno= $_POST ["ISBNno"];
	 $price= $_POST ["price"];
	 
  
    mysql_select_db("library",$con);
    
        $query = mysql_query("INSERT INTO books(book_id, book_name, author, publisher, ISBNno, price )
                          VALUES( '$book_id', ' $book_name', '$author', '$publisher','$ISBNno',' $price')");

        if($query)
        {
           echo "<script>alert('   Book Information Stored.......')</script>"; 
       
          print mysql_error(); 
        }
       else
       {  
           $query = mysql_query("UPDATE consumer SET book_id = '".$book_id."', book_name = '".$book_name."', author = '".$author."', publisher='".$publisher."', ISBNno='".$ISBNno."', price='".$price."' where book_id = '".$book_id."'");
           
           echo "<script>alert('   Record Updated........')</script>";
 
           print mysql_error(); 

      }  
         
         
    }


if(isset($_POST['edit_record']))
  {
    
    $book_id = $_POST ["book_id"];
    $update = 1;


    mysql_select_db("library",$con);

    
 
    $result = mysql_query("SELECT * FROM books WHERE book_id = '".$book_id."'") or die(mysql_error());
    $row = mysql_fetch_array($result);
    if($row > 0)
    {

     $book_id = $row ["book_id"]; 
     $book_name  =$row ["book_name"];
     $author =$row ["author"];
     $publisher=$row ["publisher"];
	 $ISBNno= $row ["ISBNno"];
	 $price= $row ["price"];

    }

    else
    {

       echo "<script>alert('Record Not Found.......')</script>";
       
              
       print mysql_error(); 
      
    }
    
   
  }




 if(isset($_POST['delete_record']))
  {
    
    $book_id = $_POST ["book_id"];

    $row=0;
    mysql_select_db("library",$con);
    $query1= mysql_query("SELECT * FROM books WHERE book_id = '".$book_id."'");
    $row = mysql_fetch_array($query1);
    if ($row > 0)
    {
       $query = mysql_query("DELETE FROM books WHERE book_id = '".$book_id."'");
       echo "<script>alert('Record Deleted.......')</script>";  
    }
    else
    {
       echo "<script>alert('Record Not Found.......')</script>";       
    }
    
    $book_id= ' ';

  }



 if(isset($_POST['reset']))
  {
     $book_id = " ";
     $book_name  = " ";
     $author = " ";
     $publisher= " ";
	 $ISBNno= " ";
	 $price= " ";
	 



   }

 ?>



<TR></tr>
<div align="center" class="style1"><strong>Book Entry</strong></div><br /><br />
<div align="center" class="style1"><strong>Enter Book Details</strong></div><br /><br />
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="addbook"><TR></tr>
  

<table  align="center" width="600" height="250" border="3" cellspacing="1" cellpadding="1" bordercolor="#0000CC" bgcolor="#fff2e5">
<tr>
	<td width="250"><strong>Book ID:</strong> </td>
    <td width="250"><input type="text" name="book_id" /></td>
  </tr>
  <tr>
    <td><strong>Book Name :</strong></td>
    <td><input type="text" name="book_name" size=50  /></td>
  </tr>
  <tr>
    <td><strong>Author :</strong></td>
    <td><input type="text" name="author" size="50" /></td>
  </tr>
  <tr>
    <td><strong>Publisher:</strong></td>
    <td><input type="text" name="publisher" size=30  /></td>
  </tr>
  <tr>
    <td><strong>ISBN No:</strong></td>
    <td><input type="text" name="ISBNno" size=30  /></td>
  </tr>
  <tr>
    <td><strong>Price :</strong></td>
    <td><input type="text" name="price" size=30  /></td>
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
    <form action="BookList.php" method="post">
	     <input type="Submit" name = "list" value = "      List      " />
	</form>
</div>	 
</body>
</html> 		  



