<html>
<head>
<title>My Profile</title>
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
float: right
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
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
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
<?php include("studenthome.php"); ?>

<div class="main">
<div class="content">
<h1><i><b><center> My Profile</center></b></i></h1>

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
		
		 
		$uname = $_SESSION['ID'];
    			
		 
		$r = "SELECT * FROM `student` WHERE `name`= \"$uname\"";
		$result = mysqli_query($conn, $r);
		while($row = mysqli_fetch_assoc($result))
			{
			$enroll = $row['enroll'];
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

	<form method="post" action="stuprofiledb.php">
<div class="row">
<div class="col-25">
 		<label for="Enrollment No.">Enrollment No.</label>
</div>
<div class="col-75">
     <input class= "not-allowed" type="text"  name="enroll" value="<?php echo $enroll; ?>" readonly/>
</div>
</div>

<div class="row">
<div class="col-25">
 		<label for="Name">Name</label>
 </div>
<div class="col-75">
     <input class= "not-allowed" type="text"  name="name" value="<?php echo $name; ?>" readonly />
</div>
</div>

<div class="row">
<div class="col-25">
      <label for="Father's Name">Father's Name</label>
</div>
<div class="col-75">
     <input class= "not-allowed" type="text"  name="father" value="<?php echo $fname; ?>" readonly />
</div>
</div>

<div class="row">
<div class="col-25">
      <label for="Mother's Name">Mother's Name</label>
</div>
<div class="col-75">
     <input class= "not-allowed" type="text"  name="mother" value="<?php echo $mname; ?> " readonly />
</div>
</div>

<div class="row">
<div class="col-25">
  		<label >Gender</label>
</div>
<div class="col-75">
      	<select  name="gender">
       	<option value="F">Female</option>
        <option value="M">Male</option>
         <option selected><?php echo $gender; ?></select>
</div>
</div>

<div class="row">
<div class="col-25">        
<label >Course</label>
</div>
<div class="col-75">
		<select name="Course" required>
        <option value="BCA">Bachelor of Computer Applications</option>
		<option value="B.Voc">Bachelor of Vocational Education</option>
		<option value="ITESM ">Information Technology Enables Services and Management</option>
		<option value="Pharmacy">Bachelor of Pharmacy</option>
		<option value="MLT">Medical Lab technology</option>
		<option selected><?php echo $course; ?>
		</select>
</div>
</div>

<div class="row">
<div class="col-25"> 
		<label >Batch</label>
</div>
<div class="col-75">
     	<select name="batch" required>
        <option value="2017-20">2017-20</option>
		<option value="2018-21">2018-21</option>
		<option value="2019-22">2019-22</option>
		<option selected><?php echo $batch; ?>
		</select> 
</div>
</div>

<div class="row">
<div class="col-25"> 	
		<label for="dob">Date of Birth</label>
</div>
<div class="col-75">
    <input  class= "not-allowed" type="date"  name="dob" value = "<?php echo $dob; ?>" readonly />
</div>
</div>

<div class="row">
<div class="col-25"> 
		 <label>Email ID</label>
</div>
<div class="col-75">
    <input  class= "not-allowed" type="email"  name="email" value="<?php echo $email; ?>" readonly />
</div>
</div>

<div class="row">
<div class="col-25">                  
  		<label>Phone No.</label>
</div>
<div  class="col-75">
		<input type="tel"  name="ph" value="<?php echo $ph; ?>" maxlength="10"/>
</div>
</div>

<div class="row">
<div class="col-25"> 
     <label >Address</label>
</div>
<div class="col-75">  
      <input type="text" name="Address" value="<?php echo $add; ?>" style="height:100px">
</div>
</div>


    <div class="row">

  <input type="submit" value="Save">
    </div>
  </form>

    	
</div>
<?php	 
}
?></div></div>
</body>
</html>

