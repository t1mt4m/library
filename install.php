<?php
include_once("connection.php");
$stmt = $conn->prepare("DROP TABLE IF EXISTS TblUser;
CREATE TABLE tblusers1 
(UserID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(20) NOT NULL,
password VARCHAR(20) NOT NULL,
role TINYINT(1))");
$stmt = $conn->prepare("CREATE TABLE tblbooks
(bookID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
isbn VARCHAR(17) NOT NULL,
booktitle VARCHAR(100) NOT NULL,
bookauthor VARCHAR(20) NOT NULL,
authorcode VARCHAR(20) NOT NULL,
bookgenre VARCHAR(20) NOT NULL,)");

$stmt->execute();
$stmt->closeCursor();
?>