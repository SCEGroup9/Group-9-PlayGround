<?php
 include("connect.php");

 if (isset($_SESSION['user_level']) && $_SESSION['user_level'] == 0){

?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Reports</title>
<link rel="stylesheet" href="/Css/users2.css">
<body>
<ul>
    <li><a class="active" href="/Html/Home.html">Home</a></li>
    <li><a onclick="goBack()">Back</a></li>
    <li><a href="/Html/AddAdmin.php">Add Admin</a></li>
    <li><a href="/Html/reg.php">Add User</a></li>
</ul>
<div class="container1">
    <form action="Users.php" method="post">
    <h2 align="center">Users Database</h2>
        <?php
            $sql = "SELECT FirstName, LastName, Age, Country, username, psw, rnk FROM users";
            $result = mysqli_query($db1, $sql);
            if ($result->num_rows > 0) {
                echo "<table><tr><th>First Name</th><th>Last Name</th><th>Age</th><th>Country</th><th>User-Name</th><th>Password</th><th>Rank</th></tr>";
                while($row =$result->fetch_assoc()) {
                    $rank;
                    if ($row['rnk']==0){
                        $rank = "Admin";
                    }
                    else {
                        $rank = "User";
                    }
                    echo "<tr><td>". $row["FirstName"]. "</td><td>". $row["LastName"]."</td><td>". $row["Age"]."</td><td>". $row["Country"]."</td><td>". $row["username"]."</td><td>". $row["psw"]."</td><td>". $rank."<br>";
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