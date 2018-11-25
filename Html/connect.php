<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";

$con = mysqli_connect($servername,$username,$password,"game1");
if($con){
    // echo "Connected successfully";
}

// $query = "SELECT * FROM accounts";
// $res = mysqli_query($con, $query);
// while($r = mysqli_fetch_array($res)){
//     echo $r["name"];
// }
session_start();

if(isset($_GET["logout"])){
    session_unset();
    session_destroy();
    header("location:LoginU.php"); 
    exit();
}

?>
