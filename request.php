<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="todolist";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";


?>

<?php 
if (isset($_POST['submit'])) 
{
	$taskName=$_POST["nameTask"];
	$date_time=$_POST["Date"];
	$deescrip=$_POST["Description"];
	$status=$_POST["taskStatus"];


 $sql = "INSERT INTO todo_table (taskName,timeDate,Description,Status)
VALUES ('$taskName', '$date_time', '$deescrip','$status')";

if ($conn->query($sql) === TRUE) {
   header("Location: http://localhost/temp/viewTask.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}else if(isset($_GET['idd'])){
	$taskid=$_GET["idd"];
	$sql ="DELETE FROM todo_table WHERE id=$taskid";
if ($conn->query($sql) === TRUE) {
   header("Location: http://localhost/temp/viewTask.php");
} else {
  echo "Error deleting record: " . $conn->error;
}
}else if (isset($_GET['changeStatus'])){
	$taskid=$_GET["changeStatus"];
	$sql ="UPDATE todo_table SET Status='done' WHERE id=$taskid";

if (mysqli_query($conn, $sql)) {
   header("Location: http://localhost/temp/viewTask.php");
} else {
  echo "Error updating record: " . mysqli_error($conn);
}
}else if (isset($_POST['update'])) 
{	$taskId=$_POST["taskId"];
	$taskName=$_POST["nameTask"];
	$date_time=$_POST["Date"];
	$deescrip=$_POST["Description"];
	$status=$_POST["taskStatus"];

$sql="UPDATE todo_table SET taskName='$taskName',timeDate='$date_time',Description='$deescrip',Status='Done' WHERE id='$taskId'";
 if (mysqli_query($conn, $sql)) {
    header("Location: http://localhost/temp/viewTask.php");
} else {
  echo "Error updating record: " . mysqli_error($conn);
}
}
$conn->close();
  ?>