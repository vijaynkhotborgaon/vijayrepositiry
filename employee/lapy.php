<?php


	require_once('../config.php');


	require_once('auth.php');


?>


<!DOCTYPE html>


<html lang="en-gb" dir="ltr" class="com_content view-article itemid-723 j33 no-touch"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<script>
function changecontent1() {
   window.location="emp-details.php";
}

function changecontent2(){
   window.location="asset-man.php";
}

function changecontent3() {
   window.location="leave-man.php";
}

function change1() {
   window.location="main.php";
}

function change2() {
   window.location="main.php";
}

function change3() {
   window.location="main.php";
}
</script>


  <title>Asset management</title>


  <link rel="stylesheet" href="../css/css-be258.css" type="text/css">


<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">


 </head>


 <body>


<?php


include('header.php');
include('logo-username-div.php');


?>






<?php


include('topsection.php');


?>


<div id="content"><!-- TemplateBeginEditable name="edit1" -->
			
			
			
<?php








$result = mysql_query("SELECT * FROM assets WHERE emp_id='$uid'");








$row = mysql_fetch_assoc($result);
















?>








   <article>





<form action="#">


<table border="1" width="100%">








<tbody>








<tr>








<td colspan="6"><h4 style="float:left;"><strong>Assets Details</strong></h4></td>








</tr>








<tr style="text-align: center;">








<td style="text-align: center;"><strong>Serial</strong></td>








<td><strong>Asset name</strong></td>








<td><strong>Asset Description</strong></td>








<td><strong>Serial Number</strong></td>








<td><strong>Issue Date</strong></td>

















</tr>








<?php








$result = mysql_query("SELECT * FROM assets WHERE emp_id='$uid'");

















  $i=1;








while($row = mysql_fetch_array($result))








  { 








?>








<tr style="text-align: center;">








<td><?php echo $i; ?></td>








<td><?php echo $row['asset_name']; ?></td>








<td><?php echo $row['asset_desc']; ?></td>








<td><?php echo $row['serial_number']; ?></td>








<td><?php echo $row['timestamp']; ?></td>
























</tr>








<?php   $i++; } ?>








</tbody>








</table>





















</form>




</article>






</div>

    





<?php


include('footer.php');


?>





<div id="off-canvas-nav"><div class="t3-mainnav"><div class="nav-collapse collapse">


			      			        


			      			  		</div></div></div></body></html>