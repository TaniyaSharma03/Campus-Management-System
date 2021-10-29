<html>
<head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], input[type=date] ,input[type=email], input[type=tel], select{
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
.not-allowed {cursor: not-allowed;}

</style>
</head>
<body>
<?php include("adminhome.php"); ?>

<div class="main">
<div class="content">
<h1><i><b><center> Student Updation Form</center></b></i></h1>

<div class="container">

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
		
		 
		$enroll = (isset($_GET['enroll']) ? $_GET['enroll'] : '');
    			
		 
		$r = "SELECT * FROM `student` WHERE `enroll`= \"$enroll\"";
		$result = mysqli_query($conn, $r);
		while($row = mysqli_fetch_assoc($result))
			{
			$name = $row['name'];
			$fname = $row['father'];
			$mname = $row['mother'];
			$gender = $row['gender'];
			$course = $row['Course'];
			$batch = $row['batch'];
			$dob = $row['dob'];
			$email = $row['email'];
			$ph = $row['ph'];
			$add = $row['Address'];
	}			
	?>

	<form method="post" action="stutest.php">
 <label for="Student Enrollment No.">Student Enrollment No.</label>
     <input class= "not-allowed" type="text"  name="enroll" value="<?php echo $enroll; ?>" readonly/>
 
 <label for="Name of Student">Name of Student</label>
     <input type="text"  name="name" value="<?php echo $name; ?>" required />
      <label for="Father's Name">Father's Name</label>
     <input type="text"  name="father" value="<?php echo $fname; ?>" required />
      <label for="Mother's Name">Mother's Name</label>
     <input type="text"  name="mother" value="<?php echo $mname; ?> " required />
  
  <label >Gender</label>
      <select  name="gender">
       <option value="F">Female</option>
        <option value="M">Male</option>
         <option selected><?php echo $gender; ?></select>
         
<label >Course</label>
     	<select name="Course" required>
        <option value="BCA">Bachelor of Computer Applications</option>
	<option value="B.Voc">Bachelor of Vocational Education</option>
	<option value="ITESM ">Information Technology Enables Services and Management</option>
	<option value="Pharmacy">Bachelor of Pharmacy</option>
	<option value="MLT">Medical Lab technology</option>
	<option selected><?php echo $course; ?>
	</select>

<label >Batch</label>
     	<select name="batch" required>
        <option value="2017-20">2017-20</option>
	<option value="2018-21">2018-21</option>
	<option value="2019-22">2019-22</option>
	<option selected><?php echo $batch; ?>
	</select> 
	

	<label for="dob">Date of Birth</label>
    <input type="date"  name="dob" value = "<?php echo $dob; ?>" required />
 <label>Email ID</label>
    <input type="email" class= "not-allowed" name="email" value="<?php echo $email; ?>" readonly />
                 
  <label>Phone No.</label>
    <input type="tel"  name="ph" value="<?php echo $ph; ?>" required maxlength="10"/>
     <label >Address</label>
   
      <input type="text" name="Address" value="<?php echo $add; ?>" style="height:100px">
    <input type="submit" value="Update">
    
  </form>
    	

<?php	 
}
?>
</body>
</html>

