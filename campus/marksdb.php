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
for ($i = 0; $i <= $count; $i++)
{
$enroll[$i] = $_POST["enroll"][$i];
$name[$i] = $_POST["name"][$i];
$course[$i] = $_POST["course"][$i];
$batch[$i] = $_POST["batch"][$i];
$subject[$i] = $_POST["subject"][$i];
$exam[$i] = $_POST["exam"][$i];
$total[$i] = $_POST["total"][$i];
$marks[$i] = $_POST["marks"][$i];

$sql = "INSERT INTO marks(enroll, name, course, batch, subject, exam, total, marks)
VALUES ('$enroll[$i]','$name[$i]','$course[$i]', '$batch[$i]','$subject[$i] ', '$exam[$i]','$total[$i] ' ,'$marks[$i]' )";

if(mysqli_query($conn, $sql))
{
$value = "true";
}

}
if( $value = "true") 
{
?><script> alert("Sucessfully uploaded!");</script>
<?php
	 include("academics.php");
}
}
?>