<?php
session_start();
require_once "../config.php";

if (!isset($_SESSION['insid'])) {
    header("location: index.html");
    exit();
}
if (!isset($_SESSION['instructor']) || $_SESSION['instructor'] != true) {
    header("location: index.html");
    exit();
}

if (isset($_POST['add'])) {
    $sid = $_POST['uid'];
    $classid = $_POST['classid'];
    $grade = $_POST['grade'];
    $last_day = $_POST['last_date'];

    // Define pass/fail status based on the grade
    //$status = ($grade == 'INC') ? 'fail' : 'pass';
/*
    echo "Student ID: $sid<br>";
    echo "Class ID: $classid<br>";
    echo "Grade: $grade<br>";
    echo "Last Day: $last_day<br>";
*/
    // Enclose values in single quotes for SQL
    $insertquery= mysqli_query($conn, "INSERT INTO `student_class` (`classid`, `student_id`, `grade`, `last_day`) VALUES ('$classid', '$sid', '$grade', '$last_day');");
    if($insertquery){
        $selectquery = mysqli_query($conn, "SELECT * FROM student_class WHERE student_id = '{$sid}' AND classid = '{$classid}'");
        if (mysqli_num_rows($selectquery) > 0) {
            header("Location: ../add-student.php?success=true");
            exit();
        }
        else {
            header("Location: ../add-student.php?failed=true");
            exit();
        }
    }
}
?>
