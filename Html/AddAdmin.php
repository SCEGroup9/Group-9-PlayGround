<?php
include('connect.php');

 if(isset($_POST['add'])){
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $username = $_POST['username']; 
    $sql = "SELECT * FROM `users` WHERE `FirstName` = '$FirstName' AND `LastName` = '$LastName' AND `username` = '$username'";
    $res = mysqli_query($db1, $sql);
    $row = mysqli_num_rows($res);
    if($row == 1){
        $sql1 = "SELECT rnk FROM `users1` WHERE `FirstName` = '$FirstName' AND  `username` = '$username'";;
        $res1 = mysqli_query($db2, $sql1);
        $row1 = mysqli_fetch_assoc($res1);
        if ($row1['rnk'] == 0){
            echo "<script type='text/javascript'>alert('$username is already Admin');</script>";
        }
        else{
            $sql2 = "UPDATE `Users1` SET `rnk` = '0' WHERE `username` = '$username'";
            mysqli_query($db2, $sql2);
            echo "<script>alert('$username is now an admin - welcome to PlayGround crow'); window.location = './Admin.html';</script>";
        }
    }
    else {
        echo "<script type='text/javascript'>alert('User not found - incorrect details were entered');</script>";
    }
}
?>

<html>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<head>
    <title>User Login</title>
    <link rel="stylesheet" href="/Css/AddAdmin.css">
    <body> 
        <div class="login-page1">
        <div class="form1">
        <div class="login-popup-wrap new_login_popup"> 
        <div class="login-popup-heading text-center">
            <h4><i class="title" aria-hidden="true"></i><strong> Add new admin </strong></h4>
            <h5><i class="pass" aria-hidden="true"></i> Enter the details for the user you want to add as admin </h5>                       
        </div>
        <form id="loginMember" role="form" action="AddAdmin.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" id="FirstName" placeholder="Enter first name" name="FirstName" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="LastName" placeholder="Enter last name" name="LastName" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="username" placeholder="Enter User Name" name="username" required>
            </div>
            
            <button class="loginBtn" name="add">Add as Admin</button>
        </form>
        <ul>
            <li><a class="active" href="/Html/Home.html">Home</a></li>
            <li><a href="/Html/Admin.html">Back</a></li>
        </ul>
        </div>
        </div>    
        </div>
</html>