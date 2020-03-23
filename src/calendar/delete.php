<?php
if(isset($_POST["id"]))
{
	$connect = new PDO('mysql:host=localhost;dbname=tabletodo', 'root', '');
	$query = "DELETE from calendar WHERE id=:id";
	$statement = $connect->prepare($query);
	$statement->execute(
	array(
	':id' => $_POST['id']
	)
	);
}

?>