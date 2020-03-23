<?php
//insert.php
$connect = new PDO('mysql:host=localhost;dbname=tabletodo', 'root', '');

if(isset($_POST["title"]))
{
	session_start();
	$user_id = $_SESSION['id'];
	$query = "INSERT INTO calendar (user_id,title, start, end, importance, status_id) 
	VALUES (:user_id, :title, :start_event, :end_event, :importance, :status_id)";
	$statement = $connect->prepare($query);
	$statement->execute(
  	array(
  	':user_id' => $user_id,	
   	':title'  => $_POST['title'],
   	':start_event' => $_POST['start'],
   	':end_event' => $_POST['end'],
   	':importance' => $_POST['importance'],
	':status_id' => 3  	
  	)
	);
	header("Location: ../calendar.php");
}


?>