<?php
include('connect.php');
if (!empty($_SESSION['username'])){
    header('Location: /Html/Cgame.php');
 }
 ?>

<html>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<head>
    <title>Guest Login</title>
    <link rel="stylesheet" href="/Css/LoginG.css">
    <body>
        <script>
            alert('We just wanted you to know some important things:\n1. Your records in the games as a guest not saved.\n2. As a guest you can`t change backgrounds and play music.\n3. You can`t watch the records table until the end of the games.\n4. Registered user have a personal profile.\nBe cool and register "PlayGround" you will not regret it.')
        </script> 
        <div class="login-page1">
        <div class="form1">
        <div class="login-popup-wrap new_login_popup"> 
        <div class="login-popup-heading text-center">
            <h4><i class="title" aria-hidden="true"></i> Guest Login </h4>                        
        </div>
        <button class="loginBtn" onclick="Cgames()">Continue As Guest</button>
        <script type="text/javascript">
            function Cgames() {
                window.location="/Html/CgameGuest.html";
            }
        </script>
        <div class="text-center">Not registered yet? <a href="/Html/reg.php">click here</a></div>
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