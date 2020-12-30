<?php
   $dbhost = "localhost:3306";
   $dbuser = "ni8crawler";
   $dbpass = "glufreca2k17";
   $db="glufreca2k17";	  
 $conn =new mysqli($dbhost, $dbuser, $dbpass, $db);

if(isset($_POST['user_email']))
{
$emailId=$_POST['user_email'];

 $checkdata=" SELECT email FROM data WHERE email='$emailId' ";

 $query=mysqli_query($conn,$checkdata);

 if(mysqli_num_rows($query)>0)
 {
  echo "Email Already Taken!!!";
 }
 else
 {
  echo "OK";
 }
$conn->close();
 exit();
}
if(isset($_POST['no']))
{
$mno=$_POST['no'];

 $checkdata=" SELECT mno FROM data WHERE email='$mno' ";

 $query=mysqli_query($conn,$checkdata);

 if(mysqli_num_rows($query)>0)
 {
  echo "Mobile Number Already Taken!!!";
 }
 else
 {
  echo "OK";
 }
$conn->close();
 exit();
}
?>
