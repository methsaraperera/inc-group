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
<title>INC Resolver - Instructor</title>
<style>
    
</style>
</head>
<body>

<div class="navbar">
    <h2 class="navbar-title">BMCC Task Tracker - Instructor View</h2>
    <div class="navbar-buttons">
        <p><?php echo $fname," ",$lname,'&nbsp&nbsp&nbsp'?></p>
        <button class="navbar-button" onclick=window.location.href="profile.php">Profile</button>
        <button class="navbar-button" onclick=window.location.href="php/logout.php">Logout</button>
        <!--<button class="navbar-button"></button>-->
    </div>
</div>

<div class="container">
    <div class="left-panel">
        <div class="dashboard">
            <div class="card">
                <form method="POST" class="flex-form" action="php/search-student.php" enctype="multipart/form-data" id="search">
                    <label for="sid">Student Id - CUNY ID</label>
                    <input type="number" id="sid" name="sid" placeholder="########" required>
                    <label for="class">Select Class</label>
                    <select name="class" id="class" form="search">
                    <?php 
                    $q2 = mysqli_query($conn, "SELECT classid FROM instructor_class WHERE instructor_cunyid='$uid';");
                    if(mysqli_num_rows($q2) > 0){
                        while ($newq2 = mysqli_fetch_assoc($q2)) {
                            $classid = $newq2['classid']; // Define $classid here
                            $q3 = mysqli_query($conn,"SELECT subject, unit, section, classname, semester_term, semester_year FROM class WHERE classid='$classid';");
                            if(mysqli_num_rows($q3) > 0){
                                while($newq3 = $q3->fetch_assoc()){
                                    $subject = $newq3['subject'];
                                    $unit = $newq3['unit'];
                                    $section = $newq3['section'];
                                    $classname = $newq3['classname'];
                                    $semester_term = $newq3['semester_term'];
                                    $semester_year = $newq3['semester_year'];
                                    echo '<option value='.$classid.'>'. $semester_year ." ". $semester_term ." - ". $subject ." ". $unit ." : ". $section ." - ". $classname .'</option>'; 
                                }
                            }
                        }
                    }
                    ?>
                    </select>
                    <input type='hidden' id='classid' name='classid' value= '<?php echo $classid; ?>'>
                    <input type="submit" class="rightbar-button" name="Search" value="Search" required>
                    <!--<input type="submit" class="form-button" name="Search" value="Search" required>-->
                </form> 
            </div>
            <div class="card">
                <?php 
                if (isset($_GET['search'])) {
                    $uid = $_GET['sid'];
                    $classid = $_GET['classid'];
                    echo '
                    <form method="POST" class="flex-form" action="php/assign-class-student.php" enctype="multipart/form-data">
                        <label for="last_date">Due Date</label>
                        <input type="date"  name="last_date" required>
                        <label for="grade">Default Grade</label>
                        <input type="text" name="grade" value="INC" disabled>
                        <input type="hidden" name="grade" value="INC">
                        <input type="hidden" id="classid" name="classid" value= '.$classid.'>
                        <input type="hidden" id="uid" name="uid" value= '.$uid.'>
                        <input type="submit" class="rightbar-button" name="add" value="Add Student" required>
                    </form>';
                }
                else{
                    echo '<div class="task-subheading">
                        <div> Search student to see next steps.</div>
                    </div>';
                }
                ?>
            </div>
            
            <div class="card">
                <?php 
                    if (isset($_GET['search'])) {
                        echo '<div class="notice">Student available to register.</div>';
                    }
                    elseif (isset($_GET['nstu'])) {
                        echo '<div class="error">Student not registered<br><br>Inform the student to register to the application in order for you to add them to a class.</div>';
                    } 
                    elseif (isset($_GET['assign'])) {
                        echo '<div class="error">Student already assigned to the class.</div>';
                    }
                    
                    elseif(isset($_GET['success'])){
                        echo '<div class="success">Student assigned to the class successfully.</div>';
                    }
                    elseif(isset($_GET['failed'])){
                        echo '<div class="error">ERROR: Failed to assign student.</div>';
                    }
                    else{
                        echo '<div class="task-subheading">
                            <div> Search student to see next steps.</div>
                        </div>';
                    }
                ?>
            </div>
        </div>

        

        
    </div>
    <div class="right-panel">
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
