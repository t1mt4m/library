<?php
array_map("htmlspecialchars", $_POST);
print_r($_POST);

    
try{
    include_once("connection.php");
	$stmt = $conn->prepare("INSERT INTO tblbooks (isbn,booktitle,bookauthor,authorcode,bookgenre)
	VALUES (:isbn,:booktitle,:bookauthor,:authorcode,:bookgenre)");
	$stmt->bindParam(':isbn', $_POST["isbn"]);
	$stmt->bindParam(':booktitle', $_POST["booktitle"]);
	$stmt->bindParam(':bookauthor', $_POST["bookauthor"]);
    $stmt->bindParam(':authorcode', $_POST["authorcode"]);
    $stmt->bindParam(':bookgenre', $_POST["bookgenre"]);
	$stmt->execute();
}
catch(PDOException $e)
	{
		echo "error".$e->getMessage();
	}
	
$conn=null;
#header('Location: books.php');
?>
