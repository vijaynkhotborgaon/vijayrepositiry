<?php
 
/* VALUES */


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "archonsystem";


$id=$_POST['id'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record

$delete = mysqli_query($conn,"UPDATE leave_employee_new SET status='cancled' WHERE leave_id='$id'");

 if($delete)
     echo json_encode(array('status'=>'success'));
   else
     echo json_encode(array('status'=>'failed'));
 
?>