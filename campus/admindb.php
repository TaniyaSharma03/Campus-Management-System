<html>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "campus"; 
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
else
{
$id = $_POST["uname"];
$pass = $_POST["pass"];
$sql = "SELECT `Username`, `Password` FROM `admin` WHERE `Username`=\"$id\" AND `Password`=\"$pass\"";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$records = mysqli_num_rows($result);
if ($records==0)
{
?>
<script> alert("Wrong Username or Password"); </script><?php
(include"admin.php");
}
else
{
		(include"adminmain.php");

$_SESSION['ID']=$id;
?><script> alert("You are Logined sucessfully!"); </script><?php

} 

mysqli_close($conn);
}
?>


<body>
</body>
</html>