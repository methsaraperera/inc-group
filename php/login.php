<?php
session_start();
require_once "../config.php";

if (isset($_POST['Login'])) {
    $email = ($_POST['email']);
    $pw = ($_POST['password']);
    $role = ($_POST['role']); // checking for the role of the user
    if($role == 2){ // login for role 2 (students)
        if (!empty($email) && !empty($pw)) {
            $sql = mysqli_query($conn, "SELECT * FROM student WHERE email = '{$email}'");
            if (!mysqli_num_rows($sql) > 0) {
                header("Location: ../login.php?stu=true&error-non=true"); // user non exist
                exit();
            } 
            else {
                $search_password = mysqli_query($conn, "SELECT cunyid, password FROM student WHERE email = '{$email}'");
                if (mysqli_num_rows($search_password) > 0) {
                    $row = mysqli_fetch_assoc($search_password);
                    $db_pw = $row['password'];
                    $uid = $row['cunyid']; // will be used in future developments as the session key for login
                    if ($pw == $db_pw) {
                        //echo 'success'; // successfully logged in
                        $_SESSION['uid'] = $uid; // start user session with user id
                        header("Location: ../portal/student/dashboard.php");
                        exit();
                    } else {
                        header("Location: ../login.php?stu=true&error-pw=true"); // invalid password
                        exit();
                    }
                } else {
                    header("Location: ../login.php?stu=true&error=true"); // unknown error
                    exit();
                }
            }
        } else {
            header("Location: ../login.php?stu=true&error-inc=true"); // form invalid
            exit();
        }
    }

    elseif($role == 1){ // login for role 1 (instructor)
        if (!empty($email) && !empty($pw)) {
            $sql = mysqli_query($conn, "SELECT * FROM instructor WHERE email = '{$email}'");
            if (!mysqli_num_rows($sql) > 0) {
                header("Location: ../login.php?inc=true&error-non=true"); // user non exist
                exit();
            } 
            else {
                $search_password = mysqli_query($conn, "SELECT cunyid, password FROM instructor WHERE email = '{$email}'");
                if (mysqli_num_rows($search_password) > 0) {
                    $row = mysqli_fetch_assoc($search_password);
                    $db_pw = $row['password'];
                    $uid = $row['cunyid']; // will be used in future developments as the session key for login
                    if ($pw == $db_pw) {
                        $_SESSION['insid'] = $uid;
                        $_SESSION['instructor'] = true;
                        header("Location: ../portal/instructor/dashboard.php"); 
                    } else {
                        header("Location: ../login.php?inc=true&error-pw=true"); // invalid password
                        exit();
                    }
                } else {
                    header("Location: ../login.php?inc=true&error=true"); // unknown error
                    exit();
                }
            }
        } else {
            header("Location: ../login.php?inc=true&error-inc=true"); // form invalid
            exit();
        }
    }

    elseif($role == 0){ // login for role 0 (administrative)
        $staff_type =  ($_POST['staff_type']);
        if (!empty($email) && !empty($pw)) {
            $sql = mysqli_query($conn, "SELECT * FROM admin WHERE admin_email = '{$email}'");
            if (!mysqli_num_rows($sql) > 0) {
                header("Location: ../login.php?rep=true&error-non=true"); // user non exist
                exit();
            } 
            else {
                $search_password = mysqli_query($conn, "SELECT admin_id, password FROM admin WHERE admin_email = '{$email}'");
                if (mysqli_num_rows($search_password) > 0) {
                    $row = mysqli_fetch_assoc($search_password);
                    $db_pw = $row['password'];
                    $uid = $row['admin_id']; // will be used in future developments as the session key for login
                    if ($pw == $db_pw) {
                        if ($staff_type == 'chair'){
                            $_SESSION['chair'] = $uid;
                            header("Location: ../portal/chair/dashboard.php"); 
                        }
                        elseif ($staff_type == 'admin'){
                            $_SESSION['admin'] = $uid;
                            header("Location: ../portal/admin/dashboard.php"); 
                        }
                        elseif ($staff_type == 'reg'){
                            $_SESSION['reg'] = $uid;
                            header("Location: ../portal/registrar/dashboard.php"); 
                        }
                        else{
                            header("Location: ../login.php?rep=true&error=true"); // unknown error
                            exit();
                        }
                            
                    } else {
                        header("Location: ../login.php?inc=true&error-pw=true"); // invalid password
                        exit();
                    }
                } else {
                    header("Location: ../login.php?rep=true&error=true"); // unknown error
                    exit();
                }
            }
        } else {
            header("Location: ../login.php?rep=true&error-inc=true"); // form invalid
            exit();
        }
    }

    else{
        echo 'err role inc';
    }
}
?>
