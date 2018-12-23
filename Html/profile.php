<?php
include('connect.php');
    if (isset($_SESSION['username'])){
        $player = $_SESSION['username'];
    }
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$result = $conn->query("SELECT sum(winnings) swin, sum(losses) slos, sum(countgames) scg, sum(points) spo FROM `precords` WHERE user='$player'");
$row = $result->fetch_assoc()

?>

<html>
<head>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Language', 'Rating'],
      <?php
      if($result->num_rows > 0){
          while($row = $result->fetch_assoc()){
            echo "['".$row['swin']."', ".$row['slos']."],";
          }
      }
      ?>
    ]);
    
    var options = {
        title: 'Most Popular Programming Languages',
        width: 900,
        height: 500,
    };
    
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    
    chart.draw(data, options);
}
</script>
</head>
<body>
    <!-- Display the pie chart -->
    <div id="piechart"></div>
</body>
</html>