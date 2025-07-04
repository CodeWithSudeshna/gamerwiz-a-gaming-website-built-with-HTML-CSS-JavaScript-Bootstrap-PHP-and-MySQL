<?php 
	$showAlert = false;
	$showError = false;

	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		require 'connect.php';
		$name = $_POST['name'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];

		//Check wheather this username exists
		$existSql = "SELECT * FROM `register_form` WHERE `username` = '$username'";
		$result = mysqli_query($conn, $existSql);
		$numExistRows = mysqli_num_rows($result);

		if ($numExistRows > 0) {
			$showError = "Username already exists...";
		}
		else{
			if ($password == $cpassword) {
    		// $hash = password_hash($password, PASSWORD_DEFAULT);
				// $sql = " INSERT INTO `register_form` (`name`, `username`, `email`, `password`) VALUES ('$name', '$username', '$email', '$hash')";

				$sql = " INSERT INTO `register_form` (`name`, `username`, `email`, `password`) VALUES ('$name', '$username', '$email', '$password')";
				$result = mysqli_query($conn,$sql);

				if ($result) {
					$showAlert = true;
				}
			} else {
			    $showError = "Password doesn't match.";
			}
		}	
	}
?>




<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <title>GamerWiz Registration Form</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!-- Bootstrap Link -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      
      <!-- Font Awesome CDN -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

      <!-- Stylesheet Links -->
      <link href="CSS/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
      <link href="CSS/media.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
  </head>
  <body>
    
    <section class="register-form">
      
      <!-- Navbar -->
      <?php include 'navbar-forms.php';?>


      <div class="bg-form">
        <div class="container-fluid">
          <div class="row d-flex justify-content-center align-items-center">

            <!-- Alert Section -->
            <?php
              if ($showAlert) {
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


            <!-- Registration Form Section -->
            <div class="col-lg-4 p-4 wrapper">
              <form class="d-flex flex-column" method="post" action="register.php">
                  
                  <h2 class="text-white text-center pb-3">Register</h2>

                  <!-- Name Field -->
                  <div class="input-field">
                    <input class="col-lg-12" type="text" name="name" required>
                    <label>Enter your name</label>
                  </div>

                  <!-- Username Field -->
                  <div class="input-field my-4">
                    <input class="col-lg-12" type="text" name="username" required>
                    <label>Create Username</label>
                  </div>

                  <!-- Email Field -->
                  <div class="input-field">
                    <input class="col-lg-12" type="email" name="email" required>
                    <label>Enter your email</label>
                  </div>

                  <!-- Password Field -->
                  <div class="input-field my-4">
                      <input class="col-lg-12" type="password" name="password" id="password" required>
                      <label for="password">Create password</label>
                      <i class="fa fa-eye toggle-password" id="togglePassword1" onclick="togglePassword('password', 'togglePassword1')"></i>
                  </div>

                  <!-- Confirm Password Field -->
                  <div class="input-field">
                      <input class="col-lg-12" type="password" name="cpassword" id="confirmPassword" required>
                      <label for="confirmPassword">Confirm password</label>
                      <i class="fa fa-eye toggle-password" id="togglePassword2" onclick="togglePassword('confirmPassword', 'togglePassword2')"></i>
                  </div>

                  <!-- Terms Checkbox -->
                  <div class="forget my-2">
                    <label class="d-flex align-items-center" for="remember">
                      <input type="checkbox" id="remember" name="terms" required>
                      <p class="ms-2 pt-3 text-white">I accept all terms & conditions</p>
                    </label>
                  </div>

                  <!-- Submit Button -->
                  <button class="register-login-button py-2" type="submit">Register</button>

                  <!-- Link to Login -->
                  <div class="register">
                    <p>Don't have an account? <a href="loginpage.php">Login</a></p>
                  </div>
                  
              </form>
            </div>
            <!-- End Registration Form Section -->

          </div>
        </div>
      </div>
    </section>


    <!-- Script Link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Eye button Script-->
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
