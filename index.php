<?php
session_start();

// Check if the user is not logged in, redirect to the login page
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$connection = mysqli_connect("localhost", "id21973574_bruceworks", "@Tintin00", "id21973574_personal_webiste");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$email = $_SESSION['email'];
$sql = "SELECT firstname FROM users WHERE email='$email'";
$result = mysqli_query($connection, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $fname = $row['firstname'];
} else {

    $fname = "firstname";
}


mysqli_close($connection);



?>


<!DOCTYPE html>
<html>
<head>
	<title>Bruce Works</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="icomoon/icomoon.css">
	<link rel="stylesheet" type="text/css" href="fonts/fonts.css">
    <link rel="stylesheet" type="text/css" href="css/vendor.css">
    <link rel="stylesheet" type="text/css" href="style4.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

	<script src="js/modernizr.js"></script>

	

</head>
<body>

<div id="overlayer">
	<span class="loader">
	  <span class="loader-inner"></span>
	</span>
</div>

<div class="nav nav-overlay" id="navOverlay">
	<div class="nav__content">
		<ul class="nav__list">
			<li class="nav__list-item active-nav"><a href="#billboard" class="hover-target" onclick="hideNavOverlay()" >Home</a></li>
			<li class="nav__list-item"><a href="#about-me" class="hover-target" onclick="hideNavOverlay()">About</a></li>
			<li class="nav__list-item"><a href="#portfolio" class="hover-target" onclick="hideNavOverlay()">Portfolio</a></li>
			<li class="nav__list-item"><a href="#achievement" class="hover-target" onclick="hideNavOverlay()">Achievement</a></li>
			<li class="nav__list-item"><a href="#footer-bottom" class="hover-target" onclick="hideNavOverlay()">Contact</a></li>
			<li class="nav__list-item"><a href="logout.php" class="hover-target"> Logout  </a></li>
		</ul>
	</div>
</div>



		<nav id="navbar">
			<input id="menu-toggle" type="checkbox" />
			<label class="menu-btn" for="menu-toggle">
			<span></span>
			</label>
		</nav>	

	</div><!--header-wrap-->
</header>

		

	</div>
</header>

<div id="billboard" class="jarallax" data-aos="fade">
<img src="images/thebrucework.png" class="top-right-image">

	<div class="banner-content">
		<div class="banner-header">
			<span></span>
			<h2 class="light animated-sections">Hello, I'm<br/> Simogn</h2>
			<p></p>

			<a href="./images/Simogn Fabregas - Resume.pdf" target="_blank" class="btn btn-outline-light animated-sections" download="">Download Resume</a>
		</div>
	</div>

	<img src="images/bw2.jpg" class="jarallax-img">
</div><!--billboard-->


<section id="about-me" class="margin-large animated-sections">
	<div class="container">
		<div class="row">
			<div class="section-header align-center">
				
				<h2 class="section-title">About</h2>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
					<div class="col-md-6">
						<div class="intro">
							<p>I am an IT student currently exploring various courses and eager to specialize in a specific field. I build code primarily by practicing regularly on coding platforms, contributing to open-source projects, and addressing real-world problems. I actively engage in hands-on projects, internships, and coding exercises to solidify my programming skills. I constantly explore emerging technologies and industry trends to stay ahead in this dynamic field. I seek mentorship opportunities and network with professionals to gain insights into the practical applications of IT concepts. I am excited about the prospect of contributing to innovative solutions and making a positive impact in the ever-evolving world of technology.</p>
							
						</div>
					</div>
			</div>
		</div>
	</div>
</section>
<br>
<section id="about-me" class="animated-sections">
	<div class="container">
		<div class="row">
		</div>
	</div>
	<div class="container " >
		<div class="row">
			<div class="col-md-21">
					<div class="col-md-6">
						<div class="skilla">
							<p>Skills that I have <br> so far</p>
							
						</div>
					</div>
					<div class="col-md-6">
						<div class="skill-chart">
							<ul class="skill-chart-list">
								<li>
								<i class="fas fa-paint-brush"></i> Design
								<span class="skill eighty-percent"></span>
								</li>
								<li>
								<i class="fas fa-video"></i> Video Editing
								<span class="skill thirty-percent"></span>
								</li>
								<li>
								<i class="fab fa-python"></i> Python
								<span class="skill sixty-percent"></span></li>
								<li>
								<i class="fab fa-java"></i> Java
								<span class="skill twenty-percent"></span>
								</li>
								<li>
								<i class="fab fa-html5"></i> HTML/CSS
								<span class="skill forty-percent"></span>
								</li>
							</ul>
						</div>
					</div>
			</div>
		</div>
	</div>
</section>

<section id="portfolio">
	<div class="container animated-sections">
		<div class="row">
			<div class="section-header align-center">
					<h2 class="section-title" id="portfolio">Portfolio</h2>
				</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<figure data-aos="fade-zoom-in" data-aos-delay="0" class="portfolio-item">
					<a class="image-link"><img src="images/wm1.png" class="portfolio-image large-image"></a>
					<figcaption class="portfolio-title">
						<a>Warehouse Management App mockup</a>
					</figcaption>
				</figure>
				<figure data-aos="fade-zoom-in" data-aos-delay="300" class="portfolio-item">
					<a class="image-link"><img src="images/buddy1.png" class="portfolio-image medium-image"></a>
					<figcaption class="portfolio-title">
						<a>Gym Buddy Application</a>
					</figcaption>
				</figure>
				
			</div>
			<div class="col-md-6">
				<figure data-aos="fade-zoom-in" data-aos-delay="300" class="portfolio-item">
					<a class="image-link"><img src="images/wm2.png" class="portfolio-image small-image"></a>
					<figcaption class="portfolio-title">
						<a>Warehouse Management Website mockup</a>
					</figcaption>		
				</figure>
				<figure data-aos="fade-zoom-in" data-aos-delay="0" class="portfolio-item">
					<a class="image-link"><img src="images/buddy.png" class="portfolio-image medium-image"></a>
					<figcaption class="portfolio-title">
						<a>Gym Buddy Application</a>
					</figcaption>		
				</figure>
				<figure data-aos="fade-zoom-in" data-aos-delay="300" class="portfolio-item">
					<a class="image-link"><img src="images/acad.png" class="portfolio-image large-image"></a>
					<figcaption class="portfolio-title">
						<a>Academify App</a>
					</figcaption>
				</figure>
			</div>					
		</div>
	</div>		
