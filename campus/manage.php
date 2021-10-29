<html>
<title>Manage Account</title>
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
<h4><i>Update Records</i></h4>
<hr><hr>

      <div class="col">
        <a href="updatestu.php" class="up btn">
          Student Record
         </a>
              </div>

      
  <div class="row">
    <div class="col">
    <a href="updatefac.php" class="up btn">
          Faculty Record
         </a>
    </div>
    </div>

<h4><i>Delete Records</i></h4>
<hr><hr>
      <div class="col">
        <a href="deletestu.php" class="del btn">
          Student Record
         </a>
              </div>

      
  <div class="row">
    <div class="col">
    <a href="deletefac.php" class="del btn">
          Faculty Record
         </a>
    </div>
    </div>
</div>
</body>
</html>
