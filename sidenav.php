
<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\home.css">
    <link rel="stylesheet" href="css\subject.css">
    <link rel="stylesheet" href="css\setApp.css">
    <link rel="stylesheet" href="css\grades.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script defer src="script\active.js"></script>
    <title>Home</title>
</head>
<body>
    <div class="container">
        <nav class="sidenav">
            <div style="text-align:center; margin-top: 5vh;padding-bottom:10px;border-bottom:solid 0.2px rgba(255, 255, 255,0.2);">
                <i class='fas fa-user-circle' style='font-size:96px;color:rgba(255, 255, 255,0.7);'></i>
            </div>           
            <div class="nav-cont">
                <a href="home.php" class="home" style="padding-top: 20px;"><i class="fa fa-home"></i> Home</a>
                <a href="subject.php" class="subject" class="tablinks"><i class='fas fa-book-open'></i> Subject</a>
                <a href="setApp.php" class="appointment" class="tablinks"><i class='fas fa-calendar-alt'></i> Set Appointment</a>
                <a href="grades.php" class="Grades" class="tablinks"><i class='fas fa-folder-open'></i> Grades</a>
                <a href="signout.php" class="signout"><i class='fas fa-sign-out-alt' ></i> Signout</a>
            </div> 
        </nav>
    
    
