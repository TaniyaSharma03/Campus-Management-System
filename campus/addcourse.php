<html>

<head>
<title>Course Structure</title>
<style>
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
font-size: 20px;
}

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
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
.content {
  max-width: 800px;
  margin: auto;
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

$Course = $_POST["course"];
$sem = $_POST["sem"];
$num = $_POST["num"];
?>
<div class="container">
<form method="post" action="addcoursedb.php">
<div class="content">
<?php
for ($i = 1; $i <= $num; $i++)
{
?>
<input type="hidden"  name="course[<?php echo $i; ?>]" value="<?php echo $Course; ?>" readonly/>
      <input type="hidden"  name="sem[<?php echo $i; ?>]" value="<?php echo $sem; ?>" readonly/>
      
<div class="row">
<div class="col-25">                  
  <label>Paper <?php echo $i; ?></label>		
</div>
<div class="col-75">
	<input    type="text"  name="paper[<?php echo $i; ?>]" required />
</div>
</div>   
<input type="hidden" name="count" value="<?php echo $i; ?>" />
<?php
}
?>
<input type="submit" value="Submit">
<?php
}
?> 
</form>
</div>
</div>
</div>
</body>
</html>









