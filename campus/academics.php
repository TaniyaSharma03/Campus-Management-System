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
  width: 300px;
  padding: 25px;
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

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

</style>
</head>
<body>
<?php include("facultyhome.php"); ?>
<div class="main">
<table>
<tr>
<th><h1><i>Attendence</i></h1></th>
<th><h1><i>Marks</i></h1></th>
</tr>
<tr>
  <td>
    <a href="submitattendence.php" class="up btn">
          Upload Attendence
         </a></td>

         <td>
       <a href="submitmarks.php" class="del btn">
          Upload Marks
         </a>
     </td></tr>
 
    <tr>
  <td>
    <a href="showattendence.php" class="up btn">
          View Attendence
         </a></td>
         <td>
      
 <a href="showmarks.php" class="del btn">
         View Marks
         </a>
     </td></tr>
 
 
   
</table>
<h4><i>Examination</i></h4>
<hr>

      
  
    <a href="facdatesheet.php" class="up btn">
          View Datesheet
         </a>
</div>
</body>
</html>
