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
$id= $_POST["id"];
$name = $_POST["name"];
$Gender = $_POST["gender"];
$qual = $_POST["qual"];
$Post = $_POST["Post"];
$DOB = $_POST["dob"];
$email = $_POST["email"];
$phone = $_POST["ph"];
$add = $_POST["Address"];


$sql = "INSERT INTO faculty(id, name, gender, qual, Post, dob, email, ph, Address)
VALUES ('$id','$name','$Gender','$qual','$Post', '$DOB ', '$email','$phone' ,'$add' )";

if ($conn->query($sql))
{  ?><script> alert("Sucessfully registered!");</script>
<?php
	 include("faculty.php"); 
}
else
{
	echo "Error ";
}
$conn->close();


 } 
?> 

</body>
</html>

