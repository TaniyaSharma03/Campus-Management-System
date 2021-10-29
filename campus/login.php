<html>
<head>
<title>IITD Login </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
body {font-family: Arial, Helvetica, sans-serif;
	font-size: 20px }

.bg-img {
  background-image: url("img/clg.jpg");

  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}



.column {
  float: left;
  width: 50%;
  padding: 15px;
}


.row:after {
  content: "";
  display: table;
  clear: both;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #3385ff;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}


.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
   width: 40%;
color: white;
background: rgba(0, 0, 0, 0.8);
  }

a:visited {
  color: #0000ff;
  background-color: transparent;
  text-decoration: none;
}
</style>
</head>
<body>
<?php (include"header.php"); ?>
<div class="bg-img">
<br>
<center><i>

<h4><b><a href="admin.php">Click here for admin login</a> </b></i></center></h4>

<div class="row">
  <div class="column" align = "right">
    <form action= "stulogin.php" method="post">
    <div class="container" >
   <h3><center>Student Login!!</center></h3>
  <div class="imgcontainer">
    <img src="img/avtar.jpg" alt="Avatar" class="avatar">
  </div>
    <label for="uname"><b><center>E-mail Id</center></b></label>
    <input type="text" placeholder="Enter e-mail id" name="email" required>

    <label for="psw"><b><center>Password</center></b></label>
    <input type="password" placeholder="Enter Password" name="enroll" required>

    <button type="submit">Login</button>
      </div>
 </form>
  </div>
  
  <div class="column">
    <form action= "faclogin.php" method="post">
   <div class="container" > 
   <h3><center>Faculty Login!!</center></h3>
  <div class="imgcontainer">
    <img src="img/avtar.jpg" alt="Avatar" class="avatar">
  </div>
    <label for="uname"><b><center>E-mail Id</center></b></label>
    <input type="text" placeholder="Enter E-mail Id" name="email" required>

    <label for="psw"><b><center>Password</center></b></label>
    <input type="password" placeholder="Enter Password" name="id" required>

    <button type="submit">Login</button>
      </div>
 </form>

  </div>
<center><i><h4>If you don't have Username or Password!! Contact <a href="mailto:staniyasharma99@gmail.com?subject=Request to access IITD zone">Administrator<a></h4></i></center>
  </div>
</div>
</body>
</html>
