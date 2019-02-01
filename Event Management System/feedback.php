<?php 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'srcreations');
 define('DB_USER','root');
 define('DB_PASSWORD','');
 $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
 $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
 function fb()
 { 
$name = $_POST['name'];
 $feedback = $_POST['feedback']; 
 $query = "INSERT INTO feedback (name,feedback) VALUES ('$name','$feedback')";
 $data = mysql_query ($query)or die(mysql_error());
 if($data)
 { 
echo "hello";
 }
 }
 
 if(isset($_POST['submit'])) 
{
 fb(); 
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title> Feedback </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}

a:link {
    color: blue;
    background-color: transparent;
    text-decoration: none;
}
a:visited {
    color: red;
    background-color: transparent;
    text-decoration: none;
}
a:hover {
    color: pink;
    background-color: transparent;
    text-decoration: underline;
}
a:active {
    color: yellow;
    background-color: transparent;
    text-decoration: underline;
}

</style>

</head>
<body>
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h1 class="w3-padding-64"><b>SR<br>CREATIONS</b></h1>
  </div>
  
</nav>
<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">
  

  <!-- Header -->

  <div class="w3-container" style="margin-top:80px" id="showcase">
<p>Click  <a href="sr2.html"><u> here </u></a> to go back to Homepage.</p>

    <h1 class="w3-jumbo"><b>Event </b></h1>
    <h1 class="w3-xxxlarge w3-text-red"><b>Feedback!</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
<form method="POST" action="feedback.php">
     <p> <font color="INDIANRED"> Thanks, for your precious feedback! :) </p> </form>
 <!-- End page content -->
</div>

</body>
</html>