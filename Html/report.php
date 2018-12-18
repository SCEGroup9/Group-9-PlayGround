<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Reports</title>
<link rel="stylesheet" href="/Css/report2.css">
<body>
<ul>
    <li><a class="active" href="/Html/Home.html">Home</a></li>
    <li><a onclick="goBack()">Back</a></li>
    <li><a href="/Html/about.html">About</a></li>
</ul>
<div class="container">
    <form action="report.php" method="post">
    <h2 align="center">Users reports</h2>
        <?php  include "connect.php";
            $sql = "SELECT id, FirstName, LastName, Country, Subj FROM reports";
            $result = mysqli_query($db3, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo "*" . " First Name : " . $row["FirstName"]. ", Last Name : " . $row["LastName"]. ", From : " . $row["Country"]. ", Report : ". $row["Subj"] ."<br>"."<br>";
                }
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
