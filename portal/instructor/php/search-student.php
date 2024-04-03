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
$uid = $_SESSION['insid'];

if (isset($_POST['Search'])) {
    $sid = $_POST['sid'];
    $classid = $_POST['class'];
    $sql = mysqli_query($conn, "SELECT * FROM student WHERE cunyid = '{$sid}'");

    if (!mysqli_num_rows($sql) > 0) {
        header("Location: ../add-student.php?nstu=true"); // student does not exist
        exit();
    } else {
        $sql1 = mysqli_query($conn, "SELECT * FROM student_class WHERE student_id = '{$sid}' AND classid = '{$classid}'");

        if (mysqli_num_rows($sql1) > 0) {
            header("Location: ../add-student.php?assign=true"); // student already assigned
            exit();
        } 
        else {
            header("Location: ../add-student.php?search=true&sid={$sid}&classid={$classid}&grade=INC"); // student not assigned
            exit();
        }
    }
}
?>
