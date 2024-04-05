<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">


<link rel="stylesheet" href="styles.css">
<title>INC Resolver - Signup</title>
<style>
    
</style>
</head>
<body>

<div class="navbar">
    <h2 class="navbar-title">BMCC Task Tracker - Home</h2>
    <div class="navbar-buttons">
        <button class="navbar-button" onclick=window.location.href="index.html">Home</button>
        <button class="navbar-button" onclick=window.location.href="login.html">Sign In</button>
    </div>
</div>
<div class="full-screen-container">
    <div class="form-container">
        <h2>Sign Up</h2>

        <?php
            if (isset($_GET['success'])) {
                echo '<div class="success">Signup Successful</div>';
            } 
            elseif (isset($_GET['error-exist'])) {
                echo '<div class="error">User already exists</div>';
            } 
            elseif (isset($_GET['error-pw'])) {
                echo '<div class="error">Invalid Password</div>';
            }
            elseif (isset($_GET['error-inc'])) {
                echo '<div class="error">Form Incomplete</div>';
            }
            elseif (isset($_GET['error-inc'])) {
                echo '<div class="error">Unknown Error Occured</div>';
            }
            elseif (isset($_GET['error-len'])) {
                echo '<div class="error">Invalid CUNY ID</div>';
            }
        ?>
        
        <form method="POST" class="flex-form" action="php/signup.php" enctype="multipart/form-data">
          
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="fname" required>

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lname" required>

            <label for="cunyid">CUNY First ID</label>
            <input type="number" id="cunyid" name="cunyid"  required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <label for="re-password">Re-enter Password</label>
            <input type="password" id="re-password" name="re-password" required>
        
            <input type="submit" class="form-button" name="Register" value="Register" required>

        </form>   
    </div>
</div>

<div class="footer">
    <p class="footer-content">Copyright © Methsara Perera - Tech Innovation Hub Internship @ BMCC Tech Learning Community </p>
</div>

<script src="js/watson.js"></script>

</body>
</html>
