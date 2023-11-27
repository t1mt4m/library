<!DOCTYPE html>
<html>
<head>
    
    <title>Page title</title>
    
</head>
<body>
	<form action="addbooks.php" method = "post">
		isbn:<input type="text" name="isbn"><br>
		title:<input type="text" name="booktitle"><br>
		bookauthor:<input type="text" name="bookauthor"><br>
		authorcode:<input type="text" name="authorcode"><br>
		genre:<input type="text" name="bookgenre"><br>
		<br>
		<input type="submit" value="Add Book">
	  </form> 
      
    
</body>
</html>

<?php
include_once('connection.php');
 $stmt = $conn->prepare("SELECT * FROM tblbooks");
 $stmt = execute();
 while ($row = $stmt->fetch(\PDO::FETCH_ASSOC))
 {
	echo($row["forename"].' '.$row["surname"]."<br>");
 }