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
$email = $_POST["email"];
$pass = $_POST["id"];
$sql = "SELECT `name`,`email`, `id` FROM `faculty` WHERE `email`=\"$email\" AND `id`=\"$pass\"";
$result = mysqli_query($conn, $sql);
$records = mysqli_num_rows($result);
if ($records==0)
{
?>
<script> alert("Wrong E-mail or Password"); </script><?php
(include"login.php");
}
else
{
while ($r = mysqli_fetch_assoc($result))
{
$uname = $r["name"];
}
		(include"facmain.php");

$_SESSION['ID']=$uname;
?><script> alert("You are Logined sucessfully!"); </script><?php

} 

mysqli_close($conn);
}
?>


<body>
</body>
</html>