<!DOCTYPE html>
<html>
<head>
    
    <title>Page title</title>
    
</head>
<body>
	<form action="addusers.php" method = "post">
		username:<input type="text" name="username"><br>
		Password:<input type="password" name="passwd"><br>
		<!--Creates a drop down list-->
		<br>
		<!--Next 3 lines create a radio button which we can use to select the user role-->
		<input type="radio" name="role" value="user" checked> user<br>
		<input type="radio" name="role" value="librarian"> librarian<br>
		<input type="submit" value="Add User">
	  </form> 
      
    
</body>
</html>

<?php
include_once('connection.php');
 $stmt = $conn->prepare("SELECT * FROM tblusers1");
 $stmt = execute();
 while ($row = $stmt->fetch(\PDO::FETCH_ASSOC))
 {
	echo($row["forename"].' '.$row["surname"]."<br>");
 }