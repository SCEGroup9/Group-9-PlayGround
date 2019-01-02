<?php
 include "connect.php";

 if (isset($_SESSION['user_level']) && $_SESSION['user_level'] == 0){

?>

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
    <h2 align="center">Users Reports</h2>
        <?php 
            $sql = "SELECT id, FirstName, LastName, Email, Country, Subj FROM reports";
            $result = mysqli_query($db3, $sql);
            if ($result->num_rows > 0) {
                echo "<table><tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Country</th><th>Subject</th></tr>";
                while($row =$result->fetch_assoc()) {
                    echo "<tr><td>". $row["FirstName"]. "</td><td>". $row["LastName"]."</td><td>". $row["Email"]."</td><td>". $row["Country"]."</td><td>". $row["Subj"]."<br>";
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

<?php

} else {
    echo "<script>alert('Access denied, only administrators with appropriate permission can access this page'); window.location = './Home.html';</script>";
}

?>
