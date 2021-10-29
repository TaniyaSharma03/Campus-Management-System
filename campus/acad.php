<html>
<title>Academics</title>
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
  padding: 15px;
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
<?php include("adminhome.php"); ?>
<div class="main">
<h4><i>Manage Courses</i></h4>
<hr><hr>

      <div class="col">
        <a href="managecourse.php" class="up btn">
          Add Course Structure
         </a>
              </div>
<div class="col">
        <a href="uploadsyllabus.php" class="up btn">
          Add Syllabus
         </a>
              </div>

 <div class="row">
    <div class="col">
    <a href="delsyll.php" class="up btn">
          Delete Syllabus
         </a>
    </div>
  
    <div class="col">
    <a href="showsyllabus.php" class="up btn">
          View Syllabus
         </a>
    </div>
    </div>
<h4><i>Time Table</i></h4>   <hr><hr>   

      <div class="col">
        <a href="timetable.php" class="up btn">
          Add Time-table
         </a>
              </div>

   <div class="col">     

        <a href="timetablestu.php" class="up btn">
         View Time-table Course Wise
         </a>
              </div>


    <div class="col">
    <a href="timetablefac.php" class="up btn">
          View Time-table Faculty Wise
         </a>
    
    </div>


</div>
</body>
</html>
