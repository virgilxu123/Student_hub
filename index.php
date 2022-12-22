<?php
    require_once 'connection.php';
    include 'register.php';
    include 'login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="css\styles.css">
    <title>Document</title>
</head>
<body>
    <div class="nav-container">
        <div class="logo">
            <img src="images\ACCSlconNavigation.png" alt="">
        </div>
        <div class="links">
            <a href="#home">Home</a>
            <a href="#">Announcements</a>
            <a href="#events">Events</a>
            <a href="#">Forum</a>
        </div>
        <div class="log">
            <div class="log-container">
                <button id="login">Login <i style='font-size:1rem;margin-left:.2rem;' class='fas'>&#xf406;</i> </button>
            </div>
        </div>
    </div>


<!-- Home -->
    <div id="home">
        <div class="left">
            <div class="container">
                <p class="left-content1">Welcome to College of Information Technology Education</p>
                <p class="left-content2">Student Hub</p>
                <p class="left-content3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque numquam consequuntur velit quaerat fugit nisi sunt aspernatur omnis dignissimos debitis quidem ipsa quod quisquam eligendi, corrupti, exercitationem aut ut perspiciatis.</p>
                <button class="left-content4" id="myBtn">Register</button>
            </div>
        </div>
        <div class="right">
            <img src="images\student.png" alt="">
        </div>
    </div>
<!-- Home -->
<!-- Events -->
    <h1 class="h1">EVENTS</h1>
    <div id="events">
        <div class="left-events">
            <div class="cover">
                <h1 class="p3">CITE Day and IT Lympics Activities</h1>
                <h4 class="p4">"Creative Minds Generates Technological Innovations."</h4>
            </div>        
        </div>
        <div class="act-container">
            <div class="act">
                <img src="images\4.jpg" alt="">
                <p class="p1">Day 1 Activity</p>
                <p class="p2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima architecto sequi rerum impedit fugit veritatis.</p>  
            </div>
            <div class="act">
                <img src="images\laboratory1.jpg" alt=""> 
                <p class="p1">Day 2 Activity</p>
                <p class="p2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima architecto sequi rerum impedit fugit veritatis.</p>             
            </div>
            <div class="act">
                <img src="images\2.jpg" alt="">
                <p class="p1">Day 3 Activity</p>
                <p class="p2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima architecto sequi rerum impedit fugit veritatis.</p>  
            </div>
        </div>
<!-- Events -->
    <script src="script\script.js"></script>
    <script src="script\login.js"></script>
    </div>
</body>
</html>