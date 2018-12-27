<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="stylesheet" href="/Css/optionsCheckers.css">
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
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Play Checkers</title>
    <link rel="stylesheet" href="/Css/checkerG.css">
</head>
<body >
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
    
    <div class="table">
        <div class="wsquare" >  </div>
        <div class="bsquare" id="0.0" onclick="movepiece(id)">  </div>
        <div class="wsquare">  </div>
        <div class="bsquare" id="1.0" onclick="movepiece(id)">  </div>
        <div class="wsquare" >  </div>
        <div class="bsquare" id="2.0" onclick="movepiece(id)">  </div>
        <div class="wsquare">  </div>
        <div class="bsquare" id="3.0" onclick="movepiece(id)">  </div>
        <div class="clear_float"> </div>
        
        <div class="bsquare" id="4.0" onclick="movepiece(id)">  </div> 
        <div class="wsquare">  </div>
        <div class="bsquare" id="5.0" onclick="movepiece(id)">  </div>
        <div class="wsquare">  </div>
        <div class="bsquare" id="6.0" onclick="movepiece(id)">  </div>
        <div class="wsquare" >  </div>   
        <div class="bsquare" id="7.0" onclick="movepiece(id)">  </div>
        <div class="wsquare" >  </div>
        <div class="clear_float"> </div>


        <div class="wsquare">  </div>
        <div class="bsquare" id="8.0" onclick="movepiece(id)">  </div>
        <div class="wsquare">  </div>
        <div class="bsquare" id="9.0" onclick="movepiece(id)">  </div>
        <div class="wsquare">  </div>
        <div class="bsquare" id="10.0" onclick="movepiece(id)">  </div>
        <div class="wsquare">  </div>
        <div class="bsquare" id="11.0" onclick="movepiece(id)">  </div>
        <div class="clear_float"> </div>

        <div class="bsquare" id="12.0" onclick="movepiece(id)">  </div>
        <div class="wsquare">  </div>
        <div class="bsquare" id="13.0" onclick="movepiece(id)">  </div>
        <div class="wsquare">  </div>
        <div class="bsquare" id="14.0" onclick="movepiece(id)">  </div>
        <div class="wsquare">  </div>   
        <div class="bsquare" id="15.0" onclick="movepiece(id)">  </div>
        <div class="wsquare">  </div>
        <div class="clear_float"> </div>

        
  
        <div class="wsquare">  </div>
        <div class="bsquare" id="16.0" onclick="movepiece(id)">  </div>
        <div class="wsquare">  </div>
        <div class="bsquare" id="17.0" onclick="movepiece(id)">  </div>
        <div class="wsquare">  </div>
        <div class="bsquare" id="18.0" onclick="movepiece(id)">  </div>
        <div class="wsquare">  </div>
        <div class="bsquare" id="19.0" onclick="movepiece(id)">  </div>
        <div class="clear_float"> </div>

        <div class="bsquare" id="20.0" onclick="movepiece(id)">  </div>
        <div class="wsquare">  </div>
        <div class="bsquare" id="21.0" onclick="movepiece(id)">  </div>
        <div class="wsquare">  </div>
        <div class="bsquare" id="22.0" onclick="movepiece(id)">  </div>
        <div class="wsquare">  </div>   
        <div class="bsquare" id="23.0" onclick="movepiece(id)">  </div>
        <div class="wsquare">  </div>
        <div class="clear_float"> </div>

        

        <div class="wsquare">  </div>
        <div class="bsquare" id="24.0" onclick="movepiece(id)">  </div>
        <div class="wsquare">  </div>
        <div class="bsquare" id="25.0" onclick="movepiece(id)">  </div>
        <div class="wsquare">  </div>
        <div class="bsquare" id="26.0" onclick="movepiece(id)">  </div>
        <div class="wsquare">  </div>
        <div class="bsquare" id="27.0" onclick="movepiece(id)">  </div>
        <div class="clear_float"> </div>

        <div class="bsquare" id="28.0" onclick="movepiece(id)">  </div>
        <div class="wsquare">  </div>
        <div class="bsquare" id="29.0" onclick="movepiece(id)">  </div>
        <div class="wsquare">  </div>
        <div class="bsquare" id="30.0" onclick="movepiece(id)">  </div>
        <div class="wsquare">  </div>   
        <div class="bsquare" id="31.0" onclick="movepiece(id)">  </div>
        <div class="wsquare">  </div>
        <div class="clear_float"> </div>

    </div>
