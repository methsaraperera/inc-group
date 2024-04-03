<?php
// Needs to be secured
function checkStatus($conn, $uid, $assignment_id) {
    $status_query = mysqli_query($conn, "SELECT status FROM student_assignment WHERE student_id = $uid AND assignment_id = $assignment_id");
    $status_result = mysqli_fetch_assoc($status_query);
    $status = $status_result['status'];
    return $status;
}
?>
