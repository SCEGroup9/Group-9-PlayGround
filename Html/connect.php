<?php
    session_name("session1");
    session_start();
    //Connect
    $db1 = mysqli_connect("localhost","root","","project"); //Users
    $db2 = mysqli_connect("localhost","root","","project"); //Users1
    $db3 = mysqli_connect("localhost","root","","project"); //report
    $db4 = mysqli_connect("localhost","root","","project"); //enters
?>