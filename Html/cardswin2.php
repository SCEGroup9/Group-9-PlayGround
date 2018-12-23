<?php  
include("connect.php");
if (isset($_SESSION['username2'])){ // if player 2 is the winner
    $user2 = $_SESSION['username2'];
    $sql = "SELECT * FROM `grecords` WHERE `user` = '$user2' AND `gamename` = 'cards'"; //update grecords if exist
    $res = mysqli_query($db5, $sql);
    $numrows = mysqli_num_rows($res);
    if($numrows == 1){
        $row = mysqli_fetch_assoc($res);
        $i = $row["points"]+30;
        $sql1 = "UPDATE `grecords` SET `points` = '$i' WHERE `user` = '$user2'";
        mysqli_query($db5, $sql1);
    }  
    else {
    $sql2 = "INSERT INTO grecords(user, points, gamename) 
            VALUES('$user2', '30', 'cards')";
    mysqli_query($db5, $sql2);
    }

    $sqli = "SELECT * FROM `precords` WHERE `user` = '$user2' AND `gamename` = 'cards'"; //update precords if exist
    $res1 = mysqli_query($db6, $sqli);
    $numrows1 = mysqli_num_rows($res1);
    if($numrows1 == 1){
        $row1 = mysqli_fetch_assoc($res1);
        $i = $row1["points"]+30;
        $j = $row1["wins"]+1;
        $k = $row1["countgames"]+1;
        $sqli1 = "UPDATE `precords` SET `points` = '$i', `wins` = '$j', `countgames` = '$k' WHERE `user` = '$user2'";
        mysqli_query($db6, $sqli1);
    }  
    else {
        $sqli2 = "INSERT INTO precords(user, gamename, points, wins, losses, countgames) 
                        VALUES('$user2', 'cards', '30', '1', '0','1')"; //set new one
        mysqli_query($db6, $sqli2);
    }
}

if (isset($_SESSION['username'])){
    $user1 = $_SESSION['username'];
    $sqlm = "SELECT * FROM `precords` WHERE `user` = '$user1' AND `gamename` = 'cards'"; //update loss to player 1
    $result = mysqli_query($db6, $sqlm);
    $numrow = mysqli_num_rows($result);
    if($numrow == 1){
        $rows = mysqli_fetch_assoc($result);
        $a = $rows["losses"]+1;
        $b = $rows["countgames"]+1;
        $sqlm1 = "UPDATE `precords` SET `losses` = '$a', `countgames` = $b WHERE `user` = '$user1'";
        mysqli_query($db6, $sqlm1);
    }  
    else {
        $sqlm2 = "INSERT INTO precords(user, gamename, points, wins, losses, countgames) 
                        VALUES('$user1', 'cards', '0', '0', '1','1')"; //set new one
        mysqli_query($db6, $sqlm2);
    }
}

    include("globrec.php");
?>

