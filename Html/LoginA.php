<?php
 include "connect.php";

 if(isset($_POST['login'])){

     $username = $_POST['username'];
     $psw = $_POST['psw'];
     $rnk = $_POST['rnk'];
     $sql = "SELECT * FROM `Users1` WHERE `username` = '$username' AND `psw` = '$psw' AND `rnk` = '0'";
     $res = mysqli_query($db1, $sql);
     $numrows = mysqli_num_rows($res);
     if($numrows == 1){
        header("Location: /Html/Admin.html");
    }
    else {
        ?>
            <script>window.alert("You are not admin/Wrong details entered");</script>
        <?php
    }
}
?>
<html>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="/Css/LoginA.css">
    <body>
        <div class="login-page1">
        <div class="form1">
        <div class="login-popup-wrap new_login_popup">
        <div class="login-popup-heading text-center">
            <h4><i class="title" aria-hidden="true"></i> Admin Login </h4>
        </div>
        <form id="loginMember" role="form" action="LoginA.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" id="username" placeholder="User Name" name="username" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="psw" placeholder="Password" name="psw" required>
            </div>
            <button class="loginBtn" name="login">Login</button>
        </form>
            <ul>
                <li><a class="active" href="/Html/Home.html">Home</a></li>
                <li><a href="/Html/Home.html">Back</a></li>
                <li><a href="/Html/contact.html">Contact Us</a></li>
                <li><a href="/Html/about.html">About</a></li>
            </ul>
        </div>
        </div>
        </div>
    </body>
</head>
</html>
