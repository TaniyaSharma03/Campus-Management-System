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
<h1><i><b><center> Faculty Updation Form</center></b></i></h1>

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
		
		 
		$id = (isset($_GET['id']) ? $_GET['id'] : '');
    			
		 
		$r = "SELECT * FROM `faculty` WHERE `id`= \"$id\"";
		$result = mysqli_query($conn, $r);
		while($row = mysqli_fetch_assoc($result))
			{
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

	<form method="post" action="test.php">
	<label >Teacher ID</label>
     	<input  class= "not-allowed" type="text"  name="id" value="<?php echo $id; ?>" readonly/>
 
 	<label >Name of Teacher</label>
     	<input type="text"  name="name" value="<?php echo $name; ?>" required />
     	<label >Gender</label>
      	<select  name="gender">
       	<option value="F">Female</option>
        <option value="M">Male</option>
        <option selected><?php echo $gender; ?> </select>
        	        <label >Highest Qualification</label>
     	<input type="text"  name="qual" value="<?php echo $qual; ?>" required />
     
         
	<label >Post</label>
     	<select name="Post" required>
        <option value="HOD">Head of Department</option>
	<option value="Professor">Professor</option>
	<option value="Associate_Professor ">Associate Professor</option>
	<option value="Assistant_Professor">Assistant Professor</option>
	<option value="Guest">Guest Lecturer</option>
	<option selected ><?php echo $Post; ?>
	</select>

	<label for="dob">Date of Birth</label>
    	<input type="date"  name="dob" value="<?php echo $dob; ?>" required />
    
	 <label>Email ID</label>
    	<input type="email" class= "not-allowed" name="email" value="<?php echo $email; ?>" readonly />
                 
  	<label>Phone No.</label>
    	<input type="tel"  name="ph"  value="<?php echo $ph; ?>" required maxlength="10"/>
     
	<label >Address</label>
   
   	   <input type="text"  name="Address" value="<?php echo $add; ?>" style="height:100px">
  
      
	    <input type="submit" value="Update">
    	

<?php	 
}
?>
</body>
</html>

