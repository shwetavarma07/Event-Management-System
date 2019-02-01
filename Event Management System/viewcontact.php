<?php
$link = mysql_connect("localhost", "root", "");
mysql_select_db("srcreations");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysql_error());
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> View ContactUs Details </title>
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
<p>Click  <a href="admin.html"><u> here </u></a> to go back to Homepage.</p>

    <h1 class="w3-jumbo"><b>Event </b></h1>
    <h1 class="w3-xxxlarge w3-text-red"><b>Contact Details!</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
<form method="POST" action="viewcontact.php">  </form> 
<!-- End page content -->
</div>

<center>
<table border="1">
<tr>
	<th>Id</th>
	<th>Name</th>
	<th>Email</th>
<th>Message</th>	

<?php
  $select=mysql_query("SELECT * FROM contact order by id ");

  while($userrow=mysql_fetch_array($select))
  {
  $id=$userrow['id'];
  $name=$userrow['name'];
  $email=$userrow['email'];
 $message=$userrow['message'];
?>

  <tr>
  <td><?php echo $id; ?></td>
  <td><?php echo $name; ?></td>
  <td><?php echo $email; ?></td>
<td><?php echo $message; ?></td>

</tr>

<?php 
} 
mysql_close($link);
?>
</table>
</center>
</body>
</html>
