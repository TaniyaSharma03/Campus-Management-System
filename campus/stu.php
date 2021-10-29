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
$Course = $_POST["Course"];
$batch = $_POST["batch"];

$sql = "SELECT * FROM `student` WHERE `Course`= \"$Course\" AND `batch`= \"$batch\"";
$res = mysqli_query($conn, $sql);

$records = mysqli_num_rows($res);
if ($records==0)
{

?><script> alert("NO SUCH RECORD FOUND!!!!!");</script>
<?php

}




echo "<h1><center>List of ".$Course. " Students, Batch: ".$batch." </center></h1>";
echo "<table><tr><th> ENROLLMENT NUMBER</th><th> NAME</th><th> FATHERS's NAME</th><th>  MOTHERS's NAME</th><th>GENDER</th><th>DATE OF BIRTH</th><th>EMAIL-ID</th><th>CONTACT NO.</th><th>ADDRESS</th></tr>";
while ($r = mysqli_fetch_assoc($res))
{ 
echo "<td>" .$r["enroll"]. "</td>";
echo "<td>" .$r["name"]. "</td>";
echo "<td>" .$r["father"]. "</td>";
echo "<td>" .$r["mother"]. "</td>";
echo "<td>" .$r["gender"]. "</td>";
echo "<td>" .$r["dob"]. "</td>";
echo "<td>" .$r["email"]. "</td>";
echo "<td>" .$r["ph"]. "</td>";
echo "<td>" .$r["Address"]. "</td></tr>";
}
echo "</table>";
$conn->close();
}
?> 
</div>
</body>
</html>









