<?php
function getAssignedTasks($conn, $uid, $num_classes) {
    $tasks_html = '';
    $class_counter = 0; 

    $q2 = mysqli_query($conn,"SELECT classid, grade, last_day from student_class WHERE student_id='$uid';");
    if(mysqli_num_rows($q2) > 0){
        while($newq2 = $q2->fetch_assoc()) {
            $classid = $newq2['classid'];
            $class_last_day = $newq2['last_day'];
            $q3 = mysqli_query($conn,"SELECT subject, unit, section, classname, semester_term, semester_year FROM class WHERE classid='$classid';");
            if(mysqli_num_rows($q3)>0){
                while($newq3 = $q3->fetch_assoc()){
                    $subject = $newq3['subject'];
                    $unit = $newq3['unit'];
                    $section = $newq3['section'];
                    $classname = $newq3['classname'];
                    $semester_term = $newq3['semester_term'];
                    $semester_year = $newq3['semester_year'];
                    $class_counter++; // Incrementing class counter
                    $tasks_html .= '<div class="task-divider"></div> 
                    <div class="task-subheading">
                        <div>'. $subject ." ". $unit ." : ". $section ." - ". $classname ." ". $semester_term ." ". $semester_year . '</div>
                        <div>Last Day '.$class_last_day.' &nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp Class '.$class_counter.' of '.$num_classes.'</div>
                    </div>';
                    $q4 = mysqli_query($conn,"SELECT assignment_id FROM class_assignment WHERE classid='$classid';");
                    if(mysqli_num_rows($q4)>0){
                        while($newq4 = $q4->fetch_assoc()){
                            $assignment_id = $newq4['assignment_id'];
                            $q5 = mysqli_query($conn,"SELECT assignment_id, last_day, grade, status FROM student_assignment WHERE assignment_id='$assignment_id' AND student_id='$uid';");
                            if(mysqli_num_rows($q5)>0){
                                while($newq5 = $q5->fetch_assoc()){ 
                                    $assignment_id_student = $newq5['assignment_id'];
                                    $assignment_last_day = $newq5['last_day'];
                                    $assignment_grade = $newq5['grade'];
                                    $assignment_status = $newq5['status'];
                                    $q6 = mysqli_query($conn,"SELECT assignment_name FROM assignment WHERE assignment_id='$assignment_id_student';");
                                    if(mysqli_num_rows($q6)>0){
                                        $newq6 = mysqli_fetch_assoc($q6);
                                        $assignment_name = $newq6['assignment_name'];
                                        $tasks_html .= '<div class="task-line">
                                            <div class="div1"><li>'.$assignment_name.'</li></div>
                                            <div class="div2">Due: '.$assignment_last_day.'</div>
                                            <div class="div3">'.$assignment_grade.'</div>
                                            <div class="div3 status '.$assignment_status.'">'.$assignment_status.'</div>
                                            <div class="div4">
                                                <button class="task-btn" onclick="window.location.href=\'view-assignment.php?class='.$classid.'&assignment='.$assignment_id_student.'\'">
                                                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                                </button>
                                            </div>
                                        </div>';
                                    }
                                }
                            }
                        }
                    }
                    else{
                        $tasks_html .= '<div class="task-line">
                                            <div class="div1"><li>No Tasks Assigned</li></div>
                                        </div>';
                    }
                }
            }
        }
    }
    return $tasks_html;
}
?>
