<?php
require 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and get inputs
    $firstname = $_POST['firstname'] ?? '';
    $lastname = $_POST['lastname'] ?? '';
    $productName = $_POST['productName'] ?? '';
    $email = $_POST['email'] ?? '';
    $supportQuery = $_POST['supportQuery'] ?? '';

    // Prepare SQL
    $stmt = $conn->prepare("INSERT INTO `customerqueryform` (`firstname`, `lastname`, `productName`, `email`, `supportQuery`) VALUES (?, ?, ?, ?, ?)");
    
    if ($stmt) {
        $stmt->bind_param("sssss", $firstname, $lastname, $productName, $email, $supportQuery);
        
        if ($stmt->execute()) {
            echo "Query submitted successfully!";
        } else {
            echo "Error submitting query: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "SQL prepare failed: " . $conn->error;
    }

    $conn->close();

    header("Location: contact.php?success=1");
    exit;

}
?>



<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title> GamerWiz - Play Games, Win Tournaments & Giveaways </title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="GamerWiz, online games, gaming website, game tournaments, giveaways, user login, scoreboards, multiplayer games, HTML5 games, Bootstrap gaming, PHP game site, MySQL leaderboard, interactive gameplay, free games, competitive gaming" name="keywords">
        <meta content="GamerWiz is a dynamic gaming website featuring user login, tournaments, giveaways, scoreboards, and interactive gameplay using HTML, CSS, JavaScript, Bootstrap, PHP, and MySQL." name="description">

        <!-- Google Web Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Chakra+Petch">	

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/40c70b5342.js" crossorigin="anonymous"></script>

        <!-- Bootstrap Stylesheet -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <!-- Javascript Link -->
        <script src="js/main.js"></script>

        <!-- Stylesheet Link -->
        <link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
        <link href="css/media.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    </head>

    <body>

		<!-- Loading section  -->
		<!-- <div id="loader"></div>

		<div id="myDiv" class="animate-bottom"> -->


		<!-- start-header-section  -->
			<header class="text-white">
				<div class="container py-2">
					<div class="row align-items-center text-center text-lg-start">

					 <!-- Call and Email section -->
					<div class="col-lg-6 d-flex flex-column flex-md-row justify-content-center justify-content-lg-start align-items-center gap-3">
						<div class="d-flex align-items-center gap-2">
						<i class="fas fa-phone-alt text-primary"></i>
						<span>+91 94779 24266</span>
						</div>
						
						<span class="header-divider d-none d-md-inline"></span>
						
						<div class="d-flex align-items-center gap-2">
						<i class="fas fa-envelope text-warning"></i>
						<span>gamerwiz@gmail.com</span>
						</div>
					</div>

					<!-- Social Icons -->
					<div class="col-lg-6 col-md-12 social-icon mt-2 text-center">
						<div class="d-flex justify-content-center justify-content-lg-end gap-2">
						<a href="#"><i class="fa fa-facebook py-1"></i></a>
						<a href="#"><i class="fa fa-instagram py-1"></i></a>
						<a href="#"><i class="fa-brands fa-discord py-1"></i></a>
						<a href="#"><i class="fa fa-dribbble py-1"></i></a>
						<a href="#"><i class="fa fa-twitter py-1"></i></a>
						<a href="#"><i class="fa fa-youtube-play py-1"></i></a>
						</div>
					</div>

					</div>
				</div>
			</header>
			<!-- end-header-section  -->

		
			<!-- Navbar start -->
			<?php include 'navbar.php'; ?>
			<!-- Navbar End -->


			<!-- start-get-in-touch-section -->
			<section class="get-in-touch pb-5">
                <div class="container pb-5">
                    <div class="row">
                    
                        <!-- Customer Support Banner -->
                        <div id="contact-form" class="col-lg-7 col-md-10 col-12 form-option mt-5 p-5 d-flex align-items-center justify-content-center">
                            Customer Support
                        </div>

                        <div class="col-lg-5 d-none d-lg-block"></div>

                        <!-- Form -->
                        <div class="col-lg-7 col-md-10 col-12 pb-5 mt-4">
                            <div class="form-container">
                                <form class="form" method="POST" action="contact.php">
                                    <div class="form-group">
                                    <label for="firstname">First Name</label>
                                    <input type="text" id="firstname" name="firstname">
                                    
                                    <label for="lastname">Last Name</label>
                                    <input type="text" id="lastname" name="lastname">
                                    </div>

                                    <div class="form-group">
                                    <label for="product-name">Product Name</label>
                                    <input type="text" id="product-name" name="productName">
                                    </div>

                                    <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" required>
                                    </div>

                                    <div class="form-group">
                                    <label for="textarea">How Can We Help You?</label>
                                    <textarea name="supportQuery" id="textarea" rows="5" required></textarea>
                                    </div>

                                    <button class="cntct--btn btn-lg mx-auto px-5 mt-3" type="submit">Submit</button>
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-1 d-none d-lg-block"></div>

                        <!-- FAQ Block -->
                        <div class="col-lg-3 col-md-6 col-12 my-auto mt-5">
                            <h1 class="contact-heading text-center text-white pt-lg-5 mt-lg-5">Have a question?</h1>
                            <div class="faq-part d-flex justify-content-center mt-4">
                                <div class="button-size">
                                    <a class="button btn-lg" href="#" role="button">Check Our FAQs</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-1 d-none d-lg-block"></div>

                    </div>
                </div>
            </section>
			<!-- end-get-in-touch-section -->


			<!-- start-faq-section -->
			<section id="faq" class="faq">
                <div class="container py-5">
                    <div class="row">
                    
                        <!-- Section heading -->
                        <div class="col-12 contact-heading py-5 text-center text-white">
                            FAQs
                        </div>

                        <!-- Accordion -->
                        <div class="accordion" id="accordionExample">

                            <div class="col-12 pb-4">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Requesting a review code
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white">
                                Thank you for your interest in a review code for our game. Please share your website details, including traffic statistics and audience demographics on our email -
                                <a href="mailto:gamerwiz@gmail.com">gamerwiz@gmail.com</a> to request a review code. Include where you would like to cover the game and its approximate reach. During peak announcement times, our team may not respond within a week; no reply indicates unsuccessful requests.
                                </div>
                            </div>
                            </div>

                            <div class="col-12 pb-4">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                I have an idea for a new game
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white">
                                Please pitch us your idea in the <a href="#contact-form">Contact Us form</a> and someone will be in contact.
                                </div>
                            </div>
                            </div>

                            <div class="col-12 pb-4">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                I would like to distribute your games
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white">
                                Please use the <a href="#contact-form">Contact Us form</a> and someone from our Sales Team will be in contact shortly.
                                </div>
                            </div>
                            </div>

                            <div class="col-12 pb-4">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                I would like a job at GamerWiz
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white">
                                Please use the <a href="#contact-form">Contact Us form</a> and someone from our Sales Team will be in contact shortly.
                                </div>
                            </div>
                            </div>

                            <div class="col-12 pb-5">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                I need help with one of your games
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-white">
                                Please use the <a href="#contact-form">Contact Us form</a>, someone from our Customer Service team will reply within 48 hours. If you’re stuck within the game please also check out playthroughs on YouTube or Fandom.
                                </div>
                            </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
			<!-- end-faq-section -->


			<!-- start-office-location-section -->
			<section class="map">
                <div class="container">
                    <div class="row pb-5">

                        <div class="col-12 contact-heading py-5 text-center text-white">
                            Need Help? Contact Us
                        </div>

                        <!-- Google Map (responsive wrapper) -->
                        <div class="col-12 mb-5">
                            <div style="overflow:hidden; resize:none; width:100%; height:400px;">
                            <iframe
                                style="height:100%; width:100%; border:0;"
                                frameborder="0"
                                src="https://www.google.com/maps/embed/v1/place?q=Ghanshyam+Villa,+Sector+20,+Kharghar,+Mumbai,+Maharashtra+410210&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"
                                allowfullscreen>
                            </iframe>
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="col-md-6 col-12 mt-3">
                            <div class="info-item d-flex align-items-center h-100">
                            <i class="icon fa fa-map-marker" aria-hidden="true"></i>
                            <div>
                                <h3>Address</h3>
                                <p>Ghanshyam Villa, Sector 20, Kharghar, Mumbai, Maharashtra 410210</p>
                            </div>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="col-md-6 col-12 mt-3">
                            <div class="info-item d-flex align-items-center h-100">
                            <i class="icon fa fa-phone" aria-hidden="true"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p>+919477934276</p>
                            </div>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="col-md-6 col-12 mt-3">
                            <div class="info-item d-flex align-items-center h-100">
                            <i class="icon fa fa-envelope" aria-hidden="true"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p class="info-link">
                                <a href="mailto:gamerwiz@gmail.com">gamerwiz@gmail.com</a>
                                </p>
                            </div>
                            </div>
                        </div>

                        <!-- Opening Hours -->
                        <div class="col-md-6 col-12 mt-3">
                            <div class="info-item d-flex align-items-center h-100">
                            <i class="icon fa fa-clock-o" aria-hidden="true"></i>
                            <div>
                                <h3>Opening Hours</h3>
                                <p><strong>Mon-Sat:</strong> 11AM - 23PM; <strong>Sunday:</strong> Closed</p>
                            </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
			<!-- end-office-location-section -->


            <!-- Footer Start -->
            <?php include 'footer.html';?>
            <!-- Footer End --> 

	</body>
</html>