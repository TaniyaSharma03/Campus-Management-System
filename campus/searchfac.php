<html>
<head>
<title>Faculty Record</title>
<style>
* {
  box-sizing: border-box;
}

 select {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: verftical;
font-size: 15px;

}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
font-size: 18px;
}

input[type=submit] {
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

<h1 style="color:#1B2631"><center><b>Faculty Record</b></center></h1>
<div class="container">


  <form method="post" action="fac.php">
   <div class="row">
    <div class="col-25">
     <label for="Post"><b>Post</b></label>

    </div>
    <div class="col-75">
     
     	
     	<select name="Post" required>
        <option value="HOD">Head of Department</option>
	<option value="Professor">Professor</option>
	<option value="Associate_Professor ">Associate Professor</option>
	<option value="Assistant_Professor">Assistant Professor</option>
	<option value="Guest">Guest Lecturer</option>
	<option selected>Select..
	</select>
</div>
  </div>
<br>  
<div class="row">
  <br>
    <input type="submit" name="save" value="Search">
  </div>
  </form>
</div>
</div>
</body>
</html>
