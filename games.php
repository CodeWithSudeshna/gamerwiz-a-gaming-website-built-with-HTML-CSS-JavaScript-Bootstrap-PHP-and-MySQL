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



			<!-- start-game-banner-section -->
			<section class="banner-games">
				<div class="text-part-game text-white">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<h1 class="games-text pb-5"> GamerWiz: A Nostalgic Journey</h1>
							</div>
							<div class="col-12">
								<h5 >Take a trip down memory lane with our retro gaming section! Explore classic games that defined generations and learn about their impact on today’s gaming landscape. Relive the nostalgia and share your favorite gaming memories with us!Ready to embark on your next gaming journey? Our page features a curated selection of games across various genres, ensuring you find the perfect match for your gaming style. Discover hidden gems and blockbuster hits alike!</h5>
							</div>				
							
							
						</div>
					</div>
				</div>
			</section>
			<!-- end-games-banner-section -->



			<!-- start-games-section -->
			<section class="games">
				<div class="container text-center py-5">
					<div class="col-12">
						<h1 class="contact-heading py-5">GAMES</h1>
					</div>

				   

				   <div class="box-container gap-4">

					    <div class="crate">
					        <div class="game-imgs">
					            <img src="IMAGES/1stgame.jpg" alt="VALORANT">
					        </div>

					        <h3 class="text-white mt-4 mb-3">VALORANT</h3>
					        <p class="text-white">VALORANT: Tactical FPS blending unique agents, strategy, and teamwork for competitive play.</p>
					        
					    </div>

					    <div class="crate">
					        <div class="game-imgs">
					            <img src="IMAGES/2ndgame.webp" alt="PROPNIGHT">
					        </div>

					        <h3 class="text-white mt-4 mb-3">PROPNIGHT</h3>
					        <p class="text-white">Propnight is a multiplayer horror game where players hide as props while avoiding a killer.</p>
					        
					    </div>

				      	<div class="crate">
					        <div class="game-imgs">
					            <img src="IMAGES/3rdgame.jpg" alt="GTA5">
					        </div>

					        <h3 class="text-white mt-4 mb-3">GTA V</h3>
					        <p class="text-white">GTA V is an open-world action-adventure game featuring crime, exploration, and diverse character stories.</p>
					        
					    </div>

				      	<div class="crate">
					        <div class="game-imgs">
					            <img src="IMAGES/4thgame.jpg" alt="FORTNITE">
					        </div>

					        <h3 class="text-white mt-4 mb-3">FORTNITE</h3>
					        <p class="text-white">Fortnite is a popular battle royale game where players compete to be the last one standing.</p>
					        
					    </div>

				      	<div class="crate">
					        <div class="game-imgs">
					            <img src="IMAGES/5thgame.jpg" alt="PES">
					        </div>

					        <h3 class="text-white mt-4 mb-3">PES</h3>
					        <p class="text-white">eFootball PES is a popular football simulation game featuring realistic gameplay, teams, and player customization.</p>
					        
					    </div>

				      	<div class="crate">
					        <div class="game-imgs">
					            <img src="IMAGES/6thgame.jpg" alt="Free Fire">
					        </div>

					        <h3 class="text-white mt-4 mb-3">FREE FIRE</h3>
					        <p class="text-white">Free Fire is a popular battle royale game featuring intense gameplay, survival tactics, and team strategies.</p>
					        
					    </div>

					    <div class="crate">
					        <div class="game-imgs">
					            <img src="IMAGES/7thgame.jpg" alt="Genshin Impact">
					        </div>

					        <h3 class="text-white mt-4 mb-3">GENSHIN IMPACT</h3>
					        <p class="text-white">Genshin Impact is an open-world action RPG featuring elemental magic, exploration, and character-driven storytelling.</p>
					        
					    </div>

				      	<div class="crate">
					        <div class="game-imgs">
					            <img src="IMAGES/8thgame.png" alt="HADES">
					        </div>

					        <h3 class="text-white mt-4 mb-3">HADES</h3>
					        <p class="text-white">Hades is a rogue-like dungeon crawler where players escape the Underworld, battling mythological foes.</p>
					        
					    </div>

					    <div class="crate">
					        <div class="game-imgs">
					            <img src="IMAGES/9thgame.webp" alt="MINECRAFT">
					        </div>

					        <h3 class="text-white mt-4 mb-3">MINECRAFT</h3>
					        <p class="text-white">Minecraft is a sandbox game allowing players to build, explore, and survive in a blocky world.</p>
					        
					    </div>

				   </div>

                    <div class="d-flex justify-content-center button-size mt-5 mb-3">
					    <a class="button btn-lg" id="load-more" href="#" role="button"> More Games </a>
					</div>  
            
				</div>
			</section>
			<!-- end-games-section -->


			<!-- start-buy-PS5 -->
			<section class="buy">
				<div class="buy-text-part">
					<div class="container py-5">
						<div class="row text-white text-center">

							<div class="col-12">
								<h1 class="contact-heading py-5">PURCHASE PS5 TODAY</h1>
								<p class="buy-txt">If you're looking to purchase a PlayStation 5 (PS5) today, you're in for an exciting experience! The PS5 is a next-generation gaming console developed by Sony, renowned for its stunning graphics, lightning-fast load times, and immersive gameplay. With its sleek design and powerful hardware, including a custom SSD and advanced GPU, the PS5 delivers an unparalleled gaming experience.</p>
							</div>

							<div class="col-12">
								<div class="button-size">
									<a class="magazine-btn button btn-lg my-4" href="#" role="button">
										PURCHASE NOW</a>
								</div>
							</div>
					
						</div>
					</div>
				</div>
			</section>
			<!-- end-buy-PS5 -->


		<!-- Footer Start -->
        <?php include 'footer.html';?>
        <!-- Footer End --> 


		<!-- Script part -->
		<script>
			let loadMoreBtn = document.querySelector('#load-more');
			let currentItem = 3;

			loadMoreBtn.onclick = (e) => {
				e.preventDefault(); // prevent the link from jumping to top
				let boxes = [...document.querySelectorAll('.games .box-container .crate')];
				for (var i = currentItem; i < currentItem + 3 && i < boxes.length; i++) {
					boxes[i].style.display = 'inline-block';
				}
				currentItem += 3;

				if(currentItem >= boxes.length){
					loadMoreBtn.style.display = 'none';
				}
			}
		</script>

	</body>
</html>