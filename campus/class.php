<html>
<title>Classroom</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.btn {
  width: 100%;
  padding: 20px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 25px;
  line-height: 20px;
  text-decoration: none; 
}

.btn:hover {
  opacity: 1;
}

.up {
  background-color: #3B5998;
  color: white;
}
.del {
  background-color: #b30000;
  color: white;
}

/* Two-column layout */
.col {
  float: left;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

</style>
</head>
<body>
<?php include("studenthome.php"); ?>
<div class="main">
<h4><i>Classroom</i></h4>
<hr><hr>

      

<?php
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
$sql = "SELECT * FROM `syllabus` WHERE `course`= \"$Course\"";
$res = mysqli_query($conn, $sql);
while ($r = mysqli_fetch_assoc($res))
{ 
?>
	<div class="col">
	<a href="<?php echo $r['loc']; ?>" target="_blank" class="up btn">
	View Syllabus
        </a>
	 </div>
<?php
}
$conn->close();
}
?> 

             


    <div class="col">
    <a href="notes.php" class="up btn">
          View Materials/Notes
         </a>
    </div>
<div class="col">
    <a href="assign.php" class="up btn">
          View Assignments
         </a>
    </div>
    

    <div class="col">
    <a href="stuattendence.php" class="up btn">
          View Attendence
         </a>
    </div>
    </div>



</div>
</body>
</html>
