<?php  
include("connect.php"); // if player 1 is the winner
if (isset($_SESSION['username'])){
    $user1 = $_SESSION['username'];
    $sql = "SELECT * FROM `grecords` WHERE `user` = '$user1' AND `gamename` = 'cards'"; //update grecords if exist
    $res = mysqli_query($db5, $sql);
    $numrows = mysqli_num_rows($res);
    if($numrows == 1){
        $row = mysqli_fetch_assoc($res);
        $i = $row["points"]+30;
        $sql1 = "UPDATE `grecords` SET `points` = '$i' WHERE `user` = '$user1'";
        mysqli_query($db5, $sql1);
    }  
    else {
    $sql2 = "INSERT INTO grecords(user, points, gamename) 
            VALUES('$user1', '30', 'cards')"; //set new one
    mysqli_query($db5, $sql2);
    }


    $sqli = "SELECT * FROM `precords` WHERE `user` = '$user1' AND `gamename` = 'cards'"; //update precords if exist
    $res1 = mysqli_query($db6, $sqli);
    $numrows1 = mysqli_num_rows($res1);
    if($numrows1 == 1){
        $row1 = mysqli_fetch_assoc($res1);
        $i = $row1["points"]+30;
        $j = $row1["wins"]+1;
        $k = $row1["countgames"]+1;
        $sqli1 = "UPDATE `precords` SET `points` = '$i', `wins` = '$j', `countgames` = '$k' WHERE `user` = '$user1'";
        mysqli_query($db6, $sqli1);
    }  
    else {
        $sqli2 = "INSERT INTO precords(user, gamename, points, wins, losses, countgames) 
                        VALUES('$user1', 'cards', '30', '1', '0','1')"; //set new one
        mysqli_query($db6, $sqli2);
    }
}

    include("globrec.php");
?>

