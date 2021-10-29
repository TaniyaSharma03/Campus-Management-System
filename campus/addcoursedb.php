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
$value = "false";
$count = $_POST["count"];
for ($i = 1; $i <= $count; $i++)
{
$course[$i] = $_POST["course"][$i];
$sem[$i] = $_POST["sem"][$i];
$paper[$i] = $_POST["paper"][$i];


$sql = "INSERT INTO course(course, sem, paper)
VALUES ('$course[$i]', '$sem[$i]','$paper[$i] ')";

if(mysqli_query($conn, $sql))
{
$value = "true";
}

}
if( $value = "true") 
{
?><script> alert("Sucessfully uploaded!");</script>
<?php
	 include("acad.php");
}
}
?>