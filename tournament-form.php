<?php
require 'connect.php';

$showAlert = false;
$showError = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and get inputs
    $playerName = trim($_POST['player_name'] ?? '');
    $teamName   = trim($_POST['team_name'] ?? '');
    $email      = trim($_POST['email'] ?? '');
    $char_id    = trim($_POST['char_id'] ?? '');
    $gameType   = trim($_POST['gameType'] ?? '');
    $terms      = isset($_POST['terms']) ? 1 : 0;

    // Insert into DB
    $stmt = $conn->prepare("INSERT INTO `tournament_regstn_form` (player_name, team_name, email, char_id, gameType, terms) VALUES (?, ?, ?, ?, ?, ?)");

    if ($stmt) {
        $stmt->bind_param("sssssi", $playerName, $teamName, $email, $char_id, $gameType, $terms);
        
        if ($stmt->execute()) {
            $showAlert = true;  
        } else {
            $showError = "Database error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        $showError = "Prepare failed: " . $conn->error;
    }
}
?>




<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <title> GamerWiz Tournament Register Form </title>
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
    
    <section class="tournament-form">
      
      <!-- Navbar -->
      <?php include 'navbar-forms.php';?>


      <div class="bg-form3">
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
                <strong> Error! </strong> '. htmlspecialchars($showError) .'
                <button type ="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                </div>';
              }
            ?>


            <!-- Registration Form Section -->
            <div class="col-lg-4 p-4 wrapper">
              <form class="d-flex flex-column" method="post" action="tournament-form.php">
                  
                <h2 class="text-white text-center lh-base font-monospace pb-4">Tournament Registration Form</h2>

               <!-- Player Name -->
              <div class="input-field">
                <input type="text" name="player_name" required>
                <label>Enter your name</label>
              </div>

              <!-- Team Name -->
              <div class="input-field my-4">
                <input type="text" name="team_name" required>
                <label>Enter your team name</label>
              </div>

                <!-- Email Field -->
                <div class="input-field">
                  <input class="col-lg-12" type="email" name="email" required>
                  <label>Enter your email</label>
                </div>

                <!--  Character id Field -->
                <div class="input-field my-4">
                  <input type="text" name="char_id" required>
                  <label>Enter your team's members character id</label>
                </div>

                <!-- Tournament of Which Game Field -->
                <div class="input-field">
                  <select class="form-select" name="gameType" required>
                    <option value="" disabled selected>Tournament type</option>
                    <option value="BGMI">BGMI</option>
                    <option value="FREE FIRE">FREE FIRE</option>
                    <option value="VALORANT">VALORANT</option>
                  </select>
                </div>


                <!-- Terms Checkbox -->
                <div class="forget my-2">
                  <label class="d-flex align-items-center" for="remember">
                    <input type="checkbox" id="remember" name="terms" required>
                    <p class="ms-2 pt-3 text-white">I accept all terms & conditions</p>
                  </label>
                </div>

                <!-- Submit Button -->
                <button class="register-login-button py-2" type="button" onclick="validateForm()">SUBMIT</button>

                <!-- Link to Login -->
                <div class="forget">
                  <p id="demo" class="text-white mt-2" style="display: none;">
                    Please fill out the form before proceeding.
                  </p>
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
    
    <script>
      function validateForm() {
        const form = document.querySelector('.tournament-form form');
        const demo = document.getElementById('demo');

        if (form.checkValidity()) {
          // Form is valid
          demo.style.display = 'block';
          demo.innerText = "We will send your details to your email.";

          // Optional: slight delay to show the message before submit
          setTimeout(() => {
            form.submit();
          }, 500); // 500ms delay so user sees message briefly
        } else {
          // Form is invalid
          demo.style.display = 'block';
          demo.innerText = "Please fill out the form before proceeding.";
        }
      }
      </script>


  </body>
</html>