<?php
 include "connect.php";

 if(isset($_POST['delete'])){

     $username = $_POST['username'];
     $psw = $_POST['psw'];
     $pswr = $_POST['pswr'];
     $sql1 = "SELECT * FROM `Users` WHERE `username` = '$username' AND `psw` = '$psw' AND `psw` = '$pswr'";
     $res1 = mysqli_query($db1, $sql1);
     $sql2 = "SELECT * FROM `Users1` WHERE `username` = '$username' AND `psw` = '$psw'";
     $res2 = mysqli_query($db2, $sql2);
     $numrows1 = mysqli_num_rows($res1);
     $numrows2 = mysqli_num_rows($res2);
     if($numrows1 == 1 and $numrows2 == 1) {
        $del1 = "DELETE FROM `Users` WHERE `username` = '$username' AND `psw` = '$psw' AND `pswr` = '$pswr'";
        mysqli_query($db1, $del1);
        $del2 = "DELETE FROM `Users1` WHERE `username` = '$username' AND `psw` = '$psw'";
        mysqli_query($db2, $del2);
        echo "<script>alert('Successfully deleted'); window.location = './Home.html';</script>";
    }
    else {
        echo "<script>alert('Incorrect details were entered'); window.location = './delete.php';</script>";
    }
}
?>

<html>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<head>
    <title>Delete account</title>
    <link rel="stylesheet" href="/Css/delete.css">
    <body>
        <div class="login-page1">
        <div class="form1">
        <div class="login-popup-wrap new_login_popup">
        <div class="login-popup-heading text-center">
            <h4><i class="title" aria-hidden="true"></i><strong> Delete account </strong></h4>
            <h4><i class="pass" aria-hidden="true"></i> Enter details for user to delete </h4>
        </div>
        <form id="loginMember" role="form" action="delete.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" id="username" placeholder="Enter user name" name="username" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="psw" placeholder="Enter your password" name="psw" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="pswr" placeholder="Confirm password" name="pswr" required>
            </div>
            <button class="loginBtn" name="delete">Click to delete</button>
        </form>
            <ul>
                <li><a class="active" href="/Html/Home.html">Home</a></li>
                <li><a href="/Html/Home.html">Back</a></li>
                <li><a href="/Html/contact.php">Contact Us</a></li>
                <li><a href="/Html/about.html">About</a></li>
            </ul>
        </div>
        </div>
        </div>
    </body>
</head>
</html>