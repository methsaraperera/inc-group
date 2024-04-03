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
<link rel="stylesheet" href="styles-web.css">
<link rel="apple-touch-icon" sizes="180x180" href="src/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="src/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="src/favicon/favicon-16x16.png">
<title>INC Resolver Suite</title>
</head>
<body>
    <header>
        <?php include('php/header.php');?>
    </header>
    <section class="home-section">
        <div class="home-main-section">
            <div class="home-content">
                <h1>Welcome to BMCC INC Resolver Suite</h1>
                <p>At BMCC, we understand the demands of college life, and we're excited to introduce the Incomplete Grade Portal 
                    – your go-to platform to make up for extended classes and gain academic success.</p>
                <br>
                <h3>Student Demo:</h3>
                <p class="text-box">Email: <span id="emailText">demo@student.com</span><button class="copy-button" onclick="copyText('emailText')"><i class="fa-solid fa-copy"></i></button></p>
                <p class="text-box">Password: <span id="passwordText">demo@student.com</span><button class="copy-button" onclick="copyText('passwordText')"><i class="fa-solid fa-copy"></i></button></p>
            </div>
        </div>

        <div class="home-side-section">
            <div class="home-content">
                <h3>Students,</h3>
                <div class="home-buttons">
                    <a href="login.php?stu=true" class="home-button"><button class="home-button">Sign In</button></a>
                    <a href="signup.php" class="home-button"><button class="home-button">Sign Up</button></a>
                </div>
                <hr>
                <h3>Instructors,</h3>
                <div class="home-buttons">
                    <a href="login.php?inc=true" class="home-button"><button class="home-button">Sign In</button></a>
                </div>
                <hr>
                <h3>Reports,</h3>
                <div class="home-buttons">
                    <a href="login.php?rep=true" class="home-button"><button class="home-button">Sign In</button></a>
                </div>
                <hr>
                <p style="font-size: 0.8em; color: var(--white-color); padding-top: 20px;">Copyrights &copy 2024 Methsara Perera & Yeasin Arafat.<br>Tech Innovation Hub Internship at BMCC Tech Learning Community</p> 
            </div>
        </div>
    </section>
    <script src="https://kit.fontawesome.com/137463bc4f.js" crossorigin="anonymous"></script>
    <script src="js/watson.js"></script>
    <script src="js/copy.js"></script>
</body>
</html>
