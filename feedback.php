<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// Check if the feedback form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the feedback from the form
    $feedback = $_POST['email'];

    // Sanitize the input
    $feedback = htmlspecialchars($feedback);

    // Connect to your database
    $connection = mysqli_connect("localhost", "id21973574_bruceworks", "@Tintin00", "id21973574_personal_webiste");

    // Check connection
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare the SQL statement to insert feedback
    $user_id = $_SESSION['user_id'];
    $sql = "INSERT INTO feedback (user_id, feedback) VALUES ('$user_id', '$feedback')";

    // Execute the SQL statement
    if (mysqli_query($connection, $sql)) {
        // Feedback inserted successfully
        header("Location: index.php?feedback_sent=1");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }

    // Close the database connection
    mysqli_close($connection);
} else {
    // If the form is not submitted, redirect back to the homepage
    header("Location: index.php");
    exit;
}
?>
