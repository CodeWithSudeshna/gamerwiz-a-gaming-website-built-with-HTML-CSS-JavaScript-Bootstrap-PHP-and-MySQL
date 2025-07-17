<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>



<!DOCTYPE html>
<html lang="en">    
    <head>
		<meta charset="utf-8">
        <title> GamerWiz - Play Games, Win Tournaments & Giveaways </title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="GamerWiz, online games, gaming website, game tournaments, giveaways, user login, scoreboards, multiplayer games, HTML5 games, Bootstrap gaming, PHP game site, MySQL leaderboard, interactive gameplay, free games, competitive gaming" name="keywords">
        <meta content="GamerWiz is a dynamic gaming website featuring user login, tournaments, giveaways, scoreboards, and interactive gameplay using HTML, CSS, JavaScript, Bootstrap, PHP, and MySQL." name="description">

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
    <body>


        <!-- start-navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="IMAGES/logo12.png" class="img-fluid" style="max-width: 200px;" alt="logo">
                </a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse menubar ps-5" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 m-auto mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link <?php echo ($currentPage == 'index.php') ? 'active' : ''; ?>" href="index.php">HOME</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?php echo ($currentPage == 'about.php') ? 'active' : ''; ?>" href="about.php">ABOUT</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?php echo ($currentPage == 'games.php') ? 'active' : ''; ?>" href="games.php">GAMES</a>
                        </li>

                        <!-- Second dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php echo ($currentPage == 'index.php#tournament') ? 'active' : ''; ?>" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false"> EVENTS </a>
                            <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown2">
                                <li><a class="dropdown-item menubar <?php echo ($currentPage == 'index.php#tournament') ? 'active' : ''; ?>" href="index.php#tournament">TOURNAMENTS</a></li>
                                <li><a class="dropdown-item menubar <?php echo ($currentPage == 'index.php#giveaway') ? 'active' : ''; ?>" href="index.php#giveaway">GIVEAWAYS</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?php echo ($currentPage == 'index.php#review') ? 'active' : ''; ?>" href="index.php#review">REVIEWS</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?php echo ($currentPage == 'index.php#service') ? 'active' : ''; ?>" href="index.php#service">SERVICES</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?php echo ($currentPage == 'contact.php') ? 'active' : ''; ?>" href="contact.php">CONTACT</a>
                        </li>
                    </ul>

                    <div class="d-flex ps-5 button-size">
                        <a class="button btn-lg mb-3" href="register.php">Register Now</a>
                    </div>
                </div>
            </div>
        </nav>      
		<!-- end-navbar -->

    </body> 
</html>