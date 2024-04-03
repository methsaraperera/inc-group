<?php
//session_start();
require_once "config.php";
if(!isset($_SESSION['uid'])){ // checking if the session is implimented
   // header("location: index.html"); 
}
$uid = $_SESSION['uid']; // session key = user id which is used to access the database

$q1 = mysqli_query($conn,"SELECT fname, lname FROM student WHERE cunyid='$uid';");
if(mysqli_num_rows($q1) > 0){
    $newq1 = mysqli_fetch_assoc($q1);
    $fname = $newq1['fname'];
    $lname = $newq1['lname'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/quill@2.0.0-rc.2/dist/quill.snow.css" rel="stylesheet" />
<link rel="stylesheet" href="styles.css">

<title>Student Home</title>
<style>
    
</style>
</head>
<body>

<div class="navbar">
    <h2 class="navbar-title">BMCC Task Tracker - Student View</h2>

    <div class="navbar-buttons">
        <p><?php echo $fname," ",$lname,'&nbsp&nbsp&nbsp'?></p>
        <button class="navbar-button">Profile</button>
        <button class="navbar-button">Logout</button>
        <!--<button class="navbar-button"></button>-->
    </div>
</div>

<div class="container">
    <div class="left-panel">
        <div class="breadcrumb-container">
            Home &nbsp<i class="fa-solid fa-caret-right"></i>&nbsp Assignments &nbsp<i class="fa-solid fa-caret-right"></i>&nbsp Paper 4: A Final Documented Essay
        </div>
        
        <div class="task-container">
            <div class="task-heading">Add Comments</div>
            <div id="editor">
                <br/>
                <h1>Paper 4: A Final Documented Essay</h1>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pellentesque habitant morbi tristique senectus et netus et malesuada. Vitae proin sagittis nisl rhoncus mattis rhoncus urna. Nec feugiat in fermentum posuere urna. Blandit cursus risus at ultrices mi. Risus commodo viverra maecenas accumsan lacus. Scelerisque in dictum non consectetur a erat. Nec ultrices dui sapien eget mi proin sed libero. Maecenas ultricies mi eget mauris pharetra et. Eget arcu dictum varius duis at consectetur lorem donec. Est ultricies integer quis auctor. Nunc eget lorem dolor sed viverra. Interdum velit euismod in pellentesque massa placerat duis. Duis at tellus at urna condimentum mattis pellentesque. Elit ullamcorper dignissim cras tincidunt lobortis feugiat vivamus at. Mi in nulla posuere sollicitudin aliquam ultrices sagittis. Dictum varius duis at consectetur lorem donec massa sapien faucibus.<br><br>

            Senectus et netus et malesuada fames. Gravida quis blandit turpis cursus in hac. Sapien nec sagittis aliquam malesuada bibendum arcu vitae elementum. Rutrum tellus pellentesque eu tincidunt. Cum sociis natoque penatibus et magnis. Feugiat sed lectus vestibulum mattis. Quam viverra orci sagittis eu volutpat odio. Sed libero enim sed faucibus turpis in eu mi bibendum. Sit amet consectetur adipiscing elit pellentesque habitant morbi tristique senectus. Sagittis eu volutpat odio facilisis. In massa tempor nec feugiat nisl pretium fusce. Auctor elit sed vulputate mi sit. Risus nullam eget felis eget nunc lobortis mattis aliquam faucibus. Sed lectus vestibulum mattis ullamcorper velit sed ullamcorper. Consectetur adipiscing elit ut aliquam purus. Mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare. Quam viverra orci sagittis eu. At in tellus integer feugiat scelerisque.</p>
            
                
                <p>Hello World!</p>
                <p>Some initial <strong>bold</strong> text</p>
                <p><br /></p>
            </div>

            <form action="submit.php" method="post">
    <div id="quill-editor" name="quillText" style="height: 300px;"></div>

    <!-- Submit button -->
    <button type="submit">Submit</button>
</form>
            


        
            
        </div> 

        

        
    </div>

    <div class="right-panel">
        <br>
        <div class="menu">
            <div class="task-heading">Your work</div>
            
            <div class="rightbar-divider"></div>
            <div class="rightbar-buttons">
                <button class="rightbar-button">Turn in</i></button>
                <div class="rightbar-divider"></div>
                <button class="rightbar-button">Upload a file</i></button>
                <button class="rightbar-button">Add a link</i></button>
            </div>
        </div>
        <br>

        <div class="menu">
            <p>Due Date: Jun 24, 2024</p>
            <p>Points Possible: 100 Points</p>
        </div>
        
    </div>
</div>

<div class="footer">
    <p class="footer-content">Copyright © Methsara Perera - Tech Innovation Hub Internship @ BMCC Tech Learning Community </p>
</div>


<!-- Include the Quill library -->
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.0-rc.2/dist/quill.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        var quill = new Quill('#quill-editor', {
            theme: 'snow',
            placeholder: 'Write your text here...',
        });
    });
</script>
<!-- Initialize Quill editor -->
<script>
  const quill = new Quill('#editor', {
    theme: 'snow'
  });
</script>

<script src="js/watson.js"></script>
<script src="https://kit.fontawesome.com/137463bc4f.js" crossorigin="anonymous"></script>


</body>
</html>
