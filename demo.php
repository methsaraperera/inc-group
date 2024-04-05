<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'php/head.php'; ?>
    <title>Demo - INC Resolver Suite</title>
</head>
<body>
    <header>
        <?php include('php/header.php');?>
    </header>
    <section class="home-section-full">
        <div class="home-main-section-full">
            <div class="home-content-full">
                <h2>You can access demo content by,</h2>
                <h3>Student:</h3>
                <p class="text-box">Email: <span id="emailText">test@test.net</span><button class="copy-button" onclick="copyText('emailText')"><i class="fa-solid fa-copy"></i></button></p>
                <p class="text-box">Password: <span id="passwordText">12345678</span><button class="copy-button" onclick="copyText('passwordText')"><i class="fa-solid fa-copy"></i></button></p>
                <h3>Instructor:</h3>
                <p class="text-box">Email: <span id="emailText">test@test.net</span><button class="copy-button" onclick="copyText('emailText')"><i class="fa-solid fa-copy"></i></button></p>
                <p class="text-box">Password: <span id="passwordText">1234</span><button class="copy-button" onclick="copyText('passwordText')"><i class="fa-solid fa-copy"></i></button></p>
                <h3>Department Chairperson:</h3>
                <p class="text-box">Email: <span id="emailText">Coming Soon</span><button class="copy-button" onclick="copyText('emailText')"><i class="fa-solid fa-copy"></i></button></p>
                <p class="text-box">Password: <span id="passwordText">Coming Soon</span><button class="copy-button" onclick="copyText('passwordText')"><i class="fa-solid fa-copy"></i></button></p>
                <h3>Reporting:</h3>
                <p class="text-box">Email: <span id="emailText">Coming Soon</span><button class="copy-button" onclick="copyText('emailText')"><i class="fa-solid fa-copy"></i></button></p>
                <p class="text-box">Password: <span id="passwordText">Coming Soon</span><button class="copy-button" onclick="copyText('passwordText')"><i class="fa-solid fa-copy"></i></button></p>
                <h3>Bursar:</h3>
                <p class="text-box">Email: <span id="emailText">Coming Soon</span><button class="copy-button" onclick="copyText('emailText')"><i class="fa-solid fa-copy"></i></button></p>
                <p class="text-box">Password: <span id="passwordText">Coming Soon</span><button class="copy-button" onclick="copyText('passwordText')"><i class="fa-solid fa-copy"></i></button></p>
            </div>
        </div>

        
    </section>
    <footer>
        <div class="footer-content">
            <?php include 'php/copyright.php'; ?>
        </div>
    </footer>
    <script src="https://kit.fontawesome.com/137463bc4f.js" crossorigin="anonymous"></script>
    <script src="js/watson.js"></script>
    <script src="js/copy.js"></script>
</body>
</html>
