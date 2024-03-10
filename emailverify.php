<?php
// Retrieve user_id from the URL
$user_id = $_GET['user_id'];

$connection = mysqli_connect("localhost", "id21973574_bruceworks", "@Tintin00", "id21973574_personal_webiste");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT email FROM users WHERE user_id='$user_id'";
$result = mysqli_query($connection, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $fname = $row['email'];
} else {

    $fname = "email";
}


mysqli_close($connection);
// Check if there is an error parameter in the URL
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Godfather Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Custom Styles -->
    <style>
        body {
            background-color: #000000;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh;
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .welcome-content {
            text-align: center;
            margin-top: -315px; /* Add some top margin */
            
        }


        .welcome-content h1 {
            font-family: 'Times New Roman', Times, serif;
            color: #ffffff;
            margin-bottom: 20px; /* Increased margin */
            font-size: 53px; /* Increased font size */
            text-shadow: 4px 4px 10px rgba(0, 0, 0, 0.8);
            margin-left: 10px
        }

        .welcome-content p {
            color: #c3cbd1;
            font-size: 25px; /* Increased font size */
            margin-top: 0;
        }

        .login-form {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 50px; /* Increased padding */
            border-radius: 20px; /* Increased border radius */
            width: 440px; /* Increased width */
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.4), 0px 0px 40px rgba(0, 0, 0, 0.2); /* Added multiple shadows */
            transition: all 0.3s ease; /* Added transition */
            margin-left: 90px;
        }

        .login-form:hover {
            transform: translateY(-5px); /* Added hover effect */
        }

        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .login-header h2 {
            font-family: 'Times New Roman', Times, serif;
            color: #343a40;
            margin-bottom: 10px; /* Increased margin */
            font-size: 35px;
            
        }

        .login-header p {
            color: #6c757d;
            font-size: 19px; /* Increased font size */
            margin-top: 0;
        }

        /* Adjust icon alignment */
        .input-group-prepend .input-group-text {
            background-color: transparent;
            border: none;
        }

        .custom-control-label {
            color: #6c757d;
        }

        .btn-dark {
            background-color: #343a40;
            border-color: #343a40;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-dark:hover {
            background-color: #212529;
            border-color: #212529;
            transform: scale(1.05);
        }

        .btn-dark:focus {
            box-shadow: none;
        }

        a {
            color: #343a40;
            text-decoration: none;
        }

        a:hover {
            color: #212529;
        }

        /* Animation */
        .form-group input[type="email"],
        .form-group input[type="password"] {
            transition: all 0.3s ease;
            border-radius: 25px;
            padding: 15px 20px; /* Increased padding */
            border: 1px solid #ced4da;
        }

        .form-group input[type="email"]:focus,
        .form-group input[type="password"]:focus {
            border-color: #343a40;
            box-shadow: 0 0 10px rgba(52, 58, 64, 0.5);
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        /* Custom Checkbox */
        .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
            background-color: #343a40;
            transition: background-color 0.3s ease;

        }

        .custom-checkbox .custom-control-input:focus~.custom-control-label::before {
            box-shadow: none;
        }

        

        .create-account-overlay {
    display: none; /* Initially hide the overlay */
    position: fixed;
    top: 0;
    left: 0;
    width: 100%; /* Set width to 100% of the viewport */
    height: 100%; /* Set height to 100% of the viewport */
    background-color: rgba(91, 112, 131, 0.4); /* Semi-transparent background */
    z-index: 999;
    justify-content: center;
    align-items: center;
    overflow: hidden; /* Hide the scrollbar */
}

.overlay-content {
    background-color: #fff;
    padding: 111px;
    border-radius: 20px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.4);
    text-align: center;
    max-width: 565px;
    width: 80%;
    height: auto;
    max-height: 80%;
    overflow-y: auto;
    overflow: hidden;
}


        .close-button {
    position: absolute;
    top: 70px;
    right: 915px; /* Adjusted to right side */
    font-size: 24px;
    color: #343a40;
    cursor: pointer;
    background-color: transparent;
    border: none;
}

.close-button:hover {
    color: #212529;
}

