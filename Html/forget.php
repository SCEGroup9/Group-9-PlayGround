<?php
 include "connect.php";

 if(isset($_POST['restore'])){

     $username = $_POST['username'];
     $age = $_POST['age'];
     $Country = $_POST['Country'];
     $sql = "SELECT * FROM `Users` WHERE `username` = '$username' AND `age` = '$age' AND `country` = '$Country'";
     $res = mysqli_query($db1, $sql);
     $numrows = mysqli_num_rows($res);
     if($numrows == 1) {
        $pass = "SELECT `psw` FROM `Users`";
        $result = mysqli_query($db1, $pass);
        $row = mysqli_fetch_assoc($result);
        $message = "pass: " . $row["psw"];
        echo "<script type='text/javascript'>alert('$message');</script>";
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
    <title>Forget password</title>
    <link rel="stylesheet" href="/Css/Forget.css">
    <body>
        <div class="login-page1">
        <div class="form1">
        <div class="login-popup-wrap new_login_popup">
        <div class="login-popup-heading text-center">
            <h4><i class="title" aria-hidden="true"></i><strong> Password Restore </strong></h4>
            <h4><i class="pass" aria-hidden="true"></i> Enter details for identification </h4>
        </div>
        <form id="loginMember" role="form" action="forget.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" id="username" placeholder="Enter user name" name="username" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="age" placeholder="Enter your age" name="age" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="Country" placeholder="Enter your country" name="Country" required>
            </div>
            <button class="loginBtn" name="restore">Click to restore</button>
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