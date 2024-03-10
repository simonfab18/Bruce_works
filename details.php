<?php
session_start();
// Retrieve user_id from the form submission

$user_id = $_GET['user_id'];
$connection = mysqli_connect("localhost", "id21973574_bruceworks", "@Tintin00", "id21973574_personal_webiste");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT firstname FROM users WHERE user_id='$user_id'";
$result = mysqli_query($connection, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $fname = $row['firstname'];
} else {

    $fname = "firstname";
}


mysqli_close($connection);
// Check if there is an error parameter in the URL
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adress Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/css/select2.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/js/select2.min.js"></script>
    <!-- Custom Styles -->
    <style>
        body {
            background-color: #000000;
            color: #ffffff;
            font-family: 'Arial', sans-serif;
            padding-bottom: 50px;
            margin: 0; /* Remove default margin */
            overflow-x: hidden; /* Hide horizontal scrollbar */
        }

        .address-form {
            background-color: rgba(255, 255, 255, 0.95); /* Increased opacity for better contrast */
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.4), 0px 0px 40px rgba(0, 0, 0, 0.2);
            width: 80%; /* Use percentage for responsiveness */
            max-width: 600px; /* Set maximum width for larger screens */
            margin: auto; /* Center the form */
            margin-top: 30px; /* Add margin to the top */
            color: #343a40;
            overflow-y: hidden; /* Hide vertical scrollbar */
        }

        .address-form h2 {
            margin-bottom: 30px;
            text-align: center;
            color: #212529; /* Dark text color */
            font-weight: bold; /* Make the text thicker */
            font-size: 28px; /* Adjust font size */
        }

        .form-group label {
            font-weight: bold;
            color: #212529; /* Dark text color */
        }

        .form-group input[type="text"] {
            border-radius: 25px;
            padding: 12px; /* Reduced padding for a more compact look */
            border: 1px solid #ced4da;
            width: 100%;
            color: #495057; /* Blend text color */
            background-color: #f8f9fa; /* Blend background color */
            margin-bottom: 20px;
            transition: border-color 0.3s ease; /* Smooth transition on focus */
        }

        .form-group input[type="text"]:focus {
            border-color: #343a40;
            box-shadow: 0 0 10px rgba(52, 58, 64, 0.5);
        }

        .form-group input[type="text"]:hover {
            border-color: #6c757d; /* Change border color on hover */
        }

        .btn-dark {
    background-color: #212529;
    border-color: #212529;
    transition: background-color 0.3s ease, transform 0.3s ease;
    width: 100%;
    margin-top: 20px;
    padding: 15px;
    border-radius: 30px;
    font-weight: bold;
    color: #ffffff;
}

.btn-dark:hover {
    background-color: #343a40;
    border-color: #343a40;
    transform: scale(1.05);
}

/* Add padding to the body */


        .btn-dark:focus {
            box-shadow: none;
        }
        .form-group input[type="text"],
        .form-group select {
    transition: border-color 0.3s ease;
}
.form-group input[type="text"]:focus,
.form-group select:focus {
    border-color: #343a40;
}

