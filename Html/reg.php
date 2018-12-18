<?php 

include('connect.php');

if(isset($_POST['register'])){
  $FirstName = $_POST['FirstName'];
  $LastName = $_POST['LastName'];
  $Age = $_POST['Age'];
  $Country = $_POST['Country'];
  $username = $_POST['username'];
  $psw = $_POST['psw'];
  $pswr = $_POST['pswr'];
  $errors = array();
  $message = "";

  if (ctype_alpha($FirstName)==FALSE) {
      array_push ($errors ,"First name need to contain only letters\n");
  }
  if (ctype_alpha($LastName)==FALSE) {
      array_push ($errors ,"Last name need to contain only letters\n");
  }
  if (ctype_digit($Age)==FALSE) {
      array_push ($errors ,"Age need to contain only digits\n");
  }
  if (ctype_alpha($Country)==FALSE) {
      array_push ($errors ,"Country need to contain only letters\n");
  }
  if (ctype_alnum($username)==FALSE) {
      array_push ($errors ,"User name need to contain only letters and digits\n");
  }
  if (ctype_alnum($psw)==FALSE) {
      array_push ($errors ,"Password need to contain only letters and digits\n");
  }
  if ($psw != $pswr) {
      array_push ($errors ,"Passwords are not matched\n");
  }
  if (empty($errors)){
      $sql = "INSERT INTO Users(FirstName, LastName, Age, Country, username, psw, pswr) 
                  VALUES('$FirstName', '$LastName', '$Age', '$Country', '$username', '$psw', '$pswr')";
      mysqli_query($db1, $sql);
      $sql1= "INSERT INTO Users1(FirstName, username, psw, rnk) VALUES ('$FirstName','$username','$psw',1)";
      mysqli_query($db2, $sql1);
      $_SESSION['username'] = $username;
      header('location: /Html/LoginU.php');
  }
  else{
      foreach ($errors as $error){
          $message .= $error;
      }
      echo "<script>alert(".json_encode($message)."); window.location = './reg.php';</script>";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<title>Registertion</title>
<link rel="stylesheet" href="/Css/reg.css">
<body>
<form action="reg.php" method="post">
  <div class="container">
    <h1 align="center">Register</h1>
    <p align="center">Please fill in this form to create an account</p>
    <hr>
    <div class="form-contain">
      <div class="form-left">
        <label for="First Name"><b>First Name</b></label>
        <input type="text" placeholder="First Name" name="FirstName" required>
  
        <label for="Last Name"><b>Last Name</b></label>
        <input type="text" placeholder="Last Name" name="LastName" required>
  
        <label for="Age"><b>Age</b></label>
        <input type="text" placeholder="Age" name="Age" required>
  
        <label for="Country"><b>Country</b></label>
        <input type="text" placeholder="Country" name="Country" required>
      </div>
      <div class="form-right">
        <label for="username"><b>User Name</b></label>
        <input type="text" placeholder="Enter User Name" name="username" required>
      
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
      
        <label for="pswr"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="pswr" required>
      </div>
    </div>
    <hr>
    <button type="submit" name="register" class="registerbtn">Register</button>
  </div>
  <div class="container signin">
    <p>Already have an account? <a href="/Html/LoginU.php">Sign in</a>.</p>
    <p><a href="/Html/Home.html">Go Back</a></p>
  </div>
</form>

</body>
</html>