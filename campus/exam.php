<html>
<title>Examination</title>
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
<?php include("adminhome.php"); ?>
<div class="main">
<h4><i>Datesheet</i></h4>
<hr><hr>

      <div class="col">
        <a href="datesheet.php" class="up btn">
                   Add Datesheet

         </a>
              </div>


<div class="row">
    <div class="col">
    <a href="deldatesheet.php" class="del btn">
          Delete Datesheet

         </a>
    </div>
    </div>

      <div class="row">
    <div class="col">
    <a href="viewdatesheet.php" class="up btn">
          View Datesheet

         </a>
    </div>
    </div>

  
   

</div>
</body>
</html>
