<html>

<head>
<title>Student Record</title>
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


<body>
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
			$enroll = $row['enroll'];
			$name = $row['name'];
			$course = $row['Course'];
			$batch = $row['batch'];
			}		

echo "<table><tr><th> SUBJECT</th><th> MONTH </th><th> ATTENDENCE</th></tr>";
$sql = "SELECT * FROM `attendence` WHERE `course`= \"$course\" AND `batch`= \"$batch\" AND `enroll`= \"$enroll\" AND `name`= \"$name\" ";
$res = mysqli_query($conn, $sql);
while ($r = mysqli_fetch_assoc($res))
{ 
echo "<tr><td>" .$r["subject"]. "</td>";
echo "<td>" .$r["month"]. "</td>";
echo "<td>" .$r["attendence"]. "/" .$r["total"]. "</td></tr>";
}
} 
?>
</table>
</div>
</body>
</html>







