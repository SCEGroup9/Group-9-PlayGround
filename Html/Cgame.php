<?php
include('connect.php');
  if (isset($_SESSION['username'])){
    $user = $_SESSION['username'];
  }
?>

<html>
<head>
    <title>ChooseGame</title>
    <link rel="stylesheet" href="/Css/Cgame1.css">
    <body> 
        <div class="login-page">
        <div class="form">
            <h1>Hello <?php echo "$user"?>, choose your game</h1>
            <button class="button button1" onclick="Redirect()">Cards</button>
            <script type="text/javascript">
                function Redirect() {
                    window.location="/Html/cards.php";
                }
            </script>
            <button class="button button2" onclick="Redirect1()">Checkers</button>
            <script type="text/javascript">
                function Redirect1() {
                    window.location="/Html/checker.php";
                }
            </script>
            <ul>
                <li><a class="active" href="/Html/Home.html">Home</a></li>
                <li><a href="/Html/Home.html">Back</a></li>
                <li><a href="/Html/profile.php">Connected : <?php echo "$user"?></a></li>
                <li><a href="/Html/delete.php">Delete account</a></li>
                <li><a href="https://www.walla.co.il">Walla! portal</a></li>
                <li><a href="/Html/contact.php">Contact Us</a></li>
                <li><a href="/Html/about.html">About</a></li>
                <li><a class="logout" name="logout" href="logout.php">Log out</a></li>
          	</ul>
        </div>    
        </div>
    </body>
</head>
</html>