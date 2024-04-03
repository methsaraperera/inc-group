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

<!--link rel="stylesheet" href="styles.css"-->
<link rel="stylesheet" href="styles-web.css">
<link rel="apple-touch-icon" sizes="180x180" href="src/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="src/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="src/favicon/favicon-16x16.png">
<title>INC Resolver Suite - Login</title>
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
    <header>
        <?php include('php/header.php');?>
    </header>
    <section class="home-section">
        <div class="home-main-section">
            <div class="home-content">
                
            </div>
        </div>

        <div class="form-side-section">
            <div class="home-content">
                <h3>Log in,</h3>
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
    </section>


    <footer>
        <div class="footer-content">
            Copyrights &copy 2024 Methsara Perera & Yeasin Arafat. Tech Innovation Hub Internship at BMCC Tech Learning Community
        </div>
    </footer>

    


<script src="js/watson.js"></script>

</body>
</html>
