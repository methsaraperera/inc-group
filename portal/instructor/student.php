<?php
session_start();
require_once "../../config.php";
require_once "php/get-instructor-name.php";
if(!isset($_SESSION['insid'])){ // checking if the session is implimented
    header("location: ../../index.php"); 
    exit();
}
if(!isset($_SESSION['instructor']) || $_SESSION['instructor'] != true){ // checking if the session is implimented
    //header("location: index.html"); 
    exit();
}
$uid = $_SESSION['insid']; 
$instructorFullName = getInstructorFullName($conn, $uid);

if(!isset($_GET['class']) || !isset($_GET['sid'])){
    //header("location: dashboard.php"); 
    exit();
}
$classid = $_GET['class'];
$studentid = $_GET['sid'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">


<link rel="stylesheet" href="../styles.css">
<title>INC Resolver - Instructor</title>
<style>
    
</style>
</head>
<body>

<div class="navbar">
    <h2 class="navbar-title">BMCC Task Tracker - Instructor View</h2>
    <div class="navbar-buttons">
        <p><?php echo $instructorFullName,'&nbsp&nbsp&nbsp';?></p>
        <button class="navbar-button" onclick=window.location.href="profile.php?inc=true">Profile</button>
        <button class="navbar-button" onclick=window.location.href="php/logout.php">Logout</button>
        <!--<button class="navbar-button"></button>-->
    </div>
</div>

<div class="container">
    <div class="left-panel">
        <div class="task-container">
            
            <?php
            $student = mysqli_query($conn,"SELECT fname, lname FROM student WHERE cunyid='$studentid';");
            if(mysqli_num_rows($student)>0){
                $newstu = mysqli_fetch_assoc($student);
                $stu_fname = $newstu['fname'];
                $stu_lname = $newstu['lname'];
                echo '<div class="task-heading">'.$stu_fname.' '.$stu_lname.'</div>';
                $q3 = mysqli_query($conn,"SELECT subject, unit, section, classname, semester_term, semester_year FROM class WHERE classid='$classid';");
                $newq3 = mysqli_fetch_assoc($q3);
                $subject = $newq3['subject'];
                $unit = $newq3['unit'];
                $section = $newq3['section'];
                $classname = $newq3['classname'];
                $semester_term = $newq3['semester_term'];
                $semester_year = $newq3['semester_year'];
                echo '<div class="task-divider"></div> 
                            <div class="task-subheading">
                                <div> Class: '. $subject ." ". $unit ." : ". $section ." - ". $classname ." ". $semester_term ." ". $semester_year . '</div>
                                <!--<div>Class 1 of 2</div> -->
                            </div>';
                

                $q4 = mysqli_query($conn,"SELECT assignment_id FROM class_assignment WHERE classid='$classid';");
                if(mysqli_num_rows($q4)>0){
                    while($newq4 = $q4->fetch_assoc()){
                        $assignment_id = $newq4['assignment_id'];
                        $q5 = mysqli_query($conn,"SELECT assignment_id, last_day, grade, status FROM student_assignment WHERE assignment_id='$assignment_id' AND student_id='$studentid';");
                        if(mysqli_num_rows($q5)>0){
                            while($newq5 = $q5->fetch_assoc()){ 
                                $assignment_id_student = $newq5['assignment_id'];
                                $assignment_last_day = $newq5['last_day'];
                                $assignment_grade = $newq5['grade'];
                                $assignment_status = $newq5['status'];
                                $q6 = mysqli_query($conn,"SELECT assignment_name FROM assignment WHERE assignment_id='$assignment_id_student';");
                                if(mysqli_num_rows($q6)>0){
                                    $newq6 = mysqli_fetch_assoc($q6);
                                    $assignment_name = $newq6['assignment_name'];
                                    echo '<div class="task-line">
                                        <div class="div1"><li>'.$assignment_name.'</li></div>
                                        <div class="div2">Due: '.$assignment_last_day.'</div>
                                        <div class="div3">'.$assignment_grade.'</div>
                                        <div class="div3 status '.$assignment_status.'">'.$assignment_status.'</div>
                                        <div class="div4">
                                            <button class="task-btn" onclick="window.location.href=\'view-assignment.php?class='.$classid.'&assignment='.$assignment_id_student.'\'">
                                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                            </button>
                                        </div>
                                    </div>';
                                }
                                else{
                                    echo 'Error occured while while displaying the classes';
                                }
                            }
                        }
                    }
                }
                else{
                    echo 'No Assigned assignments to the class.';
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
                <button class="rightbar-button" onclick=window.location.href="instructor.php">Dashboard</button>
                <div class="rightbar-divider"></div>
                <button class="rightbar-button" onclick=window.location.href="assignments.php">Add an assignments</button>
        
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
