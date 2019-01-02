<?php
    session_start();
    //Connect
    $db1 = mysqli_connect("localhost","root","","project"); //Users
    $db2 = mysqli_connect("localhost","root","","project"); //Users1
    $db3 = mysqli_connect("localhost","root","","project"); //report
    $db4 = mysqli_connect("localhost","root","","project"); //enters
    $db5 = mysqli_connect("localhost","root","","project"); //grecords
    $db6 = mysqli_connect("localhost","root","","project"); //precords
    $db = mysqli_connect("localhost","root","","project"); //games

?>