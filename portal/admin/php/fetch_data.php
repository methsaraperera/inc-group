<?php
session_start();
require_once "../../../config.php";
// Check if user session is set
if(!isset($_SESSION['chair'])){
    // Redirect or handle unauthorized access
    // header("location: ../../index.php"); 
}

$query1 = "SELECT COUNT(*) AS approved_count FROM student_class WHERE status = 'approved'";
$query2 = "SELECT COUNT(*) AS in_review_count FROM student_class WHERE status = 'In Review'";
$query3 = "SELECT COUNT(*) AS completed_count FROM student_class WHERE status = 'Completed'";
$query4 = "SELECT COUNT(*) AS rejected_count FROM student_class WHERE status = 'rejected'";

$result1 = $conn->query($query1);
$result2 = $conn->query($query2);
$result3 = $conn->query($query3);
$result4 = $conn->query($query4);

$data = array(
    'approved' => $result1->fetch_assoc()['approved_count'],
    'in_review' => $result2->fetch_assoc()['in_review_count'],
    'completed' => $result3->fetch_assoc()['completed_count'],
    'rejected' => $result4->fetch_assoc()['rejected_count']
);


// Close connection
$conn->close();

// Return data as JSON
header('Content-Type: application/json');

// Output the JSON data
echo json_encode($data);
?>
