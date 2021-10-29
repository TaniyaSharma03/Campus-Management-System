<!DOCTYPE html>
<html>
<head><title>
Fee Structure</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

.row {  
  display: flex;
  flex-wrap: wrap;
}

.side {
  flex: 30%;
  background-color:#900C3F;
  padding: 20px;
}

.main {   
  flex: 70%;
  background-color: white;
  padding: 20px;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
    }

img.avatar {
  width: 30%;
  border-radius: 20%;
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

tr:nth-child(even) {
  background-color: #f2f2f2;
}
</style>
</head>
<body>
<?php include("header.php"); 
include("navbar.php");?>
<br> 
<div class="row">
  <div class="main">
<h2  style="color:#581845"align ="center">Fee Structure</h2>

<table>
  <tr>
     <th>Course</th>
    <th>Government Fees</th>
    <th>Non-Government Fees</th>
     <th>Total Fees</th>
    
  </tr>
  <tr>
    <td>ITESM</td>
   <td>10000</td>
    <td>800</td>
        <td>10800</td>
  </tr>
  <tr>
    <td>Pharmacy</td>
    <td>12000</td>
    <td>800</td>
    <td>12800</td>
  </tr>
   <tr>
    <td>MLT</td>
    <td>10000</td>
    <td>800</td>
    <td>10800</td>
  </tr></table>
  <h2 style="color:#581845" align ="center">Courses affliated to IP University</h2>
  <table>
   <tr>
    <th>Course</th>
    <th>Government Fees</th>
    <th>Non-Government Fees</th>
    <th>University Fees</th>
    <th>Total Fees</th>
  </tr>
   <tr>
    <td>BCA</td>
    <td>20500</td>
    <td>2500</td>
    <td>12000</td>
    <td>35000</td>
  </tr>
  <tr>
    <td>B.Voc</td>
   <td>20500</td>
    <td>2500</td>
    <td>12000</td>
     <td>35000</td>
  </tr>

</table>
<h4 style="color:#C70039 ">*NOTE :- 
<ul>
<li>Security fees is Rs. 5000, which is refundable by the university.</li>
<li>Hostel fees is Rs. 12000 per year.</li>
</ul>
</h4>
</div>

  <div class="side">

  <h1 style="color:white"><center><b>IITD Zone</b></center></h1><br>
  <div class="imgcontainer">
    <img src="img/z.png"alt="Avatar" class="avatar">
  </div><center><br>
    <a href="login.php" style="color:white"> Click Here To Login To IITD Zone</a> 
<br><br>
<h3 style="color:white"><hr>IITD Zone is an Intranet Zone that provides a virtual tour of Campus
<hr>
</h3>     
</center> </div>  

</div>

</body>
</html>
