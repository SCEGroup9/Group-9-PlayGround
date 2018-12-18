<?php
include('connect.php');
    if (isset($_SESSION['username'])){
        $curr = $_SESSION['username'];
    }    
?>

<!DOCTYPE html>
<html>
<head>
<title>War Card Game</title>
<link rel="stylesheet" href="/Css/WarGame2.css">

</head>
<body>
  <div id="wrapper">
    <div id="message">Click "Fight" to start!</div>
    <div id="board">
      <div id="player1" class="players">
        <div>SCORE:   <span class="score"></span></div>
        <div class="hand"></div>
      </div>
      <div id="player2" class="players">
        <div>SCORE:   <span class="score"></span></div>
        <div class="hand"></div>
      </div>
      <div id="action">
        <button id="btnBattle" type="button" class="btn">Fight</button>
      </div>
      <div id="action">
        <button id="Restart" type="button" class="btn1" onclick="restartPage()">Restart</button>
      </div>
      <script>
        function restartPage() {
            location.reload();
        }
        </script>
      <div id="action">
        <button id="Back" type="button" class="btn2" onclick="goBack()">Back</button>
      </div>
      <script>
        function goBack() {
            window.history.back();
        }
      </script>
      <div id="action">
        <button id="Share" type="button" class="btn3" onclick="Share()"></button>
      </div>
      <script>
        function Share() {
            window.open("https://www.facebook.com/sharer/sharer.php?u=Home.html");
        }
      </script>
    </div>
  </div>
<script type="text/javascript">var user = "<?= $curr ?>";</script>
<script type="text/javascript" src="/Js/WarGameCom.js"></script>
</body>
</html>
