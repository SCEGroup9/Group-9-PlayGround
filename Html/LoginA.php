<?php
 include "connect.php"; 

 if(isset($_POST["user_id"])){

     $user = $_POST["user_id"]; 
     $pass = $_POST["password"];
    
     $q = "SELECT * FROM `accounts` WHERE `username` = '$user' AND `pass` = '$pass' AND `rank`='0'";
     $res = mysqli_query($con, $q);
     $numrows = mysqli_num_rows($res);
     if($numrows == 1){
         
         while($r = mysqli_fetch_object($res)){
            $_SESSION["id"] = $r->id;
            $_SESSION["name"] = $r->name;
            $_SESSION["user"] = $r->username;
            $_SESSION["rank"] = $r->rank;
         }
         $_SESSION["log"] = TRUE;
         header("Location: Admin.html");
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
                <input type="text" class="form-control" id="user_id" placeholder="User Name" name="user_id" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
            </div>
            <button class="loginBtn" onclick="none">Login</button>
        </form>  
            <ul>
                <li><a class="active" href="/Html/Home.html">Home</a></li>
                <li><a href="/Html/Home.html">Back</a></li>
                <li><a href="/Html/contact.html">Contact Us</a></li>
                <li><a href="#about">About</a></li>
            </ul>
        </div>
        </div>    
        </div>
    </body>
</head>
</html>