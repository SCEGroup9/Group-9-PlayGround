<?php
 include('connect.php');

if (isset($_SESSION['user_level']) && $_SESSION['user_level'] == 0){

?>

<html>
<head>
    <title>Admin Page</title>
    <link rel="stylesheet" href="/Css/Admin2.css">
    <body> 
        <div class="login-page">
        <div class="form">
        <h1>Admin Page</h1>
        <button class="UD" onclick="Redirect()">Update Users Database</button>
        <script type="text/javascript">
            function Redirect() {
                window.location="/Html/Users.php";
            }
        </script>
        <button class="rule" onclick="Redirect1()">Update Rules</button>
        <script type="text/javascript">
            function Redirect1() {
                window.location="UpdateRulesMenu.html";
            }
        </script>
        <button class="report" onclick="Redirect2()">Users Reports</button>
        <script type="text/javascript">
            function Redirect2() {
                window.location="/Html/report.php";
            }
        </script>
        <button class="hit" onclick="Redirect3()">Users Hits</button>
        <script type="text/javascript">
            function Redirect3() {
                window.location="/Html/enters.php";
            }
        </script>
        </div>    
        </div>
        <div>
        <ul>
            <li><a class="active" href="/Html/Home.html">Home</a></li>
            <li><a href="/Html/Home.html">Back</a></li>
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

<?php

} else {
    echo "<script>alert('Access denied, only administrators with appropriate permission can access this page'); window.location = './Home.html';</script>";
}

?>
