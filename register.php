<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

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
    transition: opacity 0.3s ease;
    
}

.create-account-overlay.active {
    opacity: 1;
}

.overlay-content {
    background-color: #fff;
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.4);
    text-align: center;
    max-width: 400px;
    width: 80%;
    height: auto;
    max-height: 85%;
    overflow-y: auto;
    overflow: hidden;
    opacity: 0;
    animation: fadeInOverlay 0.5s ease forwards;

}

@keyframes fadeInOverlay {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

.close-button {
    position: absolute;
    top: 60px;
    right: 915px;
    font-size: 24px;
    color: #343a40;
    cursor: pointer;
    background-color: transparent;
    border: none;
    transition: color 0.3s ease;
}
.close-button:hover {
    color: #212529;
}

/* Styling for form fields */
.overlay-content input[type="text"],
.overlay-content input[type="email"],
.overlay-content input[type="password"],
.overlay-content input[type="tel"] {
    transition: all 0.3s ease;
    border-radius: 25px;
    padding: 15px 20px;
    border: 1px solid #ced4da;
    font-size: 16px;
    width: 100%;
    margin-bottom: 20px;
    margin-top: -9px; /* Add margin to the top of the input fields */

}

.overlay-content input[type="text"]:focus,
.overlay-content input[type="email"]:focus,
.overlay-content input[type="password"]:focus,
.overlay-content input[type="tel"]:focus {
    border-color: #343a40;
    box-shadow: 0 0 10px rgba(52, 58, 64, 0.5);
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

/* Styling for submit button */
.overlay-content button[type="submit"] {
    width: 100%;
    font-size: 18px;
    padding: 15px 0;
    background-color: #343a40;
    border-color: #343a40;
    color: #fff;
    border-radius: 25px;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.overlay-content button[type="submit"]:hover {
    background-color: #212529;
    transform: scale(1.05);
}

.overlay-content button[type="submit"]:focus {
    outline: none;
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
    max-width: 575px;
    width: 80%;
    height: 90%; /* Adjusted height to increase the size */
    overflow-y: auto;
    overflow: hidden;
}



.overlay-content h2 {
    margin-top: -90px; /* Add margin between header and form fields */
    margin-bottom: 40px;
}

.overlay-content .form-group {
    margin-bottom: 20px; /* Add margin between form fields */
}

.overlay-content input[type="tel"] {
    transition: all 0.3s ease;
    border-radius: 100px;
    padding: 15px 80px; /* Match padding with other input fields */
    border: 1px solid #ced4da;
    font-size: 16px;
    width: 100%; /* Take up full width of the container */
    margin-bottom: 20px; /* Match margin with other input fields */
}

.register-link {
    text-align: center;
    margin-top: 20px;
    color: #6c757d;
    width: 100px;
}

.register-link a {
    color: #343a40;
    text-decoration: none;
    font-weight: bold;
    
}

.register-link a:hover {
    color: #212529;
}

#termsMessage {
    display: none;
    font-size: 14px;
    margin-top: 5px;
    text-align: center;
}

/* Add animation for the message */
@keyframes pulse {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}

/* Apply the animation to the message */
#termsMessage.show-message {
    animation: pulse 0.5s ease-in-out;
    display: block;
}

.form-check-label {
    color: #6c757d;
    font-size: 14px;
    margin-left: 5px; /* Adjust the left margin */
}

.form-check-label a {
    color: #343a40;
    text-decoration: none;
    font-weight: bold;
}

.terms-popup {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #ffffff;
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.4);
    z-index: 1000;
    width: 80%; /* Set width to match the width of the overlay container */
    max-width: 600px; /* Set maximum width if needed */
    height: auto; /* Set a fixed height for the terms popup */
    overflow-y: auto; /* Add vertical scrollbar when content exceeds height */
}

.terms-content {
    text-align: left;
    color: #343a40;
    max-height: 80vh; /* or any desired value */
    overflow-y: auto;/* Add vertical scrollbar when content exceeds height */
}

