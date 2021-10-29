<html>
<title>Notices/Circulars</title>
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
  padding: 30px;
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
      <div class="col">
        <a href="notice.php" class="up btn">
          Upload Notices/Circulars
         </a>
              </div>


<div class="row">
      <div class="col">
        <a href="viewnotice.php" class="up btn">
          View Notices/Circulars
         </a>
              </div>

      
 </div>      
  
<div class="row">
      <div class="col">
        <a href="delnotice.php" class="del btn">
          Delete Notices/Circulars
         </a>
              </div>

      
 </div>

</div>
</body>
</html>
