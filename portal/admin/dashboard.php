<?php
// chairperson dashboard
session_start();
require_once "../../config.php";
if(!isset($_SESSION['chair'])){ // checking if the session is implimented
    //header("location: ../../index.php"); 
}
//$uid = $_SESSION['chair']; // session key = user id which is used to access the database


$q1 = mysqli_query($conn,"SELECT admin_fname, admin_lname FROM admin WHERE admin_id='$uid';");
if(mysqli_num_rows($q1) > 0){
    $newq1 = mysqli_fetch_assoc($q1);
    $fname = $newq1['admin_fname'];
    $lname = $newq1['admin_lname'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
<!--link rel="stylesheet" href="../styles.css"-->
<link rel="stylesheet" href="../styles-web.css">
<script src="js/get-status.js"></script>

<title>Chairperson Home</title>
<style>
    
</style>
</head>
<body>

    <header>
        <?php include('../php/header.php');?>
    </header>
    <section class="home-section-full">
        <div class="container">
            <div class="full-panel">
                <div class="dashboard">
                    <div class="card-admin">
                        <h3>Student Status</h3>
                        <canvas id="pendingRequestsChart" width="400" height="150"></canvas>
                        
                        
                    </div>
                    <div class="card-admin">
                        <h3>Pending Grade Assign Requests</h3>
                        <?php
                            //include 'php/get-days-remaining.php';
                        ?>
                        <div class="card-divider"></div>
                        <p>Feature coming soon...</p>
                    </div>
                    <div class="card-admin">
                        <h3>Pending Connect Requests</h3>
                        <?php
                            //include 'php/get-days-remaining.php';
                        ?>
                        <div class="card-divider"></div>
                        <p>Feature coming soon...</p>
                    </div>
                </div>
                
        </div>
    </section>
<footer>
    <div class="footer-content">
        <?php include '../../php/copyright.php'; ?>
    </div>
</footer>
<script
src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
</script>
<script src="js/watson.js"></script>
<script src="https://kit.fontawesome.com/137463bc4f.js" crossorigin="anonymous"></script>


</body>
</html>
