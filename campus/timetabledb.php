<html>
<body>
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
$course = $_POST["Course"];
$batch = $_POST["batch"];
$day = $_POST["day"];
$time = $_POST["time"];
$sub = $_POST["subject"];
$fac = $_POST["faculty"];


$sql = "INSERT INTO timetable(Course, batch, day, time, subject, faculty)
VALUES ('$course', '$batch','$day ', '$time','$sub ' ,'$fac' )";

if ($conn->query($sql))
{  ?><script> alert("Sucessfully Added!");</script>
<?php
	 include("timetable.php");
}
else
{
	echo "Error ";
}



 } 
?> 

</body>
</html>

