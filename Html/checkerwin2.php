<?php  
include("connect.php");
if (isset($_SESSION['username']) && isset($_SESSION['username2'])){
    $user1 = $_SESSION['username'];
    $user2 = $_SESSION['username2'];
    $temp=time();
    $today = (date("Y-m-d",$temp));
    $sql = "INSERT INTO games (user, gamename, enemy, Gstatus, points, tDate) 
                  VALUES('$user2', 'checkers', '$user1', 1, 50, '$today')";
    mysqli_query($db, $sql);
    $sql1 = "INSERT INTO games (user, gamename, enemy, Gstatus, points, tDate) 
                  VALUES('$user1', 'checkers', '$user2', 0, 0, '$today')";
    mysqli_query($db, $sql1);
    }  
    header('Location: /Html/globrec.php');
?>

