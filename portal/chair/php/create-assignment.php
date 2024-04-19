<?php
session_start();
require_once "../../../config.php";

/************************************************/
/* REMINDER: CONFIGURE INSTRUCTOR ONLY ACCEESS */
/**********************************************/

$uid = $_SESSION['insid'];

// Function to sanitize and prepare data
function sanitizeInput($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    return $input;
}

// Retrieve Quill.js text prompt from POST request
$quillText = isset($_POST['quill_content']) ? $_POST['quill_content'] : '';


// Retrieve assignment name from POST request
$assignmentName = isset($_POST['assignment_name']) ? sanitizeInput($_POST['assignment_name']) : '';

// Convert Quill.js text to Markdown (you may need to adjust this conversion based on your specific requirements)
$markdownText = quillToMarkdownConversion($quillText);

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Use prepared statement to insert data into the database
$insertQuery = $conn->prepare("INSERT INTO `assignment` (`assignment_id`, `assignment_name`, `instructor_id`, `content`) VALUES (NULL, ?, ?, ?)");
$insertQuery->bind_param("sss", $assignmentName, $uid, $markdownText);

if ($insertQuery->execute()) {
    header("Location: ../assignments.php?success=true");
            exit();
} else {
    echo "Error: " . $insertQuery->error;
}

// Close the prepared statement and the database connection
$insertQuery->close();
$conn->close();

// Function for Quill.js to Markdown conversion (You may need to implement your own conversion logic)
function quillToMarkdownConversion($quillText) {
    // Your conversion logic here
    // Example: Replace <p> tags with Markdown newline
    $markdownText = str_replace('<p>', "\n", $quillText);
    $markdownText = str_replace('</p>', '', $markdownText);

    return $markdownText;
}
?>
