<!DOCTYPE html>
<html>
<head>
    
    <title>Page title</title>
    
</head>
<body>
	<form action="addusers.php" method = "post">
		isbn:<input type="text" name="isbn"><br>
		title:<input type="text" name="booktitle"><br>
		bookauthor:<input type="text" name="bookauthor"><br>
		authorcode:<input type="text" name="authorcode"><br>
		genre:<input type="text" name="genre"><br>
		

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