.overlay-content input[type="text"],
.overlay-content input[type="email"],
.overlay-content input[type="password"] {
    transition: all 0.3s ease;
    border-radius: 25px;
    padding: 20px 25px; /* Increased padding */
    border: 1px solid #ced4da;
    font-size: 18px; /* Increased font size */
    width: 100%; /* Set input field width to 100% */
    margin-bottom: 20px; /* Increased margin bottom */
}

       


        .btn-register {
            width: 100%;
            font-size: 18px;
            padding: 15px 0;
        }

        .create-account-overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(91, 112, 131, 0.4);
    z-index: 999;
    justify-content: center;
    align-items: center;
    overflow: hidden;
}

.overlay-content {
    background-color: #fff;
    padding: 111px;
    border-radius: 20px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.4);
    text-align: center;
    max-width: 565px;
    width: 80%;
    height: 90%; /* Adjusted height to increase the size */
    overflow-y: auto;
    overflow: hidden;
}

    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <!-- Welcome Message Content -->
                <div class="welcome-content">
                <img src="images/thebrucework.png" alt="Your Logo" style="max-width: 100%;">
                    <p>Explore and Discover.</p>
                    <!-- Add any additional content here -->
                </div>
            </div>
            <div class="col-md-6">
                <!-- Login Form -->
                <div class="login-form">
                    <div class="login-header">
                        <h2>The Godfather Login</h2>
                        <p>Welcome Back!</p>
                    </div>
                    <form action="#" method="post">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                </div>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                </div>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Password" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="rememberMe">
                                <label class="custom-control-label" for="rememberMe">Remember me</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-dark btn-block">Login</button>
                    </form>
                    <hr>
                    <button type="submit" class="btn btn-dark btn-block"id="registerButton">Register</button>
                </div>
                <div class="loading-spinner" id="loadingSpinner" style="display: none;">
                    <div class="spinner-border text-light" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="create-account-overlay" id="overlayContainer">
        <!-- Content for the overlay container -->
        <div class="overlay-content">
            <h2>Email Verification</h2>
            <!-- Close button -->
            <button class="close-button" id="closeButton2">&times;</button>
            <form action="emaildb.php" method="post" id="registrationForm2">
    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
    <div class="form-group">
        <label for="verificationCode">We have sent a verification code to your email: <?php echo $fname; ?> </label>
        
        <input type="text" class="form-control" id="verificationCode" name="verificationCode" placeholder="Verification Code" required>
        
    </div>
    <button type="submit" class="btn btn-dark btn-block">Submit</button>
</form>
        </div>
    </div>
    
    
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const overlayContainer = document.getElementById('overlayContainer');
        const closeButton = document.getElementById('closeButton');
        const registerButton = document.getElementById('registerButton');
        const registrationForm = document.getElementById('registrationForm');
        const overlayContainer2 = document.getElementById('overlayContainer2');
        const closeButton2 = document.getElementById('closeButton2');
        const registrationForm2 = document.getElementById('registrationForm2');

        // Show the overlay container when the page loads
        overlayContainer.style.display = 'flex'; // or 'block' depending on your layout

        // Add event listener to the close button
        closeButton.addEventListener('click', function () {
            // Redirect back to login.html
            window.location.href = 'login.php';
        });

        // Add event listener to the register button
        registerButton.addEventListener('click', function (event) {
            event.preventDefault(); // Prevent the form from submitting

            // Hide the login form
            document.querySelector('.login-form').style.display = 'none';

            // Show the registration form
            overlayContainer.style.display = 'flex';
        });

        

        // Add event listener to the registration form

        // Add event listener to the registration form of the second overlay
        registrationForm2.addEventListener('submit', function (event) {
            event.preventDefault(); // Prevent the form from submitting
            // Here you can perform any additional actions before submitting the form of the second overlay

            // Redirect to the address details page
            window.location.href = 'emaildb.php';
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
    const closeButton2 = document.getElementById('closeButton2');

    closeButton2.addEventListener('click', function () {
        // Send AJAX request to delete the account
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'delete_account.php');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function () {
            if (xhr.status === 200) {
                // Redirect to login page or do other actions
                window.location.href = 'register.php';
            } else {
                // Handle error
                console.error('Error deleting account');
            }
        };
        xhr.send('user_id=' + <?php echo $user_id; ?>);
    });
})

</script>

</body>

</html>
