<?php
session_start();
require_once "../../config.php";
if(!isset($_SESSION['chair'])){ // checking if the session is implimented
    header("location: ../../index.php"); 
}
$uid = $_SESSION['chair']; // session key = user id which is used to access the database

$q1 = mysqli_query($conn,"SELECT fname, lname FROM student WHERE cunyid='$uid';");
if(mysqli_num_rows($q1) > 0){
    $newq1 = mysqli_fetch_assoc($q1);
    $fname = $newq1['fname'];
    $lname = $newq1['lname'];
}
if(!isset($_GET['request'])){
    header("location: dashboard.php"); 
    exit();
}
$request_id = $_GET['request'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/quill@2.0.0-rc.2/dist/quill.snow.css" rel="stylesheet" />
<link rel="stylesheet" href="../styles-web.css">

<title>Chairperson - View Request</title>
<style>
    
</style>
</head>
<body>

<header>
    <?php include('../php/header.php');?>
</header>
<section class="home-section-full">
    <div class="container">
        <div class="left-panel">
            <div class="task-container">
                <?php
                $q2 = mysqli_query($conn, "SELECT instructor_id, student_id, class_id, request_type, request_description FROM request WHERE request_id='$request_id';");

                if (mysqli_num_rows($q2) > 0) {
                    while ($newq2 = $q2->fetch_assoc()) {  
                        $instructor_id = $newq2['instructor_id'];
                        $student_id = $newq2['student_id'];
                        $class_id = $newq2['class_id'];

                        $q3 = mysqli_query($conn, "SELECT fname, lname FROM instructor WHERE cunyid='$instructor_id'");
                        $newq3 = mysqli_fetch_assoc($q3);

                        $q4 = mysqli_query($conn, "SELECT fname, lname FROM student WHERE cunyid='$student_id'");
                        $newq4 = mysqli_fetch_assoc($q4);

                        $q5 = mysqli_query($conn,"SELECT subject, unit, section, classname, semester_term, semester_year FROM class WHERE classid='$class_id';");
                        $newq5 = mysqli_fetch_assoc($q5);

                        $subject = $newq5['subject'];
                        $unit = $newq5['unit'];
                        $section = $newq5['section'];
                        $classname = $newq5['classname'];
                        $semester_term = $newq5['semester_term'];
                        $semester_year = $newq5['semester_year'];

                        echo '<label>Request ID: '.$request_id.'</label>';
                        echo '<label>Request Type: ';
                        if($newq2['request_type'] == 'new'){
                            echo "New INC";
                        }
                        echo '</label><br><div class="task-divider"></div>';

                        echo '<label>Student Name: '.$newq4['fname']." ".$newq4['lname'].'</label>';
                        echo '<label>Instructor Name: '.$newq3['fname']." ".$newq3['lname'].'</label>';
                        echo '<label>Class: '.$newq5['subject']." ".$newq5['unit']." : ".$newq5['section']." - ".$newq5['classname']." ".$newq5['semester_term']." ".$newq5['semester_year'].'</label>';
                        echo '<label>Description: ';
                        if($newq2['request_description'] == NULL){
                            echo "No description available.";
                        }
                        else{
                            echo $newq2['request_description'];
                        }
                        echo '</label>';
                    }
                }

                ?>
                
            </div> 
            
        </div>
        

        <div class="right-panel">
            <br>
            <div class="menu">
                <div class="task-heading">Menu</div>
                <div class="rightbar-divider"></div>
                <div class="rightbar-buttons">
                    <button class="rightbar-button" onclick=window.location.href="dashboard.php">Back to the dashboard</button>
                    <?php /*
                        if($status == '-' or $status == 'Return') {
                            echo '
                                <form action="php/turn-in.php" method="POST" id="assignment">
                                    <input type="hidden" id="assignment_id" name="assignment_id" value="' . $assignment_id . '">
                                    <button class="rightbar-button" form="assignment">Turn In</button>
                                </form>';
                        }
                        elseif($status == 'Completed'){
                            echo 'Assignment Completed';
                        }
                        elseif($status == 'In Review') {
                            echo 'Assignment Submitted to Review';
                        }*/
                    ?>
                    <div class="rightbar-divider"></div>
                    <div class="task-heading">Approve Request</div>
                        <form action="php/approve-assign.php" method="POST" id="approve">
                            <input type="hidden" id="request_id" name="request_id" value=<?php echo $request_id; ?>>
                            <button class="rightbar-button" form="approve" name="Approve">Approve</button>
                        </form>
                    <div class="rightbar-divider"></div>
                    <div class="task-heading">Decline Request</div>
                    <form action="php/decline-assign.php" method="POST" id="decline">
                        <input type="hidden" id="request_id" name="request_id" value="<?php echo $request_id; ?>">
                        <textarea placeholder="Reason to decline." required></textarea>
                        <button class="rightbar-button" form="decline" name="Decline">Decline</button>
                    </form>
                </div>
            </div>
            <br>
            
        </div>
    </div>
</section>

<footer>
    <div class="footer-content">
        <?php include '../../php/copyright.php'; ?>
    </div>
</footer>



<script src="js/watson.js"></script>
<script src="https://kit.fontawesome.com/137463bc4f.js" crossorigin="anonymous"></script>


</body>
</html>
