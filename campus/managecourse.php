    
<html>
<head>
<title>Course Structure</title>
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
<h1><i><b><center>Add Course Structure</center></b></i></h1>

<div class="container">
  <form method="post" action="addcourse.php">
<div class="row">
<div class="col-25"> 
 <label >Course</label>
</div>
<div class="col-75">     	
<select name="course" required>
        <option value="BCA">Bachelor of Computer Applications</option>
	<option value="B.Voc">Bachelor of Vocational Education</option>
	<option value="ITESM ">Information Technology Enables Services and Management</option>
	<option value="Pharmacy">Bachelor of Pharmacy</option>
	<option value="MLT">Medical Lab technology</option>
	<option selected>Select..
	</select>
</div>
</div>


<div class="row">
<div class="col-25">     
 <label >Semester</label>
</div>
<div class="col-75">
     	<select name="sem" required>
        <option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
        <option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option selected>Select..
	</select>
</div>
</div>		
<div class="row">
<div class="col-25">                  
  <label>Number of Paper</label>		
</div>
<div class="col-75">
	<input    type="text"  name="num" required />
</div>
</div>
   
    <input type="submit" value="Submit">
    
  </form>
</div>
</div>
</div>
</body>
</html>


