<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>


<!DOCTYPE html>
<html>
    <head>    
        <title>SMART TIMETABLE</title>
        <link rel="stylesheet" href="about].css">
    </head>
<body>
        <div class="main">
         <nav>                
            <div class="nav-links">
                <ul>
                    <li><a href="log in.php"> <h1>HOME</h1></a></li>
                    <li><a href="about.php">ABOUT US</a></li>
                    <li><a href="contact.php">CONTACT US</a></li>
                    <li><a href="index.php">LOG OUT</a></li>
                </ul>
            </div>
         </nav>