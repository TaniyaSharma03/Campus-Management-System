<html>
<head>
<title>Examination Form</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], input[type=date] ,input[type=email], input[type=tel],  input[type=file], select{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
#c{
 padding: 12px;
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
  float: right
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
<?php include("adminhome.php"); ?>

<div class="main">
<div class="content">
<h1><i><b><center> Examination Form</center></b></i></h1>

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
			$name = $row['name'];
			$course = $row['Course'];
			$batch = $row['batch'];
			$dob = $row['dob'];
			$email = $row['email'];
			$ph = $row['ph'];
			
	}			
	?>

	<form method="post" action="#.php">
<div class="row">
<div class="col-25">
 		<label for="Student Enrollment No.">Enrollment No.</label>
</div>
<div class="col-75">
     <input class= "not-allowed" type="text"  name="enroll" value="<?php echo $enroll; ?>" readonly/>
</div>
</div>

<div class="row">
<div class="col-25">
 		<label for="Name of Student">Name</label>
 </div>
<div class="col-75">
     <input class= "not-allowed" type="text"  name="name" value="<?php echo $name; ?>" readonly />
</div>
</div>

<div class="row">
<div class="col-25">        
<label >Course</label>
</div>
<div class="col-75">
		<select name="Course" required>        
		<option selected><?php echo $course; ?>
		</select>
</div>
</div>

<div class="row">
<div class="col-25"> 
		<label >Batch</label>
</div>
<div class="col-75">
     	<select name="Batch" required>
        
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
  		<label>Phone No.</label>
</div>
<div class="col-75">
		<input  class= "not-allowed"  type="tel"  name="ph" value="<?php echo $ph; ?>" readonly maxlength="10"/>
</div>
</div>




<div class="row">
<div class="col-25">                  
  <label><b>Paper Theory Paper Name & codes:</b></label>		
</div>
<div class="col-75">
		
</div>
</div>

 <div class="row">
<div class="col-25">                  
  <label>Paper 1:</label>		
</div>
<div class="col-75">
	<input    type="text"  name="p1" required />
</div>
</div>
 <div class="row">
<div class="col-25">                  
  <label>Paper 2:</label>		
</div>
<div class="col-75">
	<input    type="text"  name="p2" required />
</div>
</div>

 <div class="row">
<div class="col-25">                  
  <label>Paper 3:</label>		
</div>
<div class="col-75">
	<input type="text"  name="p3" required />
</div>
</div>
 <div class="row">
<div class="col-25">                  
  <label>Paper 4:</label>		
</div>
<div class="col-75">
	<input    type="text"  name="p4" required />
</div>
</div>
 <div class="row">
<div class="col-25">                  
  <label>Paper 5:</label>		
</div>
<div class="col-75">
	<input    type="text"  name="p5" />
</div>
</div>

<div class="row">
<div class="col-25">                  
  <label><b>Practical Name & codes:</b></label>		
</div>
<div class="col-75">
		
</div>
</div>

 <div class="row">
<div class="col-25">                  
  <label>Practical 1:</label>		
</div>
<div class="col-75">
	<input    type="text"  name="prac1" required/>
</div>
</div>

<div class="row">
<div class="col-25">                  
  <label>Practical 2:</label>		
</div>
<div class="col-75">
	<input    type="text"  name="prac2" />
</div>
</div>
<div class="row">
<div class="col-25">                  
  <label>Practical 3:</label>		
</div>
<div class="col-75">
	<input    type="text"  name="prac3" />
</div>
</div>

<div class="row">
<div class="col-25">                  
  <label><b>Reappear Theory Paper Name & codes:</b></label>		
</div>
<div class="col-75">
		
</div>
</div>

 <div class="row">
<div class="col-25">                  
  <label>Paper 1:</label>		
</div>
<div class="col-75">
	<input    type="text"  name="r1" />
</div>
</div>
 <div class="row">
<div class="col-25">                  
  <label>Paper 2:</label>		
</div>
<div class="col-75">
	<input    type="text"  name="r2" />
</div>
</div>

 <div class="row">
<div class="col-25">                  
  <label>Paper 3:</label>		
</div>
<div class="col-75">
	<input    type="text"  name="r3" />
</div>
</div>

<div class="row">
<div class="col-25">                  
  <label><b>Upload Photograph</b></label>		
</div>
<div class="col-75">
		<input type="file" name="photo" required />
  
</div>
</div>

<div class="row">
<div class="col-25">                  
  <label><b>Upload Signature</b></label>		
</div>
<div class="col-75">
		<input type="file" name="signature"  required />
  
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

