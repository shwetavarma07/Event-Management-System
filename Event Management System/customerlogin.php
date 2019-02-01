<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname="srcreations";
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);


 
// Check connection
/*if($link === false){
    die("ERROR: Could not connect. " . mysql_error());
}*/

$username = mysqli_real_escape_string($conn,$_REQUEST['username']);
$password = mysqli_real_escape_string($conn,$_REQUEST['password']);
$sql = "SELECT * FROM customer WHERE username='$username'";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);
      if($resultCheck < 1)
	{
                echo "Login Error";
                exit();
	}
	  else
	    {
		while($row = mysqli_fetch_assoc($result))
		{
			$user_name = $row['Username'];
			$Unique_id = $row['unique_id'];
		}
$cookie_name = 'user';
$cookie_name1 = 'uid';
setcookie($cookie_name,$user_name);
setcookie($cookie_name1,$Unique_id);
echo "Cookie value is:".$_COOKIE['user']."<br>";
echo "Cookie value is:".$_COOKIE['uid'];
	    }
header('Location: sr2.html');




?><!--
<!DOCTYPE html>
<html>
<head>
	<title> View Details </title>
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
    <h1 class="w3-xxxlarge w3-text-red"><b>Customer Details!</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
<form method="POST" action="viewcustomer.php">  </form> 
<!-- End page content -->
</div>

<center>
<table border="1">
<tr>
	<th>Id</th>
	<th>Name</th>
	<th>Email</th>
<th>Contact NO</th>

<th>Username</th>

<!--<th>Date</th>-->
	

<?php
  $select=mysql_query("SELECT * FROM customer where id='$id' ");

  while($userrow=mysql_fetch_array($select))
  {
  $id=$userrow['id'];
  $name=$userrow['name'];
  $email=$userrow['email'];
 $contactno=$userrow['contactno'];
  $username=$userrow['username'];

?>

  <tr>
  <td><?php echo $id; ?></td>
  <td><?php echo $name; ?></td>
  <td><?php echo $email; ?></td>
<td><?php echo $contactno; ?></td>
<td><?php echo $username; ?></td>

</tr>

<?php 
} 
mysql_close($link);
?>
</table>
</center>
</body>
</html>-->