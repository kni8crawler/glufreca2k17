<!doctype html>
<html>
  <head>
    <!-- Material Design Lite -->
    <script defer src="js/material.min.js"></script>
	<meta charset="utf-8">
	<meta name="author" content="Karthik GN">
	<meta name="keywords" content="GLUE,Glue,glue,Glufreca2017,Glufreca-2017,glufreca-2017,glufreca2017,karthik natesh, Karthik Natesh, neleh.in, glue.neleh.in,glue.neleh.in/glufreca2k17">

	<title>Glufreca2k17</title>
	<link rel="icon" href="register/logo2.png"  type="image/png"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <!-- Material Design icon font -->
    <link rel="stylesheet" href="css/material.min.css">
    <link ref="stylesheet" href="css/material.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">   
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="css/custom.css">	

    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>


    <script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link ref="stylesheet" href="css/custom.css">
	<script type="text/javascript" src="js/clock.js"></script>
	<style>
		#h1 { color:white;}
		#h2 { color:#37e047; }
		#h1:hover { background-color: white; border-radius:15px; color:#37e047;}
		#h2:hover { background-color:#37e047; border-radius:15px; color: white;}
		hr.style14 { 
		  border: 0; 
		  height: 1px; 
		  margin-top:-15px;
		  background-image: -webkit-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
		  background-image: -moz-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
		  background-image: -ms-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
		  background-image: -o-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0); 
		}
		{
    width: 130px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}
	{
    width: 100%;
}
	</style>

<link href="owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="owl-carousel/owl.transitions.css" rel="stylesheet">

    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
  </head>
  <body>
    <!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header"   style="overflow:hidden;">
  <header class="mdl-layout__header mdl-shadow--8dp" style="background-color:#37e047;" >
	<div class="mdl-layout__header-row">
		<div class="container">
		<div class="row "> 
		<div class="col-xs-2 col-xl-2 mdl-layout--small-screen-only col-xs-pull-3">
            <button id="demo_menu-lower-left" class="mdl-button mdl-js-button mdl-button--icon" data-upgraded=",MaterialButton">
               <i class="material-icons">more_vert</i>
            </button>
            <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect" for="demo_menu-lower-left">
               <li class="mdl-menu__item"><a href="index.html" style="text-decoration:none; color:#37e047;">Home</a></li>
               <li class="mdl-menu__item"><a href="register/reg_form.html" style="text-decoration:none; color:#37e047;">Register</a></li>
		<li class="mdl-menu__item"><a data-toggle="collapse" data-target="#glufreca2k16" href="#" style="text-decoration:none; color:#37e047;">Glufreca-2k16</a></li>
            </ul>
		</div>        
		 <div class="col-xs-10 col-xs-pull-2 mdl-layout--small-screen-only " style="margin-top:5px;">
     		<span class="mdl-layout-title"  style=" font-family: 'Orbitron',sans-serif; font-weight: bold; font-size: 20px; ">Administration Team</span>
		</div>        
		 <div class="col-xs-10 mdl-layout--large-screen-only " style="margin-top:10px;">
     		<span class="mdl-layout-title"  style=" font-family: 'Orbitron',sans-serif; font-weight: bold; font-size: 40px; text-align:center;  ">Administration Team</span>
		</div>
		<div class="pull-right mdl-layout--large-screen-only " style=" font-family: 'Orbitron',sans-serif; font-weight: bold; font-size: 30px;font-color:white;">
		<a href="register/reg_form.html" class="mdl-tabs__tab mdl-js-ripple-effect" style="text-decoration:none;color:white; font-size:15px;" data-toggle="tooltip" title="Register"><i class="material-icons"  id="h1"style="font-size:35px; margin-top:10px;">power_settings_new</i></a>
		<a href="index.html" class="mdl-tabs__tab mdl-js-ripple-effect" style="text-decoration:none;color:white; font-size:15px;" data-toggle="tooltip" title="Home"><i class="material-icons"  id="h1"style="font-size:35px; margin-top:10px;">home</i></a>		
		</div>	
		</div>
		</div>
	</div>
  </header>
  <main class="mdl-layout__content">
<br><br>
  	<?php
   $dbhost = "localhost:3306";
   $dbuser = "ni8crawler";
   $dbpass = "glufreca2k17";
   $db="glufreca2k17";	  
 $conn =new mysqli($dbhost, $dbuser, $dbpass, $db);
$name=array();
$email=array();
$aoi=array();
$hobbies=array();
$path=array();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//mysqli_autocommit($conn,FALSE);
   $sql = "SELECT *  FROM details ORDER BY name ASC";
   if ($result=mysqli_query($conn,$sql))
		{
  // Fetch one and one row
$i=0;
  while ($row=mysqli_fetch_row($result))
    {
	$name[$i]=$row[0];
	$role[$i]=$row[1];
	$path[$i]=$row[2];
	$i=$i+1;    
    }
  // Free result set
  mysqli_free_result($result);
}
   	
//mysqli_commit($conn);
 $conn->close();
?>
<div class="container mdl-layout--large-screen-only">
<div class="row ">
<?php 
$x=$i-1;
$cnt=1;
while($x!=-1) {   if($cnt%4!==0) { ?>		
<div class="col-xs-4	">
<div><img src="<?php echo $path[$x]; ?>" class="img-responsive img-rounded" id="i2" data-toggle="popover"  html="true" title ="<h4 style='text-align:center; font-weight:bold;color:#37e047;'><?php echo $name[$x]; ?></h4>" data-trigger="hover" data-content="<h4 style='text-align:center; font-weight:bold;color:#37e047; '><?php echo $role[$x]; ?></h4>"></img></div>
</div>
<?php  $x--; } else  { echo "</div><br/><br/>";  echo "<hr class='style14'>";echo "<div class='row '>"; } $cnt++;}?>
</div>
<br/><br/>
<hr class="style14">
</div>
<div class="container mdl-layout--small-screen-only">
<div class="row ">
<?php 
$x=$i-1;
$cnt=1;
while($x!=-1) {   if($cnt%3!==0) { ?>		
<div class="col-xs-6	">
<div><img src="<?php echo $path[$x]; ?>" class="img-responsive img-rounded" id="i2" data-toggle="popover"  title ="<?php echo $name[$x]; ?>" data-trigger="hover" data-content="<?php echo $role[$x]; ?>" data-placement="bottom"></img></div>
</div>
<?php  $x--; } else  { echo "</div><br/><br/>";  echo "<hr class='style14'>";echo "<div class='row '>"; } $cnt++;}?>
</div>
<br/><br/>
<hr class="style14">
</div>
</main>
</div>
<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover({

        html: true
    });   
});
</script>
    
</body>
</html>
