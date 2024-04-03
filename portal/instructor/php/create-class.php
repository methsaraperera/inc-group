<?php
session_start();
require_once "../config.php";
if(!isset($_SESSION['insid'])){ // checking if the session is implimented
    header("location: index.html"); 
    exit();
}
if(!isset($_SESSION['instructor']) || $_SESSION['instructor'] != true){ // checking if the session is implimented
    header("location: index.html"); 
    exit();
}
$uid = $_SESSION['insid']; 


if (isset($_POST['add'])) {
    $clid=$_POST['clid'];
    $subcd=$_POST['subcd'];
    $clunum=$_POST['clunum'];
    $clsec=$_POST['clsec'];
    $clname=$_POST['clname'];
    $sem=$_POST['sem'];
    $year=$_POST['year'];

    $insertquery= mysqli_query($conn, "INSERT INTO `class` (`classid`, `subject`, `unit`, `section`, `classname`, `semester_term`, `semester_year`) VALUES ('$clid', '$subcd', '$clunum', '$clsec', '$clname', '$sem','$year');");
    if($insertquery){
        $assignquery = mysqli_query($conn, "INSERT INTO `instructor_class` (`instructor_cunyid`, `classid`) VALUES ('$uid', '$clid') ;");
        if($assignquery){
            header("location: ../instructor.php"); 
            exit();
        }
        else{
            echo "error1";
        }
    }
    else{
        echo "error2";
    }
    

}

?>

