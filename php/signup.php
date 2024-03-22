<?php
session_start();
require_once "../config.php";
if(isset($_POST['Register'])){
    $fname = ($_POST['fname']);
    $lname = ($_POST['lname']);
    $cunyid = ($_POST['cunyid']);
    $email = ($_POST['email']);
    $pw = ($_POST['password']);
    $pw_re = ($_POST['re-password']);

    if(!empty($fname) && !empty($lname) && !empty($cunyid) && !empty($email) && !empty($pw) && !empty($pw_re)){
        if($pw == $pw_re){
            $id_length = strlen((string)$cunyid);
            if($id_length == 8){
                $sql = mysqli_query($conn, "SELECT * FROM student WHERE cunyid = '{$cunyid}'");
                if(mysqli_num_rows($sql) > 0){
                    header("Location: ../signup.php?error-exist=true");
                    
                    exit();
                }
                else{
                    $insert_query = mysqli_query($conn, "INSERT INTO `student` (`cunyid`, `fname`, `lname`, `email`, `password`) 
                    VALUES ('{$cunyid}', '{$fname}', '{$lname}', '{$email}', '{$pw}')");
                    if($insert_query){
                        $select_sql2 = mysqli_query($conn, "SELECT * FROM student WHERE cunyid = '{$cunyid}'");
                        if(mysqli_num_rows($select_sql2) > 0){
                            header("Location: ../signup.php?success=true");
                            exit();
                        }
                    }
                    else{
                        header("Location: ../signup.php?error=true");
                        exit();
                    }
                }
            }
            else{
                header("Location: ../signup.php?error-len=true");
                exit();
            }
        }
        else{
            header("Location: ../signup.php?error-pw=true");
            exit();
        }
    }
    else{
        header("Location: ../signup.php?error-inc=true");
        exit();
    }

}
?>
