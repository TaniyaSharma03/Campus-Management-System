<html>
<head>
<title>About Us</title>
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
</style>
</head>
<body>
<?php include("header.php"); 
include("navbar.php");?>
<br>
<br>
<br> 
<div class="row">
  <div class="main">
  <h3><p>
  Integrated Institute of Technology Delhi is popularly known as IIT Dwarka was established in the year 2008 by the Government of NCT of Delhi. The college is located at sector 9 Dwarka. Right from its time of inception, the college records a phenomenal contribution to the world of Engineering and Technology.
</p><p>
There are various courses available at the Integrated Institute of Technology, Delhi. At present, the Institute offers various courses like diploma engineering in Computer science, Courses on Medical Laboratory Technology and on Pharmacy.
   </p><p>
   The campus is completely self-reliant and built up as per the norms prescribed by All India Council for Technical Education for conducting Diploma programs .
</p>
 </h3>   
<img src="img/clg.jpg">
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
