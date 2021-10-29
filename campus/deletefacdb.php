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
$id = (isset($_GET['id']) ? $_GET['id'] : '');	 
$sql = "DELETE FROM `faculty` WHERE `id`= \"$id\"";
if(mysqli_query($conn, $sql)) 
{
?><script> alert("Sucessfully Deleted!");</script>
<?php
}
else
{
?><script> alert("Error!");</script>
<?php
}include("manage.php");


$conn->close();


 } 
?> 