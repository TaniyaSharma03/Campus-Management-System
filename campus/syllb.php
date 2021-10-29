<html>
<body>
<title>Syllabus</title>
<head>

<style>

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(odd) {
  background-color: #f2f2f2;
}
</style>
</head>



<?php
include("studenthome.php"); ?>

<div class="main">
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
$uname = $_SESSION['ID'];
    			
		 
		$r = "SELECT * FROM `student` WHERE `name`= \"$uname\"";
		$result = mysqli_query($conn, $r);
		while($row = mysqli_fetch_assoc($result))
			{
			$Course = $row['Course'];
			}			
	
$sql = "SELECT * FROM `syllabus`WHERE `course`= \"$Course\"";
$res = mysqli_query($conn, $sql);

echo "<h4><center>View Syllabus</center></h4>";
echo "<table><tr><th> COURSE</th><th> VIEW </th></tr>";
while ($r = mysqli_fetch_assoc($res))
{ 
echo "<td>" .$r["course"]." ";
?>
<td><a href="<?php echo $r['loc']; ?>" target="_blank">View</a></td></tr>
<?php
}
echo "</table>";
$conn->close();
}
?> 
</div>
</body>
</html>