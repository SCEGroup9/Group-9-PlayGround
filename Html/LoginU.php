<?php
 include "connect.php"; 

 if(isset($_POST["user_id"])){

     $user = $_POST["user_id"]; 
     $pass = $_POST["password"];
     //var_dump($_POST);
     $q = "SELECT * FROM `accounts` WHERE `username` = '$user' AND `pass` = '$pass'";
     $res = mysqli_query($con, $q);
     $numrows = mysqli_num_rows($res);
     if($numrows == 1){
         //var_dump($res);
         while($r = mysqli_fetch_object($res)){
            $_SESSION["id"] = $r->id;
            $_SESSION["name"] = $r->name;
            $_SESSION["user"] = $r->username;
            $_SESSION["rank"] = $r->rank;
         }
         $_SESSION["log"] = TRUE;
         header("Location: Cgame.html");
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
                <input type="text" class="form-control" id="user_id" placeholder="User Name" name="user_id" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
            </div>
            <button class="loginBtn" onclick="none">Login</button>
        </form>
        <div class="form-group text-center">
            <a class="pwd-forget" href="javascript:void(0)" id="open_forgotPassword">Forget Password?</a>
        </div>
        <div class="text-center">Not registered yet? <a href="reg.php">click here</a></div>
            <ul>
                <li><a class="active" href="/Html/Home.html">Home</a></li>
                <li><a href="/Html/Home.html">Back</a></li>
                <li><a href="/Html/contact.html">Contact Us</a></li>
                <li><a href="#about">About</a></li>
            </ul>
        </div>
        </div>    
        </div>
</html>