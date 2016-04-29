<?php
	require_once('../config.php');
	require_once('auth.php');
   
        $from= $_GET['data_1'];
		$till=$_GET['data_2'];
		$half_day=$_GET['data_3']/2;
		$four=$_GET['data_4'];
		/*code for excluding sunday, sat, holidays*/
		/*
		$holidays=array();
$result = mysql_query("SELECT * from holidays");
while($holidays_1 = mysql_fetch_assoc($result))
{
array_push($holidays,$holidays_1['holiday']);
}



$begin = new DateTime("$from" );
$end = new DateTime("$till");
$end = $end->modify( '+1 day' ); 
$date_1=0;
$interval = new DateInterval('P1D');
$daterange = new DatePeriod($begin, $interval ,$end);

foreach($daterange as $date){
$dayOfWeek = $date->format( 'N' );
    $date->format("Y-m-d");
	if( $dayOfWeek < 7 ){
                //If the day of the week is not a pre-defined holiday
		$format = $date->format( 'Y-m-d' );
		

			if (false===in_array($format, $holidays))
			  {
			     $date_1++;
			  }
		
	}
}
*/

if($from!='' AND $till=='' AND $half_day=='' AND $four==4 )
{
$resultid = mysql_query("SELECT * FROM leave_assign");
$rowindustry = mysql_fetch_array($resultid);
$row=$rowindustry ['m_l'];

$date = new DateTime($from);
$date->add(new DateInterval('P'.$row.'D'));
$date->sub(new DateInterval('P1D'));
$exact=$date->format('d-m-Y');




$arr = array("date" => $exact, 
             "days" => $row);

echo json_encode($arr);



}
else if($from!='' AND $till=='' AND $half_day=='' AND $four==5 )
{
$resultid = mysql_query("SELECT * FROM leave_assign");
$rowindustry = mysql_fetch_array($resultid);
$row=$rowindustry ['pat_l'];

$date = new DateTime($from);
$date->add(new DateInterval('P'.$row.'D'));
$date->sub(new DateInterval('P1D'));
$exact=$date->format('d-m-Y');




$arr = array("date" => $exact, 
             "days" => $row);

echo json_encode($arr);



}

else
{



/* code for including sunday,sat,holidays*/
$begin = new DateTime("$from" );
$end = new DateTime("$till");
$end = $end->modify( '+1 day' ); 
$date_1=0;
$interval = $end->diff($begin);
$date_1=$interval->format('%a');



if($half_day !=0 )
{

$date_1=$date_1-$half_day;
echo $date_1;
}
else
{
echo $date_1;
}
 }
?>