<?php
include('connect.php');
    if (isset($_SESSION['username'])){
        $player = $_SESSION['username'];
    }
    $sql = "SELECT user,sum(points) points FROM games group by user ORDER BY sum(points) DESC LIMIT 10" ; 
    $result = mysqli_query($db, $sql);
?>
<html>
<body>

<title>Recordsmenu</title>
 <link rel="stylesheet" href="/Css/globrec.css">
</head>
<body>
<ul>
    <li><a class="active" href="/Html/Home.html">Home</a></li>
    <li><a onclick="goBack()">Back</a></li>
    <li><a href="/Html/contact.php">Contact Us</a></li>
    <li><a href="/Html/about.html">About</a></li>            
 </ul>



<div class= "ab">
<h1>Top 10 Players!</h1>

<?php
if ($result->num_rows > 0) {
    echo "<table><tr><th>Place</th><th>Player Name</th><th>Points</th></tr>";
    // output data of each row
    $place=1;
    while($row = $result->fetch_assoc()) 
    {
        echo "<tr><td>". $place.  "</td><td>". $row["user"].  "</td><td>" . $row["points"] . "<br>";
        $place=$place+1;
    }
    echo "</table>";
} else {
    echo "0 results";
}



?> 
</div>



</head>
</body>
</html>

<script>
    function goBack() {
        window.history.back();
    }
</script>