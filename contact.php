<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'php/head.php'; ?>
    <title>About - INC Resolver Suite</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f0f0f0;
    }
    
    .container {
        max-width: 600px;
        margin: 50px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    h2 {
        text-align: center;
        color: #007bff;
    }
    
    .input-group {
        margin-bottom: 20px;
    }
    
    .input-group label {
        display: block;
        margin-bottom: 5px;
        color: #555;
    }
    
    .input-group input[type="text"],
    .input-group input[type="email"],
    .input-group textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        resize: none;
    }
    
    .input-group input[type="text"]:focus,
    .input-group input[type="email"]:focus,
    .input-group textarea:focus {
        border-color: #007bff;
    }
    
    .input-group input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 5px;
        font-size: 16px;
    }
    
    .input-group input[type="submit"]:hover {
        background-color: #0056b3;
    }
    
    ::placeholder {
        color: #999;
    }
    
    input:required,
    textarea:required {
        border-color: #007bff;
    }
</style>
</head>
<body>
    <header>
        <?php include('php/header.php');?>
    </header>
   <div class="container">
    <h2>Contact Us</h2>
    <form id="contact-form" method="post">
        <div class="input-group">
            <label for="student-name">Name:</label>
            <input type="text" id="student-name" name="student-name" placeholder="Enter your name" required>
        </div>
        <div class="input-group">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="input-group">
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" placeholder="Write your message here" required></textarea>
        </div>
        <div class="input-group">
            <input type="submit" value="Send Message">
        </div>
    </form>
</div>    <footer>
        <div class="footer-content">
            <?php include 'php/copyright.php'; ?>
        </div>
    </footer>
    <script src="https://kit.fontawesome.com/137463bc4f.js" crossorigin="anonymous"></script>
    <script src="js/watson.js"></script>
    <script src="js/copy.js"></script>
</body>
</html>
