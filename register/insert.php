<?php
   $dbhost = "localhost:3306";
   $dbuser = "ni8crawler";
   $dbpass = "glufreca2k17";
   $db="glufreca2k17";	  
 $conn =new mysqli($dbhost, $dbuser, $dbpass, $db);
   $fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$mno=$_POST['mno'];
	$email=$_POST['email'];
	$branch=$_POST['branch'];
	$college=$_POST['college'];
	$year=$_POST['year'];
	$lap=$_POST['lap'];
	$track=$_POST['track'];
	$avl=$_POST['avl'];
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
mysqli_autocommit($conn,FALSE);
   $sql = "INSERT INTO data (fname,lname,mno,email,branch,college,year,lap,track,avl) VALUES ( '$fname','$lname','$mno','$email','$branch','$college','$year','$lap','$track','$avl' )";
  
if(empty($email)) 
{
    echo "Email is mandatory!";
    exit;
}

if(IsInjected($email))
{
    echo "Bad email value!";
    exit;
}
if (mysqli_query($conn,$sql)==true)
  {
$email_from = 'no-reply@neleh.in';//<== update the email address
$email_subject = "Thanks for registering to Glufreca-2k17";
$email_body = "Thanks $fname $lname for registering to Glufreca2k17. You will hear back from us regarding the next process as soon as your registration is confirmed and accepted by Glufreca-2k17 team.\n".
    "Please make sure details entered below are correct:\n Name: $fname $lname\n Mobile Number: $mno\n Email: $email\n Track:$track (FST=Free Software Track, OHT=Open Hardware Track)\n If there are any queries or corrections contact glufreca2k17@neleh.in or Call/Whatsapp to 9538012144.\n \n Keep checking your email, our contact and your confirmation will be done through email.";
    
//$to = "karthik_natesh@live.com";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $email \r\n";
//Send the email!
mail($email,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
$conn->close();
  header('Location: redirect.html');
   }
  else
    if( mysqli_errno($conn)==1062)
      header('Location: reg_form.html');

mysqli_commit($conn);

// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}

?>