<?php


/// NEEDS TO BE REVIEVED. CAN'T TAKE COUNT OF INCOMPLETE ASSIGNMENTS PER CLASS DIRECTLY THROUGH CLASSID -- MP:4/5/2024:3:38AM

$num_classes = 0;
$q2 = mysqli_query($conn,"SELECT classid, grade, last_day from student_class WHERE student_id='$uid' AND grade='INC';");
if(mysqli_num_rows($q2) > 0){
    while($newq2 = $q2->fetch_assoc()) {
        $classid = $newq2['classid'];
        $last_day = $newq2['last_day'];
        $today = date("Y-m-d");
        $days_remaining = ceil((strtotime($last_day) - strtotime($today)) / (60 * 60 * 24));
        
        $q3 = mysqli_query($conn,"SELECT subject, unit, section FROM class WHERE classid='$classid';");
        if(mysqli_num_rows($q3)>0){
            while($newq3 = $q3->fetch_assoc()){
                $subject = $newq3['subject'];
                $unit = $newq3['unit'];
                $section = $newq3['section'];
                if($days_remaining<0){
                    echo '<p>'. $subject ." ". $unit ." : ". $section ." - Closed".'</p>';
                }
                else{
                    $q4 = mysqli_query($conn,"SELECT subject, unit, section FROM class WHERE classid='$classid';");
                    /// SELECT COUNT(*) FROM student_assignment WHERE status != 'Completed' AND status != 'In Review'; -- POTENTIAL QUERY -- CURRNTLY SEARCH FOR ALL THE INCOMPLETE ASSIGNMENTS IN ALL THE CLASSES INSTEAD OF EACH CLASS -- MP:4/5/2024:3:38AM



                    echo '<p>'. $subject ." ". $unit ." : ". $section ." - ".$days_remaining." Days Remaining" .'</p>';
                }
                $num_classes++;
            }
        }
    }
}
?>


