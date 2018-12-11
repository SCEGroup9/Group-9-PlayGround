<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT* FROM rules";

$result = $conn->query($sql);

$row = $result->fetch_assoc();
$GameName=$row["Nameofgame"];
$GameData=$row["Rules"];
$Points=$row["Points"];
//echo $GameData;

$conn->close();
?> 
