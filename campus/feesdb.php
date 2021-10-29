<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "campus"; 
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
else
{

$enroll = $_POST["enroll"];
$name = $_POST["name"];
$course = $_POST['course'];
$batch = $_POST['batch'];
$year = $_POST['year'];

 $targetfolder = "uploads/fees/";
 $file = $_FILES['file']['name'];
$new_file_name = strtolower($file);

 
 $final_file=str_replace(' ','-',$new_file_name);


 $targetfolder = $targetfolder . basename($final_file ) ;

 $file_type=$_FILES['file']['type'];

 
 
if ($file_type=="application/pdf") 
	{

 if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

 {
$sql="INSERT INTO fees (enroll,name,course, batch, year, file,type, loc) VALUES('$enroll','$name','$course','$batch','$year','$final_file', '$file_type','$targetfolder')";
  mysqli_query($conn,$sql);
?><script> alert("Sucessfully Uploaded!");</script>

<?php
include("feestatus.php"); 
 }

 else {

 ?><script> alert("There is a problem in uploading the file. Try again!");</script>
<?php

 }

}

else {

 ?><script> alert("Only Pdf files are allowed!!");</script>
<?php

}
}
?>