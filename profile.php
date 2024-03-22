<?php
session_start();
require_once "config.php";
if(!isset($_SESSION['uid'])){ // checking if the session is implimented
    header("location: index.html"); 
}
$uid = $_SESSION['uid']; // session key = user id which is used to access the database

$q1 = mysqli_query($conn,"SELECT fname, lname, email FROM student WHERE cunyid='$uid';");
if(mysqli_num_rows($q1) > 0){
    $newq1 = mysqli_fetch_assoc($q1);
    $fname = $newq1['fname'];
    $lname = $newq1['lname'];
    $email = $newq1['email'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">
<link rel="stylesheet" href="styles.css">

<title>Student Home</title>
<style>
    
</style>
</head>
<body>

<div class="navbar">
    <h2 class="navbar-title">BMCC Task Tracker - Student View</h2>
    <div class="navbar-buttons">
        <p><?php echo $fname," ",$lname,'&nbsp&nbsp&nbsp'?></p>
        <button class="navbar-button" onclick=window.location.href="dashboard.php">Dashboard</button>
        <button class="navbar-button" onclick=window.location.href="php/logout.php">Logout</button>
    </div>
</div>

<div class="container">
    <div class="left-panel">
        <div class="task-container">
            <div class="task-heading">Profile</div>
            <?php
            echo '<div class="task-divider"></div> 
            <div class="task-subheading">
                <div> First Name: '. $fname .'</div>
            </div>
            <div class="task-subheading">
                <div> Last Name: '. $lname .'</div>
            </div>
            <div class="task-subheading">
                <div> Email: '. $email.'</div>
            </div>';
            ?>
        </div>
    </div>
    <div class="right-panel">
    </div>
</div>

<div class="footer">
    <p class="footer-content">Copyright © Methsara Perera - Tech Innovation Hub Internship @ BMCC Tech Learning Community </p>
</div>

<script src="js/watson.js"></script>
<script src="https://kit.fontawesome.com/137463bc4f.js" crossorigin="anonymous"></script>


</body>
</html>
