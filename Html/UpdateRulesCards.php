<html>
   <head>
      <title>Update Cards Rules</title>
      <link rel="stylesheet" href="/Css/CardsIns.css">
   </head>
   
   <body>
       
   <div class="ab">
   <h3> Current Rules for checkers:</h3>
<?php 
    include 'CardsInstruction.php';
    echo "$GameData";
?>
<?php
if(isset($_POST['rules'])) {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn === false){ 
    die("ERROR: Could not connect. " 
            . $conn->connect_error); 
} 

$RulesChecker = $_POST['rules'];
$sql = "UPDATE `rules` SET `Rules`='$RulesChecker' WHERE Nameofgame = 'Cards'"; 

if($conn->query($sql) === true){ 
    echo "Rules was updated successfully."; 
} else{ 
    echo "ERROR: Could not able to execute $sql. "  
                                        . $conn->error; 
} 
$conn->close(); 
}else{ 

?> 
  <form action="<?php $_PHP_SELF ?>" method="post">
  <br>
  
    <label for="rules"><h3> Update rules:</h3></label>
    <br>
    <textarea name="rules" placeholder="Write something..." style="height:100px"></textarea>
    <br>
    <br>
    <input type="submit" name="submit" value="Update">
  </form>
 
<?php

}
?>  </div> 
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