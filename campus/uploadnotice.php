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
$topic = $_POST["topic"];
 $targetfolder = "uploads/notices/";
 $file = $_FILES['file']['name'];
$new_file_name = strtolower($file);

 
 $final_file=str_replace(' ','-',$new_file_name);


 $targetfolder = $targetfolder . basename($final_file ) ;

 $file_type=$_FILES['file']['type'];

 
 
if ($file_type=="application/pdf") 
	{

 if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

 {
$sql="INSERT INTO notices(topic,file,type, loc) VALUES('$topic','$final_file', '$file_type','$targetfolder')";
  mysqli_query($conn,$sql);
?><script> alert("Sucessfully Uploaded!");</script>

<?php
include("info.php"); 
 }

 else {

 ?><script> alert("There is a problem in uploading the file. Try again!");</script>
<?php
include("notice.php"); 
 }

}

else {

 ?><script> alert("Only Pdf files are allowed!!");</script>
<?php
include("notice.php"); 
}
}
?>