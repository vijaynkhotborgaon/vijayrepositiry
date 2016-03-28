<?php
require_once('../config.php');
	require_once('auth.php');
$type=$_POST['type'];


if($type == 'fetch') {
   $events = array();
  
$resultid = mysql_query("SELECT * FROM holidays where id IS NULL");
while($fetch = mysql_fetch_array($resultid)){
$fetch['allDay']="false";
  
     $e = array();
     $e['id'] = $fetch['no'];
     $e['title'] = '  Weekend';
     $e['start'] = $fetch['holiday'];
     $e['end'] = '0000-00-00 00:00:00';
     $allday = ($fetch['allDay'] == "true") ? true : false;
     $e['allDay'] = $allday;
	  $e['color']  = '#B40431';
	  $e['background']='#F6CED8';
     array_push($events, $e);
   }
   echo json_encode($events);
}

?>