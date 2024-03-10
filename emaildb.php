<?php
// Database connection parameters
$servername = "localhost"; // or your database server address
$username = "id21973574_bruceworks"; // your database username
$password = "@Tintin00"; // your database password
$database = "id21973574_personal_webiste"; // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve user_id and verification code from the form submission
$user_id = $_POST['user_id'];
$verification_code = $_POST['verificationCode'];

// Prepare SQL query to retrieve the verification code from the database
$sql_select_code = "SELECT verification_code FROM users WHERE user_id = '$user_id'";
$result_select_code = $conn->query($sql_select_code);

if ($result_select_code->num_rows > 0) {
    // If the user_id exists in the database
    $row = $result_select_code->fetch_assoc();
    $stored_verification_code = $row['verification_code'];

    if ($verification_code == $stored_verification_code) {
        // Verification code matches, proceed with further actions (e.g., registration completion)
        // You can redirect to details.php or execute additional actions here
        header("Location: details.php?user_id=" . $user_id);
        exit();
    } else {
        // Verification code does not match
        header("Location: emailverify.php?user_id=$user_id");    }
} else {
    // User ID not found in the database
    echo "Invalid user ID.";
}

// Close database connection
$conn->close();
?>
