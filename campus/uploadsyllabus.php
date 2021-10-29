<html>
<head>
<title>Syllabus</title>
<style>
* {
  box-sizing: border-box;
}

 select, input[type=file]  {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
font-size: 15px;

}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
font-size: 18px;
}

input[type=submit]{
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
<h1 style="color:#1B2631"><center><b>Upload Syllabus</b></center></h1>
<div class="container">


  <form method="post" action="upload.php" enctype="multipart/form-data">
   
   
<div class="row">
    <div class="col-25">
     <label for="Course"><b>Course</b></label>

    </div>
    <div class="col-75">
     
     	<select name="Course" required>
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
     <label for="file"><b>Syllabus</b></label>

    </div>
    <div class="col-75">
     
     	<input type="file" name="file" >
</div>
</div>
<br>  
<div class="row">
  <br>
    <input type="submit" name="save" value="Upload">
  </div>
  </form>
</div>
</div>
</body>
</html>
