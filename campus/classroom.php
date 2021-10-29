<html>
<title>Classroom</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.btn {
  width: 100%;
  padding: 20px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 25px;
  line-height: 20px;
  text-decoration: none; 
}

.btn:hover {
  opacity: 1;
}

.up {
  background-color: #3B5998;
  color: white;
}
.del {
  background-color: #b30000;
  color: white;
}

/* Two-column layout */
.col {
  float: left;
  width: 50%;
  margin: auto;
  padding: 0 50px;
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
<h4><i>Course</i></h4>
<hr><hr>

      <div class="col">
        <a href="facshowsyllabus.php" class="up btn">
          View Syllabus
         </a>
              </div>

      
  <div class="row">
    <div class="col">
    <a href="uploadnotes.php" class="up btn">
          Upload Materials/Notes
         </a>
    </div>
    </div>

<div class="row">
    <div class="col">
    <a href="viewnotes.php" class="up btn">
          View Materials/Notes
         </a>
    </div>
    
    <div class="col">
    <a href="delnotes.php" class="up btn">
          Delete Materials/Notes
         </a>
    </div>
    </div>

<h4><i>Assignments</i></h4>
<hr><hr>
      <div class="col">
        <a href="uploadassignment.php" class="del btn">
          Upload Assignments
         </a>
              </div>

      
  <div class="row">
    <div class="col">
    <a href="viewassignment.php" class="del btn">
          View Assignments
         </a>
    </div>
    </div>
</div>
</body>
</html>
