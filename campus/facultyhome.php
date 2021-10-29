<html>
<head>
<title>Faculty Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
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
<?php include("facheader.php"); ?>
<div class="sidenav">

<div class="imgcontainer">
  <img src="img/z.png" alt="Avatar" class="avatar">
  </div>
 <a href="facmain.php" id='h'><b>IITD Zone</b></a>
<hr><hr>
<?php
session_start();
if( isset( $_SESSION['ID']))
{
echo "<h1 id = 'h'> Welcome ".$_SESSION['ID']."</h1>";
}
?><hr><hr>
 <a href="facprofile.php">My profile</a>
 <a href="factime.php">Time Table</a>
 <a href="classroom.php">Classroom</a>
    <a href="academics.php">Academics</a> 
 <a href="facnotice.php">Notices</a> 
   <a href="logout.php">Logout</a>
</div>
<div class="main">
 
</div>
 
</body>
</html> 
