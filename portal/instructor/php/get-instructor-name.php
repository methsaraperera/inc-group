<?php
function getInstructorFullName($conn, $uid) {
    $query = mysqli_query($conn, "SELECT fname, lname FROM instructor WHERE cunyid='$uid'");
    if(mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
        $fullName = $row['fname'] . " " . $row['lname'];
        return $fullName;
    } else {
        return "Instructor Not Found";
    }
}
?>