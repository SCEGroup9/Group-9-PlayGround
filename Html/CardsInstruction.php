<?php

$servername = "sql102.epizy.com";
$username = "epiz_23059576";
$password = "34821317";
$dbname = "epiz_23059576_DB";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT* FROM Rules WHERE Nameofgame='Cards'";

$result = $conn->query($sql);

$row = $result->fetch_assoc();
$GameName=$row["Nameofgame"];
$GameData=$row["Rules"];
$Points=$row["Points"];

$conn->close();
?> 
