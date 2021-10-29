<html>
<title>Faculty Records</title>
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
$sql = "SELECT * FROM `faculty`";
$res = mysqli_query($conn, $sql);
echo "<h1><center>Delete Faculty Record</center></h1>";
echo "<table><tr><th> ID</th><th> NAME</th><th>DELETE</th></tr>";
while ($r = mysqli_fetch_assoc($res))
{ 
echo "<tr><td>" .$r["id"]. "</td>";
echo "<td>" .$r["name"]. "</td>";
?>
<td><a href="deletefacdb.php?id=<?php echo $r['id']; ?>">Delete</a></td></tr>
<?php
}
echo "</table>";
}
?> 
</div>
</body>
</html>