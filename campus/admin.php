<html>
<title>Admin Login</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}
.con {
  max-width: 900px;
  margin: auto 480px;;

  padding: 100px;
}


.bg-img {
  background-image: url("img/clg.jpg");

  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
 color: white;
 text-align: center;
  max-width: 400px;
  padding: 50px 20px;
  background: rgba(0, 0, 0, 0.8);
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>

<?php (include"header.php"); ?>
<div class="bg-img">
<div class="con">
  <form method="post" action="admindb.php" class="container">
    <h1><big>Admin Login</big></h1>
<br>
    <label ><b>Username</b></label>
    <input type="text" placeholder="Enter username" name="uname" required>

    <label ><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>

    <button type="submit" class="btn">Login</button>
  </form>
</div>


</body>
</html>

