<?php
include "log.php";
include "connect.php";

if(isset($_POST["First_Name"])){
  $first = $_POST["First_Name"]; 
  $last = $_POST["Last_Name"];
  $age=$_POST["Age"];
  $contry=$_POST["Country"];
  $user = $_POST["username"]; 
  $pass = $_POST["psw"];
  $repass = $_POST["psw-repeat"];
  $q2 = "SELECT * FROM `accounts` WHERE `username` = '$user'";
  $res = mysqli_query($con, $q2);
  $numrows = mysqli_num_rows($res);
  $q = "INSERT INTO `userdata` (`first_name`, `last_name`, `age`, `country`, `email`) VALUES ('$first','$last','$age','$contry','$user')"; 
  mysqli_query($con2, $q);
  $q3= "INSERT INTO `accounts`( `name`, `username`, `pass`, `rank`) VALUES ('$user','$user','$pass',1)";
  mysqli_query($con, $q3);

  header("Location: LoginU.php");
  ?>
    <script>window.alert("sometext");</script>
    <?php
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<title>Registertion</title>
<link rel="stylesheet" href="/Css/registertion.css">
<body>
<form action="reg.php" method="post">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <div class="form-contain">
      <div class="form-left">
        <label for="First Name"><b>First Name</b></label>
        <input type="text" placeholder="First Name" name="First_Name" required>
  
        <label for="Last Name"><b>Last Name</b></label>
        <input type="text" placeholder="Last Name" name="Last_Name" required>
  
        <label for="Age"><b>Age</b></label>
        <input type="text" placeholder="Age" name="Age" required>
  
        <label for="Country"><b>Country</b></label>
        <input type="text" placeholder="Country" name="Country" required>
      </div>
      <div class="form-right">
        <label for="email"><b>User Name</b></label>
        <input type="text" placeholder="Enter Email" name="username" required>
      
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
      
        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
      </div>
    </div>
    <hr>
    <button type="submit" class="registerbtn">Register</button>
  </div>
  <div class="container signin">
    <p>Already have an account? <a href="/Html/LoginU.html">Sign in</a>.</p>
    <p><a href="/Html/Home.html">Go Back</a></p>
  </div>
</form>

</body>
</html>