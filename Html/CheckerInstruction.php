<?php

$servername = "sql102.epizy.com";
$username = "epiz_23059576";
$password = "34821317";
$dbname = "epiz_23059576_DB";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT* FROM Rules";

$result = $conn->query($sql);
   // while($row = $result->fetch_assoc()) {
  //      echo "<br> 1: ". $row["Nameofgame"]. " - Name: ". $row["Rules"]. " " . $row["Points"] . "<br>";
  //  }
$row = $result->fetch_assoc();
$GameName=$row["Nameofgame"];
$GameData=$row["Rules"];
$Points=$row["Points"];
$car= 'shit';
//echo $GameData;

$conn->close();
?> 
