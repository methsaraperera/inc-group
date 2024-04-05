<?php
$num_classes = 0;
$q2 = mysqli_query($conn,"SELECT classid, grade, last_day from student_class WHERE student_id='$uid' AND grade='INC';");
if(mysqli_num_rows($q2) > 0){
    while($newq2 = $q2->fetch_assoc()) {
        $classid = $newq2['classid'];
        $q3 = mysqli_query($conn,"SELECT subject, unit, section, classname FROM class WHERE classid='$classid';");
        if(mysqli_num_rows($q3)>0){
            while($newq3 = $q3->fetch_assoc()){
                $subject = $newq3['subject'];
                $unit = $newq3['unit'];
                $section = $newq3['section'];
                $classname = $newq3['classname'];
                echo '<p>'. $subject ." ". $unit ." : ". $section ." - ". $classname .'</p>';
                $num_classes++;
            }
        }
    }
}
?>