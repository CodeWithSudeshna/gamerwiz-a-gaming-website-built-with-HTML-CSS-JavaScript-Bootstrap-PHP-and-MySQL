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

			<!-- Spinner Start -->
			<!-- <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
				<div class="spinner-grow text-primary" role="status"></div>
			</div> -->
			<!-- <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center pyramid-loader">
				<div class="spinner-grow text-primary wrapper" role="status">
					<span class="side side1"></span>
					<span class="side side2"></span>
					<span class="side side3"></span>
					<span class="side side4"></span>
					<span class="shadow"></span>
				</div>  
			</div> -->
			<!-- Spinner End -->

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


			<!-- start-home-banner-section -->
			<section class="banner">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12 text-part">
							<div class="glow"> THE BEST <br> GAMING EXPERIENCE </div>
						</div>
					</div>
				</div>
			</section>
			<!-- end-home-banner-section -->


			<!--  start-home-(about)-gaming-to-the-next-level -->
			<section id="service" class="about text-white bg-dark">
				<div class="container pt-3">
					<div class="row">
						<h1 class="col-12 text-center mt-5 pt-5 pb-5 text-white"> Gaming to The <font color="#FF543E"> Next Level </font> </h1>
					
						<div class="col-lg-4 col-md-6 ">
							<div class="home-abt-content p-5">
								<div class="home-abt-img text-center">
									<img src="IMAGES/play games11.jpg" alt="play games" width="30%">
								</div>		
								<h3 class="my-3">Play to Earn </h3>
								<p>Earning cryptocurrency tokens, which can then be exchanged for the desired currency.</p>
								<div class="abt-button"><a href="gamepoints.php">Play Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 ">
							<div class="home-abt-content p-5">
								<div class="home-abt-img text-center">
									<img src="IMAGES/payouts11.jpg" alt="payouts" width="30%">
								</div>
								<h3 class="my-3">Instant Payouts </h3>
								<p>Withdraw easily with instant payouts on 99% withdrawals via various methods.</p>
								<div class="abt-button"><a href="gamepoints.php">Play Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
							</div>
						</div>

						<div class="col-lg-4 col-md-12 ">
							<div class="home-abt-content p-5">
								<div class="home-abt-img pb-2 text-center">
									<img src="IMAGES/support1.jpg" alt="Best Support" width="30%">
								</div>	
								<h3 class="mt-2 mb-3 my-3">Best Support </h3>
								<p>Get quick replies from our friendly staff 24/7. Expect a response in under 90 seconds!</p>
								<div class="abt-button"><a href="gamepoints.php">Play Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
							</div>
						</div>

					</div>
				</div>
			</section>
			<!--  end-home-(about)-gaming-to-the-next-level -->


			<!-- start-home-games-section -->
			<section class="games">
				<div class="container-fluid pt-4 pb-5 text-center">
					<div class="row">
						<div class="col-12 mt-3 pb-3"> 
							<h1 class="col-12 text-center mt-5 pt-5 pb-3 text-white"> Popular <font color="#FF543E"> Games </font> </h1>
						</div>

						<div class="col-6 col-sm-4 col-md-4 col-lg-2 mt-2">
							<div class="games_grid">
								<a href="https://play.google.com/store/apps/details?id=com.pubg.imobile&hl=en-IN">
									<img class="games_bg img-fluid p-3 mt-3" src="IMAGES/game-1.png" >
									<div class="games_overlay">
										<img class="img-fluid" src="IMAGES/bgmihover.png">
									</div>
								</a>
							</div>
						</div>

						<div class="col-6 col-sm-4 col-md-4 col-lg-2 mt-2">
							<div class="games_grid">
								<a href="https://www.fortnite.com/download?lang=en-US">
									<img class="games_bg img-fluid p-3 mt-3" src="IMAGES/game-2.png">
									<div class="games_overlay">
										<img class="img-fluid" src="IMAGES/fortnitehover.png" >
									</div>
								</a>
							</div>
						</div>

						<div class="col-6 col-sm-4 col-md-4 col-lg-2 mt-2">
							<div class="games_grid">
								<a href="https://pes-2019.en.softonic.com/?utm_source=SEM&utm_medium=paid&utm_campaign=EN_INDIA_DSA_HKD_HUF&gad_source=1&gclid=Cj0KCQjw28W2BhC7ARIsAPerrcJrOLNaZsGzXBfysOb4qOtMoQENbQ7KPtVGTY4-pWSzF8uECBavIWkaAtcEEALw_wcB">
									<img class="games_bg img-fluid mt-3 p-3" src="IMAGES/game-3.png">
									<div class="games_overlay">	
										<img class="img-fluid" src="IMAGES/peshover.png">
									</div>
								</a>
							</div>
						</div>

						<div class="col-6 col-sm-4 col-md-4 col-lg-2 mt-2">
							<div class="games_grid">
								<a href="https://play.google.com/store/search?q=free%20fire&c=apps&hl=en-IN">
									<img class="games_bg img-fluid p-3 mt-3" src="IMAGES/game-4.png" >
									<div class="games_overlay">	
										<img class="img-fluid" src="IMAGES/freefirehover.png">
									</div>
								</a>
							</div>
						</div>

						<div class="col-6 col-sm-4 col-md-4 col-lg-2 mt-2">
							<div class="games_grid">
								<a href="https://play.google.com/store/apps/details?id=com.rrverse.sounds.valorant&hl=en-IN">
									<img class="games_bg img-fluid p-3 mt-3" src="IMAGES/game-5.png">
									<div class="games_overlay">
										<img class="img-fluid" src="IMAGES/valoranthover2.png">
									</div>
								</a>
							</div>
						</div>

						<div class="col-6 col-sm-4 col-md-4 col-lg-2 mt-2">
							<div class="games_grid">
								<a href="https://play.google.com/store/search?q=genshin+impact&c=apps&hl=en-IN">
									<img class="games_bg img-fluid p-3 mt-3" src="IMAGES/game6-6.png">
									<div class="games_overlay">
										<img class="img-fluid" src="IMAGES/genshinhover.png">
									</div>
								</a>
							</div>
						</div>
								
					</div>
				</div>
			</section>
			<!-- end-home-games-section -->


			<!-- start-home-upcoming-games-section -->
			<section class="upcoming">
				<div class="container py-5">
					<div class="row">
						<div class="col-12 pb-3 pt-4 text-center">
							<h1 class="text-white">
							Upcoming <span style="color:#FF543E;">Games</span>
							</h1>
						</div>
					</div>

					<div class="row justify-content-center mt-5 gap-lg-4">
					<!-- Game Card 1 -->
					<div class="col-md-6 col-lg-2 col-sm-10 m-2 card bg-dark text-white text-center">
						<img class="img-fluid" src="IMAGES/upcoming1.png" alt="Game 1">
						<p class="mt-2">Dawntrail <br> <small>28th Oct, 2024</small></p>
					</div>

					<!-- Game Card 2 -->
					<div class="col-md-6 col-lg-2 col-sm-10 m-2 card bg-dark text-white text-center">
						<img class="img-fluid" src="IMAGES/upcoming2.png" alt="Game 2">
						<p class="mt-2">Silent Hill <br> <small>22nd Dec, 2024</small></p>
					</div>

					<!-- Game Card 3 -->
					<div class="col-md-6 col-lg-2 col-sm-10 m-2 card bg-dark text-white text-center">
						<img class="img-fluid" src="IMAGES/upcoming3.png" alt="Game 3">
						<p class="mt-2">Flintlock <br> <small>2nd Nov, 2024</small></p>
					</div>

					<!-- Game Card 4 -->
					<div class="col-md-6 col-lg-2 col-sm-10 m-2 card bg-dark text-white text-center">
						<img class="img-fluid" src="IMAGES/upcoming4.png" alt="Game 4">
						<p class="mt-2">Star Wars <br> <small>24th Nov, 2024</small></p>
					</div>

					<!-- Game Card 5 -->
					<div class="col-md-6 col-lg-2 col-sm-10 m-2 card bg-dark text-white text-center">
						<img class="img-fluid" src="IMAGES/upcoming5.png" alt="Game 5">
						<p class="mt-2">Creed Shadows <br> <small>2nd Jan, 2025</small></p>
					</div>
					</div>
				</div>
			</section>
		   		
			<!-- end-home-upcoming-games-section -->


			<!-- start-home-tournaments -->
			<section id="tournament" class="tournaments py-5">
				<div class="container">
					<div class="text-center text-white mb-5 pt-4">
					<h1 class="text-">Tournaments</h1>
					<p class="upcoming-trnmnt mt-3">
						Stay tuned for thrilling tournaments on our website! Exciting battles await gamers
						seeking glory and <br> rewards. Join us now!
					</p>
					</div>

					<div class="row g-4">
					<!-- Tournament 1 -->
					<div class="col-lg-4 col-md-6">
						<div class="tournament-item p-3 bg-dark rounded shadow text-white">
							<img src="IMAGES/tournament1.png" class="img-fluid mb-3 p-2" alt="BGMI Tournament">
							<h4>BGMI</h4>
							<h6 class="game-description text-muted pb-2">Mobile game</h6>


							<p class="match-time-size col-lg-6">
								<div class="d-flex align-items-center gap-2">
									<i class="fa fa-users text-info"></i> Squad 
									<span class="header-divider d-none d-md-inline"></span>
									<i class="fa fa-calendar text-info"></i> Sep 30, 5:15 p.m.
								</div>
							</p>

							<p class="game-info col-lg-6">
								<div class="d-flex align-items-center gap-2">
									<i class="fa fa-ticket text-warning"></i> Free Entry 
									<span class="header-divider d-none d-md-inline"></span>
									<i class="fa fa-users text-info"></i> 10/100
								</div>
							</p>

							<div class="text-center button-size">
								<a class="button btn-lg mt-2 mb-3" href="tournament-form.php">REGISTER </a>
							</div>
						</div>
					</div>

					<!-- Tournament 2 -->
					<div class="col-lg-4 col-md-6">
						<div class="tournament-item p-3 bg-dark rounded shadow text-white">
							<img src="IMAGES/tournament2.png" class="img-fluid mb-3 p-2" alt="Free Fire Tournament">
							<h4>FREE FIRE</h4>
							<h6 class="game-description text-muted pb-2">Survival game</h6>

							<p class="match-time-size col-lg-6">
								<div class="d-flex align-items-center gap-2">
									<i class="fa fa-users text-info"></i> Squad 
									<span class="header-divider d-none d-md-inline"></span>
									<i class="fa fa-calendar text-info"></i> Oct 3, 8:30 p.m.
								</div>
							</p>

							<p class="game-info col-lg-6">
								<div class="d-flex align-items-center gap-2">
									<i class="fa fa-ticket text-warning"></i> Free Entry 
									<span class="header-divider d-none d-md-inline"></span>
									<i class="fa fa-users text-info"></i> 2/50
								</div>
							</p>

							<div class="text-center button-size">
								<a class="button btn-lg mt-2 mb-3" href="tournament-form.php">REGISTER </a>
							</div>
						</div>
					</div>

					<!-- Tournament 3 -->
					<div class="col-lg-4 col-md-12">
						<div class="tournament-item p-3 bg-dark rounded shadow text-white">
							<img src="IMAGES/tournament3.png" class="img-fluid mb-3 p-2" alt="Valorant Tournament">
							<h4>VALORANT</h4>
							<h6 class="game-description text-muted pb-2">Video game</h6>

							<p class="match-time-size col-lg-6">
								<div class="d-flex align-items-center gap-2">
									<i class="fa fa-users text-info"></i> 1/8
									<span class="header-divider d-none d-md-inline"></span>
									<i class="fa fa-calendar text-info"></i> Sep 25, 5:15 p.m.
								</div>
							</p>

							<p class="game-info col-lg-6">
								<div class="d-flex align-items-center gap-2">
									<i class="fa fa-ticket text-warning"></i> Free Entry 
								</div>
							</p>

							<div class="text-center button-size">
								<a class="button btn-lg mt-2 mb-3" href="tournament-form.php">REGISTER </a>
							</div>
						</div>
					</div>
					</div>
				</div>
			</section>

			<!-- end-home-tournaments -->


			<!-- start-home-recent-news -->
			<section class="news pb-3">
				<h1 class="col-12 mt-5 pt-5 text-center text-white"> Recent <font color="#FF543E"> News </font> </h1>

				<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
				  <div class="carousel-indicators">
				    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
				    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
				  </div>

				  	<div class="carousel-inner">
					    <div class="carousel-item active">
					      <img src="IMAGES/news1.jpg" class="p-5 w-100 d-block img-fluid" alt="Genshin Impact">
					      <div class="carousel-caption d-none d-md-block">
					        <h1>Genshin Impact Announces New McDonald's Collaboration</h1>
					        <p class="fs-5">Genshin Impact and McDonald’s are teaming up to provide a new collaboration for fans of the free-to-play open-world adventure RPG. Genshin Impact has done several collaborations with other companies before, with Duolingo and the Discovery Channel being some examples. Things like toys, primogems, and cosmetics have been given out in different collabs.</p>
					      </div>
					    </div>

					    <div class="carousel-item">
					      <img src="IMAGES/news2.png" class="p-5 w-100 d-block" alt="Valorant">
					      <div class="carousel-caption d-none d-md-block">
					        <h1>VALORANT Patch 9.05: Smoother Smokes, Ares Updates</h1>
					        <p class="fs-5">VALORANT Patch 9.04 introduced new agent Vyse and altered the competitive meta. In Patch 9.05, Riot Games focuses on underappreciated agents, intensifying competition. This update buffs Astra and Chamber, adjusts weapons like the Ares, and includes various console adjustments. Additionally, Patch 9.05 enhances Chamber's abilities, provides Astra with an extra smoke, and introduces new voice lines for Omen, enriching the gameplay experience.</p>
					      </div>
					    </div>

					    <div class="carousel-item">
					      <img src="IMAGES/news3.jpg" class="p-5 w-100 d-block" alt="Fortnite">
					      <div class="carousel-caption d-none d-md-block">
					        <h1>Fortnite update on September 11 changes a pair of Marvel items</h1>
					        <p class="fs-5">Frequent mini updates have been implemented in Fortnite's Marvel-themed Chapter 5 Season 4. Players have expressed concerns about the balance of certain Marvel items, prompting Epic Games to take action. Initially, adjustments were made to Captain America's Shield and War Machine items. Following that, the Doom Island spawn rate was temporarily increased. In the latest update on September 11, additional Marvel items have been adjusted for fairness.</p>
					      </div>
					    </div>
				  	</div>

				  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="visually-hidden">Previous</span>
				  </button>
				  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="visually-hidden">Next</span>
				  </button>
				</div>
			</section>
			<!-- start-home-recent-news -->



			<!-- start-home-giveaways -->
			<section id="giveaway" class="giveaways">
				<div class="container text-center pb-5 my-2">
					<div class="row mb-5">
						<div class="col-12 mt-3 pt-5 pb-3"> 
							<h1> Giveaways</h1> 
						</div>
						<p class="upcoming-trnmnt text-center text-white pb-5">Stay tuned for exciting giveaways on our gaming page! Win epic prizes and <br>level up your gaming experience today!</p>

						<div class="col-lg-4 col-md-6 pt-5 giveaway-item">
							<div class="p-3">
								<img class="img-fluid" src="IMAGES/item-1.png">
							</div>
							<h4 class="my-3 text-white pt-2">PRIDE PX278 WAVE Giveaway </h4>
							<div class="abt-button pt-3 pb-5">
								<a href="giveaway-form.php">Enter Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
							</div>

						</div>

						<div class="col-lg-4 col-md-6 pt-5 giveaway-item">
							<div class="p-3">
								<img class="img-fluid" src="IMAGES/item-2.png">
							</div>
							<h4 class="my-3 text-white pt-2">Razer Banana Giveaway </h4>
							<div class="abt-button pt-3 pb-5">
								<a href="giveaway-form.php">Enter Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
							</div>

						</div>

						<div class="col-lg-4 col-md-12 pt-5 giveaway-item">
							<div class="p-3">
								<img class="img-fluid" src="IMAGES/item-3.png">
							</div>
							<h4 class="my-3 text-white pt-2">Weekly Steam & Gift Card Giveaway </h4>
							<div class="abt-button pt-3 pb-5">
								<a href="giveaway-form.php">Enter Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
							</div>
						</div>

					</div>
				</div>
			</section>
			<!-- end-home-giveaways -->


			
			<!-- start-magazine -->
			<section class="magazine">
				<div class="container-fluid text-center mt-5">
					<div class="row">
						
						<div class="col-lg-6 col-xl-6 col-md-6 col-sm-12">
							<img class="img-fluid p-5" src="IMAGES/magazine.png">
						</div>
						
						<div class="col-lg-6 col-xl-6 col-md-6 col-sm-12 pt-5 mt-5 text-white text-center">
							<h2 class="magazine-heading pt-5 pb-2">GET 
								<b><font color="#7C2100"> GAMEINFORMER </font></b> IN PRINT!
							</h2>

							<p class="magazine-info text-white pb-3">Subscribe now to the 
								<font color="#CCFF00">INDUSTRY'S LEADING GAMING <br> MAGAZINE 
								</font> for only 
								<font color="#14FF00">$</font>19.90
							</p>

							<div class="button-size">
								<a class="magazine-btn button btn-lg" href="#" role="button">
									Subscribe to Print Magazine</a>
							</div>
						</div>

					</div>
				</div>
			</section>
			<!-- end-magazine -->


			<!-- Start Review Section -->
			<section id="review" class="review pb-5">
				<div class="container pb-5">
					<div class="row pt-5 pb-5">
						<div class="col-12 text-center mt-3 pt-5">
							<h1 class="text-white">Recent <span style="color:#FF543E;">Reviews</span></h1>
							<p class="upcoming-review text-white pt-3">
								Stay tuned for epic reviews on our gaming site! Level up your experience
								with <br> our latest feedback.
							</p>
						</div>

						<!-- Review Card 1 -->
						<div class="col-lg-4 col-md-6 mt-5">
							<div class="home-review p-4 mb-5">
								<div class="row">
									<div class="col-3 d-flex justify-content-center align-items-start">
										<img src="IMAGES/user1.png" alt="Abhineet">
									</div>
									<div class="col-9">
										<h3 class="text-white">Abhineet</h3>
										<h5 class="home-review-txt pb-2">winnings: ₹ 13,500+</h5>
										<div>
											<i class="fa fa-star"></i><i class="fa fa-star"></i>
											<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
										</div>
										<p class="home-review-txt pt-2">
											I earned more than ₹13,500 within 1 month. GamerWiz is really the best site I’ve used. Love it!
										</p>
									</div>
								</div>
							</div>
						</div>

						<!-- Review Card 2 -->
						<div class="col-lg-4 col-md-6 mt-5">
							<div class="home-review p-4 mb-5">
								<div class="row">
									<div class="col-3 d-flex justify-content-center align-items-start">
										<img src="IMAGES/user2.png" alt="Ashish">
									</div>
									<div class="col-9">
										<h3 class="text-white">Ashish</h3>
										<h5 class="home-review-txt pb-2">winnings: ₹ 4,000+</h5>
										<div>
											<i class="fa fa-star"></i><i class="fa fa-star"></i>
											<i class="fa fa-star"></i><i class="fa fa-star"></i>
										</div>
										<p class="home-review-txt pt-2">
											I earned ₹4,000+ by playing just a few tournaments. Best gaming app if you love to play and win.
										</p>
									</div>
								</div>
							</div>
						</div>

						<!-- Review Card 3 -->
						<div class="col-lg-4 col-md-12 mt-5">
							<div class="home-review p-4 mb-5">
								<div class="row">
									<div class="col-3 d-flex justify-content-center align-items-start">
										<img src="IMAGES/user3.png" alt="Rahul">
									</div>
									<div class="col-9">
										<h3 class="text-white">Rahul</h3>
										<h5 class="home-review-txt pb-2">winnings: ₹ 1,000+</h5>
										<div>
											<i class="fa fa-star"></i><i class="fa fa-star"></i>
											<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
										</div>
										<p class="home-review-txt pt-2">
											Ab BGMI khelke paise kama leta hun, pehle koi faayeda nahi hota tha. Ek dum mast website hai GamerWiz 👌
										</p>
									</div>
								</div>
							</div>
						</div>

					</div>				
				</div>
			</section>
			<!-- End Review Section -->

        <!-- Footer Start -->
        <?php include 'footer.html';?>
        <!-- Footer End -->   

    </body>
</html>