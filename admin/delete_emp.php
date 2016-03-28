<?php
 
/* VALUES */
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "archonsystem";


$id=$_GET['camid'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record

$delete = mysqli_query($conn,"DELETE FROM t_employee where emp_id='$id'");

 if($delete)
    {
	$_SESSION['delete_emp'] = 1;
	session_write_close();
	header("location: employee_list.php");
	}
 
?>