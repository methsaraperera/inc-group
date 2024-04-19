<?php
session_start();
require_once "../../../config.php";

if (!isset($_SESSION['chair'])) {
    header("location: ../../../index.php"); 
    exit(); 
}

if (isset($_POST['Approve'])) { 
    $request_id = $_POST['request_id'];
    
    $q1 = mysqli_query($conn, "UPDATE `request` SET `request_status`='approved' WHERE `request_id`='$request_id'");
    if (!$q1) {
        echo "Error updating request status: " . mysqli_error($conn);
        exit(); 
    }
    
    $q2 = mysqli_query($conn, "SELECT student_id, class_id FROM request WHERE request_id='$request_id'");
    if (mysqli_num_rows($q2) > 0) {
        $newq2 = mysqli_fetch_assoc($q2);
        
        
        $q3 = mysqli_query($conn, "UPDATE `student_class` SET `status`='approved' WHERE `student_id`='" . $newq2['student_id'] . "' AND `classid`='" . $newq2['class_id'] . "'");
        if (!$q3) {
            echo "Error updating student_class status: " . mysqli_error($conn);
            exit(); 
        }
        else {
            header("location: ../dashboard.php"); 
            exit(); 
        }
    } 
    else {
        echo "No rows found for request ID: $request_id";
    }
} 
else {
    echo "Error: 'approve' parameter not received";
}
?>
