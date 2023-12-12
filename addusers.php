<?php
array_map("htmlspecialchars", $_POST);

echo("submitted")."<br>";
        echo $_POST["username"]."<br>";
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
	}
	$stmt = $conn->prepare("INSERT INTO tblusers1 (UserID,username,Password,Role)VALUES (null,:username,:password,:role)");
	$stmt->bindParam(':username', $_POST["username"]);
	$stmt->bindParam(':password', $_POST["passwd"]);
	$stmt->bindParam(':role', $role);
	$stmt->execute();
	}
catch(PDOException $e)
	{
		echo "error".$e->getMessage();
	}
	
$conn=null;
#header('Location: users.php');
?>
