<html>
<body>
<title>Assignments</title>
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
include("facultyhome.php"); ?>

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
$sql = "SELECT * FROM `facassignments` WHERE `faculty`= \"$uname\"";
$res = mysqli_query($conn, $sql);

echo "<h4><center>View Assignments</center></h4>";
echo "<table><tr><th>COURSE</th><th>BATCH</th><th>SUBJECT</th><th>TITLE</th><th>ASSIGNMENT </th><th>STUDENT WORK</th></tr>";
while ($r = mysqli_fetch_assoc($res))
{ 
echo "<td>" .$r["course"]."</td>";
echo "<td>" .$r["batch"]."</td>";
echo "<td>" .$r["subject"]."</td>";
echo "<td>" .$r["topic"]."</td>";
?>
<td><a href="<?php echo $r['loc']; ?>" target="_blank">View</a></td>
<td><a href="viewwork.php?id=<?php echo $r['id']; ?>">View</a></td></tr>
<?php
}
echo "</table>";
$conn->close();
}
?> 
</div>
</body>
</html>