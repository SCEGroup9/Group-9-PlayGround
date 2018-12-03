<?php
 include "connect.php"; 

 if(isset($_POST['login'])){

     $username = $_POST['username']; 
     $psw = $_POST['psw'];
     $sql = "SELECT * FROM `Users` WHERE `username` = '$username' AND `psw` = '$psw'";
     $res = mysqli_query($db1, $sql);
     $numrows = mysqli_num_rows($res);
     if($numrows == 1){
        header("Location: /Html/Cgame.html");
    }
    else {
        ?>
            <script>window.alert("Wrong details entered");</script>
        <?php
    }
}
?>

<html>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<head>
    <title>User Login</title>
    <link rel="stylesheet" href="/Css/LoginU.css">
    <body> 
        <div class="login-page1">
        <div class="form1">
        <div class="login-popup-wrap new_login_popup"> 
        <div class="login-popup-heading text-center">
            <h4><i class="title" aria-hidden="true"></i> User Login </h4>                        
        </div>
        <form id="loginMember" role="form" action="LoginU.php" method="post">
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
        <div class="text-center">Not registered yet? <a href="reg.php">click here</a></div>
            <ul>
                <li><a class="active" href="/Html/Home.html">Home</a></li>
                <li><a href="/Html/Home.html">Back</a></li>
                <li><a href="/Html/contact.html">Contact Us</a></li>
                <li><a href="/Html/about.html">About</a></li>
            </ul>
        </div>
        </div>    
        </div>
</html>