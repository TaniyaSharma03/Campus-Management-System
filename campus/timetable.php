    
<html>
<head>
<title>Add Time Table</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], input[type=date] , select{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
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
</style>


</head>
<body>
<?php include("adminhome.php"); ?>

<div class="main">
<div class="content">
<h3><i><b><center>Add Time Table</center></b></i></h3>

<div class="container">
  <form method="post" action="timetabledb.php">
 <label >Course</label>
     	<select name="Course" required>
        <option value="BCA">Bachelor of Computer Applications</option>
	<option value="B.Voc">Bachelor of Vocational Education</option>
	<option value="ITESM ">Information Technology Enables Services and Management</option>
	<option value="Pharmacy">Bachelor of Pharmacy</option>
	<option value="MLT">Medical Lab technology</option>
	<option selected>Select..
	</select>
    
 <label >Batch</label>
     	<select name="batch" required>
        <option value="2017-20">2017-20</option>
	<option value="2018-21">2018-21</option>
	<option value="2019-22">2019-22</option>
	<option selected>Select..
	</select>
 
  <label >Day</label>
      <select  name="day">
       <option value="Monday">Monday</option>
        <option value="Tuesday">Tuesday</option>
        <option value="Wednesday">Wednesday</option>
         <option value="Thursday">Thursday</option>
        <option value="Friday">Friday</option>      
         <option selected>Select... </select>
 
 <label >Time</label>
      <select  name="time">
       <option value="8:30-9:30">8:30-9:30</option>
         <option value="9:30-10:30">9:30-10:30</option>
<option value="10:30-11:30">10:30-11:30</option>
          <option value="12:00-1:00">12:00-1:00</option>
           <option value="1:00-2:00">1:00-2:00</option>
            <option value="2:00-3:00">2:00-3:00</option>
             
         <option selected>Select... </select>
 
  <label >Subject</label>
     <select  name="subject">
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
$qry = "SELECT * FROM `course`";
$result = mysqli_query($conn, $qry);
while ($row = mysqli_fetch_assoc($result))
{ 
echo "<option value=".$row["paper"].">".$row["paper"]."</option>";
}
$conn->close();
}
?>         
      
    <option selected>Select... </select> 


 <label >Faculty</label>
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
    <input type="submit" value="Add">
    
  </form>
</div>
</div>
</div>
</body>
</html>


