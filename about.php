<?php
require 'connect.php';
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>GamerWiz About</title>

		<!-- Google Web Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Chakra+Petch">	
		<script src="https://kit.fontawesome.com/40c70b5342.js" crossorigin="anonymous"></script>

		<!-- Bootstrap Bundle (includes Popper for dropdowns) -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

		<!-- Javascript Link -->
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>  <!-- jQuery - required if you're using $ -->
		<script src="js/main.js"></script>

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/40c70b5342.js" crossorigin="anonymous"></script>

        <!-- Bootstrap Stylesheet -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <!-- Stylesheet Link -->
		<link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
        <link href="css/media.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
        
	</head>
	<body onLoad="load()">

		<!-- Loading section  -->
		<!-- <div class="spinner">
		    <div class="spinner1"></div>
		</div> -->



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


		<!-- start-about-us-section -->
		<section class="abt-pic-bg">
			<div class="page-mheader">
				<div class="container">
					<div class="row">
						<div class=" col-12 col-lg-12 mt-5 pt-5">
							<div class="main-section__content">
								<h1 class="ntwrk-txt">About us </h1>
					        	<p>We are a team of passionate specialists with an extensive knowledge of the video game industry. Our task is to make sure that players will be able to enjoy unique and unforgettable games.We’re not just a game company – we’re your game partner!</p>
							</div>
				        </div>
				    
					  	<div class="container-fluid">
					        <div class="section-inner">

					            <div class="glitch-effect">
					                <div class="glitch-effect__img"></div>
					                <div class="glitch-effect__img"></div>
					                <div class="glitch-effect__img"></div>
					                <div class="glitch-effect__img"></div>
					                <div class="glitch-effect__img"></div>
					            </div>

					            <div class="row">
					                <div class="col-lg-6 col-sm-12">
					                    <p class="lead-text"><span>All</span> <span>in!</span> <span>Games</span> <span>is</span> <span>a</span> <span>publicly</span> 
					                    <span class="glitch-text" data-text="traded">traded</span> <span class="glitch-text" data-text="creative">creative</span> 
					                    <span class="glitch-text" data-text="HUB">HUB</span> <span>focused</span> <span>on</span> <span>effective</span> <span>investments</span> <span>in</span> <span>video</span> <span>game</span> <span>production.</span></p>
					                </div>
					                <div class="col-lg-6 col-sm-12 ps-5 text-white">
					                    <p class="abt-info"> Headquartered in Krakow, Poland. We are a parent company to three in-house development studios: Ironbird Creations, Taming Chaos, and Happy Little Moments. </p>
					                </div>
					            </div>
					        </div>
					    </div>
					</div>
				</div>
			</div>
		</section>
		<!-- end-about-us-section -->



		<!-- start-history-section -->
		<section class="history-grid pt-5">
			<div class="container">
				<div class="row pt-5">
					<div class="col-lg-5 col-md-5 col-12"><img class="img-fluid" src="IMAGES/historyabt.jpg"></div>
					<div class="col-lg-1 col-md-1"></div>
					<div class="col-lg-6 col-md-6 col-12 history-grid__text">
	            		<h2 class="h3-style text-white">Our history</h2>
	            		<p class="text-white">All in! Games was founded in 2018, starting as a determined group of enthusiastic gamers and experienced professionals.Our enthusiasm for gaming allows us to understand what players want and our extensive knowledge of the video game industry helps us guide your game to market. </p>
	        		</div>
	        		<div class="col-lg-6 col-md-6 col-12 mt-5"><img class="img-fluid" src="IMAGES/history2.jpg"></div>
	        		<div class="col-lg-6 col-md-6 col-12 mt-5"><img class="img-fluid" src="IMAGES/history.jpg"></div>
			        <div class="col-lg-5 col-12 ps-5 history-grid__text">
			            <h2 class="h3-style text-white">OUR MISSION, VISION AND GOALS</h2>
			            <p class="text-white"> We are here to invest in new ideas, develop our own game teams, and launch high-quality games that succeed with global partners.<br><br>We aim to be the reliable production house where creators, investors, and industry experts collaborate for great achievements in the dynamic gaming realm.<br><br>Our goal is to create unique games by our in-house studios and to get this wonderful games in front of players. We want to make great game ideas become a reality and so that everyone can enjoy them. We care both about developers and communicating with players to give you the best experience—so don’t hesitate, and go all in!</p>
			        </div>
			        <!-- <div class="col-lg-1"></div> -->
	       		 	<div class="col-lg-6 col-12 mt-4 pt-4"><img class="img-fluid" src="IMAGES/history3.jfif"></div>
				</div>
			</div>
		</section>
    	<!-- end-history-section -->


    	<!-- start-project-data-section -->
    	<section id="counts" class="counts">
			<div class="container">
				<div class="row no-gutters pb-5">
					<div class="col-xl-6 d-flex align-items-stretch justify-content-center justify-content-lg-start">
						<div class="mask-container p-5"></div>
					</div>

					<div class="col-xl-6 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
						<div class="content d-flex flex-column justify-content-center">
							<h3 class="text-white text-wrap txt-count pb-1">GAMERWiZSPORTS TOTAL PROJECTS DATA</h3>
							<p class="pe-4"> We are proud to be the #4 esports organization in terms of viewership in South Asia. </p>

							<div class="row">
								<div class="col-md-6 col-sm-6 col-6 d-md-flex align-items-md-stretch">
									<div class="count-box">
										<!-- <i class="bi bi-emoji-smile"></i>
										<span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="0" class="purecounter">15</span> -->
										<p id='0101' style="font-size:36px; font-weight:700">0</p>
										<p><strong>unique IPs</strong> and counting.</p>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-6 d-md-flex align-items-md-stretch">
									<div class="count-box">
										<!-- <i class="bi bi-journal-richtext"></i>
										<span data-purecounter-start="0" data-purecounter-end="80" data-purecounter-duration="0" class="purecounter">80</span> -->
										<p id='0102' style="font-size:36px; font-weight:700">0</p>
										<p><strong>esports tournaments hosted</strong> that helps us build esports ecosystem in india</p>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-6 d-md-flex align-items-md-stretch">
									<div class="count-box">
										<!-- <i class="bi bi-clock"></i>
										<span data-purecounter-start="0" data-purecounter-end="500" data-purecounter-duration="0" class="purecounter">500</span> -->
										<p id='0103' style="font-size:36px; font-weight:700">0</p>
										<p><strong>million+</strong> Views</p>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-6 d-md-flex align-items-md-stretch">
									<div class="count-box">
										<!-- <i class="bi bi-award"></i>
										<span data-purecounter-start="0" data-purecounter-end="1.8" data-purecounter-duration="0" class="purecounter">2</span> -->
										<p id='0104'style="font-size:36px; font-weight:700">0</p>
										<p><strong>million+</strong> social media following and countless hours of esports entertainment!</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
    	<!-- start-project-data-section -->


    	<!-- start-network-section -->
    	<section class="global-network">
    		<div class="container">
    			<div class="row">
    				<div class="col-12 text-white text-center pt-5 mt-3 pb-5 ntwrk-txt">
    					<h1 >
						Empowering the Gaming Revolution with <br> Our Global Network
    					</h1>
    				</div>
    				  
                   
                   	<div class="row aos-init aos-animate text-white" id="brand-container" data-aos="zoom-in">

						<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center client">
							<img src="IMAGES/client1.png" class="img-fluid" alt="Disney">
						</div>

						<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center client">
							<img src="IMAGES/client2.png" class="img-fluid" alt="Marvel">
						</div>

						<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center client">
							<img src="IMAGES/client3.png" class="img-fluid" alt="Krafton">
						</div>

						<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center client">
							<img src="IMAGES/client4.png" class="img-fluid" alt="Moonton">
						</div>

						<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center client">
							<img src="IMAGES/client5.png" class="img-fluid" alt="ThePokemon">
						</div>

						<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center client">
							<img src="IMAGES/client6.png" class="img-fluid" alt="Garena">
						</div>

						<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center client">
							<img src="IMAGES/client7.png" class="img-fluid" alt="Supercell">
						</div>
							
						<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center client">
							<img src="IMAGES/client8.png" class="img-fluid" alt="Rautilus">
						</div>

						<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center client">
							<img src="IMAGES/client9.png" class="img-fluid" alt="Riot Games">
						</div>

						<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center client">
							<img src="IMAGES/client10.png" class="img-fluid" alt="EA">
						</div>

						<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center client">
							<img src="IMAGES/client11.png" class="img-fluid" alt="Glance">
						</div>

						<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center client">
							<img src="IMAGES/client12.png" class="img-fluid" alt="Loco">
						</div>

						<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center client">
							<img src="IMAGES/client13.png" class="img-fluid" alt="Rooter">
						</div>

						<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center client">
							<img src="IMAGES/client14.png" class="img-fluid" alt="YT Gaming">
						</div>

						<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center client">
							<img src="IMAGES/client16.png" class="img-fluid" alt="Facebook Gaming">
						</div>

						<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center client">
							<img src="IMAGES/client18.png" class="img-fluid" alt="zebronics">
						</div>

						<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center client">
							<img src="IMAGES/client19.png" class="img-fluid" alt="Western Digital">
						</div>

						<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center client">
							<img src="IMAGES/client20.png" class="img-fluid" alt="Hyper">
						</div>

						<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center client">
							<img src="IMAGES/client21.png" class="img-fluid" alt="Logitech">
						</div>

						<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center client">
							<img src="IMAGES/client22.png" class="img-fluid" alt="UltraGear">
						</div>

						<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center client">
							<img src="IMAGES/client23.png" class="img-fluid" alt="Corsair">
						</div>

						<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center client">
							<img src="IMAGES/client24.png" class="img-fluid" alt="CYBEART">
						</div>

						<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center client">
							<img src="IMAGES/client25.png" class="img-fluid" alt="AOC">
						</div>

						<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center client">
							<img src="IMAGES/client26.png" class="img-fluid" alt="Techno Mobile">
						</div>

						<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center client">
							<img src="IMAGES/client27.png" class="img-fluid" alt="OnePlus">
						</div>

						<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center client">
							<img src="IMAGES/client28.png" class="img-fluid" alt="IQOO">
						</div>

						<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center client">
							<img src="IMAGES/client29.png" class="img-fluid" alt="Republic of Gamers">
						</div>

						<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center client">
							<img src="IMAGES/client30.png" class="img-fluid" alt="GIGABYTE">
						</div>

						<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center client">
							<img src="IMAGES/client31.png" class="img-fluid" alt="AMDA">
						</div>

						<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center client">
							<img src="IMAGES/client34.png" class="img-fluid" alt="RedBull">
						</div>
						

						<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center client">
							<img src="IMAGES/client37.png" class="img-fluid" alt="Monster">
						</div>

						<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center client">
							<img src="IMAGES/client38.png" class="img-fluid" alt="CH">
						</div>

						<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center client">
							<img src="IMAGES/client40.png" class="img-fluid" alt="Flipkart">
						</div>

						<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center client">
							<img src="IMAGES/client41.png" class="img-fluid" alt="Amazon">
						</div>

						<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center client">
							<img src="IMAGES/client42.png" class="img-fluid" alt="1XBET">
						</div>
					</div>
    			</div>
    		</div>
    	</section>
		<!-- start-network-section -->


    	<!-- start-footer-section -->
    	<?php include 'footer.html';?>
    	<!-- end-footer-section -->


    	<!------------ counter script -------------->
		<script>
			function animate(obj, initVal, lastVal, duration) {
				let startTime = null;

			//get the current timestamp and assign it to the currentTime variable
			let currentTime = Date.now();

			//pass the current timestamp to the step function
			const step = (currentTime ) => {

			//if the start time is null, assign the current time to startTime
			if (!startTime) {
				startTime = currentTime ;
			}

			//calculate the value to be used in calculating the number to be displayed
			const progress = Math.min((currentTime - startTime)/ duration, 1);

			//calculate what to be displayed using the value gotten above
			obj.innerHTML = Math.floor(progress * (lastVal - initVal) + initVal);

			//checking to make sure the counter does not exceed the last value (lastVal)
			if (progress < 1) {
				window.requestAnimationFrame(step);
			} else {
					window.cancelAnimationFrame(window.requestAnimationFrame(step));
				}
			};
			//start animating
				window.requestAnimationFrame(step);
			}
			let text1 = document.getElementById('0101');
			let text2 = document.getElementById('0102');
			let text3 = document.getElementById('0103');
			let text4 = document.getElementById('0104');
			
			const load = () => {
				animate(text1, 0, 15, 12000);
				animate(text2, 0, 80, 12000);
				animate(text3, 0, 500, 12000);
				animate(text4, 0, 2, 12000);
				
			}
		</script>

	</body>
</html>