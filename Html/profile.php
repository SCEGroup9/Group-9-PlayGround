<?php
include('connect.php');
    if (isset($_SESSION['username'])){
        $player = $_SESSION['username'];
    }

$sql= "SELECT a.username ,COALESCE(ga.swin,0) swin, COALESCE(gam.slos,0) slos, COALESCE(ga.points,0) points
        FROM users a 
        left join 
        (SELECT user,count(user) slos
        FROM games WHERE Gstatus=0 group by user) gam 
        on a.username=gam.user 
        left join 
        (SELECT user, count(user) swin, sum(points) points FROM games WHERE Gstatus=1 group by user) ga
        on a.username=ga.user 
        WHERE a.username='$player'
        group by a.username ";
$result = mysqli_query($db, $sql); 
$row = $result->fetch_assoc();

$sqll="SELECT user, COALESCE(sum(points),0) cardpoints FROM games WHERE  user='$player' and gamename='cards' group by user";
$resultt = mysqli_query($db, $sqll); 
$roww = $resultt->fetch_assoc();

$ssql="SELECT user, COALESCE(sum(points),0) checkerspoints FROM games WHERE  user='$player' and gamename='checkers' group by user";
$rresult = mysqli_query($db, $ssql); 
$rrow = $rresult->fetch_assoc();

?>

<html>
<title>userprofile</title>
 <link rel="stylesheet" href="/Css/profile.css">
  <head>
      <body>  
<ul>
    <li><a class="active" href="/Html/Home.html">Home</a></li>
    <li><a onclick="goBack()">Back</a></li>
    <li><a href="/Html/contact.php">Contact Us</a></li>
    <li><a href="/Html/about.html">About</a></li>               
 </ul>

<h1>Hello <?php echo $player ?> ! </br>Here are Your Games Statistics:</h1>

<div class="row">
  <div class="column">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          <?php echo "['games you won', ".$row['swin']."],";
            echo "['games you lost', ".$row['slos']."],";     
          ?>
          ]);
        var options = {
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }

      function goBack() {
        window.history.back();
      }
    </script>
    <div class = "p1" id="piechart" style="width: 700px; height:500px; "></div>
</div>
<div class="column">
        <h2>Total Cards Score: <?php echo $roww['cardpoints'] ?></br>
         Total Checkers Score:<?php echo $rrow['checkerspoints'] ?></h2>
</div>
</div>
</body>
</html>
