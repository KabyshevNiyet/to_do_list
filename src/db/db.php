<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$bdname = "tabletodo";
	// Create connection
	$conn = new mysqli($servername, $username, $password,$bdname);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	//For generating new password
	if(isset($_POST['passwordSubmit'])){
		//mail("kabyshev.niyet@gmail.com", "password", "newpassword");
		$email = $_POST['email'];

		$genpass = array ("92", "83", "7", "66", "45", "4", "36", "22", "1", "0", 
        "k", "l", "m", "n", "o", "p", "q", "1r", "3s", "a", "b", "c", "d", "5e", "f", "g", "h", "i", "j6", "t", "u", "v9", "w", "x5", "6y", "z5");
		$string = "";
		for ($k = 0; $k < 8; $k++)
        {
          shuffle($genpass);
          $string = $string.$genpass[1];
        }

        $sql = "UPDATE user SET password = '$string' WHERE email = '$email'";

        global $conn;
        if($conn->query($sql) === TRUE){
			echo "<script>alert('На ваш почтовый ящик было отправлено письмо с новый паролем')</script>";
			echo "<h2>Your new password: '$string'</h2>";
			echo "<a href='../login.php'><h1>Back to home</h1></a>";
        }else{
			echo "<script>alert('Такого почтого ящика нет !')</script>";
			echo "<a href='../login.php'><h1>Back to home</h1></a>";
        }
	}

	//change password
	if(isset($_POST['changePassword'])){
		if($_POST['password'] == $_POST['passwords']){
			$email = $_SESSION['email'];
			$password = $_POST['password'];
			$sql = "UPDATE user SET password = '$password' WHERE email = '$email'";
			global $conn;
        	if($conn->query($sql) === TRUE){
        		echo "<script>alert('Пароль успешно изменен!')</script>";
        		//header("Location: ../profile.php");
        	}else{
        		echo "<script>alert('Не совпадают пароли !')</script>";
				echo "<a href='../profile.php'><h1>Back</h1></a>";
        	}
		}
	}
	
	
	//registration
	if(isset($_POST['addUser'])){
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$birthdate = $_POST['birthdate'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$sql = "INSERT INTO user(role_id,name,surname,birthdate,email,password) VALUES(2,'$name','$surname','$birthdate','$email','$password')";
		addData($sql);	
	}

	//check user login and password
	if(isset($_POST['checkLogin'])){
		session_start();
		$email = $_POST['email'];
		$password = $_POST['password'];
		global $conn;
		$sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password' LIMIT 1";
		$result = $conn->query($sql);
		if($result->num_rows == 1){
			$row = $result->fetch_assoc();
			$_SESSION["id"] = $row['id'];
			$_SESSION["role_id"] = $row['role_id'];
			if($_SESSION["role_id"] == 1){
				$_SESSION["role"] = "admin";
			}else
				$_SESSION["role"] = "user";
			$_SESSION["email"] = $row['email'];
			$_SESSION["user"] = $row['name'].' '.$row['surname'];
			$_SESSION["birthdate"] = $row['birthdate'];


			header("Location: ../calendar.php");
		}else{
			header("Location: ../login.php");
		}


	}

	if(isset($_GET['processId'])){
		$id = $_GET['processId'];
		$sql = "UPDATE calendar set status_id = 2 WHERE id = '$id'";
		global $conn;
		if($conn->query($sql) === TRUE){
        	//echo "<script>alert('Статус успешно изменен!')</script>";
        	header("Location: ../calendar.php");
        }else{
       		echo "<script>alert('Error!')</script>";
			echo "<a href='../calendar.php'><h1>Back</h1></a>";
        }
	
	}

	if(isset($_GET['doneId'])){
		$id = $_GET['processId'];
		$sql = "UPDATE calendar set status_id = 1 WHERE id = '$id'";
		global $conn;
		if($conn->query($sql) === TRUE){
        	//echo "<script>alert('Статус успешно изменен!')</script>";
        	header("Location: ../calendar.php");
        }else{
       		echo "<script>alert('Error!')</script>";
			echo "<a href='../calendar.php'><h1>Back</h1></a>";
        }	
	}

	function selectDataUser(){
		global $conn;
		$sql = 'SELECT * from user';
		$result = $conn->query($sql);
		if($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				echo "<tr>
						<td>".$row["id"]."</td>
						<td>".$row["name"]."</td>
						<td>".$row["surname"]."</td>
						<td>".$row["birthdate"]."</td>
						<td>".$row["email"]."</td>
						<td>".$row["password"]."</td>
						";
				echo   '<td>
                        <div class="table-data-feature">
                        <button type="submit" class="item" data-toggle="modal" data-target="#editModal" data-placement="top" title="Edit">
                            <i class="zmdi zmdi-edit"></i>
                        </button>
                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete" onclick="alertDelete()">
                            <i class="zmdi zmdi-delete"></i>
                        </button>
                        </div>
                        </td>
					</tr>';
			}
		}
	}
	function selectCalendar(){
		global $conn;
		$user_id = $_SESSION['id'];
		$sql = "SELECT c.id as id, c.title as title, c.importance as importance, s.name as name from calendar c LEFT JOIN status s on s.id = c.status_id WHERE user_id = '$user_id' ";
		$result = $conn->query($sql);
		if($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				echo "<tr>
						<td>".$row["title"]."</td>
						<td>".$row["importance"]."</td>
						<td>".$row["name"]."</td>
						";
				echo   '<td>
                            <a class="btn btn-warning" href="db/db.php?processId='.$row["id"].'">В процессе</a>
                            <a class="btn btn-success" href="db/db.php?doneId='.$row["id"].'">Сделано</a>
                        </td>
					</tr>';
			}
		}
	}
	function addData($sql){
		global $conn;
		if($conn->query($sql) === TRUE){
			header("Location: ../login.php");
		}
		else {
			echo "<script>alert('Error with adding user, Email is unique')</script>
				<a href='../login.php'><h1>Back to home</h1></a>
			";

		}

	}

?>

