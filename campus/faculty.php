    
<html>
<head>
<title>	Faculty Registration</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
</style>


</head>
<body>
<?php include("adminhome.php"); ?>

<div class="main">
<div class="content">
<h1><i><b><center> Faculty Registration Form</center></b></i></h1>

<div class="container">
  <form method="post" action="facultydb.php">
 <label >Teacher ID</label>
     <input type="text"  name="id" required placeholder="Enter Teacher ID " >
 
 <label >Name of Teacher</label>
     <input type="text"  name="name" required placeholder="Enter Teacher name " >
     
  <label >Gender</label>
      <select  name="gender">
        <option value="Female">Female</option>
        <option value="Male">Male</option>
         <option selected>Select </select>
         
         <label >Highest Qualification</label>
     <input type="text"  name="qual" required placeholder="Enter your Highest Qualification " >
     
         
<label >Post</label>
     	<select name="Post" required>
        <option value="HOD">Head of Department</option>
	<option value="Professor">Professor</option>
	<option value="Associate_Professor ">Associate Professor</option>
	<option value="Assistant_Professor">Assistant Professor</option>
	<option value="Guest">Guest Lecturer</option>
	<option selected>Select..
	</select>
	<label for="dob">Date of Birth</label>
    <input type="date"  name="dob" required >
    
 <label>Email ID</label>
    <input type="email"  name="email" placeholder="Enter your email id.."  required >
                 
  <label>Phone No.</label>
    <input type="tel"  name="ph"  placeholder="Enter your phone no..." required maxlength="10">
     <label >Address</label>
   
      <input type="text" name="Address" placeholder="Enter your address.." style="height:100px">
      
    <input type="submit" value="Register">
    
  </form>
</div>
</div>
</div>
</body>
</html>


