<?php
include_once("connection.php");

$stmt = $conn->prepare("SELECT * FROM tblbooks");
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
    echo($row["booktitle"].' '.$row["isbn"]);
}