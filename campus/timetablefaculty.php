<html>
<head>
<title>Time Table</title>
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

tr:nth-child(odd) {
  background-color: #f2f2f2;
}
</style>
</head>
<body>
<?php
include("adminhome.php"); ?>

<div class="main">
<?php
echo "<br>";
$serverfaculty = "localhost";
$userfaculty = "root";
$password = "";
$database = "campus"; 
$conn = new mysqli($serverfaculty, $userfaculty, $password, $database);
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
else
{
$faculty = $_POST["faculty"];
echo "<h1><center>Time Table of " .$faculty. "</center></h1>";
echo "<table>
<tr>
<th> </th>
<th> 8:30-9:30</th>
<th> 9:30-10:30</th>
<th> 10:30-11:30</th>
<th> 12:00-1:00</th>
<th> 1:00-2:00</th>
<th> 2:00-3:00</th>
</tr>";



	echo "<tr><th>Monday</th>";
	$sql = "SELECT * FROM `timetable` WHERE `faculty`= \"$faculty\" AND  `day`= \"Monday\" AND `time`= \"8:30-9:30\"";
	$res = mysqli_query($conn, $sql);
	$record = mysqli_num_rows( $res );
	
		if ($record == 0)
			{
            		echo "<td> -- </td>";
                	}
            	else
            		{while ($r = mysqli_fetch_assoc( $res ))
		{
			echo "<td>" .$r["subject"]. "<br>" .$r["Course"]. "<br>" .$r["batch"]. "</td>";
			}
		}

	$sql1 = "SELECT * FROM `timetable` WHERE `faculty`= \"$faculty\" AND `day`= \"Monday\" AND `time`= \"9:30-10:30\"";
	$res1 = mysqli_query($conn, $sql1);
	$record1 = mysqli_num_rows( $res1 );
	if ( $record1 == 0 )
					{
            		echo "<td> -- </td>";
                	}
            	else
            		{while ($r1 = mysqli_fetch_assoc($res1)){
echo "<td>" .$r1["subject"]. "<br>" .$r1["Course"]. "<br>" .$r1["batch"]. "</td>";
}}



$sql2 = "SELECT * FROM `timetable` WHERE `faculty`= \"$faculty\" AND `day`= \"Monday\" AND `time`= \"10:30-11:30\"";
$res2 = mysqli_query($conn, $sql2);
$record2 = mysqli_num_rows($res2);
if ($record2 == 0)
					{
            		echo "<td> -- </td>";
                	}
            	else
            		{while ($r2 = mysqli_fetch_assoc($res2))
{
echo "<td>" .$r2["subject"]. "<br>" .$r2["Course"]. "<br>" .$r2["batch"]. "</td>";
}}

$sql3 = "SELECT * FROM `timetable` WHERE `faculty`= \"$faculty\" AND `day`= \"Monday\" AND `time`= \"12:00-1:00\"";
$res3 = mysqli_query($conn, $sql3);
$record3 = mysqli_num_rows($res3);
if ($record3 == 0)
					{
            		echo "<td> -- </td>";
                	}
            	else
            		{while ($r3 = mysqli_fetch_assoc($res3))
{
echo "<td>" .$r3["subject"]. "<br>" .$r3["Course"]. "<br>" .$r3["batch"]. "</td>";
}}


$sql4 = "SELECT * FROM `timetable` WHERE `faculty`= \"$faculty\" AND `day`= \"Monday\" AND `time`= \"1:00-2:00\"";
$res4 = mysqli_query($conn, $sql4);
$record4 = mysqli_num_rows($res4);
if ($record4 == 0)
					{
            		echo "<td> -- </td>";
                	}
            	else
            		{while ($r4 = mysqli_fetch_assoc($res4))
{
echo "<td>" .$r4["subject"]. "<br>" .$r4["Course"]. "<br>" .$r4["batch"]. "</td>";
}}


$sql5 = "SELECT * FROM `timetable` WHERE `faculty`= \"$faculty\" AND `day`= \"Monday\" AND `time`= \"2:00-3:00\"";
$res5 = mysqli_query($conn, $sql5);
$record5 = mysqli_num_rows($res5);

if ($record5 == 0)
					{
            		echo "<td> -- </td>";
                	}
            	else
            		{while ($r5 = mysqli_fetch_assoc($res5))
{
echo "<td>" .$r5["subject"]. "<br>" .$r5["Course"]. "<br>" .$r5["batch"]. "</td>";
}
}
echo "</tr>";




	echo "<tr><th>Tuesday</th>";
	$sql = "SELECT * FROM `timetable` WHERE `faculty`= \"$faculty\" AND `day`= \"Tuesday\" AND `time`= \"8:30-9:30\"";
	$res = mysqli_query($conn, $sql);
	$record = mysqli_num_rows( $res );
	
		if ($record == 0)
			{
            		echo "<td> -- </td>";
                	}
            	else
            		{while ($r = mysqli_fetch_assoc( $res ))
		{
			echo "<td>" .$r["subject"]. "<br>" .$r["Course"]. "<br>" .$r["batch"]. "</td>";
			}
		}

	$sql1 = "SELECT * FROM `timetable` WHERE `faculty`= \"$faculty\" AND `day`= \"Tuesday\" AND `time`= \"9:30-10:30\"";
	$res1 = mysqli_query($conn, $sql1);
	$record1 = mysqli_num_rows( $res1 );
	if ( $record1 == 0 )
					{
            		echo "<td> -- </td>";
                	}
            	else
            		{while ($r1 = mysqli_fetch_assoc($res1)){
echo "<td>" .$r1["subject"]. "<br>" .$r1["Course"]. "<br>" .$r1["batch"]. "</td>";
}}



$sql2 = "SELECT * FROM `timetable` WHERE `faculty`= \"$faculty\" AND `day`= \"Tuesday\" AND `time`= \"10:30-11:30\"";
$res2 = mysqli_query($conn, $sql2);
$record2 = mysqli_num_rows($res2);
if ($record2 == 0)
					{
            		echo "<td> -- </td>";
                	}
            	else
            		{while ($r2 = mysqli_fetch_assoc($res2))
{
echo "<td>" .$r2["subject"]. "<br>" .$r2["Course"]. "<br>" .$r2["batch"]. "</td>";
}}

$sql3 = "SELECT * FROM `timetable` WHERE `faculty`= \"$faculty\" AND `day`= \"Tuesday\" AND `time`= \"12:00-1:00\"";
$res3 = mysqli_query($conn, $sql3);
$record3 = mysqli_num_rows($res3);
if ($record3 == 0)
					{
            		echo "<td> -- </td>";
                	}
            	else
            		{while ($r3 = mysqli_fetch_assoc($res3))
{
echo "<td>" .$r3["subject"]. "<br>" .$r3["Course"]. "<br>" .$r3["batch"]. "</td>";
}}


$sql4 = "SELECT * FROM `timetable` WHERE `faculty`= \"$faculty\" AND `day`= \"Tuesday\" AND `time`= \"1:00-2:00\"";
$res4 = mysqli_query($conn, $sql4);
$record4 = mysqli_num_rows($res4);
if ($record4 == 0)
					{
            		echo "<td> -- </td>";
                	}
            	else
            		{while ($r4 = mysqli_fetch_assoc($res4))
{
echo "<td>" .$r4["subject"]. "<br>" .$r4["Course"]. "<br>" .$r4["batch"]. "</td>";
}}


$sql5 = "SELECT * FROM `timetable` WHERE `faculty`= \"$faculty\" AND `day`= \"Tuesday\" AND `time`= \"2:00-3:00\"";
$res5 = mysqli_query($conn, $sql5);
$record5 = mysqli_num_rows($res5);

if ($record5 == 0)
					{
            		echo "<td> -- </td>";
                	}
            	else
            		{while ($r5 = mysqli_fetch_assoc($res5))
{
echo "<td>" .$r5["subject"]. "<br>" .$r5["Course"]. "<br>" .$r5["batch"]. "</td>";
}
}
echo "</tr>";



	echo "<tr><th>Wednesday</th>";
	$sql = "SELECT * FROM `timetable` WHERE `faculty`= \"$faculty\" AND `day`= \"Wednesday\" AND `time`= \"8:30-9:30\"";
	$res = mysqli_query($conn, $sql);
	$record = mysqli_num_rows( $res );
	
		if ($record == 0)
			{
            		echo "<td> -- </td>";
                	}
            	else
            		{while ($r = mysqli_fetch_assoc( $res ))
		{
			echo "<td>" .$r["subject"]. "<br>" .$r["Course"]. "<br>" .$r["batch"]. "</td>";
			}
		}

	$sql1 = "SELECT * FROM `timetable` WHERE `faculty`= \"$faculty\" AND `day`= \"Wednesday\" AND `time`= \"9:30-10:30\"";
	$res1 = mysqli_query($conn, $sql1);
	$record1 = mysqli_num_rows( $res1 );
	if ( $record1 == 0 )
					{
            		echo "<td> -- </td>";
                	}
            	else
            		{while ($r1 = mysqli_fetch_assoc($res1)){
echo "<td>" .$r1["subject"]. "<br>" .$r1["Course"]. "<br>" .$r1["batch"]. "</td>";
}}



$sql2 = "SELECT * FROM `timetable` WHERE `faculty`= \"$faculty\" AND `day`= \"Wednesday\" AND `time`= \"10:30-11:30\"";
$res2 = mysqli_query($conn, $sql2);
$record2 = mysqli_num_rows($res2);
if ($record2 == 0)
					{
            		echo "<td> -- </td>";
                	}
            	else
            		{while ($r2 = mysqli_fetch_assoc($res2))
{
echo "<td>" .$r2["subject"]. "<br>" .$r2["Course"]. "<br>" .$r2["batch"]. "</td>";
}}

$sql3 = "SELECT * FROM `timetable` WHERE `faculty`= \"$faculty\" AND `day`= \"Wednesday\" AND `time`= \"12:00-1:00\"";
$res3 = mysqli_query($conn, $sql3);
$record3 = mysqli_num_rows($res3);
if ($record3 == 0)
					{
            		echo "<td> -- </td>";
                	}
            	else
            		{while ($r3 = mysqli_fetch_assoc($res3))
{
echo "<td>" .$r3["subject"]. "<br>" .$r3["Course"]. "<br>" .$r3["batch"]. "</td>";
}}


$sql4 = "SELECT * FROM `timetable` WHERE `faculty`= \"$faculty\" AND `day`= \"Wednesday\" AND `time`= \"1:00-2:00\"";
$res4 = mysqli_query($conn, $sql4);
$record4 = mysqli_num_rows($res4);
if ($record4 == 0)
					{
            		echo "<td> -- </td>";
                	}
            	else
            		{while ($r4 = mysqli_fetch_assoc($res4))
{
echo "<td>" .$r4["subject"]. "<br>" .$r4["Course"]. "<br>" .$r4["batch"]. "</td>";
}}


$sql5 = "SELECT * FROM `timetable` WHERE `faculty`= \"$faculty\" AND `day`= \"Wednesday\" AND `time`= \"2:00-3:00\"";
$res5 = mysqli_query($conn, $sql5);
$record5 = mysqli_num_rows($res5);

if ($record5 == 0)
					{
            		echo "<td> -- </td>";
                	}
            	else
            		{while ($r5 = mysqli_fetch_assoc($res5))
{
echo "<td>" .$r5["subject"]. "<br>" .$r5["Course"]. "<br>" .$r5["batch"]. "</td>";
}
}
echo "</tr>";



	echo "<tr><th>Thursday</th>";
	$sql = "SELECT * FROM `timetable` WHERE `faculty`= \"$faculty\" AND `day`= \"Thursday\" AND `time`= \"8:30-9:30\"";
	$res = mysqli_query($conn, $sql);
	$record = mysqli_num_rows( $res );
	
		if ($record == 0)
			{
            		echo "<td> -- </td>";
                	}
            	else
            		{while ($r = mysqli_fetch_assoc( $res ))
		{
			echo "<td>" .$r["subject"]. "<br>" .$r["Course"]. "<br>" .$r["batch"]. "</td>";
			}
		}

	$sql1 = "SELECT * FROM `timetable` WHERE `faculty`= \"$faculty\" AND `day`= \"Thursday\" AND `time`= \"9:30-10:30\"";
	$res1 = mysqli_query($conn, $sql1);
	$record1 = mysqli_num_rows( $res1 );
	if ( $record1 == 0 )
					{
            		echo "<td> -- </td>";
                	}
            	else
            		{while ($r1 = mysqli_fetch_assoc($res1)){
echo "<td>" .$r1["subject"]. "<br>" .$r1["Course"]. "<br>" .$r1["batch"]. "</td>";
}}



$sql2 = "SELECT * FROM `timetable` WHERE `faculty`= \"$faculty\" AND `day`= \"Thursday\" AND `time`= \"10:30-11:30\"";
$res2 = mysqli_query($conn, $sql2);
$record2 = mysqli_num_rows($res2);
if ($record2 == 0)
					{
            		echo "<td> -- </td>";
                	}
            	else
            		{while ($r2 = mysqli_fetch_assoc($res2))
{
echo "<td>" .$r2["subject"]. "<br>" .$r2["Course"]. "<br>" .$r2["batch"]. "</td>";
}}

$sql3 = "SELECT * FROM `timetable` WHERE `faculty`= \"$faculty\" AND `day`= \"Thursday\" AND `time`= \"12:00-1:00\"";
$res3 = mysqli_query($conn, $sql3);
$record3 = mysqli_num_rows($res3);
if ($record3 == 0)
					{
            		echo "<td> -- </td>";
                	}
            	else
            		{while ($r3 = mysqli_fetch_assoc($res3))
{
echo "<td>" .$r3["subject"]. "<br>" .$r3["Course"]. "<br>" .$r3["batch"]. "</td>";
}}


$sql4 = "SELECT * FROM `timetable` WHERE `faculty`= \"$faculty\" AND `day`= \"Thursday\" AND `time`= \"1:00-2:00\"";
$res4 = mysqli_query($conn, $sql4);
$record4 = mysqli_num_rows($res4);
if ($record4 == 0)
					{
            		echo "<td> -- </td>";
                	}
            	else
            		{while ($r4 = mysqli_fetch_assoc($res4))
{
echo "<td>" .$r4["subject"]. "<br>" .$r4["Course"]. "<br>" .$r4["batch"]. "</td>";
}}


$sql5 = "SELECT * FROM `timetable` WHERE `faculty`= \"$faculty\" AND `day`= \"Thursday\" AND `time`= \"2:00-3:00\"";
$res5 = mysqli_query($conn, $sql5);
$record5 = mysqli_num_rows($res5);

if ($record5 == 0)
					{
            		echo "<td> -- </td>";
                	}
            	else
            		{while ($r5 = mysqli_fetch_assoc($res5))
{
echo "<td>" .$r5["subject"]. "<br>" .$r5["Course"]. "<br>" .$r5["batch"]. "</td>";
}
}
echo "</tr>";

	echo "<tr><th>Friday</th>";
	$sql = "SELECT * FROM `timetable` WHERE `faculty`= \"$faculty\" AND `day`= \"Friday\" AND `time`= \"8:30-9:30\"";
	$res = mysqli_query($conn, $sql);
	$record = mysqli_num_rows( $res );
	
		if ($record == 0)
			{
            		echo "<td> -- </td>";
                	}
            	else
            		{while ($r = mysqli_fetch_assoc( $res ))
		{
			echo "<td>" .$r["subject"]. "<br>" .$r["Course"]. "<br>" .$r["batch"]. "</td>";
			}
		}

	$sql1 = "SELECT * FROM `timetable` WHERE `faculty`= \"$faculty\" AND `day`= \"Friday\" AND `time`= \"9:30-10:30\"";
	$res1 = mysqli_query($conn, $sql1);
	$record1 = mysqli_num_rows( $res1 );
	if ( $record1 == 0 )
					{
            		echo "<td> -- </td>";
                	}
            	else
            		{while ($r1 = mysqli_fetch_assoc($res1)){
echo "<td>" .$r1["subject"]. "<br>" .$r1["Course"]. "<br>" .$r1["batch"]. "</td>";
}}



$sql2 = "SELECT * FROM `timetable` WHERE `faculty`= \"$faculty\" AND `day`= \"Friday\" AND `time`= \"10:30-11:30\"";
$res2 = mysqli_query($conn, $sql2);
$record2 = mysqli_num_rows($res2);
if ($record2 == 0)
					{
            		echo "<td> -- </td>";
                	}
            	else
            		{while ($r2 = mysqli_fetch_assoc($res2))
{
echo "<td>" .$r2["subject"]. "<br>" .$r2["Course"]. "<br>" .$r2["batch"]. "</td>";
}}

$sql3 = "SELECT * FROM `timetable` WHERE `faculty`= \"$faculty\" AND `day`= \"Friday\" AND `time`= \"12:00-1:00\"";
$res3 = mysqli_query($conn, $sql3);
$record3 = mysqli_num_rows($res3);
if ($record3 == 0)
					{
            		echo "<td> -- </td>";
                	}
            	else
            		{while ($r3 = mysqli_fetch_assoc($res3))
{
echo "<td>" .$r3["subject"]. "<br>" .$r3["Course"]. "<br>" .$r3["batch"]. "</td>";
}}


$sql4 = "SELECT * FROM `timetable` WHERE `faculty`= \"$faculty\" AND `day`= \"Friday\" AND `time`= \"1:00-2:00\"";
$res4 = mysqli_query($conn, $sql4);
$record4 = mysqli_num_rows($res4);
if ($record4 == 0)
					{
            		echo "<td> -- </td>";
                	}
            	else
            		{while ($r4 = mysqli_fetch_assoc($res4))
{
echo "<td>" .$r4["subject"]. "<br>" .$r4["Course"]. "<br>" .$r4["batch"]. "</td>";
}}


$sql5 = "SELECT * FROM `timetable` WHERE `faculty`= \"$faculty\" AND `day`= \"Friday\" AND `time`= \"2:00-3:00\"";
$res5 = mysqli_query($conn, $sql5);
$record5 = mysqli_num_rows($res5);

if ($record5 == 0)
					{
            		echo "<td> -- </td>";
                	}
            	else
            		{while ($r5 = mysqli_fetch_assoc($res5))
{
echo "<td>" .$r5["subject"]. "<br>" .$r5["Course"]. "<br>" .$r5["batch"]. "</td>";
}
}
echo "</tr>";











}
echo "</table>";
?>





</div>
</body>
</html>









