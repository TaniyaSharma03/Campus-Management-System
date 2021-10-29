
<html>
<head>
<title>Record</title>
<style>


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


</style>
</head>
<body>
<?php include("adminhome.php"); ?>

<div class="main">
<table>
<tr>
<th><h1><i>Student Records</i></h1></th>
<th><h1><i>Faculty Records</i></h1></th>
</tr>

<tr>
    <td>  
        <a href="Liststu.php" class="up btn">
          Complete Record
         </a></td>
         <td>
              <a href="listfal.php" class="del btn">
          Complete Record
         </a></td>
         </tr>
         <tr>
         <td>
<a href="searchstu.php" class="up btn">
          Browse by Course & Batch
         </a></td>
      <td>
    <a href="searchfac.php" class="del btn">
          Browse by Post
         </a>
    </td>
    </tr>
</table>  
</div>
</body>
</html>