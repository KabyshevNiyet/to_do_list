<?php 
	$connect = new PDO('mysql:host=localhost;dbname=tabletodo', 'root', '');
	$data = array();
	session_start();
	$user_id = $_SESSION['id'];
	$query = "SELECT id,title,start,end,importance FROM calendar WHERE user_id = '$user_id' ORDER BY id" ;
	
	$statement = $connect->prepare($query);
	
	$statement->execute();

	$result = $statement->fetchAll();

	foreach($result as $row)
	{
	 $data[] = array(
	  'id'   => $row["id"],
	  'title'   => $row["title"]."\n".$row["importance"],
	  'start'   => $row["start"],
	  'end'   => $row["end"],
	  'color' => 'red'
	 );
	}

	echo json_encode($data);
?>