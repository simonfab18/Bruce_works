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

// Retrieve user_id from POST data
$user_id = $_POST['user_id'];

// Perform the deletion operation based on the user_id
$sql_delete_user = "DELETE FROM users WHERE user_id = $user_id";

if ($conn->query($sql_delete_user) === TRUE) {
    echo "Account deleted successfully";
} else {
    echo "Error deleting account: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
