<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>


     <!-- start-navbar -->

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">
                <img src="IMAGES/logo3.png" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse menubar ps-5" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 m-auto mb-lg-0">

                        <li class="nav-item pe-3">
                            <a class="nav-link <?php echo ($currentPage == 'index.php') ? 'active' : ''; ?>" href="index.php">HOME</a>
                        </li>

                         <!-- First dropdown -->
                        <li class="nav-item pe-3 dropdown">
                            <a class="nav-link dropdown-toggle <?= ($currentPage == 'about.php') ? 'active' : ''; ?>" href="#" id="dropdownAbout" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                ABOUT & REVIEW
                            </a>
                            <ul class="dropdown-menu bg-dark" aria-labelledby="dropdownAbout">
                                <li><a class="dropdown-item <?= ($currentPage == 'about.php') ? 'active' : ''; ?>" href="about.php">ABOUT</a></li>
                                <li><a class="dropdown-item" href="index.php#review">REVIEWS</a></li>
                            </ul>
                        </li>

                        <!-- Second dropdown -->
                        <li class="nav-item pe-3 dropdown">
                            <a class="nav-link dropdown-toggle <?= ($currentPage == 'games.php') ? 'active' : ''; ?>" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                EVENTS & REWARDS
                            </a>
                            <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown2">
                                <li><a class="dropdown-item <?= ($currentPage == 'games.php') ? 'active' : ''; ?>" href="games.php">GAMES</a></li>
                                <li><a class="dropdown-item" href="index.php#tournament">TOURNAMENTS</a></li>
                                <li><a class="dropdown-item" href="index.php#giveaway">GIVEAWAYS</a></li>
                            </ul>
                        </li>

                        <li class="nav-item pe-3">
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
