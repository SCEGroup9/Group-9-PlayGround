<?php
include('connect.php');

 if(isset($_POST['login'])){
    $username = $_POST['username'];
     if ($_SESSION['username'] == $username){
        echo "<script>alert('user $username already connected'); window.location = './User2log2.php';</script>";
     }
     else{
        $psw = $_POST['psw'];
        $sql = "SELECT * FROM `Users` WHERE `username` = '$username' AND `psw` = '$psw'";
        $res = mysqli_query($db1, $sql);
        $numrows = mysqli_num_rows($res);
        if($numrows == 1){
           $_SESSION['username2'] = $username;
           $temp=time();
           $today = (date("Y-m-d",$temp));
           $sql1 = "SELECT * FROM `enters` WHERE id = (SELECT max(id) FROM enters)";
           $result = mysqli_query($db4, $sql1);
           $row = mysqli_fetch_assoc($result);
           $i = $row["counts"]+1;
           if ($today === $row["tDate"]){
               $sql2 = "UPDATE `enters` SET `counts` = '$i' WHERE tDate = '$today'";
               mysqli_query($db4, $sql2);
           }
           else {
               $sql3 = "INSERT INTO enters(tDate, counts) 
                       VALUES('$today', '1')";
               mysqli_query($db4, $sql3);
           }
            echo "<script>alert('Welcome $username you are now connected as user'); window.location = './checker.html';</script>";
       }
       else {
           echo "<script type='text/javascript'>alert('Incorrect details were entered');</script>";
       }
    }
}
?>

<html>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<head>
    <title>User 2 Login</title>
    <link rel="stylesheet" href="/Css/User2log.css">
    <body> 
        <div class="login-page1">
        <div class="form1">
        <div class="login-popup-wrap new_login_popup"> 
        <div class="login-popup-heading text-center">
            <h4><i class="title" aria-hidden="true"></i> User 2 Login </h4>                        
        </div>
        <form id="loginMember" role="form" action="User2log2.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" id="username" placeholder="User Name" name="username" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="psw" placeholder="Password" name="psw" required>
            </div>
            <button class="loginBtn" name="login">Login</button>
        </form>
        <div class="form-group text-center">
            <a class="pwd-forget" href="/Html/forget.php" id="open_forgotPassword">Forget Password?</a>
        </div>
        <ul>
            <li><a class="active" href="Home.html">Home</a></li>
            <li><a href="Home.html">Back</a></li>
            <li><a href="/Html/delete.php">Delete account</a></li>
            <li><a href="https://www.walla.co.il">Walla! portal</a></li>
            <li><a href="/Html/contact.php">Contact Us</a></li>
            <li><a href="/Html/about.html">About</a></li>
            <li><a class="logt" name="logt" href="logout.php">Log out</a></li>
        </ul>
        </div>
        </div>    
        </div>
</html>