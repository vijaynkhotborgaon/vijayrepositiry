<?php

header('Content-type: application/json');

?>
<?php
 
$title=$_POST['title'];
$start=$_POST['start'];
$end=$_POST['end'];



 
// connexion à la base de données
 try {
 $bdd = new PDO('mysql:host=localhost;dbname=archonsystem', 'root', '');
 } catch(Exception $e) {
 exit('Impossible de se connecter à la base de données.');
 }
 
 




 $begin = new DateTime($start);
    $end = new DateTime($end);
	$end->modify('+1 day');
	

    $interval = new DateInterval('P1D'); // 1 Day
    $dateRange = new DatePeriod($begin, $interval, $end);

    $range = [];
    foreach ($dateRange as $date) {
        $range[] = $date->format('Y-m-d');
    }






foreach($range as $range)
{

 $query =  "SELECT * FROM evenement WHERE start = :holiday OR end = :holiday " ;
        $stmt = $bdd->prepare($query);
        $stmt->bindParam(':holiday', $range);
        $blaa = $stmt->rowCount();
        $stmt->execute();

           $sql = "INSERT INTO evenement (title, start, end) VALUES (:title, :start, :end)";
$q = $bdd->prepare($sql);
$q->execute(array(':title'=>$title, ':start'=>$range, ':end'=>$range));
$foo = $bdd->lastInsertId();      
                
                
                    if($stmt->rowCount() > 0)
            {   
						$sql = "DELETE FROM evenement WHERE id = :id";
						$stmt = $bdd->prepare($sql);
						$stmt->bindParam(':id', $foo);
						$blaa = $stmt->rowCount();
						$stmt->execute();
						$e = array();
						$events=array();
						$e['id'] = 'exist';
				 
						array_push($events, $e);
			   
						echo json_encode($events);
						
						exit();

            }
            else
{
 $sql_1 = "INSERT INTO holidays (id, holiday) VALUES (:id, :holiday)";
$q_1 = $bdd->prepare($sql_1);
$q_1->execute(array(':id'=>$foo, ':holiday'=>$range));

}			


}




echo "notexists";







 /*
  
    $begin = new DateTime($start);
    $end = new DateTime($end);
	$end->modify('+1 day');
	

    $interval = new DateInterval('P1D'); // 1 Day
    $dateRange = new DatePeriod($begin, $interval, $end);

    $range = [];
    foreach ($dateRange as $date) {
        $range[] = $date->format('Y-m-d');
    }

foreach($range as $range)
{

$sql_1 = "INSERT INTO holidays (id, holiday) VALUES (:id, :holiday)";
$q_1 = $bdd->prepare($sql_1);
$q_1->execute(array(':id'=>$foo, ':holiday'=>$range));
}
 
*/
?>