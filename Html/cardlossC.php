<?php  
include("connect.php");
if (isset($_SESSION['username'])){
    $user = $_SESSION['username'];
    $temp=time();
    $today = (date("Y-m-d",$temp));
    $sql = "INSERT INTO games (user, gamename, enemy, Gstatus, points, tDate) 
                  VALUES('$user', 'cards', 'Computer', 0, 0, '$today')";
    mysqli_query($db, $sql);
    }  
    header('Location: /Html/globrec.php');
?>

