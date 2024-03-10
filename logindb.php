<?php
session_start();
// Establish database connection
$connection = mysqli_connect("localhost", "id21973574_bruceworks", "@Tintin00", "id21973574_personal_webiste");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Fetch user data from the database
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($connection, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            // Password is correct, redirect to the user's dashboard or homepage
            $_SESSION['email'] = $email;
            $_SESSION['user_id'] = $row['user_id'];
            header("Location: index.php");
            exit;
        } else {
            $error = "Invalid email or password";
            header("Location: login.php?error=" . urlencode($error)); // Pass error as a parameter
            exit;
        }
    } else {
        $error = "User not found";
        header("Location: login.php?error=" . urlencode($error)); // Pass error as a parameter
        exit;
    }
}

// Close database connection
mysqli_close($connection);
?>