</section>



<section id="achievement">
	<div class="container animated-sections">
		<div class="row">
			<div class="section-header align-center">
				<h2 class="section-title" id="achievement">Achievement</h2>
			</div>
		</div>
	</div>

	<div class="container" class="animated-sections">
		<div class="row">
			<div class="col-md-4 animated-sections">
				<div class="achievement-block">
					<h3>Academic Awardee</h3>
					<p>School year of 2019</p>
				</div>
			</div>
			<div class="col-md-4 animated-sections">
				<div class="achievement-block">
					<h3>Quiz Bee</h3>
					<p>2nd Place School year of 2020</p>
				</div>
			</div>
			
			<div class="col-md-4 animated-sections">
				<div class="achievement-block">
					<h3>Declamation Contest </h3>
					<p>1st Place School Year of 2020</p>
				</div>
			</div>
			<div class="col-md-4 animated-sections">
				<div class="achievement-block">
					<h3>Honored Student</h3>
					<p>School Year of 2020</p>
				</div>
			</div>
			<div class="col-md-4 animated-sections">
				<div class="achievement-block">
					<h3>Dean's Lister</h3>
					<p>School Year of 2022</p>
				</div>
			</div>
			
					
		</div>
	</div>
</section>







<div id="footer-bottom" class="padding-medium no-padding-bottom animated-sections">
    <div class="container">
        <div class="row">
            <div class="footer-menu col-md-4">
			<div class="subscribe">
			<a href="#" class="logo" id="hello">Hello <?php echo $fname; ?>!</a>

                    <p id="feel">Feel free to give feedback.</p>
					<form method="post" action="feedback.php">
                    <textarea type="feedback" name="email" placeholder="Give Feedback"></textarea>
                    <button class="btn-submit">Submit</button>
</form>

                </div>
            </div>

            <div class="footer-menu col-md-4">
                <div class="footer-address">

                    <div class="mail-address">
					<img src="images/thebrucework.png" alt="Your Image Description" style="max-width: 40%; margin-top: -250px;">

                        <a>Just feel free to reach out if you're interested in collaboration or just want to chat.<br>Simognf@gmail.com</a>
                    </div>
					<div class="socila-links">
					<ul>
						<li><a href="https://www.facebook.com/Monmon.fab/" target="_blank"><i class="icon icon-facebook"></i></a></li>
						<li><a href="https://www.instagram.com/si.monfab/" target="_blank"><i class="fab fa-instagram"></i></a></li>
						<li><a href="https://www.linkedin.com/in/simogn-bruce-fabregas-870465252/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
						<li><a href="https://github.com/simonfab18" target="_blank"><i class="fab fa-github"></i></a></li>
					</ul>
				</div>		
                </div>
            </div>
        </div>
    </div>
</div>
<div id="popup-box" class="popup">
    <div class="popup-content">
        <span class="close" onclick="closePopup()">&times;</span>
        <p id="popup-message"></p>
    </div>
</div>

<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/script.js"></script>
<script src="js/modernizr.js"></script>
<script>
    // JavaScript function to display the popup message box
    function displayPopup(message) {
        var popupBox = document.getElementById("popup-box");
        var popupMessage = document.getElementById("popup-message");
        popupMessage.innerHTML = message;
        popupBox.style.display = "block";
    }

    // JavaScript function to close the popup message box
    function closePopup() {
        var popupBox = document.getElementById("popup-box");
        popupBox.style.display = "none";
		window.location.href = "index.php#footer-bottom";

    }

    // Check if the feedback was successfully sent
    <?php
    if (isset($_GET['feedback_sent']) && $_GET['feedback_sent'] == 1) {
        // Display popup message using JavaScript
        echo 'displayPopup("Feedback Sent!");';
    }
    ?>

document.addEventListener("DOMContentLoaded", function() {
    var animatedSections = document.querySelectorAll('.animated-sections');

    var options = {
        root: null,
        rootMargin: '0px',
        threshold: 0.3
    };

    var observer = new IntersectionObserver(function(entries, observer) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('animated');
                observer.unobserve(entry.target);
            }
        });
    }, options);

    animatedSections.forEach(function(section) {
        observer.observe(section);
    });
});

function hideNavOverlay() {
    var navOverlay = document.getElementById('navOverlay');
    navOverlay.style.display = 'none';
}

document.addEventListener('DOMContentLoaded', function () {
        var menuToggle = document.getElementById('menu-toggle');
        var navOverlay = document.querySelector('.nav-overlay');

        menuToggle.addEventListener('change', function () {
            if (menuToggle.checked) {
                navOverlay.style.display = 'block'; // Show the navigation overlay
            } else {
                navOverlay.style.display = 'block'; // Hide the navigation overlay
            }
        });
    });

	

</script>
</body>
</html>