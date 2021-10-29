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

		$enroll = (isset($_GET['enroll']) ? $_GET['enroll'] : '');
    			
		 
		$sql = "DELETE FROM `student` WHERE `enroll`= \"$enroll\"";
if(mysqli_query($conn, $sql)) 
{
?><script> alert("Sucessfully Deleted!");</script>
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