<?php include('connect.php') ?>
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
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
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
    <p>Already have an account? <a href="/Html/LoginU.html">Sign in</a>.</p>
    <p><a href="/Html/Home.html">Go Back</a></p>
  </div>
</form>

</body>
</html>