@keyframes floatIn {
            0% {
                opacity: 0;
                transform: translateY(-50px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Apply the animation to the form */
        .address-form {
            animation: floatIn 1s ease-out; /* Adjust the animation duration and timing as needed */
        }
    </style>
</head>

<body>
    <div class="container-fluid"> <!-- Use container-fluid to make the layout full width -->
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="address-form floating-element">
                    <h2 style="font-weight: bold;">Let's Set You Up <?php echo $fname; ?></h2>
                    <form method="post" action="detailsdb.php">
                    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">

                        <div class="form-group">
                            <label for="country">Country *</label>
                            <select class="form-control" id="country" name="country" placeholder="Enter your country" required>
                            <option selected="">Select Country</option>
                        </select>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" name="lotBlock" id="lotBlock" placeholder="Lot/Block">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" name="street" id="street" placeholder="Street">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" name="phase" id="phase" placeholder="Subdivision">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="province">Province *</label>
                            <select type="text" class="form-control" name="province" id="province" placeholder="Enter your province" required>
                            <option selected="">Select Province</option>
                        </select>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="cityMunicipality">City *</label>
                                <select type="text" class="form-control" name="cityMunicipality" id="cityMunicipality" placeholder="Enter your city" required>
                                <option selected="">Select City</option>
                        </select>
                            </div> 
                            <div class="form-group col-md-6" id="barangayField" style="display: none;">
                            <label for="barangay">Barangay *</label>
                                <select type="text" class="form-control" name="barangay" id="barangay" placeholder="Enter your barangay" required>
                                <option selected="">Select Barangay</option>
                        </select>
                            </div>
                        </div>
                        
                
                        <button type="submit" class="btn btn-dark">Finish</button>
                        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
$(document).ready(function() {
    // Load countries into the country dropdown
    $.getJSON('country.json', function(data) {
        $.each(data.countries, function(key, value) {
            $('#country').append('<option value="' + value.code + '">' + value.name + '</option>');
        });
    });

    // Handle country selection
    $('#country').change(function() {
    var country_code = $(this).val();
    $('#province').empty(); // Clear existing options
    $('#province').append('<option selected disabled>Select Province</option>'); // Add default option
    $('#cityMunicipality').empty(); // Clear city options
    $('#barangay').empty(); // Clear barangay options

    if (country_code === 'PH') { // Assuming 'PH' is the country code for the Philippines
        $('#barangayField').show();
        $.getJSON('philippines.json', function(data) {
            $.each(data, function(region_code, region) {
                $.each(region.province_list, function(province_name, province) {
                    $('#province').append('<option value="' + province_name + '">' + province_name + '</option>');
                });
            });
        });
    } else {
        $('#barangayField').hide();
        // Load provinces based on the selected country
        $.getJSON('country.json', function(data) {
            $.each(data.countries, function(key, value) {
                if (value.code === country_code) {
                    $.each(value.states, function(index, state) {
                        $('#province').append('<option value="' + state.code + '">' + state.name + '</option>');
                    });
                }
            });
        });
    }
});

    // Handle province selection
    $('#province').change(function() {
        var province_name = $(this).val();
        var country_code = $('#country').val();
        $('#cityMunicipality').empty(); // Clear existing options
        $('#cityMunicipality').append('<option selected disabled>Select City</option>'); // Add default option
        $('#barangay').empty(); // Clear barangay options

        if (country_code === 'PH') { // Assuming 'PH' is the country code for the Philippines
            $.getJSON('philippines.json', function(data) {
                // Load cities for the selected province in the Philippines
                $.each(data, function(region_code, region) {
                    $.each(region.province_list, function(province, province_data) {
                        if (province === province_name) {
                            $.each(province_data.municipality_list, function(city, city_data) {
                                $('#cityMunicipality').append('<option value="' + city + '">' + city + '</option>');
                            });
                        }
                    });
                });
            });
        } else {
            // Load cities for the selected province in other countries
            $.getJSON('country.json', function(data) {
                $.each(data.countries, function(key, value) {
                    if (value.code === country_code) {
                        $.each(value.states, function(index, state) {
                            if (state.code === province_name) {
                                $.each(state.cities, function(index, city) {
                                    $('#cityMunicipality').append('<option value="' + city.id + '">' + city.name + '</option>');
                                });
                            }
                        });
                    }
                });
            });
        }
    });

// Handle city selection
$('#cityMunicipality').change(function() {
    var city_name = $(this).val();
    $('#barangay').empty(); // Clear existing options
    $('#barangay').append('<option selected disabled>Select Barangay</option>'); // Add default option

    if ($('#country').val() === 'PH') { // Assuming 'PH' is the country code for the Philippines
        $.getJSON('philippines.json', function(data) {
            $.each(data, function(region_code, region) {
                $.each(region.province_list, function(province, province_data) {
                    $.each(province_data.municipality_list, function(city, city_data) {
                        if (city === city_name) {
                            $.each(city_data.barangay_list, function(index, barangay) {
                                $('#barangay').append('<option value="' + barangay + '">' + barangay + '</option>');
                            });
                        }
                    });
                });
            });
        });
    } else {
        // Load barangays based on the selected city
        $.getJSON('country.json', function(data) {
        $.each(data.countries, function(key, value) {
            $.each(value.states, function(index, state) {
                $.each(state.cities, function(index, city) {
                    if (city.id == city_id) {
                        $.each(city.barangays, function(index, barangay) {
                            $('#barangay').append('<option value="' + barangay.id + '">' + barangay.name + '</option>');
                            });
                        }
                    });
                });
            });
        });
    }
});
}
)

document.addEventListener('DOMContentLoaded', function() {
            // Get the element with the floating-element class
            var floatingElement = document.querySelector('.floating-element');
            // Add the floating-animation class to trigger the animation
            floatingElement.classList.add('floating-animation');
        });

</script>




</html>
