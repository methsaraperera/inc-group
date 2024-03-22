<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">


<link rel="stylesheet" href="styles.css">
<title>INC Resolver - Login</title>
<style>
    
</style>
</head>
<body>
<?php
    if(isset($_GET['stu'])){
        $role=2;
    }
    elseif(isset($_GET['inc'])){
        $role=1;
    }
    elseif(isset($_GET['rep'])){
        $role=0;
    }
?>

<div class="navbar">
    <h2 class="navbar-title">BMCC Task Tracker - Home</h2>
    <div class="navbar-buttons">
        <button class="navbar-button" onclick=window.location.href="index.html">Home</button>
        
        <button class="navbar-button" onclick=window.location.href="signup.php">Sign Up</button>
    </div>
</div>
<div class="full-screen-container">
    <div class="form-container">
        <h2>Log in</h2>

        <?php
             
            if (isset($_GET['error-non'])) {
                echo '<div class="error">User not registered</div>';
            } 
            elseif (isset($_GET['error-pw'])) {
                echo '<div class="error">Invalid Password</div>';
            }
            elseif (isset($_GET['error'])) {
                echo '<div class="error">Unknown Error Occured</div>';
            }
            elseif (isset($_GET['error-inc'])) {
                echo '<div class="error">Form Invalid</div>';
            }
        ?>
        
        <form method="POST" class="flex-form" action="php/login.php" enctype="multipart/form-data">

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="test@test.net" required>
        
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <input type='hidden' id='role' name='role' value= '<?php echo $role; ?>'>
        
            <input type="submit" class="form-button" name="Login" value="Login" required>

        </form>   
    </div>
</div>

<div class="footer">
    <p class="footer-content">Copyright © Methsara Perera - Tech Innovation Hub Internship @ BMCC Tech Learning Community </p>
</div>


<script src="js/watson.js"></script>

</body>
</html>
