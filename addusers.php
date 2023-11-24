<?php
array_map("htmlspecialchars", $_POST);

echo("submitted");
        echo $_POST["forename"]."<br>";
        echo $_POST["surname"]."<br>";
        echo $_POST["passwd"]."<br>";
        
try{		
	include_once("connection.php");
	switch($_POST["role"]){
		case "Pupil":
			$role=0;
			break;
		case "Teacher":
			$role=1;
			break;
		case "Admin":
			$role=2;
			break;
	}
	$stmt = $conn->prepare("INSERT INTO TblUsers (UserID,Surname,Forename,Password,Role)VALUES (null,:gender,:surname,:forename,:password,:role)");
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
