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
$id = $_POST["email"];
$pass = $_POST["enroll"];
$sql = "SELECT `name`,`email`, `enroll` FROM `student` WHERE `email`=\"$id\" AND `enroll`=\"$pass\"";
$result = mysqli_query($conn, $sql);
$records = mysqli_num_rows($result);
if ($records==0)
{
?>
<script> alert("Wrong E-mail or Password"); </script><?php
(include"login.php");
}
else
while ($r = mysqli_fetch_assoc($result))
{
$uname = $r["name"];
}
{
		(include"studentmain.php");

$_SESSION['ID']=$uname;
?><script> alert("You are Logined sucessfully!"); </script><?php

} 

mysqli_close($conn);
}
?>


<body>
</body>
</html>