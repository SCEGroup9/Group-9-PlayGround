<?php
 include "connect.php";

 if(isset($_POST['submit'])){
    $FirstName	 = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $Country = $_POST['Country'];
    $Subj = $_POST['Subj'];
    $sql3= "INSERT INTO reports (FirstName, LastName, Country, Subj) VALUES ('$FirstName','$LastName','$Country','$Subj')";
    mysqli_query($db3, $sql3);
    echo "<script type='text/javascript'>alert('Thanks for your report');</script>";
}
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contact Us</title>
<link rel="stylesheet" href="/Css/contact.css">
<body>
<div class="container">
  <form action="contact.php" method="post">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="FirstName" placeholder="First Name" required>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="LastName" placeholder="Last Name" required>

    <label for="country">Country</label>
    <input type="text" id="countrt" name="Country" placeholder="Country" required>
    
    <label for="subject">Subject</label>
    <textarea id="subject" name="Subj" placeholder="Write something..." style="height:200px"></textarea>

    <input type="submit" name="submit" value="Submit">
  </form>
</div>
<ul>
    <li><a class="active" href="/Html/Home.html">Home</a></li>
    <li><a onclick="goBack()">Back</a></li>
    <li><a href="/Html/about.html">About</a></li>
</ul>
<script>
    function goBack() {
        window.history.back();
    }
</script>
</head>
</body>
</html>
