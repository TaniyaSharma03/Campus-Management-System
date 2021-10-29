<html>

<head>
<title>Student Record</title>
<style>

input[type=submit]{
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

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
$Course = $_POST["course"];
$batch = $_POST["batch"];
$subject = $_POST["subject"];
$month = $_POST["month"];
$total = $_POST["total"];
$sql = "SELECT * FROM `student` WHERE `Course`= \"$Course\" AND `batch`= \"$batch\"";
$res = mysqli_query($conn, $sql);


$i = 0;
echo "<h4><center>Attendence of ".$Course. " Students, Batch: ".$batch." Month: ".$month."</center></h4>";
echo "<table><tr><th> ENROLLMENT NUMBER</th><th> NAME</th><th>ATTENDENCE</th></tr>";
while ($r = mysqli_fetch_assoc($res))
{ 
?>
<form method="post" action="attendencedb.php">
<td>
      <input type="text"  name="enroll[<?php echo $i; ?>]" value="<?php echo $r["enroll"]; ?>" readonly/>
 </td>
<td>
      <input type="text"  name="name[<?php echo $i; ?>]" value="<?php echo $r["name"]; ?>" readonly />
 </td>
      <input type="hidden"  name="course[<?php echo $i; ?>]" value="<?php echo $Course; ?>" readonly/>
      <input type="hidden"  name="batch[<?php echo $i; ?>]" value="<?php echo $batch; ?>" readonly/>
      <input type="hidden"  name="subject[<?php echo $i; ?>]" value="<?php echo $subject; ?>" readonly/>
      <input type="hidden"  name="month[<?php echo $i; ?>]" value="<?php echo $month; ?>" readonly/>
      <input type="hidden"  name="total[<?php echo $i; ?>]" value="<?php echo $total; ?>" readonly/>
<td>
<input type="text"  name="attendence[<?php echo $i; ?>]" required placeholder="Enter attendence "/>
</td>
<input type="hidden" name="count" value="<?php echo $i; ?>" />
</tr>
<?php
$i++;
}
echo "</table>";
?>
 <input type="submit" value="Submit">
</form>
</table>
<?php
$conn->close();
}
?> 
</div>
</body>
</html>









