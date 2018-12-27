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
  </div>
<script src="/Js/GuestWarGameP.js"></script>
</body>
</html>
