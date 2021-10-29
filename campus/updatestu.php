<html>
<title>Student Records</title>
<body>
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
$sql = "SELECT * FROM `student`";
$res = mysqli_query($conn, $sql);
echo "<h1><center>Update Student Record</center></h1>";
echo "<table><tr><th> ENROLLMENT NUMBER</th><th> NAME</th><th>UPDATE</th></tr>";
while ($r = mysqli_fetch_assoc($res))
{ 
echo "<tr><td>" .$r["enroll"]. "</td>";
echo "<td>" .$r["name"]. "</td>";
?>
<td><a href="updatestudb.php?enroll=<?php echo $r['enroll']; ?>">Update</a></td></tr>
<?php
}
echo "</table>";
}
?> 
</div>
</body>
</html>