<?php
session_start();
require_once "../config.php";

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

// Retrieve assignment ID from POST request
$assignmentId = isset($_POST['assignment_id']) ? $_POST['assignment_id'] : '';

// Convert Quill.js text to Markdown (you may need to adjust this conversion based on your specific requirements)
$markdownText = quillToMarkdownConversion($quillText);


echo "quillText: $quillText, assignmentId: $assignmentId, uid: $uid";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Use prepared statement to update data in the database
$updateQuery = $conn->prepare("UPDATE `assignment` SET `content`=? WHERE `assignment_id`=? AND `instructor_id`=?");
$updateQuery->bind_param("sss", $markdownText, $assignmentId, $uid);

if ($updateQuery->execute()) {
    header("Location: ../edit-assignment.php?assignment={$assignmentId}&success=true");
    exit();
} else {
    echo "Error: " . $updateQuery->error;
}

// Close the prepared statement and the database connection
$updateQuery->close();
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
