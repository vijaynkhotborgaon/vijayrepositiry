<?php
 
/* VALUES */
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "archonsystem";


$emp_code=$_GET['camid'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$GetEmp=mysqli_query($conn,"SELECT * FROM t_employee where emp_code='$emp_code'");
$qry = mysqli_fetch_array($GetEmp);

$a0=$qry['emp_id'];
$a1=$qry['emp_code'];
$a2=	$qry['title'];
	
$a3=	$qry['emp_first_name'];
$a4=	$qry['emp_middle_name'];
$a5=	$qry['emp_last_name'];
$a6=	$qry['mobile'];
$a7=	$qry['address'];
$a8=	$qry['email'];
$a9=	$qry['JoiningDate'];
$a10=	$qry['dept_id'];
$a11=	$qry['priority_id'];
$a12=	$qry['assign_to'];
$a13=	$qry['username'];
$a14=	$qry['password'];


$InsertExEmp=mysqli_query($conn,"INSERT INTO t_ex_employee (emp_id, emp_code, title, emp_first_name, emp_middle_name, emp_last_name, mobile, address, email, JoiningDate, dept_id,  priority_id, assign_to, username, password)
							values('$a0','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9',$a10,$a11,$a12,'$a13','$a14')");
				
							
$delete = mysqli_query($conn,"DELETE FROM t_employee where emp_code='$emp_code'");

 if($delete)
    {
	$_SESSION['delete_emp'] = 1;
	session_write_close();
	header("location: employee_list.php");
	}
 
 if($InsertExEmp)
    {
	echo "success";
	}
	else
	{
		
		echo "error";
	}
?>