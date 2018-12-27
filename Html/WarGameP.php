<?php
include('connect.php');
  if (isset($_SESSION['username'])){
    $curr1 = $_SESSION['username'];
  }
  if (isset($_SESSION['username2'])){
    $curr2 = $_SESSION['username2'];
  }

  if(isset($_POST['back'])){
    unset($_SESSION['username2']);
  }
?>

<!DOCTYPE html>
<html>
<head>
<title>War Card Game</title>
<link rel="stylesheet" href="/Css/WarGame2.css">
<link rel="stylesheet" href="/Css/optionsCards.css">
<meta charset="utf-8">
<script type="text/javascript">
  function Play(){
  var myVideo = document.getElementById("music");
  if(myVideo.paused)
    myVideo.play();
  else
    myVideo.pause();
}
</script>


</head>
<body>
<script>
  var colors = ["lightblue", "lightgreen", "lightpink","silver","white"];
  var colorIndex = 0;
  function changeColor() {
  var col = document.getElementById("body");
  if( colorIndex >= colors.length ) {
    colorIndex = 0;
  }
  col.style.backgroundColor = colors[colorIndex];
  colorIndex++;
}
</script>

<div class="dropdown">
<button onclick="Options()" class="dropbtn">Options</button>
<div id="myDropdown" class="dropdown-content">
  <a href="#" onClick="Play();">Play/Pause Music</a>
  <audio preload="auto" src="/music/BGM.mp3" loop="true" autobuffer id="music"></audio>
  <body id='body'>
  <a href="#" onClick=" changeColor();">Change Color Background</a>      
</div>
</div> 

  <form id="game" role="form" action="WarGameP.php" method="post">
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
        <button id="Back" type="button" class="btn2" name="back" onclick="goBack()">Back</button>
      </div>
      <script>
        function goBack() {
            window.history.back();
        }
      </script>
  </div>
 
<script type="text/javascript">var user1 = "<?= $curr1 ?>";</script>
<script type="text/javascript">var user2 = "<?= $curr2 ?>";</script>
<script type="text/javascript" src="/Js/WarGameP.js"></script>
</form>

<script>
  function Options() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
} 
</script>
</body>
</html>