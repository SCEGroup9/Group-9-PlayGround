<?php
include('connect.php');
    if (isset($_SESSION['username'])){
        $player = $_SESSION['username'];
    }
$sql = "SELECT sum(winnings) swin, sum(losses) slos, sum(countgames) scg, sum(points) spo FROM `precords` WHERE user='$player'" ; 
$result = mysqli_query($db6, $sql); 
$row = $result->fetch_assoc();
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

<h1><?php echo $player ?> Here is Youre Game Statistics:</h1>

 <div class= "ab"> 
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
    <?php  echo "['games you won', ".$row['swin']."],";
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
    </script> 

    <div id="piechart" style="width: 700px; height: 500px; left:10px;"></div>


  </body>
</html>


