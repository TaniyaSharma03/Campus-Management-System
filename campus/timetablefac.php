<html>
<head>
<title>Time Table</title>
<style>
* {
  box-sizing: border-box;
}

 select {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: verftical;
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
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
 border: 2px solid black;
  border-radius: 2px;
  background-color: #f2f2f2;
  padding: 20px;
}

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


</style>
</head>



<body>
<?php include("adminhome.php"); ?>
<div class="main">

<h1 style="color:#1B2631"><center><b>Faculty Time Table</b></center></h1>
<div class="container">


  <form method="post" action="timetablefaculty.php">
   <div class="row">
    <div class="col-25">
     <label >Faculty</label>
               

    </div>
    <div class="col-75">
<select  name="faculty"> 
           
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
$sql = "SELECT * FROM `faculty`";
$res = mysqli_query($conn, $sql);
while ($r = mysqli_fetch_assoc($res))
{ 
echo "<option value=".$r["name"].">".$r["name"]."</option>";
}
$conn->close();
}
?>         
    <option selected>Select... </select> 

</div>
  </div>
<br>  
<div class="row">
  <br>
    <input type="submit" name="save" value="Search">
  </div>
  </form>
</div>
</div>
</body>
</html>
