<?php
 define('DB_HOST', 'localhost'); 
define('DB_NAME', 'SRArchitect'); 
define('DB_USER','root'); 
define('DB_PASSWORD','');
 $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
 $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
 function NewUser() 
{
 $name = $_POST['name']; 
$dob = $_POST['dob'];
$email = $_POST['email']; 
$contactno = $_POST['contactno']; 
$password = $_POST['password'];
 $query = "INSERT INTO customer (name,dob,email,contactno,password) VALUES ('$name','$dob','$email','$contactno','$password')";
 $data = mysql_query ($query)or die(mysql_error());
 if($data) { 
echo " ";
 }
}
 
 if(isset($_POST['book'])) 
{
 NewUser(); 
}
 ?>
<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"  href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button"><b>SR</b> Architects</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="sv2.html" class="w3-bar-item w3-button">Home</a>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="architecture.jpg" alt="Architecture" width="1500">
  <div class="w3-display-left w3-margin-top w3-left">
<h3 style="align:left;"><p style="color:WHITE;">We create world-class </p>
<p style="color:WHITE;">design solutions that </p>
<p style="color:WHITE;">are tailored to the needs </p>
<p style="color:WHITE;">of cities and communities </p>
<p style="color:WHITE;"> around the world. </p> </h3> </div>
 <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>SR</b></span> <b><span class="w3-hide-small w3-text-light-grey">Architect</span></b></h1>
  </div>
<div>

<h1 class="w3-jumbo"><b>Customer </b></h1>
    <h1 class="w3-xxxlarge w3-text-red"><b>Registered!</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
<form method="POST" action="register.php"> 
     <p> <font color="INDIANRED"> Thanks, for Registering! :)
        Have a great day..!!!!   :) </p> </form>
 <!-- End page content -->
</div>


</header>


    </body>
</html>
