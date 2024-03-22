<?php
session_start();
require_once "config.php";
if(!isset($_SESSION['insid'])){ // checking if the session is implimented
    header("location: index.html"); 
    exit();
}
if(!isset($_SESSION['instructor']) || $_SESSION['instructor'] != true){ // checking if the session is implimented
    header("location: index.html"); 
    exit();
}
$uid = $_SESSION['insid']; 
$q1 = mysqli_query($conn,"SELECT fname, lname FROM instructor WHERE cunyid='$uid';");
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

<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">


<link rel="stylesheet" href="styles.css">
<title>Add Class</title>
<style>
    
</style>
</head>
<body>

<div class="navbar">
    <h2 class="navbar-title">BMCC Task Tracker - Instructor View</h2>
    <div class="navbar-buttons">
        <p><?php echo $fname," ",$lname,'&nbsp&nbsp&nbsp'?></p>
        <button class="navbar-button">Profile</button>
        <button class="navbar-button">Logout</button>
        <!--<button class="navbar-button"></button>-->
    </div>
</div>

<div class="container">
    <div class="left-panel">
        <div class="dashboard">
            <div class="card">
                <form method="POST" class="flex-form" action="php/create-class.php" enctype="multipart/form-data" id="class">
                    <label for="clid">Class ID</label>
                    <input type="number" id="clid" name="clid" placeholder="#####" required>
                    <label for="subcd">Subject Code</label>
                    <input type="text" id="subcd" name="subcd" placeholder="ex: CSC" required>
                    <label for="clunum">Class Unit Number</label>
                    <input type="number" id="clunum" name="clunum" placeholder="##########" required>
                    <label for="clunum">Class Section Number</label>
                    <input type="number" id="clsec" name="clsec" placeholder="##########" required>
                    <label for="clname">Class Name</label>
                    <input type="text" id="clname" name="clname" placeholder="Intro to ...." required>
                    <label for="sem">Semester</label>
                    <select name="sem" id="sem" form="class">
                        <option value="Spring">Spring</spring>
                        <option value="Summer">Summer</spring>
                        <option value="Fall">Fall</spring>
                        <option value="Winter">Winter</spring>
                    </select>
                    <label for="year">Year</label>
                    <input type="number" id="year" name="year" placeholder="####" required>
                    <input type="submit" class="rightbar-button" name="add" value="Create Class" required>
                    <!--<input type="submit" class="form-button" name="Search" value="Search" required>-->
                </form> 
            </div>
        </div>
    </div>
    <div class="right-panel">
        <br>
        <div class="menu">
            <div class="task-heading">Menu</div>
            <div class="rightbar-divider"></div>
            <div class="rightbar-buttons">
                <button class="rightbar-button" onclick=window.location.href="instructor.php">Dashboard</button> 
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <p class="footer-content">Copyright © Methsara Perera - Tech Innovation Hub Internship @ BMCC Tech Learning Community </p>
</div>

<script src="js/watson.js"></script>
<script src="https://kit.fontawesome.com/137463bc4f.js" crossorigin="anonymous"></script>

</body>
</html>
