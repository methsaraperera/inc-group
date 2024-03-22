<head>
<link rel="stylesheet" href="../styles.css">


</head>

<?php

function displayAssignmentStatus($assignment_status) {
    if ($assignment_status == 'complete' or 'Complete') {
        echo '<div class="status completed">' . $assignment_status . '</div>';
    } elseif ($assignment_status == 'incomplete' or 'Incomplete') {
        echo '<div class="status not-completed">Not Completed</div>';
    } else {
        echo '<div class="status unknown">Unknown Status</div>';
    }
}

?>