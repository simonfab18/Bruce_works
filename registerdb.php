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

// Include PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Collect form data
    $first_name = $_POST["firstName"];
    $last_name = $_POST["lastName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash password
    
    // SQL to check if the email already exists
    $sql_check_email = "SELECT * FROM users WHERE email='$email'";
    $result_check_email = $conn->query($sql_check_email);

    // Check if the result has any rows
    if ($result_check_email->num_rows > 0) {
        // Email already exists, display error message or handle it accordingly
        $error = "Email is already taken";
        header("Location: register.php?error=" . urlencode($error)); // Pass error as a parameter
        exit;
    } else {
        // Generate a random verification code
        $verification_code = mt_rand(100000, 999999);

        // Send verification email
        try {
            $mail = new PHPMailer(true);

            //Server settings
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com'; 
            $mail->SMTPAuth   = true; 
            $mail->Username   = 'simognf@gmail.com';
            $mail->Password   = 'pqtg pcty cwcj wqpy';
            $mail->SMTPSecure = 'ssl';
            $mail->Port       = 465;                                    
        
            //Recipients
            $mail->setFrom('simognf@gmail.com', 'Bruce Works');
            $mail->addAddress($email);   
            $mail->addReplyTo('simognf@gmail.com', 'Bruce Works'); 
        
            //Content
            $mail->isHTML(true);  
            $mail->Subject = 'Verify your Email';
            $mail->Body    = 'Your verification code is: ' . $verification_code; 

            $mail->send();
            echo 'Verification email has been sent.';

            // Save the verification code to the database
           

            // Proceed with user registration after sending the verification email
            $sql = "INSERT INTO users (firstname, lastname, email, phone_no, password, verification_code) VALUES ('$first_name', '$last_name', '$email', '$phone', '$password', '$verification_code')";

            if ($conn->query($sql) === TRUE) {
                $user_id = $conn->insert_id;

                // Redirect to emailverify.php with user_id as a query parameter
                header("Location: emailverify.php?user_id=$user_id");
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } catch (Exception $e) {
            echo "Verification email could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}

?>
