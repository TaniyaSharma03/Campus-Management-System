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
$course = $_POST["course"];
$batch = $_POST["batch"];
$exam = $_POST["exam"];
$subject = $_POST["subject"];
echo "<h4><center>Attendence of ".$course. " Students, Batch: ".$batch."<br> Exam: ".$exam."  Subject: ".$subject."</center></h4>";
echo "<table><tr><th> ENROLLMENT NUMBER</th><th> NAME</th><th> ATTENDENCE</th></tr>";
$sql = "SELECT * FROM `marks` WHERE `course`= \"$course\" AND `batch`= \"$batch\" AND `exam`= \"$exam\" AND `subject`= \"$subject\" ";
$res = mysqli_query($conn, $sql);
while ($r = mysqli_fetch_assoc($res))
{ 
echo "<tr><td>" .$r["enroll"]. "</td>";
echo "<td>" .$r["name"]. "</td>";
echo "<td>" .$r["marks"]. "/" .$r["total"]. "</td></tr>";
}
} 
?>
</table>
</div>
</body>
</html>







