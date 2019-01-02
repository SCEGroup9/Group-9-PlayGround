<?php
include('connect.php');
  if (isset($_SESSION['username'])){
    $user = $_SESSION['username'];
  }
?>

<html>
<head>
    <title>Cards</title>
    <link rel="stylesheet" href="/Css/cards2.css">
    <body>
        <div class="button1">
            <button class="button1" onclick="Redirect1()">VS Computer</button>
            <script type="text/javascript">
                function Redirect1() {
                    window.location="/Html/WarGameCom.php";
                }
            </script>
        </div>
        <div class="button2">
            <button class="button2" onclick="Redirect2()">VS Player</button>
            <script type="text/javascript">
                function Redirect2() {
                   window.location="/Html/WarGameP.php";
                }
            </script>
        </div>
        <div class="button3">
            <button class="button3" onclick="Redirect3()">Instructions</button>
            <script type="text/javascript">
                function Redirect3() {
                    window.location="/Html/CardsIns.php";
                }
            </script>
        </div>
        <div class="button4">
            <button class="button4" onclick="Redirect4()">Records Table</button>
            <script type="text/javascript">
                function Redirect4() {
                    window.location="/Html/recordsmenu.html";
                }
            </script>
        </div>
        <div class="button5">
            <button class="button5" onclick="Redirect5()">Second Player Login</button>
            <script type="text/javascript">
                function Redirect5() {
                   window.location="/Html/User2log.php";
                }
            </script>
        </div>
        <ul>
            <li><a class="active" href="/Html/Home.html">Home</a></li>
            <li><a href="/Html/Cgame.php">Back</a></li>
            <li><a href="/Html/profile.php">Connected : <?php echo "$user"?></a></li>
            <li><a href="/Html/contact.php">Contact Us</a></li>
            <li><a href="/Html/about.html">About</a></li>
        </ul>
    </body>
</head>
</html>
