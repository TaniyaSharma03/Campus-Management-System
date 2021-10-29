<html>
<head>
<title>Datesheet</title>
</head>
<body>
<?php
echo"<br>";
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
$file = (isset($_GET['file']) ? $_GET['file'] : '');
    	
		$sql = "DELETE FROM `notes` WHERE `file`= \"$file\" ";
		if (mysqli_query($conn, $sql)) 
        {

unlink("C:/xampp/htdocs/campus/uploads/notes/".$file);
        ?>
        <script> alert("Sucessfully Deleted!");</script>
        <?php
       include("classroom.php");
		} 
	else 
	{?>
        <script> alert("Error!");</script>
        <?php
		include("delnotes.php");
        }
   
}
?> 
</div>
</body>
</html>