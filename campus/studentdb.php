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
$enroll= $_POST["enroll"];
$name = $_POST["name"];
$father = $_POST["father"];
$mother = $_POST["mother"];
$Gender = $_POST["gender"];
$course = $_POST["Course"];
$batch = $_POST["batch"];
$DOB = $_POST["dob"];
$email = $_POST["email"];
$phone = $_POST["ph"];
$add = $_POST["Address"];


$sql = "INSERT INTO student(enroll, name, father, mother, gender, Course, batch, dob, email, ph, Address)
VALUES ('$enroll','$name','$father','$mother','$Gender','$course', '$batch','$DOB ', '$email','$phone ' ,'$add' )";

if ($conn->query($sql))
{  ?><script> alert("Sucessfully registered!");</script>
<?php
	 include("student.php");
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

