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
	
$enroll = $_POST['enroll'];
$name = $_POST['name'];
$father = $_POST['father'];
$mother = $_POST['mother'];
$gender = $_POST['gender'];
$course = $_POST['Course'];
$batch = $_POST['batch'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$ph = $_POST['ph'];
$add = $_POST['Address'];
$sql = "UPDATE `student` SET `name` = '".$name."',`father` = '".$father."',`mother` = '".$mother."',`gender` = '".$gender."',`Course` = '".$course."',`batch` = '".$batch."',`dob` = '".$dob."',`email` = '".$email."',`ph` = '".$ph."',`Address` = '".$add."' WHERE `student`.`enroll` = ".$enroll."";
if(mysqli_query($conn, $sql)) 
{
?><script> alert("Sucessfully Updated!");</script>
<?php
}
else
{
?><script> alert("Error!");</script>
<?php
}

include("manage.php");

$conn->close();


 } 
?> 