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
        <button class="navbar-button" onclick=window.location.href="profile.php?inc=true">Profile</button>
        <button class="navbar-button" onclick=window.location.href="php/logout.php">Logout</button>
        <!--<button class="navbar-button"></button>-->
    </div>
</div>

<div class="container">
    <div class="left-panel">
        <div class="task-container">
            <div class="task-heading">Assigned Students</div>
            <div class="task-divider"></div>
            <?php
            $q2 = mysqli_query($conn, "SELECT classid FROM instructor_class WHERE instructor_cunyid='$uid';");
            if(mysqli_num_rows($q2) > 0){
                while ($newq2 = mysqli_fetch_assoc($q2)) {
                    $classid = $newq2['classid'];
                    $q3 = mysqli_query($conn,"SELECT subject, unit, section, classname, semester_term, semester_year FROM class WHERE classid='$classid';");
                    if(mysqli_num_rows($q3)>0){
                        while($newq3 = $q3->fetch_assoc()){
                            $subject = $newq3['subject'];
                            $unit = $newq3['unit'];
                            $section = $newq3['section'];
                            $classname = $newq3['classname'];
                            $semester_term = $newq3['semester_term'];
                            $semester_year = $newq3['semester_year'];
                            // class n of n inactive - not implimented yet
                            echo '<div class="task-divider"></div> 
                            <div class="task-subheading">
                                <div>'. $subject ." ". $unit ." : ". $section ." - ". $classname ." ". $semester_term ." ". $semester_year . '</div>
                                <div>Class 1 of 2</div> 
                            </div>';
                            
                            $q4 = mysqli_query($conn,"SELECT student_id, grade, last_day FROM student_class WHERE classid='$classid';");
                            if(mysqli_num_rows($q4)>0){
                                while($newq4 = $q4->fetch_assoc()){
                                    $stu_id=$newq4['student_id'];
                                    $stu_grade=$newq4['grade'];
                                    $stu_last_day=$newq4['last_day'];
                                    $q5 = mysqli_query($conn,"SELECT fname, lname FROM student WHERE cunyid='$stu_id';");
                                    if(mysqli_num_rows($q5)>0){
                                        while($newq5 = $q5->fetch_assoc()){
                                            $stu_fname=$newq5['fname'];
                                            $stu_lname=$newq5['lname'];
                                            echo '<div class="task-line">
                                                <div class="div1"><li>'.$stu_fname.' '.$stu_lname.'</li></div>
                                                <div class="div2">Due: '.$stu_last_day.'</div>
                                                <div class="div3">'.$stu_grade.'</div>
                                                <div class="div4">
                                                    <button class="task-btn" onclick="window.location.href=\'student.php?class='.$classid.'&sid='.$stu_id.'\'">
                                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                                    </button>
                                                </div> 
                                                <!-- progress bar is not functional yet -->
                                                <div class="progress-container div1">
                                                    <div class="progress-bar" style="width: 60%;">60%</div>
                                                </div>
                                                
                                            </div>';
                                        }
                                    }
                                }
                            }                           
                        }
                    }
                }
            }
            ?>
        </div>
    </div>
    <div class="right-panel">
        <br>
        <div class="menu">
            <div class="task-heading">Menu</div>
            <div class="rightbar-divider"></div>
            <div class="rightbar-buttons">
                <button class="rightbar-button" onclick=window.location.href="add-student.php">Add a student</button>
                <div class="rightbar-divider"></div>
                <button class="rightbar-button" onclick=window.location.href="assignments.php">Assignments</button>
                <button class="rightbar-button" onclick=window.location.href="create-class.php">Create New Class</button>     
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
