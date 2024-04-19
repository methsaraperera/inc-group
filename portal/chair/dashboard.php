<?php
// chairperson dashboard
session_start();
require_once "../../config.php";
if(!isset($_SESSION['chair'])){ // checking if the session is implimented
    header("location: ../../index.php"); 
}
$uid = $_SESSION['chair']; // session key = user id which is used to access the database


$q1 = mysqli_query($conn,"SELECT admin_fname, admin_lname FROM admin WHERE admin_id='$uid';");
if(mysqli_num_rows($q1) > 0){
    $newq1 = mysqli_fetch_assoc($q1);
    $fname = $newq1['admin_fname'];
    $lname = $newq1['admin_lname'];
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

<title>Chairperson Home</title>
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
                        <h3>Pending New Student Requests</h3>
                        <?php
                            //include 'php/get-extended-classes.php';
                        ?>
                        <div class="card-divider"></div>
                        <p>Feature coming soon...</p>
                    </div>
                    <div class="card">
                        <h3>Pending Grade Assign Requests</h3>
                        <?php
                            //include 'php/get-days-remaining.php';
                        ?>
                        <div class="card-divider"></div>
                        <p>Feature coming soon...</p>
                    </div>
                    <div class="card">
                        <h3>Pending Connect Requests</h3>
                        <?php
                            //include 'php/get-days-remaining.php';
                        ?>
                        <div class="card-divider"></div>
                        <p>Feature coming soon...</p>
                    </div>
                    
                </div>
                <div class="task-container">
                    <div class="task-heading">New Student Requests</div>
                    <div class="task-line" style="pointer-events: none;">
                        <div class="div2">Student</div>
                        <div class="div2">Instructor</div>
                        <div class="div1">Class</div>
                        <div class="div4"></div>
                    </div>
                    <div class="task-divider"></div>
                    <?php
                    $uid = $_SESSION['userid'];

                    $q2 = mysqli_query($conn, "SELECT request_id, instructor_id, student_id, class_id FROM request WHERE admin_id='$uid' AND request_type='new' AND request_status='open';");

                    if (mysqli_num_rows($q2) > 0) {
                        while ($newq2 = $q2->fetch_assoc()) {
                            $request_id = $newq2['request_id'];
                            $instructor_id = $newq2['instructor_id'];
                            $student_id = $newq2['student_id'];
                            $class_id = $newq2['class_id'];

                            $q3 = mysqli_query($conn, "SELECT fname, lname FROM instructor WHERE cunyid='$instructor_id'");
                            $newq3 = mysqli_fetch_assoc($q3);

                            $q4 = mysqli_query($conn, "SELECT fname, lname FROM student WHERE cunyid='$student_id'");
                            $newq4 = mysqli_fetch_assoc($q4);

                            $q5 = mysqli_query($conn,"SELECT subject, unit, section, classname, semester_term, semester_year FROM class WHERE classid='$class_id';");
                            $newq5 = mysqli_fetch_assoc($q5);

                            $subject = $newq5['subject'];
                            $unit = $newq5['unit'];
                            $section = $newq5['section'];
                            $classname = $newq5['classname'];
                            $semester_term = $newq5['semester_term'];
                            $semester_year = $newq5['semester_year'];
                            echo 
                            '<div class="task-line">
                                <div class="div2"><li>'.$newq4['fname']." ".$newq4['lname'].'</li></div>
                                <div class="div2">'.$newq3['fname']." ".$newq3['lname'].'</div>
                                <div class="div1">'.$newq5['subject']." ".$newq5['unit']." : ".$newq5['section']." - ".$newq5['classname']." ".$newq5['semester_term']." ".$newq5['semester_year']. '</div>
                                <div class="div4">
                                    <button class="task-btn" onclick="window.location.href=\'view-request.php?request='.$newq2['request_id'].'\'">
                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                    </button>
                                </div>
                            </div>';
                        }
                    } else {
                        echo "No new student requests available.";
                    }
                    ?>
                </div>
                <div class="task-container">
                    <div class="task-heading">Grade Assign Requests</div>

                    <div class="task-line" style="pointer-events: none;">
                        <div class="div2">Student</div>
                        <div class="div2">Instructor</div>
                        <div class="div1">Class</div>
                        <div class="div4"></div>
                    </div>
                    <div class="task-divider"></div>
                    <?php
                        echo "No grade assign requests available."
                        //include 'php/get-assigned-tasks.php';
                       // echo getAssignedTasks($conn, $uid, $num_classes); // Call the function and echo its return value
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
