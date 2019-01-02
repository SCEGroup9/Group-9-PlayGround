<html>
<head>
<title>Cards Instruction</title>
<link rel="stylesheet" href="/Css/CardsIns.css">
</head>
<body>
<div class="ab">
<h3> Cards Instruction: </h3>
<?php 
    include 'CardsInstruction.php';
    echo "$GameData";
    
?>
<?php
include('connect.php');
    if (!empty($_SESSION['username'])){
        echo "<html>";
        echo "<h3> Points: </h3>";
        include 'CardsInstruction.php';
        echo "$Points";
    }
?>
</div>
<ul>
    <li><a class="active" href="/Html/Home.html">Home</a></li>
    <li><a onclick="goBack()">Back</a></li>
    <li><a href="/Html/contact.php">Contact Us</a></li>
    <li><a href="/Html/about.html">About</a></li>
</ul>
<script>
    function goBack() {
        window.history.back();
    }
</script>
</body>
</html>