<?php
//session_start();
require_once "config.php";
if(!isset($_SESSION['uid'])){ // checking if the session is implimented
   // header("location: index.html"); 
}
$uid = $_SESSION['uid']; // session key = user id which is used to access the database

$q1 = mysqli_query($conn,"SELECT fname, lname FROM student WHERE cunyid='$uid';");
if(mysqli_num_rows($q1) > 0){
    $newq1 = mysqli_fetch_assoc($q1);
    $fname = $newq1['fname'];
    $lname = $newq1['lname'];
}
if(!isset($_GET['assignment'])){
    //header("location: dashboard.php"); 
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/quill@2.0.0-rc.2/dist/quill.snow.css" rel="stylesheet" />
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
        <button class="navbar-button">Profile</button>
        <button class="navbar-button">Logout</button>
        <!--<button class="navbar-button"></button>-->
    </div>
</div>

<div class="container">
    <div class="left-panel">
        <!--<div class="breadcrumb-container">
            Home &nbsp<i class="fa-solid fa-caret-right"></i>&nbsp Assignments &nbsp<i class="fa-solid fa-caret-right"></i>&nbsp Paper 4: A Final Documented Essay
        </div>-->
        
        <div class="task-container">
            <?php
            $assignment_id = $_GET['assignment'];
            $search_query = mysqli_query($conn, "SELECT assignment_name, content FROM assignment WHERE assignment_id='$assignment_id';");
            if(mysqli_num_rows($search_query) > 0){
                while ($newq = mysqli_fetch_assoc($search_query)) {
                    $assignment_name = $newq['assignment_name'];
                    $assignment_content = $newq['content'];
                    echo '<h1>'.$assignment_name.'</h1>';
                }

            }

            ?>
            <div class="task-divider"></div>
            <label>Assignment ID: <?php echo $assignment_id ?>
            <label>Assignment Content:</label>
                <?php echo $assignment_content;?>
            <div class="task-divider"></div>
            

            
        </div> 

        

        
    </div>

    <div class="right-panel">
        <br>
        <div class="menu">
            <div class="task-heading">Menu</div>
            <div class="rightbar-divider"></div>
            <div class="rightbar-buttons">
                <button class="rightbar-button" form="assignment">Mark as completed</i></button>
                
                <div class="rightbar-divider"></div>
                <button class="rightbar-button" onclick=window.location.href="dashboard.php">Back to the dashboard</button>
        
            </div>
        </div>
        <br>
        
    </div>
</div>

<div class="footer">
    <p class="footer-content">Copyright © Methsara Perera - Tech Innovation Hub Internship @ BMCC Tech Learning Community </p>
</div>



<script src="js/watson.js"></script>
<script src="https://kit.fontawesome.com/137463bc4f.js" crossorigin="anonymous"></script>


</body>
</html>
