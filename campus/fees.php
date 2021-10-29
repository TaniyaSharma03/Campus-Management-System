<html>
<body>
<title>Fees</title>
<head>

<style>

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

select, input[type=text], input[type=file]  {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
font-size: 15px;

}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
font-size: 18px;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.content {
  max-width: 800px;
  margin: auto;
}
.not-allowed {cursor: not-allowed;}


</style>
</head>



<?php
include("studenthome.php"); ?>

<div class="main">
<div class="content">
<div class="container">

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
			$batch = $row['batch'];}			
?>
<div class="row">
<div class="col-25">
 	Enrollment No.
</div>
<div class="col-75">
     <?php echo $enroll; ?> 
</div>
</div>
<div class="row">
<div class="col-25">
 	Name 
 </div>
<div class="col-75">
     <?php echo $name; ?>
</div>
</div>


<form method="post" action="feesdb.php" enctype="multipart/form-data">   	

<input type="hidden"  name="enroll" value="<?php echo $enroll; ?>" /> 
<input type="hidden"  name="name" value="<?php echo $name; ?>" /> 
<input type="hidden"  name="course" value="<?php echo $course; ?>" /> 
<input type="hidden"  name="batch" value="<?php echo $batch; ?>" /> 

<div class="row">
    <div class="col-25">
     <label for="year"><b>Year</b></label>
    </div>
    <div class="col-75">
     	<input type="text" name="year" >
</div>
</div>

<div class="row">
    <div class="col-25">
     <label for="file"><b>Fee Receipt</b></label>
    </div>
    <div class="col-75">
     	<input type="file" name="file" >
</div>
</div>
<br>  
<div class="row">
  <br>
    <input type="submit" name="save" value="Upload">
  </div>
  </form>
<?php
}
?>
</div></div></div>
</body>
</html>