<div class="table">
  
    <!--white row 1 -->
    <div class="space"></div>
    <div class="wpiece" id="1" onclick="myFunc(id)"></div>
    <div class="space"></div>
    <div class="wpiece" id="2" onclick="myFunc(id)"></div>
    <div class="space"></div>
    <div class="wpiece" id="3" onclick="myFunc(id)"></div>
    <div class="space"></div>
    <div class="wpiece" id="4" onclick="myFunc(id)"></div>
  
    <!--white row 2 -->
    <div class="wpiece" id="5" onclick="myFunc(id)"></div>
    <div class="space"></div>
    <div class="wpiece" id="6" onclick="myFunc(id)"></div>
    <div class="space"></div>
    <div class="wpiece" id="7" onclick="myFunc(id)"></div>
    <div class="space"></div>
    <div class="wpiece" id="8" onclick="myFunc(id)"></div>
    <div class="space"></div>
  
    <!--white row 3 -->
    <div class="space"></div>
    <div class="wpiece" id="9" onclick="myFunc(id)"></div>
    <div class="space"></div>
    <div class="wpiece" id="10" onclick="myFunc(id)"></div>
    <div class="space"></div>
    <div class="wpiece" id="11" onclick="myFunc(id)"></div>
    <div class="space"></div>
    <div class="wpiece" id="12" onclick="myFunc(id)"></div>
    
    <!-- black row1 -->
    <div class="bpiece" id="13" onclick="myFunc(id)"></div>
    <div class="space"></div>
    <div class="bpiece" id="14" onclick="myFunc(id)"></div>
    <div class="space"></div>
    <div class="bpiece" id="15" onclick="myFunc(id)"></div>
    <div class="space"></div>
    <div class="bpiece" id="16" onclick="myFunc(id)"></div>
    <div class="space"></div>

    <!-- black row2 -->
    <div class="space"></div>
    <div class="bpiece" id="17" onclick="myFunc(id)"></div>
    <div class="space"></div>
    <div class="bpiece" id="18" onclick="myFunc(id)"></div>
    <div class="space"></div>
    <div class="bpiece" id="19" onclick="myFunc(id)"></div>
    <div class="space"></div>
    <div class="bpiece" id="20" onclick="myFunc(id)"></div>

     <!-- black row3 -->
     <div class="bpiece" id="21" onclick="myFunc(id)"></div>
     <div class="space"></div>
     <div class="bpiece" id="22" onclick="myFunc(id)"></div>
     <div class="space"></div>
     <div class="bpiece" id="23" onclick="myFunc(id)"></div>
     <div class="space"></div>
     <div class="bpiece" id="24" onclick="myFunc(id)"></div>
     <div class="space"></div>    
</div>
<body id='body'>
<button class="button" onclick="KingExsample()">The King</button>


<div class="dropdown">
        <button onclick="Options()" class="dropbtn">Options</button>
        <button onclick="goBack()" class="btn1">Back</button>
        <button onclick="restartPage()" class="btn2">Restart</button>
        <div id="myDropdown" class="dropdown-content">
                <a href="#" onClick="Play();">Play/Pause Music</a>
                <audio preload="auto" src="/music/BGM.mp3" loop="true" autobuffer id="music"></audio>
                <body id='body'>
                <a href="#" onClick=" changeColor();">Change Color Background</a>
         
        </div>
      </div> 

<h1 id="title">checkers</h1>
<div>
    
    <p id="turn"></p>
    <p id="score">  player1  :  player2 </p>
    <p id="score1"></p>
</div>
<div id="winner"></div>
    <script src="/Js/GuestcheckerG.js"> </script>

    <script>
        function goBack() {
            window.history.back();
        }
        function restartPage() {
            location.reload();
        }
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