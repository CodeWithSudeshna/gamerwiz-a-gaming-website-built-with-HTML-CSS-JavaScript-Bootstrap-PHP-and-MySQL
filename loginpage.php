 <?php
	$login = false;
	$showError = false;

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		require 'connect.php';
		$username = $_POST['username'];
		$password =	$_POST['password'];

		// $sql = "SELECT * FROM `register_form` WHERE `username` = '$username' AND `password` = '$password'";
		$sql = "SELECT * FROM `register_form` WHERE `username` = '$username'";
		$result = mysqli_query($conn,$sql);
		$num = mysqli_num_rows($result);
		if($num == 1){
				// while ($rows = mysqli_fetch_assoc($result)) {
				// 	if(password_verify($password, $row [`password`]))
				// 	{
				// 		$login = true;
				// 		session_start();
				// 		$_SESSION['loggedin'] = true;
				// 		$_SESSION['username'] = $username;
				// 		header("location: admission form.php");
				// 	} else {
				// 		$showError = "Invalid Credentials.";
				// 	}
				// }
			// }
			$login = true;
			session_start();
			$_SESSION['loggedin'] = true;
			$_SESSION['username'] = $username;
			header("location: gamepoints.php");
			} else {
				$showError = "Invalid Credentials.";
			}
	}
?>



<!DOCTYPE html>
<html>
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>GamerWiz Login Form </title>

      <!-- Bootstrap Link -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      
      <!-- Font Awesome CDN -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

      <!-- Stylesheet Links -->
      <link href="CSS/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
      <link href="CSS/media.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />

  </head>
  <body>

    <section class="login-form">
      
      <!-- Navbar -->
      <?php include 'navbar-forms.php';?>
	
       
      <div class="bg-form2 py-5">
        <div class="container-fluid">
          <div class="row  d-flex justify-content-center align-items-center">

            <!-- Alert Section -->
            <?php
              if ($login) {
                echo '<div class = "alert alert-success alert-dismissible fade show" role = "alert">
                <strong> Success! </strong> Your Account is now created and now you can login!
                <button type ="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                </div>';
              }
              if ($showError) {
                echo '<div class = "alert alert-danger alert-dismissible fade show" role = "alert">
                <strong> Error! </strong> '.$showError.'
                <button type ="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                </div>';
              }
              
            ?>
    
            <!-- Login Form Section -->
            <div class="col-lg-4 p-4 wrapper">
              <form class="d-flex flex-column" method="post" action="loginpage.php">

                <h2 class="text-white text-center mt-2">Login</h2>

                <!-- Username Field -->
                <div class="input-field mt-3 mb-4">
                  <input class="col-lg-12" name="username" type="text" required>
                  <label>Enter your username</label>
                </div>

                <!-- Password Field (with toggle icon) -->
                <div class="input-field mb-2">
                  <input class="col-lg-12" type="password" name="password" id="password" required>
                  <label for="password">Enter your password</label>
                  <i class="fa fa-eye toggle-password"
                    id="togglePassword1"
                    onclick="togglePassword('password', 'togglePassword1')"></i>
                </div>

                <!-- Remember Me & Forgot Password Links -->
                <div class="forget d-flex justify-content-between">
                  <label class="d-flex align-items-center" for="remember">
                    <input type="checkbox" id="remember">
                    <p class="ms-2 pt-3 text-white">Remember me</p>
                  </label>
                  <a class="mt-3" href="#">Forgot password?</a>
                </div>

                <!-- Submit Button -->
                <button class="register-login-button mt-2 py-2" type="submit">Log In</button>

                <!-- Signup Link -->
                <div class="register">
                  <p>Don't have an account? <a href="register.php">Register</a></p>
                </div>

              </form>
            </div>

            <!-- End Login Form Section -->

          </div>
        </div>
      </div>
    </section>


    <!-- Script Link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Eye button Script -->
    <script>
        function togglePassword(inputId, iconId) {
          const passwordInput = document.getElementById(inputId);
          const toggleIcon = document.getElementById(iconId);

          if (passwordInput.type === "password") {
              passwordInput.type = "text";
              toggleIcon.classList.remove("fa-eye");
              toggleIcon.classList.add("fa-eye-slash");
          } else {
              passwordInput.type = "password";
              toggleIcon.classList.remove("fa-eye-slash");
              toggleIcon.classList.add("fa-eye");
          }
        }
    </script>

  </body>
</html>