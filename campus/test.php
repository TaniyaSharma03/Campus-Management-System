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
	
$id = $_POST['id'];
$name = $_POST['name'];
$gender = $_POST['gender'];
$qual = $_POST['qual'];
$Post = $_POST['Post'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$ph = $_POST['ph'];
$add = $_POST['Address'];

$sql = "UPDATE `faculty` SET `name` = '".$name."',`gender` = '".$gender."',`qual` = '".$qual."',`Post` = '".$Post."',`dob` = '".$dob."',`email` = '".$email."',`ph` = '".$ph."',`Address` = '".$add."' WHERE `faculty`.`id` = ".$id."";
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