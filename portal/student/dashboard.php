<?php
session_start();
require_once "../../config.php";
if(!isset($_SESSION['uid'])){ // checking if the session is implimented
    header("location: ../../index.php"); 
}
$uid = $_SESSION['uid']; // session key = user id which is used to access the database

$q1 = mysqli_query($conn,"SELECT fname, lname FROM student WHERE cunyid='$uid';");
if(mysqli_num_rows($q1) > 0){
    $newq1 = mysqli_fetch_assoc($q1);
    $fname = $newq1['fname'];
    $lname = $newq1['lname'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
<!--link rel="stylesheet" href="../styles.css"-->
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
            <div class="full-panel">
                <div class="dashboard">
                    <div class="card">
                        <h3>Extended Classes</h3>
                        <?php
                            include 'php/get-extended-classes.php';
                        ?>
                        <div class="card-divider"></div>
                        <p class="card-bottom-text">Total Classes: <?php echo $num_classes;?></p>
                    </div>
                    <div class="card">
                        <h3>Days Remaining</h3>
                        <?php
                            include 'php/get-days-remaining.php';
                        ?>
                    </div>
                    <div class="card">
                        <h3>Tasks Remaining</h3>
                        <p>CSC 211H : 5 Tasks Remaining</p>
                        <p>PHY 215 : 1 Task Remaining</p>
                    </div>
                </div>
                <div class="task-container">
                    <div class="task-heading">Assigned Tasks</div>
                    <?php
                        include 'php/get-assigned-tasks.php';
                        echo getAssignedTasks($conn, $uid, $num_classes); // Call the function and echo its return value
                    ?>
                </div>
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
