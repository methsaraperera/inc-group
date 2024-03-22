<?php
session_start();
require_once "config.php";
if(!isset($_SESSION['uid'])){ // checking if the session is implimented
    header("location: index.html"); 
}
$uid = $_SESSION['uid']; // session key = user id which is used to access the database

$q1 = mysqli_query($conn,"SELECT fname, lname FROM student WHERE cunyid='$uid';");
if(mysqli_num_rows($q1) > 0){
    $newq1 = mysqli_fetch_assoc($q1);
    $fname = $newq1['fname'];
    $lname = $newq1['lname'];
}
/*
$q2 = mysqli_query($conn,"SELECT classid, grade, last_day FROM student_class WHERE student_id=''$uid';");
if(mysqli_num_rows($q2) > 0){
    $newq2 = my
}
*/
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
        <button class="navbar-button" onclick=window.location.href="profile.php">Profile</button>
        <button class="navbar-button" onclick=window.location.href="php/logout.php">Logout</button>
        <!--<button class="navbar-button"></button>-->
    </div>
</div>

<div class="container">
    <div class="left-panel">
        <!--<h2>Dashboard</h2>-->
        <div class="dashboard">
            <div class="card">
                <h3>Extended Classes</h3>
                <p>CSC 211H Advanced Programming Technique Honors</p>
                <p>PHY 215 University Physics 1</p>
                <p class="card-bottom-text">Total Classes: 2</p>
            </div>
            <div class="card">
                <h3>Days Remaining</h3>
                <p>CSC 211H. 90 Days Remaining</p>
                <p>PHY 215. 90 Days Remaining</p>
            </div>
            <div class="card">
                <h3>Tasks Remaining</h3>
                <p>CSC 211H : 5 Tasks Remaining</p>
                <p>PHY 215 : 1 Task Remaining</p>
            </div>
        </div>


        <div class="task-container">
            <div class="task-heading">Assigned Tasks</div>
            <!--<div class="task-divider"></div>-->

            <?php
            
            $q2 = mysqli_query($conn,"SELECT classid, grade, last_day from student_class WHERE student_id='$uid';");
            if(mysqli_num_rows($q2) > 0){
                while($newq2 = $q2->fetch_assoc()) {
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
                                <!--<div>Class 1 of 2</div> -->
                            </div>';
                            $q4 = mysqli_query($conn,"SELECT assignment_id FROM class_assignment WHERE classid='$classid';");
                            if(mysqli_num_rows($q4)>0){
                                while($newq4 = $q4->fetch_assoc()){
                                    $assignment_id = $newq4['assignment_id'];
                                    $q5 = mysqli_query($conn,"SELECT assignment_id, last_day, grade, status FROM student_assignment WHERE assignment_id='$assignment_id' AND student_id='$uid';");
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
                                        }
                                    }
                                }
                            }
                        }
                    }
                    //$grade = $newq2['grade'];
                    //$lastday = $newq2['last_day'];
                    //echo $classid," ",$grade," ",$lastday,'<br>';
                }
            }
            ?>

            <div class="task-line">
                <div class="div1"><li>Test Assignment Name - Not DB Linked</li></div>
                <div class="div2">Due:2024-06-23</div>
                <div class="div3">A</div>
                <div class="div3">Completed</div>
                <div class="div4">
                    <button class="task-btn" onclick="window.location.href='view-assignment.php'">
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    </button>
                </div>
            </div>`
<!--
            <div class="task-subheading">
                <div>CSC 211H - Advanced Programming Technique Honors</div>
                <div>Class 1 of 2</div>
            </div>
            <div class="task-line">
                <div><li>Assignment 6</li></div>
                <div>Open</div>
                <div>Due: Feb 28 2024</div>
                <div>100</div>
                <div class="status completed">Completed</div>
            </div>

            <div class="task-line">
                <div><li>Assignment 7</li></div>
                <div>Open</div>
                <div>Due: Feb 28 2024</div>
                <div>100</div>
                <div class="status completed">Completed</div>
            </div>

            <div class="task-line">
                <div><li>Assignment 8</li></div>
                <div>Open</div>
                <div>Due: Feb 28 2024</div>
                <div>100</div>
                <div class="status completed">Completed</div>
            </div>

            <div class="task-line">
                <div><li>Assignment 9</li></div>
                <div>Open</div>
                <div>Due: Feb 28 2024</div>
                <div>100</div>
                <div class="status not-completed">Not Completed</div>
            </div>

            <div class="task-line">
                <div><li>Final Project</li></div>
                <div>Open</div>
                <div>Due: Feb 28 2024</div>
                <div>100</div>
                <div class="status not-completed">Not Completed</div>
            </div>

            <div class="task-divider"></div>

            <div class="task-subheading">
                <div>PHY 215 - University Physics 1</div>
                <div>Class 2 of 2</div>
            </div>

            <div class="task-line">
                <div><li>Final Exam</li></div>
                <div>Open</div>
                <div>Due: May 6 2024</div>
                <div>100</div>
                <div class="status not-completed">Not Completed</div>
            </div>
            <div class="task-divider"></div>

            <div class="task-subheading">
                <div>PHY 215 - University Physics 1</div>
                <div>Class 2 of 2</div>
            </div>

            <div class="task-line">
                <div><li>Final Exam</li></div>
                <div>Open</div>
                <div>Due: May 6 2024</div>
                <div>100</div>
                <div class="status not-completed">Not Completed</div>
            </div>
            <div class="task-divider"></div>

            <div class="task-subheading">
                <div>PHY 215 - University Physics 1</div>
                <div>Class 2 of 2</div>
            </div>

            <div class="task-line">
                <div><li>Final Exam</li></div>
                <div>Open</div>
                <div>Due: May 6 2024</div>
                <div>100</div>
                <div class="status not-completed">Not Completed</div>
            </div>
            <div class="task-divider"></div>

            <div class="task-subheading">
                <div>PHY 215 - University Physics 1</div>
                <div>Class 2 of 2</div>
            </div>

            <div class="task-line">
                <div><li>Final Exam</li></div>
                <div>Open</div>
                <div>Due: May 6 2024</div>
                <div>100</div>
                <div class="status not-completed">Not Completed</div>
            </div>-->
            
        </div>
    </div>
    <div class="right-panel">
        <div class="menu">
            <div class="task-heading">Options Menu</div>
            <div class="task-divider"></div>
            
            <div class="task-subheading">
                <div>There will be a menu here</div>
                
            </div>
            <!--<div class="task-line">
                <div><li>Assignment 6</li></div>
                <div>Open</div>
                <div>Due: Feb 28 2024</div>
                <div>100</div>
            </div>

            <div class="task-line">
                <div><li>Assignment 7</li></div>
                <div>Open</div>
                <div>Due: Feb 28 2024</div>
                <div>100</div>
            </div>

            <div class="task-line">
                <div><li>Assignment 8</li></div>
                <div>Open</div>
                <div>Due: Feb 28 2024</div>
                <div>100</div>
            </div>

            <div class="task-line">
                <div><li>Assignment 9</li></div>
                <div>Open</div>
                <div>Due: Feb 28 2024</div>
                <div>100</div>
            </div>

            <div class="task-line">
                <div><li>Final Project</li></div>
                <div>Open</div>
                <div>Due: Feb 28 2024</div>
                <div>100</div>
            </div>

            <div class="task-divider"></div>

            <div class="task-subheading">
                <div>PHY 215 - University Physics 1</div>
                <div>Class 2 of 2</div>
            </div>

            <div class="task-line">
                <div><li>Final Exam</li></div>
                <div>Open</div>
                <div>Due: May 6 2024</div>
                <div>100</div>
            </div>-->
            
        </div>

        
        <!--<h2>25% Width Body</h2>
        <p>This is the sidebar content area which occupies 25% of the screen width.</p>-->
    </div>
</div>

<div class="footer">
    <p class="footer-content">Copyright © Methsara Perera - Tech Innovation Hub Internship @ BMCC Tech Learning Community </p>
</div>

<script src="js/watson.js"></script>
<script src="https://kit.fontawesome.com/137463bc4f.js" crossorigin="anonymous"></script>


</body>
</html>
