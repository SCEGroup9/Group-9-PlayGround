<?php
    session_start();
    //Connect
    $db = mysqli_connect("localhost","root","","project"); //games
    $db1 = mysqli_connect("localhost","root","","project"); //Users
    $db3 = mysqli_connect("localhost","root","","project"); //report
    $db4 = mysqli_connect("localhost","root","","project"); //enters
?>