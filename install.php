<?php
include_once("connection.php");
$stmt = $conn->prepare("DROP TABLE IF EXISTS TblUser;
CREATE TABLE tblusers1 
(UserID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Surname VARCHAR(20) NOT NULL,
Forename VARCHAR(20) NOT NULL,
Password VARCHAR(20) NOT NULL,
Role TINYINT(1))");
$stmt->execute();
$stmt->closeCursor();
?>