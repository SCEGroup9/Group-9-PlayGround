<?php
include('connect.php');
    if (isset($_SESSION['username'])){
        $curr = $_SESSION['username']." log out";
        echo "<script>alert(".json_encode($curr)."); window.location = './Home.html';</script>";
        session_unset(); 
        session_destroy(); 
    }
    else {
        echo "<script>alert('No user connection'); window.location = './Home.html';</script>"; 
    }
?>