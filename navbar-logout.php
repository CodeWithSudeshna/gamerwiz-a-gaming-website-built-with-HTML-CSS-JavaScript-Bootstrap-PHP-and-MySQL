


        <!-- start-navbar -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container">
			    <a class="navbar-brand" href="index.php">
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
                        <a class="button btn-lg mb-3 ms-3" href="logout.php">logout</a>
				    </div>
			    </div>
			</div>
		</nav>	
		<!-- end-navbar -->
