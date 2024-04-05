<?php
session_start();
require_once "../../../config.php";
if(!isset($_SESSION['uid'])){ // checking if the session is implemented
    header("location: ../../../index.php"); 
    exit();
}

$uid = $_SESSION['uid']; // session key = user id which is used to access the database

if(!isset($_POST['assignment_id'])){ 
    header("location: ../dashboard.php"); 
    exit();
}

$assignment_id = $_POST['assignment_id'];

echo $assignment_id;
echo $uid;

$updateQuery = $conn->prepare("UPDATE `student_assignment` SET `status`='In Review' WHERE `student_id`=? AND `assignment_id`=?"); // Updated SQL query to use placeholders
$updateQuery->bind_param("ii", $uid, $assignment_id); // Binding parameters to placeholders
if ($updateQuery->execute()) {
    header("Location: ../dashboard.php");
    exit();
} else {
    echo "Error: " . $updateQuery->error;
}

error_reporting(E_ALL);
ini_set('display_errors', 1);

?>
