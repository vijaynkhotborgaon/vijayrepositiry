 <?php
 $eventid = $_POST['eventid'];
   
 $title= $_POST['title'];
	 
	 
	 
	 
// connexion à la base de données
 try {
 $bdd = new PDO('mysql:host=localhost;dbname=archonsystem', 'root', '');
 } catch(Exception $e) {
 exit('Impossible de se connecter à la base de données.');
 }
 

 $sql = "update evenement set title='$title' where id='$eventid'";

    // Prepare statement
    $stmt = $bdd->prepare($sql);

    // execute the query
    $stmt->execute();
	
	if($stmt)
     echo json_encode(array('status'=>'success'));
   else
     echo json_encode(array('status'=>'failed'));
	 ?>