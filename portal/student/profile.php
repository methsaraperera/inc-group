<?php
session_start();
require_once "../../config.php";
if(!isset($_SESSION['uid'])){
    header("location: ../../index.php"); 
}
$uid = $_SESSION['uid'];

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
<link rel="stylesheet" href="../styles-web.css">

<title>Student Home</title>
<style>
    
</style>
</head>
<body>

<header>
    <?php include('../php/header.php');?>
</header>

<section class="home-section-full">
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
                </div>
                <div class="task-subheading">
                    <div> CUNY ID: '. $uid.'</div>
                </div>';
                ?>
            </div>
        </div>
        <div class="right-panel">
        </div>
    </div>
</section>

<footer>
    <div class="footer-content">
        <?php include '../../php/copyright.php'; ?>
    </div>
</footer>

<script src="js/watson.js"></script>
<script src="https://kit.fontawesome.com/137463bc4f.js" crossorigin="anonymous"></script>


</body>
</html>
