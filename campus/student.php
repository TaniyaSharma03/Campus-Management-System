    
<html>
<head>
<title>Student Registration</title>
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
<h1><i><b><center>Student Registration Form</center></b></i></h1>

<div class="container">
  <form method="post" action="studentdb.php">
 <label for="Student Enrollment No.">Student Enrollment No.</label>
     <input type="text"  name="enroll" required placeholder="Enter Student Enrollment No. " >
 
 <label for="Name of Student">Name of Student</label>
     <input type="text"  name="name" required placeholder="Enter student name " >
      <label for="Father's Name">Father's Name</label>
     <input type="text"  name="father" required placeholder="Enter Father's Name " >
      <label for="Mother's Name">Mother's Name</label>
     <input type="text"  name="mother" required placeholder="Enter Mother's Name " >
  
  <label >Gender</label>
      <select  name="gender">
       <option value="Female">Female</option>
        <option value="Male">Male</option>
         <option selected>Select </select>
         
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

	<label for="dob">Date of Birth</label>
    <input type="date"  name="dob" required >
 <label>Email ID</label>
    <input type="email"  name="email" placeholder="Enter your email address.." required >
                 
  <label>Phone No.</label>
    <input type="tel"  name="ph" placeholder="Enter your contact number.." required maxlength="10">
     <label >Address</label>
   
      <input type="text" name="Address" placeholder="Enter your address.." style="height:100px">
    <input type="submit" value="Register">
    
  </form>
</div>
</div>
</div>
</body>
</html>


