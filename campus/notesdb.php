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
$course = $_POST["course"];
$batch = $_POST["batch"];
$topic = $_POST["topic"];
$subject = $_POST["subject"];
$faculty = $_POST["faculty"];
 $targetfolder = "uploads/notes/";
 $file = $_FILES['file']['name'];
$new_file_name = strtolower($file);

 
 $final_file=str_replace(' ','-',$new_file_name);


 $targetfolder = $targetfolder . basename($final_file ) ;

 $file_type=$_FILES['file']['type'];

 
 
if ($file_type=="application/pdf") 
	{

 if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

 {
$sql="INSERT INTO notes(course,batch,subject,topic,faculty,file,type, loc) VALUES('$course','$batch','$subject','$topic','$faculty','$final_file', '$file_type','$targetfolder')";
  mysqli_query($conn,$sql);
?><script> alert("Sucessfully Uploaded!");</script>

<?php
include("classroom.php"); 
 }

 else {

 ?><script> alert("There is a problem in uploading the file. Try again!");</script>
<?php
include("uploadnotes.php"); 
 }

}

else {

 ?><script> alert("Only Pdf files are allowed!!");</script>
<?php
include("uploadnotes.php"); 
}
}
?>