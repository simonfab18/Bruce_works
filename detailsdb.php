<?php
// Connect to your MySQL database
$servername = "localhost"; // or your database server address
$username = "id21973574_bruceworks"; // your database username
$password = "@Tintin00";
$database = "id21973574_personal_webiste";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form submission
    $user_id = isset($_POST['user_id']) ? $_POST['user_id'] : null;
    $country = isset($_POST['country']) ? $_POST['country'] : null;
    $lot_block = isset($_POST['lotBlock']) ? $_POST['lotBlock'] : null;
    $street = isset($_POST['street']) ? $_POST['street'] : null;
    $phase = isset($_POST['phase']) ? $_POST['phase'] : null;
    $barangay = isset($_POST['barangay']) ? $_POST['barangay'] : null;
    $city_municipality = isset($_POST['cityMunicipality']) ? $_POST['cityMunicipality'] : null;
    $province = isset($_POST['province']) ? $_POST['province'] : null;

    // Check if user_id is provided
    if ($user_id === null) {
        die("Error: No user_id provided.");
    }

    // Prepare and bind the SQL statement to insert data into the table
    $stmt = $conn->prepare("INSERT INTO address (user_id, country, lot_blk, street, subdivision, barangay, city, province) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssssss", $user_id, $country, $lot_block, $street, $phase, $barangay, $city_municipality, $province);

    // Execute the statement
    if ($stmt->execute()) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
} else {
    // If the form was not submitted, redirect the user or display an error message
    echo "Form was not submitted.";
}

// Close the database connection
$conn->close();
?>
