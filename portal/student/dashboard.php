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
<link rel="stylesheet" href="../styles.css">

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
        <button class="navbar-button" onclick=window.location.href="../../php/logout.php">Logout</button>
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

        </div>
    </div>
    <div class="right-panel-cal">
        <div class="menu">
        </div>
    </div>

    <?php
function generateCalendar()
{
    // Sample tasks fetched from database (replace with your database logic)
    $tasks = array(
        "2024-03-24" => array("Task 1", "Task 2"),
        "2024-03-26" => array("Task 3")
        // Add more tasks as needed
    );

    $today = new DateTime();
    $currentYear = $today->format("Y");
    $currentMonth = $today->format("n");
    $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $currentMonth, $currentYear);
    $calendarBody = '';

    $currentDate = new DateTime("$currentYear-$currentMonth-01");
    $dayOfWeek = $currentDate->format("w");

    $calendarBody .= "<tr>";

    // Add empty cells for previous month days
    for ($i = 0; $i < $dayOfWeek; $i++) {
        $calendarBody .= "<td></td>";
    }

    // Generate calendar days
    for ($day = 1; $day <= $daysInMonth; $day++) {
        $dateString = $currentDate->format("Y-m-d");
        $tasksForDate = isset($tasks[$dateString]) ? $tasks[$dateString] : array();

        $classes = count($tasksForDate) > 0 ? "task-date" : "";
        $calendarBody .= "<td class=\"$classes\">$day</td>";

        if ($currentDate->format("w") == 6 && $day != $daysInMonth) {
            $calendarBody .= "</tr><tr>"; // Start a new row for the next week
        }

        $currentDate->modify("+1 day"); // Move to the next day
    }

    // Add empty cells for remaining days in the last week
    $remainingDays = 7 - $currentDate->format("w");
    for ($i = 0; $i < $remainingDays; $i++) {
        $calendarBody .= "<td></td>";
    }

    $calendarBody .= "</tr>";
    return $calendarBody;
}
?>



        
        <!--<h2>25% Width Body</h2>
        <p>This is the sidebar content area which occupies 25% of the screen width.</p>-->
    </div>
</div>

<div class="footer">
    <p class="footer-content">Copyright © Methsara Perera - Tech Innovation Hub Internship @ BMCC Tech Learning Community </p>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const taskDates = document.querySelectorAll('.task-date');

        taskDates.forEach(function(date) {
            date.addEventListener('click', function() {
                const tasks = date.dataset.tasks.split(',');
                const tooltip = document.createElement('div');
                tooltip.className = 'tooltip';
                tooltip.textContent = 'Tasks: ' + tasks.join(', ');
                date.appendChild(tooltip);

                // Remove the tooltip after a delay
                setTimeout(function() {
                    date.removeChild(tooltip);
                }, 3000); // Adjust the delay as needed
            });
        });
    });
</script>
<script src="js/watson.js"></script>
<script src="https://kit.fontawesome.com/137463bc4f.js" crossorigin="anonymous"></script>


</body>
</html>
