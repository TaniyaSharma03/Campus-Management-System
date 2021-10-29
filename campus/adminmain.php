<html>
<head>
<title>Admin Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}
.bg-img {
  background-image: url("img/admin.jpg");

  height:500px;
width: 1180px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.sidenav {
  width: 300px;
  height: 100%;
  position: fixed;
  z-index: 1;
  top: 0px;
  left: 10px;
  background-color: #111;
  overflow-x: hidden;
  padding: 8px 0;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
	
  font-size: 30px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 320px; /* Same width as the sidebar + left position in px */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

#h
{ 
 color: #f1f1f1;
  text-align: center;
}


.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
border: 3px solid #900C3F;  
border-radius: 50%;
  
}

</style>
</head>
<body>
<?php include("adminheader.php"); ?>
<div class="sidenav">

	<div class="imgcontainer">
  	<img src="img/z.png" alt="Avatar" class="avatar">
  	</div>
<a href="adminmain.php" id='h'><b>IITD Zone</b></a>
<hr><hr>
<?php
session_start();
if( isset( $_SESSION['ID']))
{
echo "<h1 id = 'h'> Welcome ".$_SESSION['ID']."</h1>";
}
?><hr><hr>

  <a href="register.php">User Registration</a>
  <a href="manage.php">Manage Account</a>
<a href="records.php">View Records</a>
 <a href="acad.php">Academics</a> 
 <a href="showfees.php">Fee Status</a>
<a href="exam.php">Examination</a>
<a href="info.php">Notices/Circulars</a> 
  <a href="logout.php">Logout</a>
</div>
<div class="main">
<div class="bg-img">
 </div>
</body>
</html> 
