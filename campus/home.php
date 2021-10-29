<html>
<head>
<title>Home</title>
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
  flex: 40%;
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
</style>
</head>
<body>
<?php include("header.php"); 
include("navbar.php");?>
<br>
<br>
<br> 
<div class="row">
  <div class="side">
  <h1 style="color:white"><center><b>Admissions</b></center></h1><br>
  <h3 style="color:white"><br>
For admission purposes contact:
<br><hr><br>
Integrated Institute of technology, 
<br>Dwarka Sec-9 ,New Delhi-110077,
  <br>Near  Dwarka Court.
  <br>Near Dwarka sec-10 Metro station.
<br>Tel: 011-25080585 ,<br>Fax: 011-25080585
<hr></h3>
  </div>
  <div class="main">
   <img src="img/clg.jpg" style = "width: 100%;"> 
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
