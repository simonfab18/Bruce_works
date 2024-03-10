<?php
session_start();

// Check if there is an error parameter in the URL
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Now</title>
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
            opacity: 0; /* Initially hide the body */
            animation: fadeIn 2s ease forwards; /* Apply fade-in animation */
            position: relative;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .welcome-content {
            text-align: center;
            margin-top: -330px; /* Add some top margin */
            
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

        .loading-spinner {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999; /* Ensure it appears above other elements */
        }

        .spinner-border {
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .create-account-overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 999;
    justify-content: center;
    align-items: center;
}

.register-link {
    text-align: center;
    margin-top: 20px;
    color: #6c757d;
}

.register-link a {
    color: #343a40;
    text-decoration: none;
    font-weight: bold;
}

.register-link a:hover {
    color: #212529;
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
                        <h2>Login Now</h2>
                        <p>Welcome Back!</p>
                    </div>
                    <?php if (isset($_SESSION['error'])): ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_SESSION['error']; ?>
        </div>
    <?php unset($_SESSION['error']); // Clear the error message after displaying ?>
    <?php endif; ?>
                    <form action="logindb.php" method="post">
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
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>    
                                    <?php if (isset($_GET['error'])): ?>
                                        <div class="text-danger" role="alert" style="width: 400px; margin-left: 70px; margin-top: 10px;">
                                        <i class="fas fa-exclamation-circle mr-1"></i>
                                        <?php echo $_GET['error']; ?>
                                    </div>
                                <?php endif; ?>
                                
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
                    <p class="register-link">Don't Have an Account? <a href="#" id="registerLink"></a></p>

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
    
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <script>

document.addEventListener("DOMContentLoaded", function () {
            const registerButton = document.getElementById('registerButton');

            registerButton.addEventListener('click', function () {
                // Add your registration logic here
                // For example, you can redirect to the registration page
                window.location.href = 'register.php';
            });
        });

        // Get a reference to the form and the loading spinner
const form = document.querySelector('form');
const loadingSpinner = document.getElementById('loadingSpinner');

// Add an event listener for the form submission
form.addEventListener('submit', function() {
  // Display the loading spinner when the form is submitted
  loadingSpinner.style.display = 'block';
});


    </script>
</body>

</html>
