<?php
 include('connect.php');

 if(isset($_POST['login'])){
     $username = $_POST['username'];
     $psw = $_POST['psw'];
     $sql = "SELECT * FROM `Users1` WHERE `username` = '$username' AND `psw` = '$psw' AND `rnk` = '0'";
     $res = mysqli_query($db1, $sql);
     $numrows = mysqli_num_rows($res);
     if($numrows == 1){
        echo "<script>alert('Welcome $username you are now connected as admin'); window.location = './Admin.html';</script>";
        $_SESSION['username'] = $username;
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
    }
    else {
        echo "<script type='text/javascript'>alert('You are not admin/incorrect details were entered');</script>";
    }
}
?>
<html>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="/Css/LoginA1.css">
    <body>
        <div class="login-page1">
        <div class="form1">
        <div class="login-popup-wrap new_login_popup">
        <div class="login-popup-heading text-center">
            <h4><i class="title" aria-hidden="true"></i> Admin Login </h4>
        </div>
        <form id="loginMember" role="form" action="LoginA.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" id="username" placeholder="Enter user Name" name="username" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="psw" placeholder="Enter password" name="psw" required>
            </div>
            <button class="loginBtn" name="login">Login</button>
        </form>
        </div>
        </div>
        </div>
        <div>
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
    </body>
</head>
</html>
