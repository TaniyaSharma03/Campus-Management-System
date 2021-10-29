<html>
<head>
<title>Logout</title>
</head>
<body>
<?php include("adminhome.php"); ?>

<div class="main">

<?php
session_start(); 
if( isset( $_SESSION["ID"]) )
{
session_destroy(); //destroy the session
header("location:/campus/home.php"); 
}
?>
</div>
</body>
</html>