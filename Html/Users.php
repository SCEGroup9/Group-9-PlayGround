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
    <h2 align="center">Users database 1</h2>
        <?php  include "connect.php";
            $sql = "SELECT FirstName, LastName, Age, Country, username, psw FROM users";
            $result = mysqli_query($db1, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo "*" . " First Name : " . $row["FirstName"]. ", Last Name : " . $row["LastName"]. ", Age : " . $row["Age"]. ", From : ". $row["Country"] . ", User-Name : ". $row["username"] . ", Password : ". $row["psw"]."<br>"."<br>";
                }
            } else {
                echo "0 results";
            } 
        ?>
</div>
<div class="container2">
    <h2 align="center">Users database 2</h2>
        <?php
            $sql = "SELECT id, username, rnk FROM users1";
            $result = mysqli_query($db2, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    if ($row["rnk"] == 0){
                        echo "*" . " User-Name : " . $row["username"]. ", Rank : Admin "."<br>"."<br>";
                    }
                    else{
                        echo "*" . " User-Name : " . $row["username"]. ", Rank : User "."<br>"."<br>";
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
