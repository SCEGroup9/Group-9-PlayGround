<?php
    session_start();
    //Connect
    $db1 = mysqli_connect("sql102.epizy.com","epiz_23059576","34821317","epiz_23059576_DB");
    $db2 = mysqli_connect("sql102.epizy.com","epiz_23059576","34821317","epiz_23059576_DB");

    if(isset($_POST['register'])){
        $FirstName	 = $_POST['FirstName'];
        $LastName = $_POST['LastName'];
        $Age = $_POST['Age'];
        $Country = $_POST['Country'];
        $username = $_POST['username'];
        $psw = $_POST['psw'];
        $pswr = $_POST['pswr'];

        if ($psw == $pswr) {
            $sql = "INSERT INTO Users(FirstName, LastName, Age, Country, username, psw, pswr) 
                      VALUES('$FirstName', '$LastName', '$Age', '$Country', '$username', '$psw', '$pswr')";
            mysqli_query($db1, $sql);
            $sql1= "INSERT INTO Users1(FirstName, username, psw, rnk) VALUES ('$FirstName','$username','$psw',1)";
            mysqli_query($db2, $sql1);
            $_SESSION['username'] = $username;
            header('location: /Html/LoginU.php');
        }
        else {
            ?>
                <script>window.alert("Passwords not match");</script>
            <?php
        }
    }
?>