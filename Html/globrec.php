<html>
<body>

<title>Recordsmenu</title>
 <link rel="stylesheet" href="/Css/globrec.css">
</head>
<body>

<div class= "ab">

<?php
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

$sql = "SELECT user,gamename,points FROM grecords ORDER BY points DESC; ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Player Name</th><th>Game Name</th><th>Points</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
        echo "<tr><td>". $row["user"].  "</td><td>". $row["gamename"]. "</td><td>" . $row["points"] . "<br>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();


?> 
</div>
<ul>
    <li><a class="active" href="/Html/Home.html">Home</a></li>
    <li><a onclick="goBack()">Back</a></li>
    <li><a class="Share" onclick="Share()"></a></li>
    <li><a href="/Html/contact.php">Contact Us</a></li>
    <li><a href="/Html/about.html">About</a></li>
</ul>
<script>
    function Share() {
        window.open("https://www.facebook.com/sharer/sharer.php?u=http://www.localhost/Html/globrec.php");
    }
</script>
<script>
    function goBack() {
        window.history.back();
    }
</script>
</head>
</body>
</html>

