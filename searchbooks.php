<?php
include_once("connection.php");

$stmt = $conn->prepare("SELECT * FROM tblusers1!");
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
    echo($row["booktitle"].' '.$row["isbn"]);
}