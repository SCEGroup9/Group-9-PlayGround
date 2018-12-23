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
</ul>
<div class="container1">
    <form action="Users.php" method="post">
    <h2 align="center">Users Database 1</h2>
        <?php  include "connect.php";
            $sql = "SELECT FirstName, LastName, Age, Country, username, psw FROM users";
            $result = mysqli_query($db1, $sql);
            if ($result->num_rows > 0) {
                echo "<table><tr><th>First Name</th><th>Last Name</th><th>Age</th><th>Country</th><th>User-Name</th><th>Password</th></tr>";
                while($row =$result->fetch_assoc()) {
                    echo "<tr><td>". $row["FirstName"]. "</td><td>". $row["LastName"]."</td><td>". $row["Age"]."</td><td>". $row["Country"]."</td><td>". $row["username"]."</td><td>". $row["psw"]."<br>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            } 
        ?>
</div>

<div class="container2">
    <h2 align="center">Users Database 2</h2>
        <?php
            $sql = "SELECT id, username, rnk FROM users1";
            $result = mysqli_query($db2, $sql);
            if ($result->num_rows > 0) {
                echo "<table><tr><th> User-Name</th><th>Rank</th></tr>";
                while($row =$result->fetch_assoc()) {
                    if ($row["rnk"] == 0){
                        echo "<tr><td>". $row["username"]. "</td><td> Admin <br>";
                    }
                    else{
                        echo "<tr><td>". $row["username"]. "</td><td> User <br>";
                    }
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
