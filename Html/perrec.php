<?php
include('connect.php');
    if (isset($_SESSION['username'])){
        $player = $_SESSION['username'];
    }
    $sql = "SELECT user,gamename,points,winnings,losses,countgames FROM precords WHERE gamename='cards' and user='$player'" ; 
    $result = mysqli_query($db6, $sql);
    $sqll = "SELECT user,gamename,points,winnings,losses,countgames FROM precords WHERE gamename='checkers' and user='$player' ";
    $resultt = mysqli_query($db6, $sqll);
?>

<html>
<title>PersonalRecords</title>
 <link rel="stylesheet" href="/Css/perrec.css">
</head>
<body>

<ul>
    <li><a class="active" href="/Html/Home.html">Home</a></li>
        <li><a onclick="goBack()">Back</a></li>
        <li><a href="/Html/contact.php">Contact Us</a></li>
        <li><a href="/Html/about.html">About</a></li>               
 </ul>


<div class= "ab">

<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('cards')"> Cards</button>
  <button class="btn" onclick="filterSelection('checkers')"> Checkers</button>  
</div>


<div class="container">
    <div class="filterDiv cards">
        <?php
        if ($result->num_rows > 0) {
            echo "<table><tr><th>Game Name</th><th>Winnings</th><th>Losses</th><th>Points</th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                 echo "<tr><td>". $row["gamename"]. "</td><td>". $row["winnings"]. "</td><td>" . $row["losses"] . "</td><td>" . $row["points"] . "<br>";
            }
         echo "</table>";
        } 
        else {
         echo "0 results";
        }
        ?>
    </div>

    <div class="filterDiv checkers">
        <?php
        if ($resultt->num_rows > 0) {
            echo "<table><tr><th>Game Name</th><th>Winnings</th><th>Losses</th><th>Points</th></tr>";
            // output data of each row
            while($row = $resultt->fetch_assoc()) {
                echo "<tr><td>". $row["gamename"]. "</td><td>". $row["winnings"]. "</td><td>" . $row["losses"] . "</td><td>" . $row["points"] . "<br>";
            }
        echo "</table>";
        } 
        else {
        echo "0 results";
        }
        ?> 
    </div>
</div>

</div>


<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

function goBack() {
    window.history.back();
        }

</script>

</body>
</html>