.terms-content h2 {
    margin-bottom: 20px;
    font-size: 24px;
}

.terms-content p {
    font-size: 16px;
    line-height: 1.5;
    margin-bottom: 10px;
}

.closes-button {
    position: absolute;
    top: 6px;
    left: 5px;
    font-size: 24px;
    color: #343a40;
    cursor: pointer;
    background-color: transparent;
    border: none;
}   

.privacy-policy-popup {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #ffffff;
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.4);
    z-index: 1000;
    width: 80%; /* Set width to match the width of the overlay container */
    max-width: 600px; /* Set maximum width if needed */
    height: auto; /* Set a fixed height for the terms popup */
    overflow-y: auto; /* Add vertical scrollbar when content exceeds height */
}

.privacy-policy-content {
    text-align: left;
    color: #343a40;
    max-height: 80vh; /* or any desired value */
    overflow-y: auto;/* Add vertical scrollbar when content exceeds height */
}


.privacy-policy-content  h2 {
    margin-bottom: 20px;
    font-size: 24px;
}

.privacy-policy-content  p {
    font-size: 16px;
    line-height: 1.5;
    margin-bottom: 10px;
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
                                <input type="password" class="form-control" id="passwordaa" name="passwordaa"
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
                        <p class="register-link">Don't Have an Account? <a href="#" id="registerLink"></a></p>

                    <button type="submit" class="btn btn-dark btn-block"id="registerButton">Register</button>
                </div>
                <div class="loading-spinner" id="loadingSpinner" style="display: none;">
                    <div class="spinner-border text-dark" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="create-account-overlay" id="overlayContainer">
        <!-- Content for the overlay container -->
        <div class="overlay-content">
            <h2>Create your account</h2>
            <!-- Close button -->
            <button class="close-button" id="closeButton">&times;</button>
            <form action="registerdb.php" method="post" id="registrationForm">
                <div class="form-group">
                    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    <?php if (isset($_GET['error'])): ?>
                                        <div class="text-danger" role="alert" style="font-size: 13px; margin-left: -1px; margin-top: -19px; margin-bottom: -20px">
                                        <i class="fas fa-exclamation-circle mr-1"></i>
                                        <?php echo $_GET['error']; ?>
                                    </div>
                                <?php endif; ?>

                </div>
                <div class="form-group">
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>
                <small class="text-danger" id="phoneError"></small> <!-- Error message placeholder -->
                           
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    <div id="passwordError" class="text-danger" style="font-size: 12px; margin-top: -19px; padding: 8px;" ></div>
                
                
                <div class="form-group">
                    <input type="password" class="form-control" id="reEnterPassword" name="reEnterPassword" placeholder="Re-enter Password" required>
                    <div id="passwordErrors" class="text-danger" style="font-size: 12px; margin-top: -11px; padding: -20px;"></div>

                </div>
                <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="termsCheckbox" required>
        <label class="form-check-label" for="termsCheckbox">I agree to the <a href="#" id="termsLink">Terms of Service</a> and <a href="#" id="privacyPolicyLink">Privacy Policy</a></label>
    </div>
    <div id="termsError" class="text-danger" style="font-size: 12px; margin-top: -11px;"></div>

                <button type="submit" class="btn btn-dark btn-block">Next</button>
</form>
        </div>
    </div>

    <div class="create-account-overlay" id="overlayContainer2">
        <!-- Content for the second overlay container -->
        <div class="overlay-content">
            <h2>Email Verification</h2>
            <!-- Close button -->
            <button class="close-button" id="closeButton2">&times;</button>
            <form action="" method="post" id="registrationForm2">
                <div class="form-group">
                    <label for="verificationCode">Enter Verification Code:</label>
                    <input type="text" class="form-control" id="verificationCode" name="verificationCode" placeholder="Verification Code" required>
                </div>
                <button type="submit" class="btn btn-dark btn-block">Submit</button>
            </form>
        </div>
    </div>
    
    <div class="terms-popup" id="termsPopup">
    <div class="terms-content">
        <h2>Terms of Service</h2>
        <p>Welcome to our website. If you continue to browse and use this website, you are agreeing to comply with and be bound by the following terms and conditions of use, which together with our privacy policy govern our relationship with you in relation to this website. If you disagree with any part of these terms and conditions, please do not use our website.</p>
        <p>The use of this website is subject to the following terms of use:</p>
        <ul>
            <li>The content of the pages of this website is for your general information and use only. It is subject to change without notice.</li>
            <li>This website uses cookies to monitor browsing preferences. If you do allow cookies to be used, the following personal information may be stored by us for use by third parties.</li>
            <li>Neither we nor any third parties provide any warranty or guarantee as to the accuracy, timeliness, performance, completeness, or suitability of the information and materials found or offered on this website for any particular purpose. You acknowledge that such information and materials may contain inaccuracies or errors and we expressly exclude liability for any such inaccuracies or errors to the fullest extent permitted by law.</li>
            <li>Your use of any information or materials on this website is entirely at your own risk, for which we shall not be liable. It shall be your own responsibility to ensure that any products, services, or information available through this website meet your specific requirements.</li>
            <li>This website contains material which is owned by or licensed to us. This material includes, but is not limited to, the design, layout, look, appearance, and graphics. Reproduction is prohibited other than in accordance with the copyright notice, which forms part of these terms and conditions.</li>
        </ul>
        <!-- Close button -->
        <button class="closes-button" id="closeTermsPopup">&times;</button>
    </div>
</div>

<div class="privacy-policy-popup" id="privacyPolicyPopup">
    <div class="privacy-policy-content">
    <h2>Privacy Policy</h2>
        <p>Welcome to our Privacy Policy</p>
        <p>Your privacy is critically important to us. It is our policy to respect your privacy regarding any information we may collect while operating our website. We respect your privacy and are committed to protecting personally identifiable information you may provide us through the Website. We have adopted this privacy policy ("Privacy Policy") to explain what information may be collected on our Website, how we use this information, and under what circumstances we may disclose the information to third parties. This Privacy Policy applies only to information we collect through the Website and does not apply to our collection of information from other sources.</p>
        <p>This Privacy Policy, together with the Terms and conditions posted on our Website, set forth the general rules and policies governing your use of our Website. Depending on your activities when visiting our Website, you may be required to agree to additional terms and conditions.</p>
        <!-- Add more paragraphs as needed -->
        <!-- Close button -->
        <button class="closes-button" id="closePrivacyPolicyPopup">&times;</button>
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

     


        // Add event listener to the close button of the second overlay
        closeButton2.addEventListener('click', function () {
            // Hide the second overlay
            overlayContainer2.style.display = 'none';

            // Show the registration form again
            overlayContainer.style.display = 'flex';
        });

        // Add event listener to the registration form of the second overlay
        registrationForm2.addEventListener('submit', function (event) {
            event.preventDefault(); // Prevent the form from submitting
            // Here you can perform any additional actions before submitting the form of the second overlay

            // Redirect to the address details page
            window.location.href = 'details.php';
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
    // Select the phone number input field
    var input = document.querySelector("#phone");

    // Initialize intlTelInput
    var iti = window.intlTelInput(input, {
        initialCountry: "PH", // Automatically select the user's country
        separateDialCode: true, // Display the country code separately
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js", // Path to the utils.js file
    });
    
    var registrationForm = document.getElementById('registrationForm');
    registrationForm.addEventListener('submit', function(event) {
        // Get the phone number value
        var phoneNumber = input.value;

        // Regular expression to check if the phone number contains only digits
        var phoneNumberPattern = /^\d+$/;

        // Check if the phone number contains only digits
        if (!phoneNumberPattern.test(phoneNumber)) {
            // Display error message
            document.getElementById('phoneError').textContent = "Enter a valid Phone number.";
            // Prevent form submission
            event.preventDefault();
        } else {
            // Clear error message if the phone number is valid
            document.getElementById('phoneError').textContent = "";   
        }

        
    });
});

document.addEventListener("DOMContentLoaded", function () {
    var registrationForm = document.getElementById('registrationForm');
    var passwordInput = document.getElementById('password');
    var passwordError = document.getElementById('passwordError');

    registrationForm.addEventListener('submit', function(event) {
        // Get the password value
        var password = passwordInput.value;

        // Check if the password length is less than 7 characters
        if (password.length < 7) {
            // Display error message
            passwordError.textContent = "Password must be at least 7 characters long.";
            // Prevent form submission
            event.preventDefault();
        } else {
            // Clear error message if the password meets the requirement
            passwordError.textContent = "";   
        }
    });
});


document.addEventListener("DOMContentLoaded", function () {
    var registrationForm = document.getElementById('registrationForm');
    var passwordInput = document.getElementById('password');
    var reEnterPasswordInput = document.getElementById('reEnterPassword');
    var passwordError = document.getElementById('passwordErrors');

    registrationForm.addEventListener('submit', function(event) {
        // Get the values of password and re-enter password fields
        var passwordValue = passwordInput.value;
        var reEnterPasswordValue = reEnterPasswordInput.value;

        // Check if the passwords match
        if (passwordValue !== reEnterPasswordValue) {
            // Display error message
            passwordError.textContent = "Passwords do not match.";
            // Prevent form submission
            event.preventDefault();
        } else {
            // Clear error message if the passwords match
            passwordError.textContent = "";   
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    var termsCheckbox = document.getElementById('termsCheckbox');
    var nextButton = document.getElementById('nextButton');
    var termsMessage = document.getElementById('termsMessage');

    // Disable the Next button initially
    nextButton.disabled = true;

    // Add event listener to the termsCheckbox
    termsCheckbox.addEventListener('change', function () {
        // Enable/disable the Next button based on checkbox state
        nextButton.disabled = !termsCheckbox.checked;

        // Show/hide the Terms of Service and Privacy Policy message
        if (!termsCheckbox.checked) {
            termsMessage.classList.add('show-message');
        } else {
            termsMessage.classList.remove('show-message');
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    var termsCheckbox = document.getElementById('termsCheckbox');
    var nextButton = document.getElementById('nextButton');
    var termsError = document.getElementById('termsError');

    // Disable the Next button initially
    nextButton.disabled = true;

    // Add event listener to the termsCheckbox
    termsCheckbox.addEventListener('change', function () {
        // Enable/disable the Next button based on checkbox state
        nextButton.disabled = !termsCheckbox.checked;

        // Display/hide the error message
        termsError.textContent = !termsCheckbox.checked ? "You must agree to the Terms of Service and Privacy Policy." : "";
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const termsLink = document.getElementById('termsLink');
    const termsPopup = document.getElementById('termsPopup');
    const closeTermsPopup = document.getElementById('closeTermsPopup');

    // Add event listener to the Terms of Service link
    termsLink.addEventListener('click', function () {
        termsPopup.style.display = 'block';
    });

    // Add event listener to the close button of the Terms of Service pop-up
    closeTermsPopup.addEventListener('click', function () {
        termsPopup.style.display = 'none';
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const privacyPolicyLink = document.getElementById('privacyPolicyLink');
    const privacyPolicyPopup = document.getElementById('privacyPolicyPopup');
    const closePrivacyPolicyPopup = document.getElementById('closePrivacyPolicyPopup');

    // Add event listener to the Privacy Policy link
    privacyPolicyLink.addEventListener('click', function () {
        privacyPolicyPopup.style.display = 'block';
    });

    // Add event listener to the close button of the Privacy Policy pop-up
    closePrivacyPolicyPopup.addEventListener('click', function () {
        privacyPolicyPopup.style.display = 'none';
    });
});

</script>

</body>

</html>
