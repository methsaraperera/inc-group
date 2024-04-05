<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'php/head.php'; ?>
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
                <p style="font-size: 0.8em; color: var(--white-color); padding-top: 20px;"><?php include 'php/copyright.php'; ?></p> 
            </div>
        </div>
    </section>
    <script src="https://kit.fontawesome.com/137463bc4f.js" crossorigin="anonymous"></script>
    <script src="js/watson.js"></script>
    <script src="js/copy.js"></script>
</body>
</html>
