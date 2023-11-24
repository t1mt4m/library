<?php
array_map("htmlspecialchars", $_POST);

echo("submitted");
        echo $_POST["forename"]."<br>";
        echo $_POST["surname"]."<br>";
        echo $_POST["passwd"]."<br>";
        
try{		
	include_once("connection.php");
	switch($_POST["role"]){
		case "user":
			$role=0;
			break;
		case "librarian":
			$role=1;
			break;
		case "admin":
			$role=2;
			break;
	}
	$stmt = $conn->prepare("INSERT INTO tblusers1 (UserID,Surname,Forename,Password,Role)VALUES (null,:surname,:forename,:password,:role)");
	$stmt->bindParam(':forename', $_POST["forename"]);
	$stmt->bindParam(':surname', $_POST["surname"]);
	$stmt->bindParam(':password', $_POST["passwd"]);
	$stmt->bindParam(':role', $role);
	$stmt->execute();
	}
catch(PDOException $e)
	{
		echo "error".$e->getMessage();
	}
	
$conn=null;
header('Location: users.php');
?>
