<html>
<head>
<title>User Registration</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body {
  font-family: Arial, Helvetica, sans-serif; 
}

* {
  box-sizing: border-box;
}

/* style the container */
.container {

  position: relative;
  border-radius: 5px;
  background-color: white;
  padding: 20px 0 30px 0;
   text-align:center;
  
} 

/* style inputs and link buttons */


.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
   display: inline-block;
  font-size: 25px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
}
.btn:hover {
  opacity: 1;
}


/* Two-column layout */
.col {
  float:left;
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

/* vertical line */
.vl {
  position: absolute;
  left: 50%;
  transform: translate(-50%);
  border: 2px solid #07023C;
  height: 320px;
}

/* text inside the vertical line */
.vl-innertext {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  background-color: white;
  border: 2px solid #07023C;
  border-radius: 50%;
  padding: 10px 10px;
}
#bt {
  
  background-color:#07023C ; 
  border: none;
  border-radius: 4px;
  
}
#bt:hover {
  background-color:#4E45BD ;
}
#em{color:#07023C ;}

</style>
</head>

<body>
<?php (include"adminhome.php"); ?>

<div class="main">

<div class="container">
    <div class="row">
           <div class="vl">
        <span class="vl-innertext">or</span>
      </div>

      <div class="col">
      
         <a href="student.php" style="color:white" class="btn">
      <h2 style="color:#07023C ">Student Registration</h2>
        <i id="em"class="fa fa-graduation-cap" style="font-size:198px"></i>
       <br><div id="bt"> Click Here</a></div>
       
      </div>

      <div class="col">
	<a href="faculty.php" style="color:white" class="btn">    
	<h2 style="color:#07023C ">Faculty Registration</h2>     
	<i id="em" class="fa fa-briefcase" style="font-size:198px"></i>
	<br><div id="bt">Click Here</a></div>

        </div>
      
    </div>
  </form>
</div>

</div>
  
</body>
</html>
