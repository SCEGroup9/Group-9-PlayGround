
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Enters</title>
    <link rel="stylesheet" href="/Css/enters1.css">
    <body>
    <ul>
        <li><a class="active" href="/Html/Home.html">Home</a></li>
        <li><a onclick="goBack()">Back</a></li>
        <li><a href="/Html/about.html">About</a></li>
    </ul>
    <div class="container">
        <form action="report.php" method="post">
        <h2 align="center">Users entrances counter</h2>
            <?php  include("connect.php");
                $sql = "SELECT tDate, counts FROM enters ORDER BY tdate DESC";
                $result = mysqli_query($db4, $sql);
                if ($result->num_rows > 0) {
                    echo "<table><tr><th>DATE</th><th>Number Of Entrances</th></tr>";
                    while($row =$result->fetch_assoc()) {
                        echo "<tr><td>". $row["tDate"]. "</td><td>". $row["counts"]."<br>";
                    }
                    echo "</table>";
                } else {
                    echo "0 results";
                } 
            ?>
        </form>
    </div>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    </head>
    </body>
    </html>
    
