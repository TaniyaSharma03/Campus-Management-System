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
include("adminhome.php"); ?>

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
$course = $_POST["Course"];
$batch = $_POST["batch"];
$sql = "SELECT * FROM `student` WHERE `student`.`enroll` NOT IN (SELECT `fees`.`enroll` FROM `fees`) AND `Course`= \"$course\" AND `batch`= \"$batch\"";
$res = mysqli_query($conn, $sql);

echo "<h4><center>List of Fee Pending Students</center></h4>";
echo "<table><tr><th> ENROLLMENT NUMBER</th><th> NAME</th><th>COURSE</th><th>BATCH</th></tr>";
while ($r = mysqli_fetch_assoc($res))
{ 
echo "<td>" .$r["enroll"]. "</td>";
echo "<td>" .$r["name"]. "</td>";
echo "<td>" .$r["Course"]."</td> ";
echo "<td>" .$r["batch"]."</td> </tr>";

}
echo "</table>";

$conn->close();
}
?> 
</div>
</body>
</html>









