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
  padding: 20px 30px;
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
<?php include("facultyhome.php"); ?>

<div class="main">
<div class="content">
<h4><i><b><center> My Profile</center></b></i></h4>

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
    				 
		$r = "SELECT * FROM `faculty` WHERE `name`= \"$uname\"";
		$result = mysqli_query($conn, $r);
		while($row = mysqli_fetch_assoc($result))
			{
			$tid = $row['id'];
			$name = $row['name'];
			$gender = $row['gender'];
			$qual = $row['qual'];
			$Post = $row['Post'];
			$dob = $row['dob'];
			$email = $row['email'];
			$ph = $row['ph'];
			$add = $row['Address'];
	}			
	?>

	<form method="post" action="facprofiledb.php">
<div class="row">
<div class="col-25">
		<label >Teacher ID</label>
</div>
<div class="col-75">
     	<input  class= "not-allowed" type="text"  name="id" value="<?php echo $tid; ?>" readonly/>
</div>
</div>

<div class="row">
<div class="col-25">
 	<label >Name of Teacher</label>
</div>
<div class="col-75">
     	<input class= "not-allowed" type="text"  name="name" value="<?php echo $name; ?>" readonly />
</div>
</div>

<div class="row">
<div class="col-25">
     	<label >Gender</label>
</div>
<div class="col-75">
      	<select class= "not-allowed"  name="gender" >
       	<option value="F">Female</option>
        <option value="M">Male</option>
        <option selected ><?php echo $gender; ?> </select>
</div>
</div>

<div class="row">
<div class="col-25">
       <label >Highest Qualification</label>
</div>
<div class="col-75">
     	<input type="text"  name="qual" value="<?php echo $qual; ?>" required />
</div>
</div>

<div class="row">
<div class="col-25">
     	<label >Post</label>
</div>
<div class="col-75">
     	<select class= "not-allowed" name="Post" required>
        <option value="HOD">Head of Department</option>
  	  	<option value="Professor">Professor</option>
		<option value="Associate_Professor ">Associate Professor</option>
		<option value="Assistant_Professor">Assistant Professor</option>
		<option value="Guest">Guest Lecturer</option>
		<option selected ><?php echo $Post; ?>
		</select>
</div>
</div>

<div class="row">
<div class="col-25">
	<label for="dob">Date of Birth</label>
</div>
<div class="col-75">
    	<input type="date"  name="dob" value="<?php echo $dob; ?>" required />
</div>
</div>

<div class="row">
<div class="col-25">
    	<label>Email ID</label>
</div>
<div class="col-75">
    	<input type="email"  class= "not-allowed" name="email" value="<?php echo $email; ?>" readonly />
</div>
</div>

<div class="row">
<div class="col-25">
		<label>Phone No.</label>
</div>
<div class="col-75">
    	<input type="tel"  name="ph"  value="<?php echo $ph; ?>" required maxlength="10"/>
</div>
</div>

<div class="row">
<div class="col-25">
     <label >Address</label>
</div>
<div class="col-75">
   	   <input type="text"  name="Address" value="<?php echo $add; ?>" style="height:100px">
</div>
</div>

       <div class="row">
  
       <input type="submit" value="Save">
    	</div>
</form>
</div>
<?php	 
}
?>
 </div></div>
</body>
</html>

